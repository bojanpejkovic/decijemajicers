<?php
    require_once 'include/common.php';
    require_once 'include/putanja_prikaz.php';
    require_once 'include/korpa-summary.php';
    require_once 'podaci/korpa.php';

    
    $headerClass = "";

    $kupac = ['ime'=>'Ivana', 'prezime'=>'Mijatovic', 'tel'=>'0642918765', 'grad'=>'Beograd', 'adresa'=>'Adresa bez broja, bb', 'nacin_isp'=>'plaćanje preuzimanjem'];
    

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hvala</title>
        <!--Styles Included-->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/slick.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/slick-theme.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/mg-menu.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/my-style.css" rel="stylesheet" type="text/css"/>
        <!--Scripts Included-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/slick.js"></script>
    </head>
    <body class="<?=$bodyClass?>">
        <?php include "include/$hero/header.php"; ?>
        <?php include 'include/sign-in.php'; ?>
        <?php include "include/$hero/search-popup.php"; ?>
        <?php 
            $putanja = [
                ['link'=>'index.php', 'naslov'=>'Naslovna'],
                ['link'=>'hvala.php', 'naslov'=>'Hvala'],
            ];
            putanja_prikaz($putanja); 
        ?>
        <!--MG Page Start Here-->
        <div class="mg-page-outer">
            <div class="container-lg gx-lg-5 gx-md-4">
                <div class="mg-thank-you-page-outer">
                    <div class="mg-thank-you-pannel-main text-center">
                        <div class="thank-you-icon">
                            <img src="assets/images/thank-you-tick.svg" alt=""/>
                        </div>
                        <div class="mg-thank-for-order-heading">
                            <h2><span>Hvala </span>što ste naručili kod nas</h2>
                            <p class="mg-thank-you-des">Primili smo vašu porudžbinu</p>
                            <p class="mg-thank-you-order-number">Broj #4567</p>
                        </div>
                    </div>
                    <div class="mg-order-confirmation-bar text-center">
                        <p>Poslali smo vam potvrdni mail vaše porudžbine. Molimo vas da proverite i spam folder.</p>
                    </div>
                    <div class="mg-thank-you-order-detail-outer">
                        <div class="mg-delivery-details-outer">
                            <div class="mg-order-detail-list-grid mg-order-heading-grid">
                                <!-- <div class="mg-order-detail-grid-heading">Detalji</div> -->
                                <div class="row gx-2">
                                    <div class="col-6">
                                        <div class="mg-order-details">
                                            <div>Poslati na:</div>
                                            <div><?=$kupac['ime']?> <?=$kupac['prezime']?></div>
                                            <div>Telefon: <span><?=$kupac['tel']?></span></div>
                                            <div class="mt-3">
                                                <div>Addresa:</div>
                                                <div><?=$kupac['grad']?>, <?=$kupac['adresa']?></div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-6 text-end">
                                        <div class="mg-right-order-tittles mg-order-details">
                                        <div>Način isporuke</div>
                                        <div><?=$kupac['nacin_isp']?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mg-thank-you-order-product-details-outer">
                            <div class="mg-order-detail-grid-heading">Detalji isporuke</div>
                            <?php
                            foreach($korpa_proizvodi as $row){
                            ?>
                                <div class="mg-order-detail-list-grid">
                                    <div class="row gx-2">
                                        <div class="col-8">
                                            <div class="mg-order-image position-relative">
                                                <img class="img-fluid" src="assets/images/<?=$row['slika']?>" alt="">
                                                <div class="mg-order-product-counter"><?=$row['kolicina']?></div>
                                            </div>
                                            <div class="mg-left-order-tittles mg-order-details">
                                                <div class="mg-order-tittle-heading"><a href="product.html"><?=$row['naslov_proizvoda']?></a></div>
                                                <!-- <div class="mg-cart-small-text">Cena: <span><?=cenaFormat($row['cena'])?></span></div>
                                                <div class="mg-cart-product-price">Ukupno: <?=cenaFormat($row['cena']*$row['kolicina'])?></span></div> -->
                                                <div>
                                                    <span class="korpa-prop"><?=$row['velicina']?></span>
                                                    <span class="korpa-prop" style="background-color: <?=$row['boja']?>; color: <?=$row['boja']?>;">-</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-4 text-end">
                                            <div class="mg-right-order-tittles mg-order-details">
                                                <div>Price: <span>$199</span></div>
                                                <div>Discount: <span>13%</span></div>
                                                <div>Shipping Charge <span>$10</span></div>
                                                <div class="order-detil-grand-total">Grand Total: $110</div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            <?php } ?>
                        </div>                        
                    </div>
                    <div class="mg-btn-fullwidth-half mt-5 text-center">
                        <a class="mg-btn mg-light-bg-btn mg-form-btn" href="#">Nastavi kupovinu</a>
                    </div>
                </div>
            </div>
        </div>
        <!--MG Page End Here-->
        <?php include "include/$footer/footer.php"; ?>
        <!--MG Footer End Here-->
		<a href="#" class="back-to-top-style3" title="Povratak na vrh"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
        <script src="assets/js/mg-menu.js"></script>
        <script src="assets/js/mg-common.js"></script>
        <script src="assets/js/my-js.js"></script>
    </body>
</html>
