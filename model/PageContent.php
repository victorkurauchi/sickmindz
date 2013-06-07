<?php

class PageContent {
	public $file;
	public $title;
	public $data;
	public $currentUser;
	public $isMainpage;
	public $hasFilter;
	public $menu = array();																
	#array responsável por criar os menus tabeáveis, onde $menu[] = new Tab();

	public function __construct($file, $title, $data, $isMainpage = false, $hasFilter = false) {
		$this->file  = $file;
		$this->title = $title;
		$this->data  = $data;
		$this->isMainpage = $isMainpage;
		$this->hasFilter = $hasFilter;
	}
}

?>