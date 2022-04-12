<?php

class Perfil extends Controllers{
		public function __construct()
	{
		parent::__construct();
		session_start();
		session_regenerate_id(true);
	}

	public function perfil()
	{
		
		$data['page_tag'] = "Perfil";
		$data['page_title'] = "Página principal";
		$data['page_name'] = "perfil";
		$data['page_functions_js'] = "functions_perfil.js";			
		$this->views->getView($this,"perfil",$data);
	}
    
    public function cambiarImagen(){
        $carpeta = "D:/xampp/htdocs/DuoImperial/Assets/images/imagenesPerfil/";
        opendir($carpeta);
        $rutaImagen = "images/imagenesPerfil/" . $_FILES["imagen"]["name"];
        $ruta = $carpeta . $_FILES["imagen"]["name"];
        copy($_FILES["imagen"]["tmp_name"],$ruta);

        $datos = [
            "idusuario" => trim($_POST["id_user"]),
            "ruta" => $rutaImagen
        ];
        $imagenActual = $this->usuario->getPerfil($datos["idusuario"]);
        unlink('D:/xampp/htdocs/DuoImperial/Assets/' . $imagenActual->fotoPerfil);

        if($this->perfil->editarFoto($datos)){
            header('Location: '.base_url().'/home');
        }else{
            echo "El perfil no se ha guardado";
        }
    }
    public function insertarRegistrosPerfil(){
        $carpeta = "D:/xampp/htdocs/DuoImperial/Assets/images/imagenesPerfil/";
        opendir($carpeta);
        $rutaImagen = "images/imagenesPerfil/" . $_FILES["imagen"]["name"];
        $ruta = $carpeta . $_FILES["imagen"]["name"];
        copy($_FILES["imagen"]["tmp_name"],$ruta);

        $intidUsuario = intval($_POST["idusuario"]);
        $FotoPerfil = intval($_POST["imagen"]);
        $strnombreCompleto = strClean($_POST["nombre"]);

        if($intidUsuario == 0){
            $request_perfil = $this->model->insertPerfil($intidUsuario,$FotoPerfil,$strnombreCompleto);
            $option1 = 1;
        }else{
            echo "El perfil no se ha guardado";            
        }
        if($request_perfil > 0){
            if($option1 == 1){
                $arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
            }else{
                $arrResponse = array('status' => true, 'msg' => 'No se guardaron los datos.');
            }
        }else if($request_perfil == 'exist'){
					
            $arrResponse = array('status' => false, 'msg' => '¡Atención! El perfil ya existe.');
        }else{
            $arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
        }
        echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
    
        die();
    }
}

?>