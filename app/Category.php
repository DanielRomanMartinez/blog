<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	protected $fillable = [
    	'name',
    	'description',    	
    	'meta_title',
    	'meta_description',
    	'meta_key',
    	'friendly_url',
    	'follow'
    ];

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
