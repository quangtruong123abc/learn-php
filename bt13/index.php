<?php
// thu tu tang dan theo key
echo "tang dan theo key";
echo "<br>";
$age = array("Hoang" => "31", "Nam" => "41", "Minh" => "39", "Hoa" => "40");
ksort($age);
foreach($age as $x => $x_value){
    echo "tuoi cua ". $x . " la:  ". $x_value;
    echo "<br>";
}
 echo "<br>";
 
// giam dan theo key
echo "giam dan theo key";
echo "<br>";
$age = array("Hoang" => "31", "Nam" => "41", "Minh" => "39", "Hoa" => "40");
krsort($age);
foreach($age as $x => $x_value){
    echo "tuoi cua ". $x . " la:  ". $x_value;
    echo "<br>";
}
echo "<br>";
//tang dan theo value
echo "tang dan theo value";
echo "<br>";
$age = array("Hoang" => "31", "Nam" => "41", "Minh" => "39", "Hoa" => "40");
asort($age);
foreach($age as $x => $x_value){
    echo "tuoi cua". $x . " la: ". $x_value;
    echo "<br>";
}

echo "<br>";
//giam dan theo value
echo "giam dan theo value";
echo "<br>";
$age = array("Hoang" => "31", "Nam" => "41", "Minh" => "39", "Hoa" => "40");
arsort($age);
foreach($age as $x => $x_value){
    echo "tuoi cua". $x . " la: ". $x_value;
    echo "<br>";
}
?>