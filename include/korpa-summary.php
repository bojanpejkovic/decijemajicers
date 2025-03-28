<?php
    function korpaSummary($ukupna_cena, $ukupna_cena_sa_popustom, $dugme_naruci){ 
        global $isporuka_cena, $promo_kodovi_postoje, $popust_korpa;
?>
        <?php if($promo_kodovi_postoje){ ?>
        <div class="mg-cart-promo-code-outer mt-4 mt-md-0 mb-4">
            <form class="cart-promo-code-form">
                <div class="input-group mg-cart-promo-input-main">
                    <input type="text" class="form-control" placeholder="Upiši popust kod">
                    <button class="mg-btn mg-light-bg-btn mg-promo-btn" type="button">Obrčunaj popust</button>
                </div>
            </form>
        </div>
        <?php } ?>
        <div class="mg-cart-details-pannel-outer">
            <div class="mg-cart-order-summery-heading text-center">
                Za plaćanje:
            </div>
            <div class="mg-cart-order-summary-des text-center d-none">* neko obavestenje</div>
            <div class="mg-cart-line-break"></div>
            <div class="mg-cart-detail-list-outer">
                <div class="mg-cart-detail-list-grid">
                    <div class="row gx-2">
                        <div class="col-6">
                            <div class="mg-cart-list-text">Artikli:</div>
                        </div>
                        <div class="col-6 text-end">
                            <div class="mg-cart-list-text"><?=cenaFormat($ukupna_cena)?></div>
                        </div>
                    </div>
                </div>
                <?php
                    if($popust_korpa > 0){
                    ?>
                    <div class="mg-cart-detail-list-grid">
                    <div class="row gx-2">
                        <div class="col-6">
                            <div class="mg-cart-list-text">Popust:</div>
                        </div>
                        <div class="col-6 text-end">
                            <div class="mg-cart-list-text"><?=$popust_korpa?>%</div>
                        </div>
                    </div>
                    </div>
                    <div class="mg-cart-detail-list-grid">
                    <div class="row gx-2">
                        <div class="col-6">
                            <div class="mg-cart-list-text">Ukupno sa popustom:</div>
                        </div>
                        <div class="col-6 text-end">
                            <div class="mg-cart-list-text"><?=cenaFormat($ukupna_cena_sa_popustom)?></div>
                        </div>
                    </div>
                    </div>
                    <?php
                    }
                    ?>
                <div class="mg-cart-detail-list-grid">
                    <div class="row gx-2">
                        <div class="col-6">
                            <div class="mg-cart-list-text">Isporuka:</div>
                        </div>
                        <div class="col-6 text-end">
                            <div class="mg-cart-list-text"><?=cenaFormat($isporuka_cena)?></div>
                        </div>
                    </div>
                </div>
                <div class="mg-cart-line-break"></div>
                <div class="mg-cart-detail-list-grid">
                    <div class="row gx-2">
                        <div class="col-6">
                            <div class="mg-cart-list-text">Ukupno:</div>
                        </div>
                        <div class="col-6 text-end">
                            <p class="mg-cart-list-text font-weight-bold"><?=cenaFormat($ukupna_cena_sa_popustom + $isporuka_cena)?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php if($dugme_naruci) { ?>
            <div class="mg-cart-panel-btns mt-3">
                <a href="naruci.php" class="mg-btn mg-light-bg-btn mg-form-btn mb-3">NARUČI</a>
                <a href="grupa.php" class="mg-btn mg-light-bg-btn mg-form-btn mg-black-btn">Nastavi kupovinu</a>
            </div>
            <?php } ?>
            <div class="mg-cart-secure-btn mt-4 text-center">
                <img src="assets/images/lock.svg" alt=""/> Sigurna kupovina
            </div>
            <div class="cart-panel-detail-pay-icon text-center mt-4">
                <img class="img-fluid w-auto" src="assets/images/pay-icons.png" alt=""/>
            </div>
        </div>
    <?php } ?>