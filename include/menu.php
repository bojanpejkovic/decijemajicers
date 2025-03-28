<?php
    $link = 'grupa.php';
    $kategorije = [
        ['link'=>$link.'?id=zenske-majice', 'text'=>'Za devojčice'],
        ['link'=>$link.'?id=muske-majice', 'text'=>'Za dečake'],
        ['link'=>$link.'?id=bebi-majice', 'text'=>'Za bebe'],
        ['link'=>$link.'?id=najkvalitetnije', 'text'=>'Najkvalitetnije'],
        ['link'=>$link.'?id=outlet', 'text'=>'Outlet'],
        ['link'=>$link.'?id=rasprodaja', 'text'=>'Rasprodaja'],
    ];
    $stranice = [
        ['link'=>"grupa.php", 'text'=>'Kategorije'],
        ['link'=>"product.php", 'text'=>'Proizvod jedan'],
        ['link'=>"korpa.php", 'text'=>'Korpa'],
        ['link'=>"naruci.php", 'text'=>'Placanje'],
        ['link'=>"hvala.php", 'text'=>'Hvala sto ste narucili'],
        ['link'=>"profile.html", 'text'=>'Moj Profil'],
        ['link'=>"my-orders.html", 'text'=>'Moje narudzbine'],
        ['link'=>"blog.php", 'text'=>'Blog'],
        ['link'=>"single-blog.php", 'text'=>'Pojedinacni blog'],
        ['link'=>"about.html", 'text'=>'O nama'],
        ['link'=>"privacy-policy.html", 'text'=>'Privacy policy']
    ];
?>

<div>
    <div class="mg-menu-overlay"></div>
    <nav class="mg-menu" id="menu">
        <div class="menu-mobile-header">
            <button type="button" class="menu-mobile-arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
            <div class="menu-mobile-title"></div>
            <button type="button" class="menu-mobile-close"><i class="fa fa-times" aria-hidden="true"></i></button>
        </div>
        <ul class="menu-section mg-menu-outer">
            <li class="menu-item-has-children">
                <a href="javascript:void(0);">Kategorije <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <div class="mg-sub-menu-outer">
                    <div class="menu-subs">
                        <ul>
                            <?php
                                foreach ($kategorije as $red) { ?>
                                    <li><a href="<?=$red['link']?>"><?=$red['text']?></a></li>
                                <?php }
                            ?>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="menu-item-has-children">
                <a href="javascript:void(0);">Stranice <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <div class="mg-sub-menu-outer">
                    <div class="menu-subs">
                        <ul>
                            <?php
                                foreach ($stranice as $red) { ?>
                                    <li><a href="<?=$red['link']?>"><?=$red['text']?></a></li>
                                <?php }
                            ?>
                            
                        </ul>
                    </div>
                </div>
            </li>
            <li class="menu-item"><a href="blog.php">Blog</a></li>
            <li class="menu-item"><a href="contact-us.html">Kontakt</a></li>
        </ul>
    </nav>
    <div>
        <button type="button" class="menu-mobile-toggle mg-burger-menu-icon">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</div>