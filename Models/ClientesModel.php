<?php 
class ClientesModel extends Mysql
{
	private $intIdUsuario;	
	private $strNombre;
	private $strApellido;
	private $intTelefono;
	private $strEmail;
    private $intDni;
    private $strDireccion;
	private $strPassword;
	private $strToken;
	private $intTipoId;
    private $strStatus;
	
	
	
	

	public function __construct()
	{
		parent::__construct();
	}	

	public function insertCliente(  string $nombre, string $apellido, int $telefono, string $email,  string $password,int $tipoid,int $dni,string $direccion,int $status ){

		
		$this->strNombre = $nombre;
		$this->strApellido = $apellido;
		$this->intTelefono = $telefono;
		$this->strEmail = $email;        
		$this->strPassword = $password;
        $this->intTipoId = $tipoid;
        $this->intDni = $dni;
        $this->strDireccion = $direccion;
		$this->intStatus = $status;
						
		$return = 0;
		$sql = "SELECT * FROM persona WHERE 
				email_user = '{$this->strEmail}' or dni = '{$this->intDni}' ";
		$request = $this->select_all($sql);

		if(empty($request))
		{
			$query_insert  = "INSERT INTO persona(nombre,apellidos,telefono,email_user,password,rolid,dni,direccion,status) 
							  VALUES(?,?,?,?,?,?,?,?,?)";
        	$arrData = array(
    						 $this->strNombre,
    						 $this->strApellido,
    						 $this->intTelefono,
    						 $this->strEmail,                            
    						 $this->strPassword,
                             $this->intTipoId,
                             $this->intDni,
                             $this->strDireccion,                             
    						 $this->intStatus);
    						
    						
    						
        	$request_insert = $this->insert($query_insert,$arrData);
        	$return = $request_insert;
		}else{
			$return = "exist";
		}
        return $return;
	}

	public function selectClientes()
	{
		$sql = "SELECT idpersona,nombre,apellidos,telefono,email_user,dni,direccion,status 
				FROM persona 
				WHERE rolid = 3 and status = !0 ";
		$request = $this->select_all($sql);
		return $request;
	}

	public function selectCliente(int $idpersona){
		$this->intIdUsuario = $idpersona;
		$sql = "SELECT idpersona,nombre,apellidos,telefono,email_user,dni,direccion,status, DATE_FORMAT(fechacreacion, '%d-%m-%Y') as fechaRegistro 
				FROM persona
				WHERE idpersona = $this->intIdUsuario and rolid = 3";
		$request = $this->select($sql);
		return $request;
	}

    public function updateCliente(int $idUsuario, string $nombre, string $apellido, int $telefono, string $email,string $password, int $dni,string $direccion ){

		$this->intIdUsuario = $idUsuario;	
		$this->strNombre = $nombre;
		$this->strApellido = $apellido;
		$this->intTelefono = $telefono;
		$this->strEmail = $email;
		$this->strPassword = $password;
        $this->intDni = $dni;
        $this->strDireccion = $direccion;
		
		
		
		

		$sql = "SELECT * FROM persona WHERE (email_user = '{$this->strEmail}' AND idpersona != $this->intIdUsuario)
									  OR (dni = '{$this->intDni}' AND idpersona != $this->intIdUsuario) ";
		$request = $this->select_all($sql);

		if(empty($request))
		{
			if($this->strPassword  != "")
			{
				$sql = "UPDATE persona SET  nombre=?, apellidos=?, telefono=?, email_user=?,password=?,dni=?,direccion=?     
						WHERE idpersona = $this->intIdUsuario ";
				$arrData = array(
        						$this->strNombre,
        						$this->strApellido,
        						$this->intTelefono,
        						$this->strEmail,
								$this->strPassword,
                                $this->intDni,
                                $this->strDireccion);
        						
        						
        						
        						
			}else{
				$sql = "UPDATE persona SET  nombre=?, apellidos=?, telefono=?, email_user=?, dni=?, direccion=? 
						WHERE idpersona = $this->intIdUsuario ";
				$arrData = array(
        						$this->strNombre,
        						$this->strApellido,
        						$this->intTelefono,
        						$this->strEmail,
        						$this->intDni,        						
        						$this->strDireccion);
			}
			$request = $this->update($sql,$arrData);
		}else{
			$request = "exist";
		}
		return $request;
	}

	public function deleteCliente(int $intIdpersona)
	{
		$this->intIdUsuario = $intIdpersona;
		$sql = "UPDATE persona SET status = ? WHERE idpersona = $this->intIdUsuario ";
		$arrData = array(0);
		$request = $this->update($sql,$arrData);
		return $request;
	}
}

 ?>