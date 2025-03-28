<?php
require_once 'include/common.php';

function slikaLinkProizvod($id, $naziv, $slika1, $slika2, $oznaka, $cena1, $cena2){ 
    global $proizvod_jedan_link;
    ?>
    <div class="col-6 col-md-3 col-sm-6">
        <div class="mg-product-main mg-img-hdark">
            <div class="position-relative">
                <div class="mg-product-image">
                    <a href="<?=$proizvod_jedan_link.'?id='.$id?>"><img class="img-fluid" src="assets/images/<?=$slika1?>" alt=""/></a>
                    <a href="<?=$proizvod_jedan_link.'?id='.$id?>"><img class="img-fluid mg-hover-img" src="assets/images/<?=$slika2?>" alt=""/></a>
                </div>
                <?php specOznakaSlikaLinkProizvod($oznaka); ?>
                <div class="mg-product-icons-outer">
                    <div class="mg-product-icon">
                        <a href="#"><img class="mg-product-icon-img" src="assets/images/heart-icon.svg" alt="" /></a>
                    </div>
                    <div class="mg-product-icon">
                        <a data-id="<?=$id?>" class="quick-view-product-modal" data-bs-toggle="modal" data-bs-target="#mg-quick-view-modal" href="javascript:void(0)">
                            <img class="mg-product-icon-img" src="assets/images/view-icon.svg" alt="" />
                        </a>
                    </div>
                </div>
                <?php if($oznaka !== 'rasprodato' && $cena1 !== '') korpaSlikaLinkProizvod($id); ?>
            </div>
            <div class="mg-product-tittles text-center">
                <a class="mg-product-name" href="product.html"><?=$naziv?></a>
                <?=cenaSlikaLinkProizvod($cena1, $cena2)?>
            </div>
        </div>
    </div>
<?php
}

function slikaLinkProizvodCarousel($id, $naziv, $slika1, $slika2, $cena1, $cena2){
    // carousel proizvodi nemaju oznaku gore desno, jer je gore desno srce i oko
    global $proizvod_jedan_link;
    ?>
    <div>
        <div class="mg-product-main mg-img-hdark">
            <div class="position-relative">
                <div class="mg-product-image">
                <a href="<?=$proizvod_jedan_link.'?id='.$id?>"><img class="img-fluid" src="assets/images/<?=$slika1?>" alt=""/></a>
                    <a href="<?=$proizvod_jedan_link.'?id='.$id?>"><img class="img-fluid mg-hover-img" src="assets/images/<?=$slika2?>" alt=""/></a>
                </div>
                <div class="mg-product-icons-outer">
                    <div class="mg-product-icon">
                        <a href="#"><img class="mg-product-icon-img" src="assets/images/heart-icon.svg" alt="" /></a>
                    </div>
                    <div class="mg-product-icon">
                        <a data-id="<?=$id?>" class="quick-view-product-modal" data-bs-toggle="modal" data-bs-target="#mg-quick-view-modal" href="javascript:void(0)">
                            <img class="mg-product-icon-img" src="assets/images/view-icon.svg" alt="" />
                        </a>
                    </div>
                </div>
                <?php if($cena1 !== '') korpaSlikaLinkProizvod($id); ?>
            </div>
            <div class="mg-product-tittles text-center">
                <a class="mg-product-name" href="product.html"><?=$naziv?></a>
                <?=cenaSlikaLinkProizvod($cena1, $cena2)?>
            </div>
        </div>
    </div>
<?php
}
?>