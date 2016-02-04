<?php

class Media {
	protected $id;
	protected $name;
	protected $role;
	protected $creation_date;

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
	public function getRole() {
		return $this->role;
	}
	public function getCreationDate() {
		return $this->creation_date;
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
	public function setRole($role) {
		$this->role = $role;
	}
	public function setCreationDate($creation_date) {
		$this->creation_date = $creation_date;
	}

}
