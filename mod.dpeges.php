<?php
function dpeges($dpe = false, $ges = false){
    $render = '';

    if ($dpe){
        if ($dpe <= 50){
            $top = 40;
        }elseif ($dpe >= 51 && $dpe <= 90){
            $top = 80;
        }elseif ($dpe >= 91 && $dpe <= 150){
            $top = 120;
        }elseif ($dpe >= 151 && $dpe <= 230){
            $top = 170;
        }elseif ($dpe >= 231 && $dpe <= 330){
            $top = 215;
        }elseif ($dpe >= 331 && $dpe <= 450){
            $top = 257;
        }elseif ($dpe > 450){
            $top = 300;
        }
        $render .= '<div style="width: 49%; float: left; position: inherit;"><img src="'.BASE_URL.DS.'/includes/modules/dpeges/dpe.jpg" alt="DPE"><div style="position: absolute; top: '.$top.'px; right: 8px; width: 20%;"><img src="'.BASE_URL.DS.'/includes/modules/dpeges/cursor.png" alt=""><div style="margin-top: -27px; margin-left: 25px; width: 55%; text-align: center;">'.floatval($dpe).'</div></div></div>';    
    }

    if ($ges){
        $ges = intval($ges);
        if ($ges <= 5){
            $top = 40;
        }elseif ($ges >= 6 && $ges <= 10){
            $top = 80;
        }elseif ($ges >= 11 && $ges <= 20){
            $top = 120;
        }elseif ($ges >= 21 && $ges <= 35){
            $top = 170;
        }elseif ($ges >= 36 && $ges <= 55){
            $top = 215;
        }elseif ($ges >= 56 && $ges <= 80){
            $top = 257;
        }elseif ($ges > 80){
            $top = 300;
        }
        $render .= '<div style="width: 49%; float: right; position: inherit;"><img src="'.BASE_URL.DS.'/includes/modules/dpeges/ges.jpg" alt="GES"><div style="position: absolute; top: '.$top.'px; right: 8px; width: 20%;"><img src="'.BASE_URL.DS.'/includes/modules/dpeges/cursor.png" alt=""><div style="margin-top: -27px; margin-left: 25px; width: 55%; text-align: center;">'.floatval($ges).'</div></div></div>';   
    }
    
    echo $render;
}
?>