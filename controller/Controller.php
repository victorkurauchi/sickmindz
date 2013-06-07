<?php

class Controller {	

	public $View;
	
	public function __construct() {	
		$this->View = new ViewController();

		if (!isset($_GET['page']) or !$_GET['page']) {
			$this->View->loadPage('home');
		} else {
			$this->View->loadPage($_GET['page']);
		}
		
	}
}