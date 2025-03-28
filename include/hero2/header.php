<?php
    require_once(dirname(__FILE__)."/../shop-icons.php");
    $color = "white";
    if($headerClass === '') $color = 'black';
?>
        <header class="<?=$headerClass?> text-<?=$color?>">
            <div class="mg-header-outer">
                <div class="container-fluid gx-lg-5">
                    <div class="row gx-0 gx-md-2 align-items-center">
                        <div class="col-md-2 col-lg-3 col-5">
                            <div class="header-logo">
                                <?php include(dirname(__FILE__)."/../logo.php"); ?>
                            </div>
                        </div>
                        <div class="col-md-5 col-2 order-3 order-md-0 d-flex  justify-content-end mg-center-menu-align justify-content-md-center">
                            <?php include(dirname(__FILE__)."/../menu.php"); ?>
                        </div>
                        <?php shopIcons($color); ?>
                    </div>
                </div>
            </div>
        </header>