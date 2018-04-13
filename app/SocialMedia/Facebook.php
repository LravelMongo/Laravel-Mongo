<?php

namespace App\SocialMedia;

class Facebook{


	private $domain;
	protected $secret;

	public function __construct($facebook){
		// dd($facebook);
		$this->domain = $facebook['domain'];
		$this->secret = $facebook['secret'];
	}


	public function getDomain(){
		return $this->domain;
	}

	public function getSecret(){
		return $this->secret;
	}

}