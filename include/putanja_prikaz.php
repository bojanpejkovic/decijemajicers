<?php
    function putanja_prikaz($putanja){
        ?>
        <div class="mg-breadcrumb-outer">
            <div class="container-fluid gx-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <?php
                        foreach ($putanja as $red) { 
                            echo '<li class="breadcrumb-item">';
                            if($red['link'] !== '') echo '<a href="'.$red['link'].'">';
                            echo $red['naslov'];
                            if($red['link'] !== '') echo '</a>';
                            echo '</li>';
                        }
                        ?>
                    </ol>
                </nav>
            </div>
        </div>
        <?php
    }


?>