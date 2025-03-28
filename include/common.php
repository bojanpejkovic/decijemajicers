<?php
    $proizvod_jedan_link = 'product.php';
    $blog_jedan_link = "single-blog.php";
    $blog_link = "blog.php";
    $themeBr = 2;
    $bodyClass = "body-theme-$themeBr";
    $hero = "hero$themeBr";
    $footer = "footer$themeBr";
    $headerClass = "mg-transparent-header";

    function besplatnaIsporuka(){
        return 'Besplatna isporuka za porudžbine iznad 3.000,00 RSD';
    }
    function detaljiIsporuke(){
        return 'Ovde idu detalji isporuke';
    }
    function cenaFormat($cena){
        return number_format($cena, 2, ",", ".").' RSD';
    }

    function cenaSlikaLinkProizvod($cena1, $cena2){
        $pr = '<div class="mg-regular-price">';
        if(isset($cena2) && $cena2 > 0){
            $pr .= "<span class='mg-discount-price'>".cenaFormat($cena2)."</span>";
        }  
        if($cena1 > 0)  $pr .= cenaFormat($cena1);
        $pr .= '</div>';
        return $pr;
    }

    function korpaSlikaLinkProizvod($id){
        ?>
        <div class="mg-product-add-to-cart-btn-outer">
            <a class="mg-product-add-to-cart-btn" href="korpa.php?id=<?=$id?>">Dodaj u korpu</a>
        </div>
        <?php
    }

    function specOznakaSlikaLinkProizvod($oznaka){
        // ako je oznaka broj onda je popust u %
        if($oznaka == 'novo'){
            echo '<div class="mg-p-badges"><span class="badge bg-primary">Novo</span></div>';
        }elseif($oznaka == 'rasprodato'){
            echo '<div class="mg-p-badges"><span class="badge bg-secondary">Rasprodato</span></div>';
        }elseif($oznaka !== ''){
            echo '<div class="mg-p-badges"><span class="badge bg-danger">'.$oznaka.'% popusta</span></div>';
        }
    }
?>