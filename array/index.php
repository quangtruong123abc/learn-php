<?php
$array = array(
    'chu thuong' =>'Hello'
);

$array = array_change_key_case($array, CASE_UPPER);
var_dump($array);

// ******array_change_key_case

// echo strtolower("Hello Word");
// echo strtoupper("Hello Word");


// ******array_combine($array_keys, $array_values)
// mang ket hop, dieu kien 2 mang giong nhau

// $array_key = array ('a', 'b', 'c');
// $array_values = array ('one', 'two', 'three');
// print_r(array_combine($array_key, $array_values));


// *****array_count_values ( $array )
//hien thi so lan giong nhau

// $array = array(1, 'hello', 1, 'word', 'hello');
// print_r(array_count_values($array))

// ******array_push($array, $add_value1, $add_value2, $add_value3…)
// Thêm vào cuối mảng $array một hoặc nhiều phần tử với các giá trị tương ứng biến $add_value truyền vào

// $stack = array ("orion", "banana");
// array_push($stack, "milk", "tea");
// print_r($stack);

// ********array_pop(&$array)
//xoa phan tu cuoi

// $stack = array("apple", "orange", "banana", "cherry");
// $fruit = array_pop($stack);
// print_r($stack);

// *******array_pad($array, $size, $value)
// keo dan
// $input = array(12, 10, 9);

// $result = array_pad($input, 5, 0);
// $result = array_pad($input, -7 , -1);

// print_r($result);

// *******array_shift(&$array) 
//Xóa phần tử đầu tiên ra khỏi mảng $array và trả về phần tử vừa xóa đó.

// $stack = array("apple", "orange", "banana", "cherry");
// $fruit = array_shift($stack);
// print_r($stack);

// *****array_unshift(&$array, $value1, $value2, …)
// Thêm các giá trị $value1, $value2, … vào đầu mảng $array.

// $queue = array("orange", "banana");
// array_unshift($queue, "milk", "egg");
// print_r($queue)

$bien1 = array();
$bien2 = '';
// var_dump($bien1);
// var_dump($bien2);

// ******in_array($needle, $haystackarray)

$haystackarray = array('hello', "nobody", 'free.style');
// var_dump(in_array('hello', $haystackarray));
// var_dump(in_array('free', $haystackarray));

// *******array_key_exists($key, $searcharray)

$searcharray = array(
    'username' => 'van quang',
    'email' => 'quangtv@gmail.com',
    'website' => 'quang.net'
);

// var_dump(array_key_exists('username', $searcharray));
// var_dump(array_key_exists('hello', $searcharray));


// ******array_unique( $array )

$array = array('freestyle','freestyle');
$result = array_unique($array);
// var_dump($result);


// *******array_values ($array )

$mang = array(
    'username' => 'quangtv',
    'password' => 'quang123'
);
// var_dump(array_values($mang));


$x= array(0,1,2,3,4);
// var_dump($x);
unset($x[3]);
// var_dump($x);


$cart = array("volvo", "BMW", "Toyota");
sort($cart);
foreach ($cart as $c);
// echo "$c <br>";

//*** thu tu tang dan theo value */
// $age = array("Vinh" => "22", "Tan" => "25", "Hoa" => "20");
// asort($age);
// foreach($age as $x => $x_value){
//     echo "Key = ". $x . ",Value = ". $x_value;
//     echo "<br>";
// }

//******thu tu tang dan theo khoa */

// $age = array("Vinh" => "22", "Tan" => "25", "Hoa" => "20");
// ksort($age);
// foreach($age as $x => $x_value){
//     // echo "Key = ". $x . ",Value = ". $x_value;
//     // echo "<br>";
// }

//**** array_merge */

$array1 = array(
    "apple" => "tao",
    "banana" => "chuoi",
    "html" , "css"
);
$array2 = array(
    "dog" => "cho",
    "cat" => "meo"
    
);

$result = array_merge($array1, $array2);
// echo "<pre>";
// print_r($result);
// echo "</pre>";

// $a = array("red", "green", "blue", "yellow", "brown");
// echo "<pre>";
// print_r(array_slice($a, 3));
// print_r(array_slice($a, 0, 3));
// print_r(array_slice($a, 1, 3));
// print_r(array_slice($a, 2, 3));
// echo "</pre>";
?>