<!-- - tao 1 register.php: ben trong co email, pass,
 + click vao thi báo lỗi nếu input nao chua nhập
 + ok het k còn lỗi nữa thi lay email va pass dua vao SS -->
<?php session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

    <?php 
        if(isset($_POST['save'])){
            $x = 1;
            if(empty($_POST['email'])){
                $err_email = "vui long nhap email";
                $x = 2;
            }

            if(empty($_POST['password'])){
                $err_pass = "vui long nhap password";
                $x = 2;
            }

            if($x==1){
                $thongbao = "da ok";
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['password'] = $_POST['password'];
            }
        }
    ?>

    

    <h1>register</h1>
    <p><?php echo $thongbao; ?></p>
    <form action="" method="POST">
        <input type="text" name="email">
        <p><?php echo $err_email; ?></p>

        <input type="text" name="password">
        <p><?php echo $err_pass; ?></p>
       
        <button type="submit" name="save">click</button>
    </form>


</body>
</html>