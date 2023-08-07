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
        if (isset($_POST["click"])) {

        $x = 1;
        $err_toan = $err_ly = $err_hoa = $result = "";
        
        if(empty($_POST['toan'])){
            $err_toan = "vui long nhap diem toan";
            $x = 2;
        }

        if(empty($_POST['ly'])){
            $err_ly = "vui long nhap diem ly";
            $x = 2;
        }

        if(empty($_POST['hoa'])){
            $err_hoa = "vui long nhap diem hoa";
            $x = 2;
        }
       

        if($x==1){
            $tbc = $_POST['toan'] + $_POST['ly'] + $_POST['hoa'];

            if($_POST['toan'] <= 1 || $_POST['ly'] <= 1 || $_POST['hoa'] <= 1 || $tbc < 15){
                $result = "fail";

            }else{
                    $result = "pass";
                    
            }
        }
    }
    ?>


    <form action="" method="POST">
        <label >Toan</label>
        <input type="text" name="toan"> <br>
        <p><?php echo $err_toan; ?></p>
        <label >Ly</label>
        <input type="text" name="ly"><br>
        <p><?php echo $err_ly; ?></p>
        <label >Hoa</label>
        <input type="text" name="hoa"><br>
        <p><?php echo $err_hoa; ?></p>
        <p><?php echo $result; ?></p>
        <button type="submit" name="click">Check</button>
    </form>
    
    
</body>
</html>