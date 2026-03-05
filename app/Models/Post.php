<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['title', 'slug', 'content', 'image', 'user_id', 'category_id'];

    public $translatable = ['title', 'content'];

    /**
     * Get the comments for the post.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class)->latest();
    }

    /**
     * Get the category that owns the post.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the user that owns the post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $slugSource = $post->getTranslation('title', 'en')
                ?: $post->getTranslation('title', 'sw')
                ?: 'post';
            $post->slug = static::generateUniqueSlug($slugSource);
        });
    }

    protected static function generateUniqueSlug($title)
    {
        $slug = Str::slug((string) $title);
        $originalSlug = $slug;
        $count = 1;

        while (static::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        return $slug;
    }

    /**
     * Get the translations for the post.
     */
    public function translations()
    {
        return $this->hasMany(PostTranslation::class);
    }

    public function translation($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->translations->where('locale', $locale)->first();
    }

    /**
     * Get a translatable attribute for a given locale with en fallback.
     */
    public function getTranslatedAttribute(string $attribute, ?string $locale = null): string
    {
        $locale = $locale ?? app()->getLocale();
        $value = $this->getTranslation($attribute, $locale, false)
            ?: $this->getTranslation($attribute, 'en', false)
            ?: '';
        return (string) $value;
    }
}
