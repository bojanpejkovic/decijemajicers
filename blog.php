<?php
    require_once 'include/common.php';
    require_once 'include/putanja_prikaz.php';
    require_once 'include/blog-thumbnail.php';

    $blogovi = [
        ['id'=>'1', 'slika'=>'blog-thumb-2.jpg', 'naslov'=>'5 odličnih ideja za vaše dete', 'datum'=>'3.Mart 2024'],
        ['id'=>'2', 'slika'=>'blog-thumb-3.jpg', 'naslov'=>'Svetao svet dečijih majica: Trendovi i inspiracije za mališane', 'datum'=>'11.Novembar 2023'],
        ['id'=>'3', 'slika'=>'blog-thumb-1.jpg', 'naslov'=>'Udobnost i stil: Kako odabrati najbolje majice za decu', 'datum'=>'12.April 2024'],
        ['id'=>'4', 'slika'=>'blog4.jpg', 'naslov'=>'Eko-svesno odeljenje: Održive opcije dečijih majica', 'datum'=>'10.Januar 2024'],
    ];

    $headerClass = "";

?>    
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Decije majice - Blog</title>
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
        <!--About Page Start Here-->
        <?php 
            $putanja = [
                ['link'=>'index.php', 'naslov'=>'Naslovna'],
                ['link'=>'blog.php', 'naslov'=>'Blog'],
            ];
            putanja_prikaz($putanja); 
        ?>
        <!--MG Page Start Here-->
        <div class="mg-page-outer">
            <div class="container-fluid gx-lg-5 gx-md-4">
                <div class="mg-section-tittles text-center">
                    <h2 class="mg-heading">Naš Blog</h2>
                </div>
            </div>
            <div class="container-lg gx-lg-5 gx-md-4">
                <div class="mg-blog-page-outer mg-blog-small-tittle">
                    <div class="row">
                        <?php foreach($blogovi as $row) { 
                            blogThumbnail($row);
                         } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include "include/$footer/footer.php"; ?>
        <script src="assets/js/mg-menu.js"></script>
        <script src="assets/js/mg-common.js"></script>
        <script src="assets/js/my-js.js"></script>
    </body>
</html>
