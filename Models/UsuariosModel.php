<?php 

	class UsuariosModel extends Mysql
	{
		private $intIdUsuario;		
		private $strNombre;
		private $strApellido;
		private $intTelefono;
		private $strEmail;
		private $strPassword;
		private $intDni;
		private $strDireccion;
		private $strToken;
		private $intTipoId;
		private $intStatus;

		public function __construct()
		{
			parent::__construct();
		}	

		public function insertUsuario( string $nombre, string $apellido, int $telefono, string $email, string $password,int $dni,string $direccion, int $tipoid, int $status){

			
			$this->strNombre = $nombre;
			$this->strApellido = $apellido;
			$this->intTelefono = $telefono;
			$this->strEmail = $email;
			$this->strPassword = $password;
			$this->intDni = $dni;
			$this->strDireccion = $direccion;
			$this->intTipoId = $tipoid;
			$this->intStatus = $status;
			$return = 0;

			$sql = "SELECT * FROM usuario WHERE 
					email_user = '{$this->strEmail}' or dni = '{$this->intDni}' ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$query_insert  = "INSERT INTO usuario(nombre,apellidos,telefono,email_user,password,dni,direccion,rolid,status) 
								  VALUES(?,?,?,?,?,?,?,?,?)";
	        	$arrData = array(
        						$this->strNombre,
        						$this->strApellido,
        						$this->intTelefono,
        						$this->strEmail,
        						$this->strPassword,
								$this->intDni,
								$this->strDireccion,
        						$this->intTipoId,
        						$this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = "exist";
			}
	        return $return;
		}

		public function selectUsuarios()
		{
			$whereAdmin = "";
			if($_SESSION['idUser'] != 1 ){
				$whereAdmin = " and p.idusuario != 1 ";
			}
			$sql = "SELECT p.idusuario,p.nombre,p.apellidos,p.telefono,p.email_user,p.dni,p.direccion,p.status,r.idrol,r.nombrerol 
					FROM usuario p 
					INNER JOIN rol r
					ON p.rolid = r.idrol
					WHERE p.status != 0 ".$whereAdmin;
					$request = $this->select_all($sql);
					return $request;
		}
		public function selectUsuario(int $idusuario){
			$this->intIdUsuario = $idusuario;
			$sql = "SELECT p.idusuario,p.nombre,p.apellidos,p.telefono,p.email_user,p.dni,p.direccion,r.idrol,r.nombrerol,p.status, DATE_FORMAT(p.fechacreacion, '%d-%m-%Y') as fechaRegistro 
					FROM usuario p
					INNER JOIN rol r
					ON p.rolid = r.idrol
					WHERE p.idusuario = $this->intIdUsuario";
			$request = $this->select($sql);
			return $request;
		}

		public function updateUsuario(int $idUsuario,  string $nombre, string $apellido, int $telefono, string $email, string $password,int $dni,string $direccion, int $tipoid, int $status){

			$this->intIdUsuario = $idUsuario;			
			$this->strNombre = $nombre;
			$this->strApellido = $apellido;
			$this->intTelefono = $telefono;
			$this->strEmail = $email;
			$this->strPassword = $password;
			$this->intDni = $dni;
			$this->strDireccion = $direccion;
			$this->intTipoId = $tipoid;
			$this->intStatus = $status;

			$sql = "SELECT * FROM usuario WHERE (email_user = '{$this->strEmail}' AND idusuario != $this->intIdUsuario)
										  OR (dni = '{$this->intDni}' AND idusuario != $this->intIdUsuario) ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				if($this->strPassword  != "")
				{
					$sql = "UPDATE usuario SET  nombre=?, apellidos=?, telefono=?, email_user=?, password=?,dni=?,direccion=?, rolid=?, status=? 
							WHERE idusuario = $this->intIdUsuario ";
					$arrData = array(
	        						$this->strNombre,
	        						$this->strApellido,
	        						$this->intTelefono,
	        						$this->strEmail,
	        						$this->strPassword,
									$this->intDni,
									$this->strDireccion,
	        						$this->intTipoId,
	        						$this->intStatus);
				}else{
					$sql = "UPDATE usuario SET  nombre=?, apellidos=?, telefono=?, email_user=?,dni=?,direccion=?, rolid=?, status=? 
							WHERE idusuario = $this->intIdUsuario ";
					$arrData = array(
	        						$this->strNombre,
	        						$this->strApellido,
	        						$this->intTelefono,
	        						$this->strEmail,
									$this->intDni,
									$this->strDireccion,
	        						$this->intTipoId,
	        						$this->intStatus);
				}
				$request = $this->update($sql,$arrData);
			}else{
				$request = "exist";
			}
			return $request;
		
		}
		public function deleteUsuario(int $intIdusuario)
		{
			$this->intIdUsuario = $intIdusuario;
			$sql = "UPDATE usuario SET status = ? WHERE idusuario = $this->intIdUsuario ";
			$arrData = array(0);
			$request = $this->update($sql,$arrData);
			return $request;
		}
		public function updatePerfil(int $idUsuario ,string $nombre, string $apellido, int $telefono, string $password,int $dni,string $direccion){
			$this->intIdUsuario = $idUsuario;			
			$this->strNombre = $nombre;
			$this->strApellido = $apellido;
			$this->intTelefono = $telefono;
			$this->strPassword = $password;
            $this->intDni = $dni;
			$this->strDireccion = $direccion;
			if($this->strPassword != "")
			{
				$sql = "UPDATE usuario SET  nombre=?, apellidos=?, telefono=?, password=?,dni=?,direccion=? 
						WHERE idusuario = $this->intIdUsuario ";
				$arrData = array(
								$this->strNombre,
								$this->strApellido,
								$this->intTelefono,
								$this->strPassword,
							    $this->intDni,
							    $this->intDireccion);
			}else{
				$sql = "UPDATE usuario SET  nombre=?, apellidos=?, telefono=?,dni=?,direccion=? 
						WHERE idusuario = $this->intIdUsuario ";
				$arrData = array(
								$this->strNombre,
								$this->strApellido,
								$this->intTelefono,
							    $this->intDni,
							    $this->strDireccion);
			}
			$request = $this->update($sql,$arrData);
		    return $request;
		}

	}
 ?>