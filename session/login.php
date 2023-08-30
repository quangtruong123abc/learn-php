<!-- 
- LOGIN.PHP: thi co email va pass, lam tuong tu nhu trên
+ Ok het thi lay email va pass trong SS ra so sanh voi email va pass mới nhập vao.
+neu cả 2 cung = nhau thi thong bao login thanh cong , ngc lai login that bai
 -->
<?php 
session_start();
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
        if(isset($_POST['login'])){
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
                $email = $_POST['email'];
                $password = $_POST['password'];
                if ($_SESSION['email'] === $email && $_SESSION['password'] === $password){
                    $thongbao = "dang nhap thanh cong";
                } else {
                    $thongbao = "dang nhap that bai";
                }
                
            }
        }
        
    ?>

    <h1>login</h1>
    <p><?php echo $thongbao; ?></p>
    <form action="" method="POST">
        <input type="text" name="email">
        <p><?php echo $err_email; ?></p>

        <input type="text" name="password">
        <p><?php echo $err_pass; ?></p>
       
        <button type="submit" name="login">click</button>
    </form>


</body>
</html>
