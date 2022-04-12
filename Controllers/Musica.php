<?php

class Musica extends Controllers{
		public function __construct()
	{
		parent::__construct();
		session_start();
		session_regenerate_id(true);
	}

	public function musica()
	{
		
		$data['page_tag'] = "Musica";
		$data['page_title'] = "Página principal";
		$data['page_name'] = "musica";
		$data['page_functions_js'] = "functions_musica.js";			
		$this->views->getView($this,"musica",$data);
	}
}
?>