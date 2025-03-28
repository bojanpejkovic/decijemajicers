<?php
    require_once 'include/common.php';
    require_once 'include/putanja_prikaz.php';
    require_once 'include/korpa-summary.php';
    require_once 'podaci/korpa.php';
    
    $promo_kodovi_postoje = false;
    $headerClass = "";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Naruči</title>
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
                ['link'=>'naruci.php', 'naslov'=>'Naruci'],
            ];
            putanja_prikaz($putanja); 
        ?>
        <!--MG Page Start Here-->
        <div class="page-naruci mg-page-outer">
            <div class="container-lg gx-lg-5 gx-md-4">
                <div class="mg-checkout-page-outer">
                    <div class="row gx-5">
                        <div class="col-md-7">
                            <div class="mg-checkout-pannel-outer">
                                <div class="mg-form mg-checkout-form">
                                    <div class="mg-checkout-form-heading-panel mb-3">
                                        <div class="row gx-1">
                                            <div class="col-6">
                                                <div class="mg-checkout-form-heading">Kontakt Informacije:</div>
                                            </div>
                                            <!-- <div class="col-6 text-end">
                                                <div class="mg-checkout-login-text">Already have an account? <span><a href="#">Log in</a></span></div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control mg-input" placeholder="Email Adresa">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="keep-update">
                                            <label class="form-check-label" for="keep-update">*šaljite mi specijalne ponude i popuste na mail</label>
                                        </div>
                                    </div>
                                    <div class="mt-5 mb-3">
                                        <div class="mg-checkout-form-heading">Adresa za isporuku:</div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="row gx-3">
                                            <div class="col-6">
                                                <input type="text" class="form-control mg-input" placeholder="Ime">
                                            </div>
                                            <div class="col-6">
                                                <input type="text" class="form-control mg-input" placeholder="Prezime">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <select class="form-select mg-input">
                                            <option>Srbija</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control mg-input" placeholder="Grad">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control mg-input" placeholder="Ulica i broj">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="keep-information">
                                            <label class="form-check-label" for="keep-information">*Zapamti moje podatke za sledeći put</label>
                                        </div>
                                    </div>
                                    <div class="text-center mg-checkout-btn mt-4">
                                        <a href="hvala.php">
                                        <button class="btn mg-btn mg-light-bg-btn mg-form-btn">N A R U Č I</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="mg-cart-details-pannel-outer">
                                <?php korpaSummary($ukupna_cena, $ukupna_cena_sa_popustom, false); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--MG Page End Here-->
        <?php include "include/$footer/footer.php"; ?>
        <!--MG Footer End Here-->
		<a href="#" class="back-to-top-style3" title="Povratak na vrh"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
        <script src="assets/js/mg-menu.js"></script>
        <script src="assets/js/pages/mg-collection.js"></script>
        <!-- <script src="assets/js/pages/mg-home-1.js"></script> -->
        <script src="assets/js/mg-common.js"></script>
        <script src="assets/js/my-js.js"></script>
    </body>
</html>
