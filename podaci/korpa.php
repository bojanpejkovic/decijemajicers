<?php
    $korpa_proizvodi = [
        [
            'id'=>'11',
            'barkod'=>'1122334455667',
            'naslov_proizvoda'=>'Crna decija majica',
            'kolicina'=>1,
            'cena'=>1200,
            'boja'=>'#242424',
            'velicina'=>'XS',
            'slika'=>'product-image.jpg',
            'link'=>'product.php?id=??'
        ],
        [
            'id'=>'11',
            'barkod'=>'1122334455667',
            'naslov_proizvoda'=>'Beautiful black dress for clubbing and party',
            'kolicina'=>4,
            'cena'=>890,
            'boja'=>'#242424',
            'velicina'=>'XS',
            'slika'=>'product7.jpg',
            'link'=>'product.php?id=??'
        ],
        [
            'id'=>'11',
            'barkod'=>'1122334455667',
            'naslov_proizvoda'=>'Crna decija majica',
            'kolicina'=>1,
            'cena'=>1000,
            'boja'=>'#242424',
            'velicina'=>'XS',
            'slika'=>'product5.jpg',
            'link'=>'product.php?id=??'
        ]
    ];
    
    
    $isporuka_cena = 300;
    $popust_korpa = 20; // u %
    
    $ukupna_cena = 0;
    foreach($korpa_proizvodi as $red){
        $ukupna_cena += $red['kolicina'] * $red['cena'];
    }
    $ukupna_cena_sa_popustom = $ukupna_cena;
    if($popust_korpa > 0){
        $ukupna_cena_sa_popustom = $ukupna_cena * (1 - $popust_korpa/100);
    }

?>