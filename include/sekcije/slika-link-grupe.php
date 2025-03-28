<?php
    function slikaKaoLinkGrupeNatpisNaSredini($link, $n1, $n2, $n3, $n4, $n5){
        ?>
        <div>
            <div class="mg-information-banner-fullwidth-outer mg-section-spacing">
                <div class="container-fluid gx-lg-5 gx-md-4">
                    <div class="position-relative">
                        <div class="mg-info-banner-fullwidth-image">
                            <img class="img-fluid" src="assets/images/info-banner5.jpg" alt=""/>
                        </div>
                        <div class="mg-info-bannner-fullwidth-tittles-outer">
                            <div class="mg-info-bannner-fullwidth-tittles-inner">
                                <div class="mg-info-banner-fullwidth-subheading"><?=$n1?></div>
                                <div class="mg-info-banner-fullwidth-heading"><?=$n2?></div>
                                <div class="mg-info-banner-fullwidth-price-off-text"><?=$n3?></div>
                                <div class="mg-info-banner-fullwidth-text"><?=$n4?></div>
                                <div class="mg-info-banner-fullwidth-btn"><a class="mg-btn" href="<?=$link?>"><?=$n5?></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    function slikaKaoLinkGrupe($link, $slika, $naslov){
        ?>
            <div class="col-sm-4">
                <a class="mg-collection-list-grid" href="<?= $link ?>">
                    <div class="position-relative">
                        <div class="mg-collection-list-image mg-img-hzoom">
                            <img class="img-fluid" src="assets/images/<?= $slika ?>" alt=""/>
                        </div>
                        <div class="mg-collection-list-tittles"><?= $naslov ?></div>
                    </div>
                </a>
            </div>
        <?php
    }

    function slikaLinkGrupeNatpisDole($link, $slika, $n1, $n2, $n3, $ozn = false){
        $v = $ozn === true ? 1 : 2; // 3 i 4 za neprovidno
        ?>
        <div class="col-md-6 mb-3 mb-md-0">
            <div class="position-relative mg-info-banner-variant<?=$v?> mg-img-hbright-95">
                <a href="<?=$link?>">
                    <div class="mg-info-banner-image">
                        <img class="img-fluid" src="assets/images/<?=$slika?>" alt=""/>
                    </div>
                    <div class="mg-info-bannner-tittles-outer">
                        <div class="mg-info-bannner-tittles-inner">
                            <div class="mg-info-banner-heading"><?=$n1?></div>
                            <div class="mg-info-banner-price-off-text"><?=$n2?></div>
                            <div class="mg-info-banner-text"><?=$n3?></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <?php
    }
    function slikaLinkGrupeNatpisDesno($link, $slika, $n1, $n2, $n3, $ozn = false){
        $v = $ozn === true ? 1 : 2; // 3 i 4 za neprovidno
        ?>
        <div class="col-md-6 mb-3 mb-md-0">
            <div class="position-relative mg-info-banner-variant<?=$v?> mg-img-hbright-95">
                <a href="<?=$link?>">
                    <div class="mg-info-banner-image">
                        <img class="img-fluid" src="assets/images/<?=$slika?>" alt=""/>
                    </div>
                    <div class="mg-info-bannner-tittles-outer">
                        <div class="mg-info-bannner-tittles-inner">
                            <div class="mg-info-banner-heading"><?=$n1?></div>
                            <div class="mg-info-banner-price-off-text"><?=$n2?></div>
                            <div class="mg-info-banner-text"><?=$n3?></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <?php
    }
?>