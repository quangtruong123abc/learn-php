<?php
function kiem($soCanTim, $mang){
    foreach($mang as $so){
      if($so == $soCanTim){
          return true;
        }
    }
    return false;
}

$mang = array(321, 312, 3, 4, 5, 45, 56, 5, 7, 6, 787, 8, 7, 2, 67);
$soCanTim = 67;

if (kiem($soCanTim, $mang)) {
    echo ($soCanTim).'_'.'co trong mang';
} else {
    echo ($soCanTim).' khong co trong mang';
}





?>
