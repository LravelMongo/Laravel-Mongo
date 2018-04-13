<?php


namespace Gaurav\Pack\Facade;
use Illuminate\Support\Facades\Facade as Facade;

class Message extends Facade {
	
	public static function getFacadeAccessor(){
		return "gaurav-message";
	} 
}
