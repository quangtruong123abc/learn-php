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
            $err_number = "";
            $input = $_POST["number"];
            $x = 1;
       
            if (isset($_POST["check"])) {
                if(empty($_POST['number'])){
                    $err_number = "vui long nhap";
                    $x = 2;
                }
                 if($x==1){
                    switch ($_POST['number'] % 7 == 0) {
                        case 7:
                            $err_number =  "chia het cho 7";
                            break;
                        default:
                        $err_number = "khong chia het cho 7";
                            break;
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
