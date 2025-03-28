<?php
    require_once 'include/common.php';
    require_once 'include/putanja_prikaz.php';
    require_once 'include/sekcije/sekcije.php';
    require_once 'include/korpa-summary.php';
    require_once 'podaci/korpa.php';
    $promo_kodovi_postoje = true;

    $headerClass = "";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vaša korpa</title>
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
                ['link'=>'korpa.php?id=nesto', 'naslov'=>'Korpa'],
            ];
            putanja_prikaz($putanja); 
        ?>
        <!--MG Page Start Here-->
        <div class="mg-page-outer">
            <div class="container-fluid gx-lg-5 gx-md-4">
                <div class="mg-section-tittles text-center">
                    <h2 class="mg-heading">VAŠA KORPA</h2>
                </div>
            </div>
            <div class="container-lg gx-lg-5 gx-md-4">
                <div class="mg-cart-page-outer">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mg-cart-product-list-outer">
                                <div class="mg-cart-product-list-heading">
                                    Lista artikala u korpi
                                </div>
                                <div class="mg-cart-product-list-main">
                                    <?php
                                    foreach($korpa_proizvodi as $row){
                                    ?>
                                    <div class="mg-cart-product-list-grid">
                                        <div class="mg-cart-product-remove-btn"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></div>
                                        <div class="mg-cart-product-list-image">
                                            <img src="assets/images/<?=$row['slika']?>" alt="" />
                                        </div>
                                        <div class="mg-cart-productr-list-details">
                                            <div class="mg-cart-product-tittle"><a href="product.html"><?=$row['naslov_proizvoda']?></a></div>
                                            <div class="mg-cart-small-text">Cena: <span><?=cenaFormat($row['cena'])?></span></div>
                                            <div class="mg-cart-product-price">Ukupno: <?=cenaFormat($row['cena']*$row['kolicina'])?></span></div>
                                            <div class="mg-cart-quantity-size-btn-outer mt-3">
                                                <div class="mg-cart-quantiy-outer">
                                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="mg-quantity-step-btn"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                                    <input class="mg-cart-quantity" min="0" name="quantity" value="<?=$row['kolicina']?>" type="number">
                                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="mg-quantity-step-btn"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                    
                                                </div>
                                            </div>
                                            <div>
                                                <span class="korpa-prop"><?=$row['velicina']?></span>
                                                <span class="korpa-prop" style="background-color: <?=$row['boja']?>; color: <?=$row['boja']?>;">-</span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 korpa-summary">
                            <?php korpaSummary($ukupna_cena, $ukupna_cena_sa_popustom, true); ?>
                        </div>
                    </div>
                    <?php sekcijaKarusel("<span>MOZDA VAM</span> SE SVIDI"); ?>
                </div>
            </div>
        </div>
        <!--MG Page End Here-->
        <!--MG Footer Start Here-->
        <!--MG Quick View Modal Start Here-->
        <?php include 'include/modalProduct/base.php'; ?>
        <!--MG Quick View Modal End Here-->
        <!--MG Footer Start Here-->
        <?php include "include/$footer/footer.php"; ?>
        <!--MG Footer End Here-->
		<a href="#" class="back-to-top-style3" title="Povratak na vrh"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
        <script src="assets/js/mg-menu.js"></script>
        <script src="assets/js/pages/mg-cart.js"></script>
        <script src="assets/js/pages/mg-home-1.js"></script>
        <script src="assets/js/mg-common.js"></script>
        <script src="assets/js/my-js.js"></script>
        <!--MG Footer End Here-->
    </body>
</html>
