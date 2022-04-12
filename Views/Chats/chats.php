<?php headerAdmin($data); 

?>



<div class="container1">
    <div class="row">
        <div class="col">
            <div class="container-style-main1">
                <div class="perfil-usuario-main">
                    <div class="background-usuario-main"></div>
                    <img src="" class="image-border" alt=""> 
                    <div class="foto-separation"></div>
                    <a href=""><div class="text-center00"></div></a>
                    <div class="tabla-estadisticas">
                        <a href="#">Publicaciones <br><div class="span0"> 0 </div></a>
                        <a href="#">Me gustas <br><div class="span0"> 0 </div></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col1">
            <div class="container-style-main">
                <div class="container-usuario-publicar">
                    <a href=""><img src="" class="image-border1"></a>
                    <form action="" method="post" enctype="multipart/form-data" class="form-publicar">
                        <textarea name="contenido" id="contenido" name="post"  class="published" name="post"  placeholder="Que estas pensando" require></textarea>
                        <div class="image-upload-file">
                            <div class="upload-photo">
                                <img src="" alt="" class="image-public"></div>
                                <div class="input-file">
                                    <input class="input5" type="file" name="imagen" id="imagen">
                                </div>
                                <span class="foto">Subir foto</span> 
                            </div>
                            <button class="btn-publi">Publicar</button>
                        </div>    
                    </form>
                </div>                                                  
                
                <div class="container-usuarios-publicaciones">
                    <div class="usuarios-publicaciones-top">
                        <img src=" " alt="" class="imagen-border2">
                        <div class="informacion-usuario-publico">
                            <h6 class="h6"><a href=""></a></h6>
                            <span class="span" ></span>
                        </div>                        
                    </div>
                    <div class="contenidos-publicacion-usuario">
                        
                        <p class="p"> </p>
                        <img src=" " alt=""
                        class="imagen-publicacion-usuarios">
                    </div>
                    <hr>
                    <div class="acciones-usuario-publicar">
                        <a  href=""class="publicar"><i class="fas fa-heart"></i>Me gusta<span class="span1" ><?php echo $datosPublicacion->num_likes?></span></a>
                        
                    </div>
                    <hr>
                    <div class="formulario-comentarios">
                        <img src=" " alt="" class="image-border3">
                        <div class="acciones-formulario-comentario">
                            <form action="" method="post">
                                <input type="hidden" name="idusuarioPropietario" value="">
                                <input type="hidden" name="iduser" value="">
                                                                
                                <input type="hidden" name="idpublicacion" value="">
                                <input type="text" name="comentario" class="form-comentario-usuario" placeholder="Agregar un comentario" require>
                                <hr class="hr" >
                                <div class="btn-comentario-container">
                                    <button class="btn-purple3">Comentar</button>
                                </div>
                            </form>
                        </div>
                    </div> 
                    
                            <div class="container-contenido-comentarios">
                                <img src="" 
                                alt="" class="image-border4">
                                <div class="contenido-comentario-usuario">
                                
                                <a href="" class="iduser"><i class="far fa-trash-alt" ></i></a>
                                
                                <a href="" class="float-right0"><i class="far fa-trash-alt"></i></a>
                                <a href=""class="big10"></a>
                                
                                <span></span>
                                <p class="p1" ></p>
                            </div>                            
                            <br class="br">
                                

                </div>
                    
                                       
                               
            </div>
        </div>
        <div class="col-md-3">
            <div class="container1-style-main">

            </div>
        </div>
    </div>
</div>
        
                
                

<?php footerAdmin($data); ?>

