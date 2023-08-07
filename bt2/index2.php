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
    
     $err_email = "";
     $err_pass = "";
     $thongbao = "";

     if(isset($_POST['click'])){
        $x = 1;
        if(empty($_POST['email'])){
            $err_email = "vui long nhap email";
            $x = 2;
        }

        if(empty($_POST['password'])){
            $err_pass = "vui long nhap password";
            $x = 2;
        }

        if ($x==1){
            $thongbao = "da thanh cong";
        }
     }

    ?>
    <h1>Xu ly form</h1>
    <p><?php echo $thongbao; ?></p>
    <form action="" method="POST">
        <input type="text" name="email">
        <p><?php echo $err_email; ?></p>
        <input type="text" name="password">
        <p><?php echo $err_pass; ?></p>
        <button type="submit" name="click">click</button>
       
    </form>

    

    
</body>
</html>