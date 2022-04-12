<?php 
	const BASE_URL = "http://localhost/duoimperial";
	//const BASE_URL = "https://abelosh.com/tiendavirtual";

	//Zona horaria
	date_default_timezone_set('America/Guatemala');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "duoimperial";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 1; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "E";
	const CURRENCY = "Eur";

	//Api PayPal
	//SANDBOX PAYPAL
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "AUv-qetD29khjtR7rj1FPr6TFKJcAl44dkJ0QfMsi14b5q8PgKrNxoj5JGhnBLipp0zVgiR63ZQeZ90R";
	const SECRET = "";
	//LIVE PAYPAL
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const IDCLIENTE = "";
	//const SECRET = "";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Tienda on line";
	const EMAIL_REMITENTE = "lupielgoizueta@yahoo.es";
	const NOMBRE_EMPRESA = "Tienda on line";
	const WEB_EMPRESA = "www.DuoImperial.com";

	const DESCRIPCION = "La mejor musica para ti.";
	const SHAREDHASH = "Tienda on line";

	//Datos Empresa
	const DIRECCION = "Santo Domingo de la calzada";
	const TELEMPRESA = "670087667";
	const WHATSAPP = "670087667";
	const EMAIL_EMPRESA = "duoimperial.com";
	const EMAIL_PEDIDOS = "duoimperial.com"; 
	const EMAIL_SUSCRIPCION = "duoimperial.com";
	const EMAIL_CONTACTO = "duoimperial.com";

	const CAT_SLIDER = "1,2";	
	const CAT_BANNER = "4,5,6";	
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'dimash';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 15;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');

	//Productos por página
	const CANTPORDHOME = 8;
	const PROPORPAGINA = 4;
	const PROCATEGORIA = 4;
	const PROBUSCAR = 4;

	//REDES SOCIALES
	const FACEBOOK = "https://www.facebook.com/abelosh";
	const INSTAGRAM = "https://www.instagram.com/febel24/";
	

 ?>