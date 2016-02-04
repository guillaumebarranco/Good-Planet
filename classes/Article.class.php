<?php

class Article {
	protected $id;
	protected $title;
	protected $content;
	protected $date;
	protected $category;
	protected $picture;
	protected $id_author;
	protected $intro;

	public function __construct() {
		
	}

	/*
	*	Getters
	*/

	public function getId() {
		return $this->id;
	}
	public function getTitle() {
		return $this->title;
	}
	public function getContent() {
		return $this->content;
	}
	public function getDate() {
		return $this->date;
	}
	public function getCategory() {
		return $this->category;
	}
	public function getPicture() {
		return $this->picture;
	}
	public function getIdAuthor() {
		return $this->id_author;
	}
	public function getIntro() {
		return $this->intro;
	}

	/*
	*	Setters
	*/

	public function setId($id) {
		$this->id = $id;
	}
	public function setTitle($title) {
		$this->title = $title;
	}
	public function setContent($content) {
		$this->content = $content;
	}
	public function setDate($date) {
		$this->date = $date;
	}
	public function setCategory($category) {
		$this->category = $category;
	}
	public function setPicture($picture) {
		$this->picture = $picture;
	}
	public function setIdAuthor($id_author) {
		$this->id_author = $id_author;
	}
	public function setIntro($intro) {
		$this->intro = $intro;
	}

}
