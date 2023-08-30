<?php

$a = 1;

function tang_len_1($a)
{
    return $a + 1;
}

// echo tang_len_1($a);

// echo $a;


function check(){
    static $a = 0;
    $a++;
    // echo $a;
}
// check();
// check();




$b = 1;

function tang_1(&$b)
{
    $b = $b + 1;
    return $b;
}

// echo tang_1($b);

// echo $b;



//goi ham 

function A(){
    B();
}
function B(){
    C();
}
function C(){
   echo 'C';
}

B();

?>