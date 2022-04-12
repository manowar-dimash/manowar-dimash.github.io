<?php 

	class Principal extends Controllers{
		public function __construct()
	{
		parent::__construct();
		session_start();
		session_regenerate_id(true);
	}

		public function principal()
		{
			$data['page_id'] = 1;
			$data['page_tag'] = "DuoImperial";
			$data['page_title'] = "Página principal";
			$data['page_name'] = "duoimperial";
			$data['page_functions_js'] = "functions_principal.js";			
			$this->views->getView($this,"principal",$data);
		}
        
	}
	?>
