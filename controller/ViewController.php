<?php

class ViewController {

	public function loadPage($page) {
		require("view/$page.php");
	}
}