<?php

class Theme {
	protected $id;
	protected $name;

	public function __construct() {
		
	}

	/*
	*	Getters
	*/

	public function getId() {
		return $this->id;
	}
	public function getName() {
		return $this->name;
	}

	/*
	*	Setters
	*/

	public function setId($id) {
		$this->id = $id;
	}
	public function setName($name) {
		$this->name = $name;
	}

}
