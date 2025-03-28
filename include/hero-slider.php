<?php 
    function heroSlider($br){
        $class = $br === 1 ? '' : 'mg-dark-bg-banner';
        if($br === 1)
            $content = [
                ["slika"=>'home1-b1.jpg', "natpis1"=>'Get Trendy Items To', "natpis2"=>'Upgrade Style', 'link1'=>'grupa.php?id=1', 'link2'=>'grupa.php?id=2', 'dugme1_text'=>'Za devojčice', 'dugme2_text'=>'Za dečake'], 
                ["slika"=>'home1-b2.jpg', "natpis1"=>'Get Trendy Items To', "natpis2"=>'Upgrade Style', 'link1'=>'grupa.php?id=1', 'link2'=>'grupa.php?id=2', 'dugme1_text'=>'Za devojčice', 'dugme2_text'=>'Za dečake'],
                ["slika"=>'home1-b3.jpg', "natpis1"=>'Get Trendy Items To', "natpis2"=>'Upgrade Style', 'link1'=>'grupa.php?id=1', 'link2'=>'grupa.php?id=2', 'dugme1_text'=>'Za devojčice', 'dugme2_text'=>'Za dečake']
            ];
        if($br === 2)
            $content =  [
                ["slika"=>'home2-b1.jpg', "natpis1"=>'Get Trendy Items To', "natpis2"=>'Upgrade Style', 'link1'=>'grupa.php?id=1', 'link2'=>'grupa.php?id=2', 'dugme1_text'=>'Za devojčice', 'dugme2_text'=>'Za dečake'], 
                ["slika"=>'home2-b2.jpg', "natpis1"=>'Get Trendy Items To', "natpis2"=>'Upgrade Style', 'link1'=>'grupa.php?id=1', 'link2'=>'grupa.php?id=2', 'dugme1_text'=>'Za devojčice', 'dugme2_text'=>'Za dečake'],
                ["slika"=>'home2-b3.jpg', "natpis1"=>'Get Trendy Items To', "natpis2"=>'Upgrade Style', 'link1'=>'grupa.php?id=1', 'link2'=>'grupa.php?id=2', 'dugme1_text'=>'Za devojčice', 'dugme2_text'=>'Za dečake'],
                ["slika"=>'home1-b1.jpg', "natpis1"=>'Get Trendy Items To', "natpis2"=>'Upgrade Style', 'link1'=>'grupa.php?id=1', 'link2'=>'grupa.php?id=2', 'dugme1_text'=>'Za devojčice', 'dugme2_text'=>'Za dečake']
            ];;
    ?>
        <section class="position-relative<?=$class?>">
            <div class="home-slider">
                <!--Slide 1 Start Here-->
                <?php 
                    foreach ($content as $red) {
                        ?>
                            <div>
                                <div class="mg-home-banner-outer d-flex" style="background-image: url('assets/images/banners/<?=$red['slika']?>');">
                                    <div class="w-100 align-self-center">
                                        <div class="mg-home-banner">
                                            <div class="mg-home-banner-tittles text-center">
                                                <div class="mg-home-banner-main-heading">
                                                    <div class="mg-home-banner-main-heading-inner position-relative">
                                                        <div class="mg-home-banner-main-heading-inner-tittles">
                                                            <h2><?=$red['natpis1']?></h2>
                                                            <h2><?=$red['natpis2']?></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mg-banner-btns">
                                                    <a class="mg-btn" href="<?=$red['link1']?>"><?=$red['dugme1_text']?></a>
                                                    <a class="mg-btn mg-btn-white" href="<?=$red['link2']?>"><?=$red['dugme2_text']?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                ?>
                <!--Slide 1 End Here-->                
            </div>
            <!--Banner Social Bar Start Here-->
            <?php include 'social-links.php'; ?>
            <!--Banner Social Bar End Here-->
        </section>
    <?php
    }
?>