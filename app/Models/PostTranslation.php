<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
    public $timestamps = false; // Enable timestamps

    protected $fillable = [
        'locale',
        'title',
        'content',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
