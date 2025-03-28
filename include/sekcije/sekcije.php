<?php
    
    require_once 'include/sekcije/slika-link-grupe.php';
    require_once 'include/sekcije/slika-link-proizvod.php';
    
    function sekcija2SlikeNatpisDole(){
        $content = [
            ['link'=>'grupa.php?id=muske-majice', 'slika'=>'info-banner3.jpg', 'text1'=>'Muske majice', 'text2'=>'> 10%', 'text3'=>'Popusta', 'zenska_boja'=>false],
            ['link'=>'grupa.php?id=muske-majice', 'slika'=>'info-banner4.jpg', 'text1'=>'Ženske majice', 'text2'=>'> 10%', 'text3'=>'Popusta', 'zenska_boja'=>true],
        ];
        ?>
        <div>
            <div class="mg-information-banner-outer mg-info-banner-style2 mg-section-spacing">
                <div class="container-fluid gx-lg-5 gx-md-4">
                    <div class="row gx-lg-5">
                        <?php
                            foreach ($content as $red) { 
                                slikaLinkGrupeNatpisDole($red['link'], $red['slika'], $red['text1'], $red['text2'], $red['text3'], $red['zenska_boja']); 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
    function sekcija2SlikeNatpisDesno(){
        $content = [
            ['link'=>'grupa.php?id=muske-majice', 'slika'=>'info-banner1.jpg', 'text1'=>'Ženske majice', 'text2'=>'> 10%', 'text3'=>'Popusta', 'zenska_boja'=>true],
            ['link'=>'grupa.php?id=muske-majice', 'slika'=>'info-banner2.jpg', 'text1'=>'Muske majice', 'text2'=>'> 10%', 'text3'=>'Popusta', 'zenska_boja'=>false],
        ];
        ?>
        <div>
            <div class="mg-information-banner-outer mg-section-spacing">
                <div class="container-fluid gx-lg-5 gx-md-4">
                    <div class="row gx-lg-5">
                    <?php
                        foreach ($content as $red) { 
                            slikaLinkGrupeNatpisDesno($red['link'], $red['slika'], $red['text1'], $red['text2'], $red['text3'], $red['zenska_boja']); 
                        }
                    ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

    function sekcija3Slike($naslov){
        $content = [
            ['link'=>'grupa.php?id=muske-majice', 'slika'=>'collection1.jpg', 'text'=>'OVS kids'],
            ['link'=>'grupa.php?id=muske-majice', 'slika'=>'collection2.jpg', 'text'=>'Nike'],
            ['link'=>'grupa.php?id=muske-majice', 'slika'=>'collection2.jpg', 'text'=>'Adidas'],
        ];
        ?>
        <section>
            <div class="mg-collection-list-outer mg-section-spacing mg-index-section-spacing">
                <div class="container-fluid gx-lg-5 gx-md-4">
                    <div class="mg-section-tittles text-center">
                        <h2 class="mg-heading"><?=$naslov?></h2>
                    </div>
                    <div class="row gx-lg-5 align-items-end">
                        <?php
                            foreach ($content as $red) { 
                                slikaKaoLinkGrupe($red['link'], $red['slika'], $red['text']); 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
    function sekcija4Slike($naslov){
        $content = [
            ['id'=>1, 'slika1'=>'fproducts-1.jpg', 'slika2'=>'fproducts-1.2.jpg', 'text'=>'Crna majca', 'oznaka'=>'20', 'cena1'=>1000, 'cena2'=>1200],
            ['id'=>2, 'slika1'=>'fproducts-2.jpg', 'slika2'=>'fproducts-2.2.jpg', 'text'=>'Crvena Zvezda', 'oznaka'=>'novo', 'cena1'=>1500, 'cena2'=>''],
            ['id'=>3, 'slika1'=>'fproducts-3.jpg', 'slika2'=>'fproducts-3.2.jpg', 'text'=>'Adidas logo', 'oznaka'=>'rasprodato', 'cena1'=>'', 'cena2'=>''],
            ['id'=>3, 'slika1'=>'fproducts-1.jpg', 'slika2'=>'fproducts-1.2.jpg', 'text'=>'Porizvod bez cene', 'oznaka'=>'', 'cena1'=>'', 'cena2'=>''],
        ];
        ?>
        <section>
            <div class="mg-product-list-section-outer mg-section-spacing mg-products-list-v2">
                <div class="container-fluid gx-lg-5 gx-md-4">
                    <div class="mg-section-tittles text-center">
                        <h2 class="mg-heading"><?=$naslov?></h2>
                    </div>
                    <div class="row mg-product-row">
                        <?php
                            foreach ($content as $red) { 
                                slikaLinkProizvod($red['id'], $red['text'], $red['slika1'], $red['slika2'], $red['oznaka'], $red['cena1'], $red['cena2']); 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
    function sekcijaKarusel($naslov){
        $content = [
            ['id'=>1, 'slika1'=>'fproducts-1.jpg', 'slika2'=>'fproducts-1.2.jpg', 'text'=>'Crna majca', 'oznaka'=>'20', 'cena1'=>1000, 'cena2'=>1200],
            ['id'=>2, 'slika1'=>'fproducts-2.jpg', 'slika2'=>'fproducts-2.2.jpg', 'text'=>'Crvena Zvezda', 'oznaka'=>'novo', 'cena1'=>1500, 'cena2'=>''],
            ['id'=>3, 'slika1'=>'fproducts-3.jpg', 'slika2'=>'fproducts-3.2.jpg', 'text'=>'Adidas logo', 'oznaka'=>'rasprodato', 'cena1'=>'', 'cena2'=>''],
            ['id'=>3, 'slika1'=>'fproducts-1.jpg', 'slika2'=>'fproducts-1.2.jpg', 'text'=>'Porizvod bez cene', 'oznaka'=>'', 'cena1'=>'', 'cena2'=>''],
            ['id'=>3, 'slika1'=>'fproducts-1.jpg', 'slika2'=>'fproducts-1.2.jpg', 'text'=>'Porizvod bez cene', 'oznaka'=>'', 'cena1'=>'', 'cena2'=>''],
            ['id'=>2, 'slika1'=>'fproducts-2.jpg', 'slika2'=>'fproducts-2.2.jpg', 'text'=>'Crvena Zvezda', 'oznaka'=>'novo', 'cena1'=>1500, 'cena2'=>''],
            ['id'=>1, 'slika1'=>'fproducts-1.jpg', 'slika2'=>'fproducts-1.2.jpg', 'text'=>'Crna majca', 'oznaka'=>'20', 'cena1'=>1000, 'cena2'=>1200],
        ];
        ?>
        <section>
            <div class="mg-product-carousal-section-outer mg-section-spacing">
                <div class="container-fluid gx-lg-5 gx-md-4">
                    <div class="mg-section-tittles text-center">
                        <h2 class="mg-heading"><?=$naslov?></h2>
                    </div>
                    <div class="mg-product-carousal">
                        <?php
                            foreach ($content as $red) { 
                                slikaLinkProizvodCarousel($red['id'], $red['text'], $red['slika1'], $red['slika2'], $red['cena1'], $red['cena2']); 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
?>