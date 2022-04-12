<?php
headerTienda($data);
getModal('modalCarrito',$data);
$arrSlider = $data['slider'];
$arrProductos = $data['productos'];

?>
<div class="container-slider">
    <div class="slider" id="slider">
        <div class="slider-section">
            <img src="<?= media(); ?>/images/img1.jpg" alt="" class="slider-img">
        </div>
        <div class="slider-section">
            <img src="<?= media(); ?>/images/img2.jpg" alt="" class="slider-img">
        </div>
        <div class="slider-section">
            <img src="<?= media(); ?>/images/img3.jpg" alt="" class="slider-img">
        </div>
        <div class="slider-section">
            <img src="<?= media(); ?>/images/img4.jpg" alt="" class="slider-img">
        </div>
    </div>
</div>
<br><br><br>
<hr>
<main class="main">
    <h2 class="main-title">Productos</h2>
    <section class="container-productos">
        <div class="productos">
        <?php
            for ($p = 0; $p < count($arrProductos); $p++) {
                if (count($arrProductos[$p]['images']) > 0) {
                    $portada = $arrProductos[$p]['images'][0]['url_image'];
                } else {
                    $portada = media() . '/images/uploads/portada_productos.png';
                }

         ?>
            <div class="ver-producto">
                <div class="item-producto">
                    <div class="contenedor-text">
                        <div class="text">
                            <img src="<?= $portada ?>" alt="<?= $arrProductos[$p]['nombre'] ?>">
                            <div class="capa">
                                <a href="<?= base_url() . '/tienda/producto/' . $arrProductos[$p]['nombre']; ?>">
                                    Ver producto
                                </a>
                            </div>
                        </div>
                    </div>
                                         
                    <div class="contenedor-productos">
                        <div class="contenedor-nombre ">
                            <a href="<?= base_url() . '/tienda/producto/' . $arrProductos[$p]['nombre']; ?>">
                                <?= $arrProductos[$p]['nombre'] ?>
                            </a>

                            <span class="moneda">
                                <?= SMONEY . formatMoney($arrProductos[$p]['precio']); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </section>
</main>
<?php footerTienda($data); ?>