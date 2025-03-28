<?php
    require_once 'include/common.php';
    require_once 'include/putanja_prikaz.php';
    require_once 'include/sortiraj.php';
    require_once 'include/sekcije/slika-link-proizvod.php';

    $grupa = ['id'=>1, 'naziv'=>'majice-za-decake', 'naslov'=>'Majice za dečake'];
    $proizvodi = [
        ['id'=>1, 'slika1'=>'fproducts-1.jpg', 'slika2'=>'fproducts-1.2.jpg', 'text'=>'Crna majca', 'oznaka'=>'20', 'cena1'=>1000, 'cena2'=>1200],
        ['id'=>2, 'slika1'=>'fproducts-2.jpg', 'slika2'=>'fproducts-2.2.jpg', 'text'=>'Crvena Zvezda', 'oznaka'=>'novo', 'cena1'=>1500, 'cena2'=>''],
        ['id'=>3, 'slika1'=>'fproducts-3.jpg', 'slika2'=>'fproducts-3.2.jpg', 'text'=>'Adidas logo', 'oznaka'=>'rasprodato', 'cena1'=>'', 'cena2'=>''],
        ['id'=>4, 'slika1'=>'fproducts-1.jpg', 'slika2'=>'fproducts-1.2.jpg', 'text'=>'Porizvod bez cene', 'oznaka'=>'', 'cena1'=>'', 'cena2'=>''],
        ['id'=>5, 'slika1'=>'fproducts-1.jpg', 'slika2'=>'fproducts-1.2.jpg', 'text'=>'Crna majca', 'oznaka'=>'20', 'cena1'=>1000, 'cena2'=>1200],
        ['id'=>6, 'slika1'=>'fproducts-2.jpg', 'slika2'=>'fproducts-2.2.jpg', 'text'=>'Crvena Zvezda', 'oznaka'=>'novo', 'cena1'=>1500, 'cena2'=>''],
        ['id'=>7, 'slika1'=>'fproducts-3.jpg', 'slika2'=>'fproducts-3.2.jpg', 'text'=>'Adidas logo', 'oznaka'=>'rasprodato', 'cena1'=>'', 'cena2'=>''],
        ['id'=>8, 'slika1'=>'fproducts-1.jpg', 'slika2'=>'fproducts-1.2.jpg', 'text'=>'Porizvod bez cene', 'oznaka'=>'', 'cena1'=>'', 'cena2'=>''],
        ['id'=>9, 'slika1'=>'fproducts-1.jpg', 'slika2'=>'fproducts-1.2.jpg', 'text'=>'Crna majca', 'oznaka'=>'20', 'cena1'=>1000, 'cena2'=>1200],
        ['id'=>10, 'slika1'=>'fproducts-2.jpg', 'slika2'=>'fproducts-2.2.jpg', 'text'=>'Crvena Zvezda', 'oznaka'=>'novo', 'cena1'=>1500, 'cena2'=>''],
        ['id'=>11, 'slika1'=>'fproducts-3.jpg', 'slika2'=>'fproducts-3.2.jpg', 'text'=>'Adidas logo', 'oznaka'=>'rasprodato', 'cena1'=>'', 'cena2'=>''],
        ['id'=>12, 'slika1'=>'fproducts-1.jpg', 'slika2'=>'fproducts-1.2.jpg', 'text'=>'Porizvod bez cene', 'oznaka'=>'', 'cena1'=>'', 'cena2'=>''],
    ];

    $headerClass = "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$grupa['naslov']?></title>
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
    <body class="<?=$bodyClass?>">
        <?php include "include/$hero/header.php"; ?>
        <?php include 'include/sign-in.php'; ?>
        <?php include "include/$hero/search-popup.php"; ?>
        <?php 
            $putanja = [
                ['link'=>'index.php', 'naslov'=>'Naslovna'],
                ['link'=>'grupa.php?id=nesto', 'naslov'=>$grupa['naslov']],
            ];
            putanja_prikaz($putanja); 
        ?>
        <!--MG Page Start Here-->
        <div class="mg-page-outer collection-page-outer">
            <div class="container-lg gx-lg-0">
                <div class="row mb-5">
                    <?php include "include/filteri.php"; ?>
                    <div class="col-md-9">
                        <div class="mg-collection-page-main-grid-outer">
                            <div class="mg-collection-grid-pannel mt-5">
                                <div class="mg-section-tittles text-center">
                                    <h2 class="mg-heading mg-heading-small"><?=$grupa['naslov']?></h2>
                                </div>
                                <div class="mg-sorting-outer mb-3">
                                    <?=sortirajSelect('cena-uzlazno')?>
                                    <span class="d-md-none mg-filter-nav-btn"><i class="fa fa-filter" aria-hidden="true"></i> Filters</span>
                                </div>
                                <!--Products Grid Start Here-->
                                <div>
                                    <div class="mg-collection-product-list-outer">
                                        <div class="row">
                                            <?php foreach ($proizvodi as $red) { ?>
                                            <div class="col-md-4 col-sm-6">
                                                <?php slikaLinkProizvodCarousel($red['id'], $red['text'], $red['slika1'], $red['slika2'], $red['cena1'], $red['cena2']); ?>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <!--Products Grid End Here-->
                                <!--MG Pagination Start Here-->
                                <!-- <div class="mg-pagination-outer mt-3">
                                    <nav>
                                        <ul class="pagination justify-content-center align-items-center">
                                            <li class="page-item pagination-nextprev">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <img src="assets/images/mg-arrow-left.png" alt=""/>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item pagination-nextprev">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <img src="assets/images/mg-arrow-right.png" alt=""/>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div> -->
                                <!--MG Pagination End Here-->
                            </div>
                        </div>
                    </div>
                </div>
                <?php include "include/baner-grupa-slika-horizontalna-link.php"; ?>
            </div>
        </div>
        <!--MG Quick View Modal Start Here-->
        <?php include 'include/modalProduct/base.php'; ?>
        <!--MG Quick View Modal End Here-->
        <!--MG Page End Here-->
        <!--MG Footer Start Here-->
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