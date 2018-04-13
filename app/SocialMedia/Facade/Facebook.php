<?php

namespace App\SocialMedia\Facade;

use Illuminate\Support\Facades\Facade as Facade;

class Facebook extends Facade {


	public static function getFacadeAccessor(){
		return "FB";
	}


}