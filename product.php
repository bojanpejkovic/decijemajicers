<?php
    require_once 'include/common.php';
    require_once 'include/putanja_prikaz.php';
    require_once 'include/sekcije/sekcije.php';
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

    $headerClass = "";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$content['page_title']?></title>
        <!--Styles Included-->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/slick.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/slick-theme.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/mg-animations.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/mg-menu.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/my-style.css" rel="stylesheet" type="text/css"/>
        <!--Scripts Included-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/slick.js"></script>
    </head>
    <body>
        <?php include "include/$hero/header.php"; ?>
        <?php include 'include/sign-in.php'; ?>
        <?php include "include/$hero/search-popup.php"; ?>
        <?php 
            $putanja = [
                ['link'=>'index.php', 'naslov'=>'Naslovna'],
                ['link'=>'grupa.php?id=nesto', 'naslov'=>'Devojčice'],
                ['link'=>'', 'naslov'=>'Crna majica'],
            ];
            putanja_prikaz($putanja); 
        ?>
        <!--MG Page Start Here-->
        <div class="mg-page-outer product-page-outer">
            <div class="container-lg gx-lg-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mg-product-slider-outer">
                            <div class="mg-product-slider-main">
                                <div class="mg-product-slider">
                                    <?php
                                        foreach ($content['slike'] as $slika) { ?>
                                            <div>
                                                <img class="img-fluid" src="assets/images/<?=$slika?>" alt=""/>
                                            </div>
                                        <?php }
                                    ?>
                                </div>
                                <div class="mg-product-slider-thumb">
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
                        <!--Product Slider Script-->
                    </div>
                    <div class="col-md-6">
                        <div class="mg-product-page-details-outer">
                            <div class="row gx-2">
                                <div class="col-10">
                                    <h2 class="mg-product-page-product-tittle"><?=$content['naslov_proizvoda']?></h2>
                                </div>
                                <div class="col-2 text-end">
                                    <div class="mg-stock-text"><?=$content['kolicina'] ? 'Na stanju' : 'Rasprodato' ?></div>
                                </div>
                            </div>
                            <div class="mg-product-page-product-price mt-4">
                                <span class="mg-price"><?=cenaFormat($content['cena1'])?></span> 
                                <?=$content['cena2'] > 0 ? '<span class="mg-product-page-regular-price"><del>'.cenaFormat($content['cena2']).'</del></span>' : ''?> 
                                <?=$content['popust'] > 0 ? '<span class="mg-product-page-small-text">'.$content['popust'].'% popusta</span>' : ''?>
                            </div>
                            <div class="mg-variant-pannel mg-product-page-sec-spacing">
                                <div class="mg-product-page-small-heading">Odaberite boju</div>
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
                            <div class="row mg-product-page-sec-spacing align-items-end">
                                <div class="col-8">
                                    <div class="mg-variant-pannel">
                                        <div class="mg-product-page-small-heading">Odaberite veličinu</div>
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
                                <?php include 'include/proizvod/objasnjenje-velicina.php'; ?>
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
                                <div class="row gx-3">
                                    <div class="col-8">
                                        <button class="btn mg-btn mg-black-btn mg-form-btn mg-light-bg-btn"><span class="mg-btn-icon"><img src="assets/images/product-bag.svg" alt="" /></span>DODAJ U KORPU</button>
                                    </div>
                                    <div class="col-4">
                                        <a class="btn mg-btn mg-form-btn mg-light-bg-btn" href="#"><span class="mg-btn-icon"><img src="assets/images/product-heart.svg" alt="" /></span>Označi za kasnije</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mg-product-brief-details mg-product-page-sec-spacing">
                                <div class="mb-1">Proizvodjač: <span><?=$content['proizvodjac']?></span></div>
                                <div class="mb-1">Pun naziv: <span><?=$content['naziv_proizvoda']?></span></div>
                                <div class="mb-1">Barkod: <span><?=$content['barkod']?></span></div>
                                <div class="mb-1">Tag: <span><?=join(", ", $content['tagovi'])?></span></div>
                            </div>
                            <div class="mg-free-shipping-bar text-center mg-product-page-sec-spacing">
                                <?=besplatnaIsporuka()?>
                            </div>
                            <div class="mg-accordian-outer">
                                <div class="accordion accordion-flush" id="mg-product-details">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#tab1">
                                                Opis
                                            </button>
                                        </h2>
                                        <div id="tab1" class="accordion-collapse collapse show"  data-bs-parent="#mg-product-details">
                                            <div class="accordion-body">
                                                <?=$content['opis']?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tab4">
                                                Detalji isporuke
                                            </button>
                                        </h2>
                                        <div id="tab4" class="accordion-collapse collapse"  data-bs-parent="#mg-product-details">
                                            <div class="accordion-body">
                                                <?=detaljiIsporuke()?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--MG You May Also Like Section Start Here-->
                <?php sekcijaKarusel("<span>MOZDA VAM</span> SE SVIDI"); ?>
                <!--MG You May Also Like Section End Here-->
            </div>
        </div>
        <!--MG Page End Here-->
        <?php include "include/$footer/footer.php"; ?>
        <!--MG Footer End Here-->
		<a href="#" class="back-to-top-style3" title="Povratak na vrh"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
        <script src="assets/js/mg-menu.js"></script>
        <script src="assets/js/pages/mg-product.js"></script>
        <script src="assets/js/pages/mg-home-1.js"></script>
        <script src="assets/js/mg-common.js"></script>
    </body>
</html>
