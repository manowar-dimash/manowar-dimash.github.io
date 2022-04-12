<?php headerPrincipal($data);
?>


    <header class="header">        
        <nav class="nav1" id="nav">
            <div class="contenedor-nav">
                <div class="logo">
                    <img src="<?= media();?>/images/logo.jpg" alt="Logo">
                </div>
                <div class="menus">
                    <a href="<?= base_url(); ?>/Principal/principal" class="btn">Inicio</a>
                    <a href="<?= base_url(); ?>/Musica/musica" class="btn">Musica</a>
                    <a href="<?= base_url(); ?>/Videos/videos" class="btn">Videos</a>
                    <a href="#" class="btn">Galeria</a>
                    <a href="#" class="btn">Eventos</a>
                    <a href="<?= base_url(); ?>/Contacto/contacto" class="btn">Contacto</a>
                    <a href="<?= base_url(); ?>/Login/login" class="btn">Chats</a>
                    <a href="<?= base_url(); ?>/Home/home" class="btn">Tienda</a>
                    <a href="#" class="btn">Registros</a>
                </div>
                               
                <div class="icono_menu" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>Duo Imperial</h1>
            <h2>La mejor musica para ti</h2>
        </div>
    </header>
    <section class="container">
        
        <h1>Proximo evento</h1>
        <div class="countdown">
            <div class="tiempo" >
                <p id="dias">00</p>
                <span>Dias</span>
            </div>
            <div class="tiempo">
                <p id="horas">00</p>
                <span>Horas</span>
            </div> 
            <div class="tiempo">
                <p id="minutos">00</p>
                <span>Minutos</span>
            </div> 
            <div class="tiempo">
                <p id="segundos">00</p>
                <span>Segundos</span>
            </div>                         
        </div>
    </section>
    <section class="video" >
        <div class="video-item">
            <h1>Videos y imagenes de la semana</h1>
        </div>
        <div class="contenedor">
            <div class="contenedor-video">
                <div class="stranger">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/lFsB5HVnmSA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    
                </div>
                <div class="bachata">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ap8oKFAD-U0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="contenedor1">
                <div class="imagenes">
                    <div class="img-item">
                        <img src="<?= media(); ?>/images/img1.jpg" alt="">
                    </div>
                    <div class="img-item">
                        <img src="<?= media(); ?>/images/img2.jpg" alt="">
                    </div>
                    <div class="img-item">
                        <img src="<?= media(); ?>/images/img5.jpg" alt="">
                    </div>
                    <div class="img-item">
                        <img src="<?= media(); ?>/images/img4.jpg" alt="">
                    </div>
                </div>
                <div class="imagenes1">
                    <div class="img-item1">
                        <img src="<?= media(); ?>/images/img6.jpg" alt="">
                    </div>
                    <div class="img-item1">
                        <img src="<?= media(); ?>/images/img7.jpg" alt="">
                    </div>
                </div> 
            </div>
        </div>
    </section>
<?php footerPrincipal($data);?>
    