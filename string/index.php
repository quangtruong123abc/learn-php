<?php


// ********** explode ( $delimiter , $string)

$str = 'hello.net is a website free for you';
  
// Mỗi khoảng trắng sẽ là một phần tử trong mảng<br />
var_dump(explode(' ', $str));
  
/*Kết quả
array
    0 => 'hello.net',
    1 => 'is',
    2 => 'a' ,
    3 => 'website',
    4 => 'free',
    5 => 'for' ,
    6 => 'you' */

//implode($delimiter, $piecesarray); *********
//Hàm này ngược với hàm explode, nó chuyển một mảng $piecesarray thành chuỗi và mỗi phần tử cách nhau bởi chuỗi $delimiter

    // echo implode(' ', array(
    //     'hello',
    //     'xin',
    //     'chào',
    //     'các',
    //     'bạn'
    // ));
    



// ******strlen($string)
// Hàm này đếm số ký tự của chuỗi $string.
// echo strlen('hello.net');
// kết quả: 9



// *******str_replace( $chuoi_tim, $chuoi_thay_the, $chuoi_nguon )
// Hàm này tìm kiếm và thay thế chuỗi
// $str = 'hello Xin Chào Các Bạn';
// $str = str_replace('hello','hello.net', $str);
// echo $str; // kết quả là hello.net Xin Chào Các Bạn

$str = 'hello Xin Chào Các Bạn';
$str = str_replace(array('hello', 'Xin chao'), array('hello.net', 'Hello'), $str );
// echo $str; // kết quả là 'hello.net Hello Các Bạn

// ***md5( $str)
// Hàm này mã hóa chuỗi thành một dãy 32 ký tự (mã hóa md5). 123456
// echo md5('hello.net');
// Kết quả: 83617175fd8cf470d4af657a28def98e



// ********html_entity_decode($string)
// Ngược lại với htmlentities, hàm này chuyển ngược các ký tự dạng thực thể HTML sang dạng ký tự của chúng.
$str = htmlentities('<b>hello.net</b>');
  
// echo 'Entity: ' . $str . '<br/>';
// echo 'Decode: ' . html_entity_decode($str);

// *******htmlspecialchars( $string)
// Tương tự như htmlentities.

// ******substr( $string,  $start, $length )
// Hàm này lấy một chuỗi con nằm trong chuỗi $str bắt đầu từ ký tự thứ $start và chiều dài $length.
// echo substr( 'hello.net',  0, 5);
// Kết quả hello

// *****trstr( $string, $ky_tu_cho_truoc )
// Tách một chuỗi bắt đầu từ  $ky_tu_cho_truoc cho đến hết chuỗi.
// echo strstr('hello.net Xin Chào', 'Xin');
// Kết quả: Xin Chào

// ******strpos($str, $chuoi_tim )
// Tìm vị trí của chuỗi $chuoi_tim trong chuỗi $str, kết quả trả về false nếu không tìm thấy.
// echo strpos('hello.net chào các bạn', 'chào');
// kết quả 10

// ********trim($string, $ky_tu);
// Xóa ký tự $ky_tu nằm ở đầu và cuối chuỗi $str, nếu ta không nhập $ky_tu thì mặc định nó hiểu là xóa khoảng trắng.
echo trim(' hello.net ');
// kết quả: 'hello.net'
echo '<br/>';
  
echo trim('hello.net');
// kết quả: 'hello.net'


?>