<?php

class Tab {
	public $active = false;						#atributo que determina no frontend se a aba estará ativa ou não
	public $title;								#título
	public $action;								#atributo responsável por referenciar as funções do sistema, ou seja, precisa ter o mesmo valor que as funções existentes
	
	public function __construct($active, $title, $action = null) {
		$this->active = $active;
		$this->title  = $title;
		$this->action = $action;
	}
}

?>