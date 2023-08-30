
<?php
// xay dung function trong php
// $number = 12;
// if(check($number)){
//     echo 'so chan';
// }else{
//     echo 'so le';
// }

// function check ($number){
//     if($number % 2 == 0)
//     return true;
//     else return false;
// }


$number = 12;

// check($number);
function check ($number){
    if($number % 2 == 0){
        echo 'so chan';
    }else{
        echo 'so le';
    }
}


// khi return phai echo thi chuong trinh moi chay
$number1 = 10;
$number2 = 12;

// echo total ($number1, $number2);

function total ($a, $b){
    return $a + $b;
}



$so1 = 12;
$so2 = 11;

// echo tinhtong($so1, $so2);

function tinhtong ($a, $b, $c = false){
    $tong = $a + $b;
    if ($c !=false){
        $tong = $tong + $c;
    }
    return $tong;
}


// bien toan cuc va cuc bo


$bien_toan_cuc = 12;

function kiem_tra()
{
    $bien_cuc_bo = 13;

    global $bien_toan_cuc;

    if($bien_cuc_bo % $bien_toan_cuc ){
        return true;
    }else{
        return false;
    }
}

// echo kiem_tra($bien_cuc_bo);







?>