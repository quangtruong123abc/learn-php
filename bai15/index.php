<?php

// **********open file

// $path = 'demo.txt';
// $fp = @fopen($path, "r");
// if(!$fp){
//     echo "open not success";
// }else{
//     echo "success";
// }

//************read file */

$fp = @fopen('demo.txt', "r");
if(!$fp){
    echo "open not success";
}else{

   while(!feof($fp)){

        // echo fgetc($fp);
        // echo fgets($fp);

        $data = fread($fp, filesize('demo.txt'));
        echo $data;

   }
}



?>