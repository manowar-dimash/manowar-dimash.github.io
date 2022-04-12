<?php 

	class LoginModel extends Mysql
	{
		private $intidusuario;
		private $strUsuario;
		private $strPassword;
		private $strToken;

		public function __construct()
		{
			parent::__construct();
		}	

		public function loginUser(string $usuario, string $password)
		{
			$this->strUsuario = $usuario;
			$this->strPassword = $password;
			$sql = "SELECT idusuario,status FROM usuario WHERE 
					email_user = '$this->strUsuario' and 
					password = '$this->strPassword' and 
					status != 0 ";
			$request = $this->select($sql);
			return $request;
		}
		public function sessionLogin(int $iduser){
			$this->intidusuario = $iduser;
			//BUSCAR ROLE 
			$sql = "SELECT p.idusuario,							
							p.nombre,
							p.apellidos,
							p.telefono,
							p.email_user,
							p.dni,							
							p.direccion,
							r.idrol,r.nombrerol,
							p.status 
					FROM usuario p
					INNER JOIN rol r
					ON p.rolid = r.idrol
					WHERE p.idusuario = $this->intidusuario";
			$request = $this->select($sql);
			$_SESSION['userData'] = $request;
			return $request;
		}
		public function getUserEmail(string $strEmail){
			$this->strUsuario = $strEmail;
			$sql = "SELECT idusuario,nombre,apellidos,status FROM usuario WHERE 
					email_user = '$this->strUsuario' and  
					status = 1 ";
			$request = $this->select($sql);
			return $request;
		}

		public function setTokenUser(int $idusuario, string $token){
			$this->intidusuario = $idusuario;
			$this->strToken = $token;
			$sql = "UPDATE usuario SET token = ? WHERE idusuario = $this->intidusuario ";
			$arrData = array($this->strToken);
			$request = $this->update($sql,$arrData);
			return $request;
		}
		public function getUsuario(string $email, string $token){
			$this->strUsuario = $email;
			$this->strToken = $token;
			$sql = "SELECT idusuario FROM usuario WHERE 
					email_user = '$this->strUsuario' and 
					token = '$this->strToken' and 					
					status = 1 ";
			$request = $this->select($sql);
			return $request;
		}
		public function insertPassword(int $idusuario, string $password){
			$this->intidusuario = $idusuario;
			$this->strPassword = $password;
			$sql = "UPDATE usuario SET password = ?, token = ? WHERE idusuario = $this->intidusuario ";
			$arrData = array($this->strPassword,"");
			$request = $this->update($sql,$arrData);
			return $request;
		}
	}
 ?>