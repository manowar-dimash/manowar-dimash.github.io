<?php
class CompletarPerfil extends Mysql{

    private $intIdUsuario;
    private $strFotoPerfil;
    private $strNombreCompleto;

    public function __construct()
	{
		parent::__construct();
	}
    public function insertCompletarPerfil( string $fotoPerfil, string $nombreCompleto){

			
        $this->strFotoPerfil = $fotoPerfil;
        $this->strNombreCompleto = $nombreCompleto;
        
        $return = 0;        

        if(empty($request))
        {
            $query_insert  = "INSERT INTO perfil(idusuario,fotoPerfil,nombreCompleto) 
                              VALUES(?,?,?)";
            $arrData = array($this->strFotoPerfil,$this->strNombreCompleto);              
                           
            $request_insert = $this->insert($query_insert,$arrData);
            $return = $request_insert;
        }else{
            $return = "exist";
        }
        return $return;
    }
    public function selectCompletarPerfiles(int $idusuario){
        $this->intIdUsuario = $idusuario;
        $sql = "SELECT p.idusuario,p.fotoPerfil,p.nombreCompleto 
                FROM perfil p                
                WHERE p.idusuario = $this->intIdUsuario";
        $request = $this->select($sql);
        return $request;
    }
    public function selectCompletarPerfil(int $idusuario){
        $this->intIdUsuario = $idusuario;
        $sql = "SELECT p.idusuario,p.fotoPerfil,p.nombreCompleto 
                FROM perfil p                
                WHERE p.idusuario = $this->intIdUsuario";
        $request = $this->select($sql);
        return $request;
    }
    public function deleteCompletarPerfil(int $intIdusuario)
		{
			$this->intIdUsuario = $intIdusuario;
			$sql = "UPDATE perfil SET status = ? WHERE idusuario = $this->intIdUsuario ";
			$arrData = array(0);
			$request = $this->update($sql,$arrData);
			return $request;
		}
}