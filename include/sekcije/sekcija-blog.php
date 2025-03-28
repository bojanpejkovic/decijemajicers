        <?php
            $content = [
                ['link'=>'decje-muske-majice-blog', 'naslov'=>'...dečjim majicama za dečake', 'datum'=>'03.05.2024', 'br_komentara'=>1, 'slika'=>'blog-1.jpg'],
                ['link'=>'decje-zenske-majice-blog', 'naslov'=>'...dečjim majicama za devojčice', 'datum'=>'02.01.2024', 'br_komentara'=>5, 'slika'=>'blog-2.jpg'],
                ['link'=>'bebi-oprema-blog', 'naslov'=>'...bebi-pelenama', 'datum'=>'14.02.2024', 'br_komentara'=>0, 'slika'=>'blog-3.jpg'],
            ];
            

        ?>
        <section>
            <div class="mg-blog-section-outer mg-section-spacing">
                <div class="container-fluid gx-lg-5 gx-md-4">
                    <div class="mg-section-tittles text-center">
                        <h2 class="mg-heading"><span>Hajde</span> DA PRIČAMO O ...</h2>
                    </div>
                    <div class="row">
                        <?php
                            foreach ($content as $red) { 
                                $link = $blog_jedan_link.'?id='.$red['link'];
                            ?>
                                <div class="col-sm-4">
                                    <div class="mg-blog-grid-outer text-center">
                                        <div class="mg-blog-image mg-img-hzoom mg-blog-image-style1">
                                            <a href="<?=$link?>"><img class="img-fluid" src="assets/images/blog/<?=$red['slika']?>" alt=""/></a>
                                        </div>
                                        <div class="mg-blog-sec-tittles">
                                            <a class="mg-blog-name-tittle" href="<?=$link?>"><?=$red['naslov']?></a>
                                        </div>
                                        <div class="mg-blog-metas">
                                            <div class="row justify-content-center">
                                                <div class="col-auto mg-meta-col">
                                                    <div class="mg-blog-meta-text"><?=$red['datum']?></div>
                                                </div>
                                                <div class="col-auto mg-meta-col">
                                                    <div class="mg-blog-meta-text"><a href="<?=$blog_link?>">svi blogovi</a></div>
                                                </div>
                                                <div class="col-auto mg-meta-col">
                                                    <div class="mg-blog-meta-text">Komentari (<?=$red['br_komentara']?>)</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                        }
                        ?>
                        
                    </div>
                </div>
            </div>
        </section>