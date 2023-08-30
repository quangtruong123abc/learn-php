<?php
//in tu 1 -10
$i = 1;
while($i <= 10){
    // echo $i;
    $i++;
}

// in den khi vong lap ket thuc la 10 -=2 5  864(3 lan lap)
$x = 1;
$y = 10;
while($x < 100 && $y > 5){
    $x++;
    $y -= 2;
    // echo $y;
}
// chay dieu kien truoc 

$f = 1;
do{
    // echo $f;
    $f++;
}while($f <= 10);

// chay dieu kien truoc
$f = 1;
do{
    // echo $f;
    $f++;
}while($f < 1);

$nam = array(
    1990,
    1991,
    1992,
    1993,
    1994,
    1995
);
// echo $nam[0]

// vong lap while
$i = 0;
while($i <= 5){
    // echo $nam[$i];
    $i++;
}

// vong lap do while
$i = 0;
do{
    // echo $nam[$i];
    $i++;
}while($i <= 5);



// foreach

// lay key va value
foreach($nam as $key => $value){
    // echo $value.'=>'.$key;
    // echo $value;
}


// chi lay value
foreach($nam as $value){
    // echo $value;
}


$sinhvien = array(
    'mssv001' => 'Nguyen Van A',
    'mssv002' => 'Nguyen Van B',
    'mssv003' => 'Nguyen Van C',
    'mssv004' => 'Nguyen Van D',
    'mssv005' => 'Nguyen Van E',
);
//chi duoc in ra ten, khong in ra duoc mssv
foreach($sinhvien as $tensv){
    // echo $tensv;
}

// break, continue, die, exit


// break
for ($i = 1; $i < 100 ; $i++) { 
//   echo $i;
  if($i == 10 ){
    break;
  }
}

//continue
for ($i=1; $i < 100 ; $i++) { 
    if($i == 30){
        continue;
    }
    // echo $i;
}

//die
for ($i=1; $i < 100 ; $i++) { 
    if($i == 30){
        die;
    }
    // echo $i;
}

//exit

for ($i=1; $i < 100 ; $i++) { 
    if($i == 30){
        exit;
    }
    // echo $i;
}










?>