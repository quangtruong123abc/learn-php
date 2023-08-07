<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
for ($i = 0; $i < 100; $i++) {
    // echo $i  . ' - ';
}




for ($i = 9; $i >= 0; $i--){
    // echo $i . ' - ';
}

// for ($i = 9, $count = 10; $i <= $count; $i--){
//     echo $i . ' - ';
// }

for ($i = 1; $i < 10; $i++)
{
    for ($j = 9; $j >= $i; $j--)
    {
        // echo $j;
    }
echo '<br/>';;
}

$sinhvien = array(
    'Nguyễn A',
    'Nguyễn B',
    'Nguyễn C',
    'Nguyễn D',
    'Nguyễn E',
    'Nguyễn F'
    );

    for ($i = 0; $i < 6; $i++){
        // echo $sinhvien[$i];
    }
    for ($i = 0; $i < count($sinhvien); $i++){
        // echo $sinhvien[$i];
    }

    $count = count($sinhvien);
for ($i = 0; $i < $count; $i++){
    // echo $sinhvien[$i];
}

$count = count($sinhvien);
for ($i = 0; $i < $count; $i++){
    // echo $sinhvien[$i];
}




// Vòng lặp for In ra các số chẵn từ 0 đến 100
for ($i = 2; $i <= 100; $i += 2) {
    // echo $i;
}
// Vòng lặp for bước nhảy 2
for ($i = 1; $i <= 100; $i += 2) {
    // echo $i ;
}

// Vòng lặp for tìm phần tử lớn nhất trong mảng

$array = [1, 343, 755, 454, 62, 59];
$big = $array[0]; 

for ($i = 1; $i < count($array); $i++) {
    if ($array[$i] > $big) {
        $big = $array[$i]; 
    }
}

// echo $big;


        

?>

    
</body>
</html>