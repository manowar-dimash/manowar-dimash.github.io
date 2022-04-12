<?php headerPrincipal($data); ?>

<section>
    <div class="contenedor0">
        <div class="contenido">
            <div class="separador">
                <img src="<?= media(); ?>/images/img1.jpg" alt="">
                <div class="direccion">
                    
                    <p class="direccion0" ><i class=" fa-solid fa-location-arrow"></i>Santo domingo de la calzada</p>
                </div>
                <div class="telefonos">
                    
                    <p class="telefonos0" ><i class="fa-solid fa-phone"></i>627 894 089</p>
                    
                    <p class="telefonos0" ><i class="fa-solid fa-phone"></i>670 087 667</p>
                </div>
                <div class="email">
                    
                    <p class="email0" ><i class="fa-solid fa-envelope"></i>Email: Reydecuba@gmail.com</p>
                </div>
            </div>
            <div class="separador">
                    <div class="contacto">
                        <h1>Contacto</h1>
                    </div>
                    <form action="" class="formulario">
                        <div class="datos">
                            <input type="text" class="input0" placeholder="Nombre">
                            <div class="i1">
                                <i  class="fa-solid fa-user"></i>
                            </div>   
                           
                            <input type="text" class="input1" placeholder="Apellidos">
                            <div class="i">
                                <i  class="fa-solid fa-user"></i>
                            </div>
                        </div>
                        <div class="datos">
                            <input type="number" class="input2" placeholder="Télefono">
                            <div class="i2">   
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <input type="email" class="input3" placeholder="Email">
                            <div class="i3">  
                                <i class="fa-solid fa-envelope"></i>
                            </div> 
                        </div>
                        <textarea name="" id="" cols="52" rows="5" placeholder="Deja tu comentario" ></textarea>
                        <button class="btn-btn" type="submit">Enviar</button>
                        <button class="btn-btn1" type="submit">Cancelar</button>
                    </form>
                
            </div>
        </div>
    </div>
</section>