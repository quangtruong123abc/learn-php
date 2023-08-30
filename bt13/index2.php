<?php
$array = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

foreach ($array as $key => $value) {
    // $array[$key] = strtoupper($value);
    $array[$key] = strtolower($value);
}

var_dump($array);
?>
