<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;
use Spatie\MediaLibrary\Media;

class User extends Model implements HasMediaConversions
{

	use HasMediaTrait;
	
	public function roles(){
		return $this->belongsToMany('App\Role','role_user') 
			// first arg model name
			// second arg would be relationship's joining table name like role_user 
			// third arg would be current model foreign key user_id
			// fourth arg would be parent table forign key role_id
			->as('NewName')
			->withPivot('id');
	}

	public function registerMediaConversions(Media $media = null)
	{
	  	$this->addMediaConversion('thumb')
			->width(368)
			->height(232)
			->sharpen(10);
	}

	
}
