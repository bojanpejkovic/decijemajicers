<?php
    
    function sortirajSelect($select_id){
        $sortContent = [
            ['id'=>'najprodavanije', 'text'=>'Najprodavanije'], 
            ['id'=>'naziv', 'text'=>'Nazivu'], 
            ['id'=>'cena-uzlazno', 'text'=>'Ceni od najniže'], 
            ['id'=>'cena-silazno', 'text'=>'Ceni od najviše']
        ];
    ?>
    <form>
        <div class="mg-sorting">
            <label>Sortiraj po:</label>
            <select class="form-control">
                <?php
                    foreach($sortContent as $red){ ?>
                        <option value="<?=$red['id']?>" <?=$select_id === $red['id'] ? 'selected="selected"' : ''?>><?=$red['text']?></option>
                <?php
                    }
                ?>
                
                <option value="rating">Nazivu</option>
                <option value="price-low">Ceni od najniže</option>
                <option value="price-high">Ceni od najviše</option>
            </select>
        </div>
    </form>
    <?php
    }
?>