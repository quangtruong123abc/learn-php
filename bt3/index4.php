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
    

    if(isset($_POST['click'])){
        $x = 1;
        $err_toan = "";
        $err_ly = "";
        $err_hoa = "";
        $err_anh = "";
        $err_van = "";
        $err_su = "";


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

        if(empty($_POST['anh'])){
            $err_anh = "vui long nhap diem anh";
            $x = 2;
        }

        if(empty($_POST['van'])){
            $err_van = "vui long nhap diem van";
            $x = 2;
        }
        
        if(empty($_POST['su'])){
            $err_su = "vui long nhap diem su";
            $x = 2;
        }


         if($x==1) {
         $tbc = $_POST['toan'] + $_POST['ly'] + $_POST['hoa'] + $_POST['anh'] + $_POST['van'] + $_POST['su'];
         $chia = $tbc / 6;
         echo $chia;
         if($_POST['toan'] <= 4 || $_POST['ly'] <= 4 || $_POST['hoa'] <= 4 || $_POST['anh'] <= 4 || $_POST['van'] <= 4 || $_POST['su'] <= 4 || $tbc < 5 ){
            $result = "yeu";
         }elseif($chia <= 6.4 ){
            $result = "trung binh";
         }elseif($chia <= 7.9){
            $result = "kha";
         }else{
            $result = "gioi";
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

        <label >Anh</label>
        <input type="text" name="anh"><br>
        <p><?php echo $err_anh; ?></p>

        <label >Van</label>
        <input type="text" name="van"><br>
        <p><?php echo $err_van; ?></p>

        <label >Su</label>
        <input type="text" name="su"><br>
        <p><?php echo $err_su; ?></p>

        <p><?php echo $result; ?></p>


        <button type="submit" name="click">Check</button>
    </form>
    
</body>
</html>