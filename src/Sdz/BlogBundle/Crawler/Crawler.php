<?php

namespace Sdz\BlogBundle\Crawler;

class Crawler{

	protected $local;
	protected $nbChar;

	public function __contruct($locale, $nbChar){
			$this->local = $locale;
			$this->nbChar = $nbChar;
	}

	public function isNotSpam($text){
		return strlen($text) < $this->nbChar;
	}

	public function getnbChar(){
		return $this->nbChar;
	}

	public function getlocal(){
		return $this->local;
	}
}
