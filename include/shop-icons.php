<?php
    function shopIcons($color){
    ?>
        <div class="col-md-5 col-lg-4 col-5 text-end">
            <div class="header-icons-outer mg-header-icon-style2">
                <ul>
                    <li class="mg-search-icon mg-search-box-main">
                        <div class="mg-search-box">
                            <div class="input-group color-<?=$color?>">
                                <div class="form-outline">
                                    <input type="search" placeholder="Pretrazi..." class="form-control">
                                </div>
                                <button type="button" class="btn">
                                    <img src="assets/images/search-<?=$color?>.svg" alt="" />
                                </button>
                            </div>
                        </div>
                    </li>
                    <li><a href="wishlist.html"><img src="assets/images/wishlist-<?=$color?>.svg" alt="" /><span class="mg-header-icon-counter">1</span></a></li>
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#account-modal"><img src="assets/images/account-<?=$color?>.svg" alt="" /></a></li>
                    <li><a href="korpa.php"><img src="assets/images/shopping-bag-<?=$color?>.svg" alt="" /><span class="mg-header-icon-counter cart-counter">1</span></a></li>
                </ul>
            </div>
        </div>
    <?php
    }
?>