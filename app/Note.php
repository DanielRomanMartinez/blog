<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
    	'title', 
    	'category', 
    	'short_description', 
    	'long_description', 
    	'meta_title', 
    	'meta_description', 
    	'meta_key', 
    	'friendly_url', 
    	'follow'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
