<?php

/*class CompletarPerfil extends Controllers{
		public function __construct()
	{
		parent::__construct();
		session_start();
		session_regenerate_id(true);
        
	}

	public function completarPerfil()
	{
		
		$data['page_tag'] = "CompletarPerfil";
		$data['page_title'] = "Página principal";
		$data['page_name'] = "completarPerfil";
		$data['page_functions_js'] = "functions_completarPerfil.js";			
		$this->views->getView($this,"completarPerfil",$data);
	}
    
    public function setCompletarPerfil(){
        if($_POST){
            
            
            if( empty($_POST['nombre']) || empty($_POST['imagen']))
            {
                $arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
                
            }else{ 
                $idUsuario = intval($_POST['idusuario']);					
                $strFotoPerfil = ucwords(strClean($_POST["imagen"]));
                $strNombreCompleto = ucwords(strClean($_POST["nombre"]));
                $request_user = "";
                if($idUsuario == 0)
                {   
                    $request_user = $this->model->insertCompletarPerfil($strFotoPerfil,$strNombreCompleto);     
                                                                     
                     
                }       

                if($request_user > 0 )
                {                    
                    $arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
                    
                }else if($request_user == 'exist'){
                    $arrResponse = array('status' => false, 'msg' => '¡Atención! el usuario ya existe, ingrese otro.');		
                }else{
                    $arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
                }
            }
            echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
            
                
        }
        die();
    }
    public function getCompletarPerfiles()
		{			
				$arrData = $this->model->selectCompletarPerfil();
				for ($i=0; $i < count($arrData); $i++) {
					

					
                    echo json_encode($arrData,JSON_UNESCAPED_UNICODE);					
				}				
                die();
			
		}
        public function getCompletarPerfil( $idusuario){
			
				$idusuario = intval($idusuario);
				if($idusuario > 0)
				{
					$arrData = $this->model->selectCompletarPerfil($idusuario);
					if(empty($arrData))
					{
						$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
					}else{
						$arrResponse = array('status' => true, 'data' => $arrData);
					}
					echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
				}			
			    die();
		}
		public function delCompletarPerfil()
		{
			if($_POST){
				
					$intIdusuario = intval($_POST['idusuario']);
					$requestDelete = $this->model->deleteCompletarPerfil($intIdusuario);
					if($requestDelete)
					{
						$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el usuario');
					}else{
						$arrResponse = array('status' => false, 'msg' => 'Error al eliminar el usuario.');
					}
					echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
				
			}
			die();
		}
}*/
?>