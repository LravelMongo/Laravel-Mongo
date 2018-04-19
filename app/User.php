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
		return $this->belongsToMany('App\Role')
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
