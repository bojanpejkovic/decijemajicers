<?php
    function blogThumbnail($row){
        ?>
            <div class="col-sm-4">
                <div class="mg-blog-grid-outer text-center">
                    <div class="mg-blog-image mg-img-hzoom ">
                        <a href="single-blog.php?id=<?=$row['id']?>"><img class="img-fluid" src="assets/images/blog/<?=$row['slika']?>" alt=""/></a>
                    </div>
                    <div class="mg-blog-sec-tittles">
                        <a class="mg-blog-name-tittle" href="single-blog.php"><?=$row['naslov']?></a>
                    </div>
                    <div class="mg-blog-metas">
                        <div class="row justify-content-center">
                            <div class="col-auto mg-meta-col">
                                <div class="mg-blog-meta-text"><?=$row['datum']?></div>
                            </div>
                            <div class="col-auto mg-meta-col">
                                <div class="mg-blog-meta-text"><a href="single-blog.php?id=<?=$row['id']?>">Otvori</a></div>
                            </div>
                            <!-- <div class="col-auto mg-meta-col">
                                <div class="mg-blog-meta-text">Komentari (1)</div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        <?php
    }
?>