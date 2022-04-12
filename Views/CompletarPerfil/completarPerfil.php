<?php headerAdmin($data); ?>

<!--<div class="completarPerfil">
    <div class="container10">
        <div class="container-perfil">
            <h2 class="text-center1">Completa tu perfil</h2>
            <h6 class="text-center2">Antes de continuar deberas completar tu perfil</h6>
            <hr>
            <div class="content-completar-perfil center">
                <form action="" id="formCompletarPerfil" name="formCompletarPerfil"  method="POST" 
                    enctype="multipart/form-data">
                    <input type="hidden" id="idusuario" name="idusuario" value="<?php echo $_SESSION['login'] ?>">
                    <div class="form-item">
                        <input type="text" id="nombre" name="nombre" class="control valid validtext" placeholder="Nombre Completo" require>
                    </div>
                    <div class="form-item">
                        <div class="file" >
                            <input type="file" class="foto-input valid validtext" id="imagen" name="imagen" require>
                            <label class="foto" for="imagen">Seleccionar una foto</label>
                        </div>
                    </div>
                    <button class=" btn11 btn-purple4 btn-block">Registrar datos</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>-->
        const base_url = "<?= base_url(); ?>";
    </script>
    <!-- Essential javascripts for application to work-->
    <script src="<?= media();?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= media();?>/js/popper.min.js"></script>
    <script src="<?= media();?>/js/bootstrap.min.js"></script>
    <script src="<?= media();?>/js/fontawesome.js"></script>
    <script src="<?= media();?>/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?= media();?>/js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="<?= media();?>/js/plugins/sweetalert.min.js"></script>
    <script src="<?= media();?>/js/<?= $data['page_functions_js'];?>"></script>
            
  </body>
</html>