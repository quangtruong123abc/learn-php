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
    $sinhvien = 'truong van quang';

    define('SDT','09832332732');

    $tuoi = '98';
    $tuoi = (int)$tuoi;

    $a = '123';  // Biến $a là kiểu chuỗi có giá trị bằng '123'
    $b = 123; // Biến $b là kiểu INT có giá trị bằng 123
    $c = $a + $b; // Biến C là kết quả của phép toán $a + $b và sẽ có giá trị là 246 nên nó là kiểu INT
    // var_dump(is_int($c)); // hàm is_int($tenbien) dùng để kiểm tra một biến có phải là kiểu INT hay không
    // var_dump(is_int($a)); // kết quả là false vì biến $a là kiểu string

    // $a = 'a123'; // biến $a có giá trị là chuỗi 'a123'
    // $a = (int)$a; // chuyển $a sang kiểu INT

    $a = '123a'; // biến $a có giá trị là chuỗi 'a123'
    $a = (int)$a; // chuyển $a sang kiểu INT


    $bool = 1; // biến $bool là kiểu int
    $bool = (bool)$bool; // lúc này biến $bool sẽ có kiểu boolean
    // Hoặc
    $bool = (boolean)$bool; // lúc này biến $bool sẽ có kiểu boolean

       $f = 1.234; // Kiểu số thực


    $f = 123; // biến $a kiểu int
    $f = (float)$f; // Biến $a lúc này kiểu số thực (float)
    $f = (double)$f; // Biến $a lúc này kiểu ố thực (double)
    

    $a = 123; // khai báo biến $a kiểu int có giá trị 123
    $a = (string)$a; //Chuyển biến $a thành kiểu chuỗi và có giá trị là '123'

    $sinhvien = array('Nguyễn Văn A', 'Nguyễn Văn B');
    // var_dump($sinhvien);

    $sinhvien = array(
    0 => 'Nguyễn Văn A',
    1 => 'Nguyễn Văn B'
    );
    // var_dump($sinhvien);

    $sinhvien = array(
    0 => 'Nguyễn Văn A',
    1 => 'Nguyễn Văn B'
    );
    // echo $sinhvien[0]; // Xuất ra màn hình phần tử 0 => Nguyễn Văn A
    // echo $sinhvien[1]; // Xuất ra màn hình phần tử 1 => Nguyễn Văn B

    $sinhvien = array(
    'sinhvien_a' => 'Nguyễn Văn A',
    'sinhvien_b' => 'Nguyễn Văn B'
    );
    // var_dump($sinhvien);

    $a = array();
    $a[0][1] = 123;
    $a[0][2] = 321;
    // echo $a[0][1]; // in ra giá trị 123
    // echo $a[0][2]; // in ra giá trị 321


   $a = null; // Khởi tạo biến $a và gán giá trị null
   $b = (int)$a; // Biến $b có giá trị là ( 0 )
   $c = (string)$a; // Biến $c có giá trị rỗng ( '' )
   $d = (bool)$a; // Biến $d có giá trị FALSE


   $mang = [];

        $mang[]= "hpc lap trinh 1";
        $mang[]= "hpc lap trinh 2";

        $mang["name"]= "bao vic";
        $mang[]= "hpc lap trinh 3";
        

        echo "<pre>";
        // var_dump($mang);


        // $xx = [];

        // $xx[][] = "day la bai 1";
        // $xx[][] = "day la bai 2";
        // $xx[][] = "day la bai 3";

        // var_dump($xx);

        $yy = [];

        $yy[0][] = "day la bai 1";
        $yy[0][] = "day la bai 2";
        $yy[0][] = "day la bai 3";

        $yy[1][] = "day la bai 1";
        $yy[1][] = "day la bai 2";
        $yy[1][] = "day la bai 3";
        // $yy[1][][] = "day la mang 3 chieu";


        // var_dump($yy);

        for ($i=0; $i < count($yy) ; $i++) { 
            // echo $yy[$i][0]; 
            // - $yy[0][0]
            // - $yy[1][0]
        }












    // echo $f;


    

    // echo $a; // kết quả xuất ra màn hình là số 0
    
    // echo $sinhvien;

    // echo SDT


    //kiem tra chan le 

    $so_can_kiem_tra = 12;
    $so_du = $so_can_kiem_tra % 2;
    if ($so_du == 0){
     echo 'Số '.$so_can_kiem_tra.' Là Số Chẵn';
}

?>
    
</body>
</html>