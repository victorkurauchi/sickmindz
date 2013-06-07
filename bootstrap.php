<?php
	require_once("config/config.php");
	require_once("config/constants.php");

	function appload($classe) {
		$dir = dirname(__FILE__);
		$arquivo = "$dir/controller/$classe.php";
		
		if(file_exists($arquivo)) {
			require_once($arquivo);
			return true;
		}
	}
	
	spl_autoload_register('appload');
