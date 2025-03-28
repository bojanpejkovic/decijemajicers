<?php
    require_once 'include/common.php';
    require_once 'include/putanja_prikaz.php';
    require_once 'include/blog-thumbnail.php';
    $link = 'grupa.php';
    $kategorije = [
        ['link'=>$link.'?id=zenske-majice', 'text'=>'Za devojčice'],
        ['link'=>$link.'?id=muske-majice', 'text'=>'Za dečake'],
        ['link'=>$link.'?id=bebi-majice', 'text'=>'Za bebe'],
        ['link'=>$link.'?id=najkvalitetnije', 'text'=>'Najkvalitetnije'],
        ['link'=>$link.'?id=outlet', 'text'=>'Outlet'],
        ['link'=>$link.'?id=rasprodaja', 'text'=>'Rasprodaja'],
    ];

    $blogovi = [
        ['id'=>'1', 'slika'=>'blog-thumb-2.jpg', 'naslov'=>'5 odličnih ideja za vaše dete', 'datum'=>'3.Mart 2024'],
        ['id'=>'2', 'slika'=>'blog-thumb-3.jpg', 'naslov'=>'Svetao svet dečijih majica: Trendovi i inspiracije za mališane', 'datum'=>'11.Novembar 2023'],
        ['id'=>'3', 'slika'=>'blog-thumb-1.jpg', 'naslov'=>'Udobnost i stil: Kako odabrati najbolje majice za decu', 'datum'=>'12.April 2024']
    ];

    $text = '<p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
    <h3>Here, we bring you a look-see:</h3>
    <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
    <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
    <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
    <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
    <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>';

    $blog = [
        'id'=>'1', 'slika'=>'blog-thumb-3.jpg', 'naslov'=>'5 odličnih ideja za vaše dete', 'datum'=>'3.Mart 2024', 'text'=> $text, 'tagovi'=>['Dečja majica', 'Majica za dečake', 'Crna majica']
    ];

    $headerClass = "";

?>    
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$blog['naslov']?></title>
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
                    <h2 class="mg-heading"><?=$blog['naslov']?></h2>
                </div>
            </div>
            <div class="container-lg gx-lg-5 gx-md-4">
                <div class="mg-single-blog-outer mt-4 mt-md-0">
                    <div class="row">
                        <div class="col-md-3 order-2 order-md-0">
                            <div class="mg-single-blog-sidebar-outer">
                                <div class="mg-single-blog-sidebar-heading">
                                    <h3>Kategorije</h3>
                                </div>
                                <div class="mg-single-blog-categories-outer">
                                    <ul>
                                    <?php
                                        foreach ($kategorije as $red) { ?>
                                            <li><a href="<?=$red['link']?>"><?=$red['text']?></a></li>
                                        <?php }
                                    ?>
                                    </ul>
                                </div>
                                <div class="mg-border-break"></div>
                                <div class="mg-single-blog-sidebar-heading">
                                    <h3>Tagovi</h3>
                                </div>
                                <div class="mg-single-blog-tags-outer">
                                    <ul>
                                        <?php foreach($blog['tagovi'] as $tag) { ?>
                                            <li><a href="pretraga.php?tag=<?=$tag?>"><?=$tag?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="mg-single-blog-content-outer">
                                <div class="mg-single-blog-image">
                                    <img class="img-fluid" src="assets/images/blog/<?=$blog['slika']?>" alt=""/>
                                </div>
                                <div class="mg-single-blog-content-pannel">
                                    <div><?=$text?></div>
                                    <div class="mg-single-blog-metas">
                                        <div class="mg-blog-metas">
                                        <div class="row justify-content-start mt-4">
                                            <div class="col-auto mg-meta-col">
                                                <div class="mg-blog-meta-text"><?=$blog['datum']?></div>
                                            </div>
                                            <!-- <div class="col-auto mg-meta-col">
                                                <div class="mg-blog-meta-text"><a href="#">MG Themes</a></div>
                                            </div>
                                            <div class="col-auto mg-meta-col">
                                                <div class="mg-blog-meta-text">Comments (1)</div>
                                            </div> -->
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- <div class="mg-single-comment-box-outer">
                                    <form class="mg-form">
                                        <div class="mb-3">
                                            <textarea class="form-control  mg-input" placeholder="Comments"></textarea>
                                        </div>
                                        <div class="row gx-3">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control mg-input" placeholder="First Name">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control mg-input" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <button type="submit" class="btn mg-btn mg-light-bg-btn mg-form-btn">Post Comment</button>
                                        </div>
                                    </form>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!--MG Related Blog Start Here-->
                    <div class="mg-related-blog-outer mg-blog-small-tittle">
                        <div class="mg-section-tittles text-center">
                            <h2 class="mg-heading"><span>PROČITAJTE </span>JOŠ</h2>
                        </div>
                        <div class="row">
                            <?php foreach($blogovi as $row) { 
                                blogThumbnail($row);
                            } ?>
                        </div>
                    </div>
                    <!--MG Related Blog End Here-->
                    
                </div>
            </div>
        </div>
        <?php include "include/$footer/footer.php"; ?>
        <script src="assets/js/mg-menu.js"></script>
        <script src="assets/js/mg-common.js"></script>
        <script src="assets/js/my-js.js"></script>
    </body>
</html>
