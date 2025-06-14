<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Fillable attributes
    protected $fillable = ['name'];

    /**
     * Get the posts associated with the category.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
