<?php
    require_once(dirname(__FILE__)."/../common.php");
    // require_once 'putanja_prikaz.php';
    // require_once 'sekcije/sekcije.php';
    $content = [
        'page_title'=>'Crna decija majica',
        'meta_desc'=>'', // ...i sve ostalo za seo
        'id'=>'11',
        'barkod'=>'1122334455667',
        'naziv_proizvoda'=>'Crna decija majica',
        'naslov_proizvoda'=>'Crna decija majica',
        'kolicina'=>20,
        'cena1'=>1200,
        'cena2'=>1000,
        'popust'=>20,
        'sve_boje'=>['#242424', '#CD5C5C', '#6495ED', '#483D8B'],
        'sve_velicine'=>['XS', 'S', 'M', 'L', 'XL'],
        'kolicina'=>1, // iz korpe
        'slike'=>['product-image.jpg', 'product-image1.jpg', 'product-image2.jpg'],
        'proizvodjac'=>'Adidas',
        'tagovi'=>['majica', 'crna', 'muska'],
        'opis'=>'<p>Ovde ide malo duzi opis proizvoda.</p>',
    ];
?>
                <div id="product-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row gx-5">
                            <div class="col-md-6">
                                <div class="mg-product-slider-outer">
                                    <div class="mg-product-slider-main">
                                        <div class="mg-product-slider mg-quick-view-slider">
                                            <?php
                                                foreach ($content['slike'] as $slika) { ?>
                                                    <div>
                                                        <img class="img-fluid" src="assets/images/<?=$slika?>" alt=""/>
                                                    </div>
                                                <?php }
                                            ?>
                                        </div>
                                        <div class="mg-product-slider-thumb mg-quick-view-slider-thumb">
                                            <?php
                                                foreach ($content['slike'] as $slika) { ?>
                                                    <div>
                                                        <img class="img-fluid" src="assets/images/<?=$slika?>" alt=""/>
                                                    </div>
                                                <?php }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mg-product-page-details-outer">
                                    <h2 class="mg-product-page-product-tittle"><?=$content['naslov_proizvoda']?></h2>
                                    <div class="row gx-2 align-items-end">
                                        <div class="col-12">
                                            <div class="mg-product-page-product-price">
                                                <span class="mg-price"><?=cenaFormat($content['cena1'])?></span>
                                                <?=$content['cena2'] > 0 ? '<span class="mg-product-page-regular-price"><del>'.cenaFormat($content['cena2']).'</del></span>' : ''?> 
                                                <?=$content['popust'] > 0 ? '<br /><span class="mg-product-page-small-text">'.$content['popust'].'% popusta</span>' : ''?>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="col-3">
                                        <div class="mg-stock-text"><?=$content['kolicina'] ? 'Na stanju' : 'Rasprodato' ?></div>
                                    </div>
                                    <div class="mg-variant-pannel mg-product-page-sec-spacing">
                                        <div class="mg-product-page-small-heading">Colors</div>
                                        <div class="mg-color-variant-outer">
                                            <ul>
                                                <?php
                                                    foreach ($content['sve_boje'] as $boja) { 
                                                        $ozn_boja = '<li class="mg-active-variant">';
                                                        ?>
                                                        <li><a style="background-color: <?=$boja?>;" class="mg-color-variant" href="#"></a></li>
                                                    <?php }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mg-product-page-sec-spacing">
                                        <div class="mg-variant-pannel">
                                            <div class="mg-product-page-small-heading">Size</div>
                                            <div class="mg-size-variant-outer">
                                                <ul>
                                                    <?php
                                                        foreach ($content['sve_velicine'] as $vel) { 
                                                            $ozn_boja = '<li class="active">';
                                                            ?>
                                                            <li><a href="#" class="mg-size-variant"><?=$vel?></a></li>
                                                        <?php }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="mg-variant-pannel mg-product-page-sec-spacing">
                                        <div class="mg-product-page-small-heading">Količina</div>
                                        <div class="mg-quantity-variant-outer">
                                            <div class="mg-cart-quantiy-outer">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="mg-quantity-step-btn"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                                <input class="mg-cart-quantity" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="mg-quantity-step-btn"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mg-product-add-to-cart-outer mg-product-page-sec-spacing">
                                        <button class="btn mg-btn mg-black-btn mg-form-btn mg-light-bg-btn"><span class="mg-btn-icon"><img src="assets/images/product-bag.svg" alt="" /></span>DODAJ U KORPU</button>
                                    </div>
                                    <div class="mg-quick-popup-more-info-btn text-center">
                                        <a href="product.php">Detaljnije</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
