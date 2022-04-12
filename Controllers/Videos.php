<?php

class Videos extends Controllers{
		public function __construct()
	{
		parent::__construct();
		session_start();
		session_regenerate_id(true);
	}

	public function videos()
	{
		
		$data['page_tag'] = "Videos";
		$data['page_title'] = "Página principal";
		$data['page_name'] = "videos";
		$data['page_functions_js'] = "functions_videos.js";			
		$this->views->getView($this,"videos",$data);
	}
}
?>