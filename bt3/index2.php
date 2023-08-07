<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check number</title>
</head>
<body>
    <?php
            
            if (isset($_POST["check"])) {
                $err_number = "";
                $x = 1;
                $input = $_POST["number"];
                if(empty($_POST['number'])){
                    $err_number = "vui long nhap";
                    $x = 2;
                }

                 if($x==1){
                    if ($_POST['number'] % 7 == 0) {
                        $err_number = "chia het cho 7";
                        $x = 2;
                    } else {
                        $err_number = " khong chia het cho 7";
                    }
                 }
                }
        
    
    ?>
    <form action="" method="POST">
        <input type="text" name="number">
        <p><?php echo $err_number; ?></p>
        <button type="submit" name="check">Check </button>
    </form>

   
</body>
</html>
