<?php

namespace Sdz\BlogBundle\Entity;

class Membre{

	private $pseudo;
	private $age;

	public function getPseudo(){
		return $this->pseudo;
	}

	public function setPseudo($pseudo){
		$this->pseudo = $pseudo;
	}

	public function getAge(){
		return $this->age;
	}

	public function setAge($age){
		$this->age = $age;
	}
}