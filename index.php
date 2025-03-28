<?php
    require_once 'include/common.php';
    require_once 'include/hero-slider.php';
    require_once 'include/sekcije/sekcije.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Decije majice</title>
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
        <!--Slider Start Here-->
        <?php heroSlider($themeBr); ?>
        <!--Slider End Here-->
        <!--MG Collection List Section Start Here-->
        <?php sekcija3Slike("<span>NAJPOPULARNIJI</span> BRENDOVI"); ?>
        <!--MG Collection List Section End Here-->
        <!--MG Product List Section Start Here-->
        <?php sekcija4Slike("<span>NAJPOPULARNIJI</span> PROIZVODI"); ?>
        <!--MG Product List Section End Here-->
        <!--MG Information Start Here-->
        <?php sekcija2SlikeNatpisDesno(); ?>
        <!--MG Information End Here-->
        <!--MG Product Carousal Section Start Here-->
        <?php 
            sekcijaKarusel("<span>NAJBOLJE </span> ZA DEVOJČICE");
            sekcijaKarusel("<span>NAJBOLJE </span> ZA DEČAKE");
        ?>
        <!--MG Product Carousal Section End Here-->
        <!--MG Information 2 Start Here-->
        <?php sekcija2SlikeNatpisDole(); ?>
        <!--MG Information 2 End Here-->
        <!--MG Product Carousal Section Start Here-->
        <?php sekcijaKarusel("<span>U</span> TRENDU"); ?>
        <!--MG Product Carousal Section End Here-->
        <!--MG Information 3 Start Here-->
        <?php slikaKaoLinkGrupeNatpisNaSredini("/grupa.php?id=1","Odličan izbor za ustedu",  "", "OUTLET", "Do isteka zaliha", "PREGLEDAJ"); ?>
        <!--MG Information 3 End Here-->
        <!--MG Blog Section Start Here-->
        <?php include 'include/sekcije/sekcija-blog.php'; ?>
        <!--MG Blog Section End Here-->
        <!--MG Parter Slider Start Here-->
        <?php include 'include/sekcije/brendovi-slider.php'; ?>
        <!--MG Partner Slider Start Here-->
        <!--MG Quick View Modal Start Here-->
        <?php include 'include/modalProduct/base.php'; ?>
        <!--MG Quick View Modal End Here-->
        <!--MG Footer Start Here-->
        <?php include "include/$footer/footer.php"; ?>
        <!--MG Footer End Here-->
		<a href="#" class="back-to-top-style3" title="Povratak na vrh"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
        <script src="assets/js/mg-menu.js"></script>
        <script src="assets/js/pages/mg-home-1.js"></script>
        <script src="assets/js/mg-common.js"></script>
        <script src="assets/js/my-js.js"></script>
    </body>
</html>
