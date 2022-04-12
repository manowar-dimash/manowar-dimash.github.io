
<?php headerAdmin($data); ?>

    


<header>
    <div class="container10">
        <nav class="navbar">
            <a href="#" class="navbar-brand"><img src="https://cdn.freebiesupply.
            com/logos/large/2x/facebook-messenger-logo-black-and-white.png" alt="Logo"
            class="image-logo"></a>
            <button class="btn" type="button">
               <span class="navbar-span"></span>
            </button>
            <div class="contenedor10" id="navbarSupportedContent">
                <ul class="navbar-ul">
                    <li class="nav-item">
                        <a href="<?= base_url(); ?>/home" class="nav-link0"><span class="big0"><i class="fas fa-home"></i></span>Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url(); ?>" class="nav-link"><span class="big1"><i class="fas fa-home"></i></span>Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <form action="<?= base_url(); ?>" method="POST" class="form">
                            <input type="text" name="buscar" class="form-style" placeholder="Buscar">
                            <button class="btn-form" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </li>      
                </ul>
                <div class="link">                
                    <div class="links">
                        <a href="<?= base_url(); ?>"><span class="big"><i class="far fa-envelope"></i></span>Mensajes</a>
                    </div>
                
                    <div class="links">
                        <div class="notificacion-container">
                            <a href="<?= base_url(); ?>" class="notificaciones"><span class="big2"><i class="fas fa-bell"></i></span>                            
                            </a>                                  
                        </div>   
                    </div>   
                                               
                    <div class="dropdown1">
                        <span class="btn-radio dropdown-toggle" id="actionPerfil" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                            <img src="<?= base_url();?>/Perfil/perfil" alt=""
                                class="img-perfil">                            
                        </span>
                    
                        <div class="contenedor-menu" aria-labelledby="actionPerfil" >
                                                            
                            <a href="<?= base_url(); ?>" class="dropdown-item1 ">Salir</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
