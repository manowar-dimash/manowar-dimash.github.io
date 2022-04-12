<?php

class Contacto extends Controllers{
		public function __construct()
	{
		parent::__construct();
		session_start();
		session_regenerate_id(true);
	}

	public function contacto()
	{
		
		$data['page_tag'] = "Contacto";
		$data['page_title'] = "Página principal";
		$data['page_name'] = "contacto";
		$data['page_functions_js'] = "functions_contacto.js";			
		$this->views->getView($this,"contacto",$data);
	}
}
?>