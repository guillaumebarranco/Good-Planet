<?php

class Media {
	protected $id;
	protected $type;
	protected $url;
	protected $date;
	protected $id_theme;

	public function __construct() {
		
	}

	/*
	*	Getters
	*/

	public function getId() {
		return $this->id;
	}
	public function getType() {
		return $this->type;
	}
	public function getUrl() {
		return $this->url;
	}
	public function getDate() {
		return $this->date;
	}
	public function getIdTheme() {
		return $this->id_theme;
	}

	/*
	*	Setters
	*/

	public function setId($id) {
		$this->id = $id;
	}
	public function setType($type) {
		$this->type = $type;
	}
	public function setUrl($url) {
		$this->url = $url;
	}
	public function setDate($date) {
		$this->date = $date;
	}
	public function setIdTheme($id_theme) {
		$this->id_theme = $id_theme;
	}

}
