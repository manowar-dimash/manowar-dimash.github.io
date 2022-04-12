<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= $data['page_tag']; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/e8820327cf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?= media() ?>/css/Style.css">
</head>

<body>
    <header class="main-header">
        <div class="contenedor">
            <div class="contenido">
                <div class="item">
                    <div class="logo">
                        <img src="" alt="LOGO">
                    </div>
                    <div class="tienda">              
                        <h1>Tienda</h1>                        
                    </div>
                </div>
            </div>
            <hr>
            <nav class="nav">
                <div class="menus">
                    <ul class="ul">
                        <li><a href="<?= base_url();?>">Inicio</a></li>
                        <li><a href="<?= base_url();?>/login">Dashboard</a></li>
                        <li><a href="<?= base_url();?>/contacto">Contacto</a></li>
                    </ul>
                    <div class="usuario">
                        <a><i class="fa-solid fa-user"></i></a>
                        <input type="search" placeholder="Buscar Productos" ><i class="fa-solid fa-magnifying-glass"></i></li>
                    </div>
                        
                    
                </div>
            </nav>
        </div>
    </header>
    
    
    