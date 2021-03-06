<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $filllable = [
        'title',
        'content',
        'slug',
        'category_id'
    ];

    public function posts() {
        return $this->hasMany('App\Post');
    }
    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
    protected function getUniqueSlugFromTitle($title) {
        $slug = Str::slug($title);
        $slug_base = $slug;
        
        $post_found = Post::where('slug', '=', $slug)->first();
        $counter = 1;
        while($post_found) {
            $slug = $slug_base . '-' . $counter;
            $post_found = Post::where('slug', '=', $slug)->first();
            $counter++;
        }
        return $slug;
    }
}
