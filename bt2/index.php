<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

    <?php 

        
        // echo $_POST['email']."---".$_POST['password'];
       
       // $data = $_REQUEST;

       // echo "<pre>";
       // var_dump($data);

       // echo $data['email'];

        $err_email = "";
        $err_pass = "";
        $thongbao = "";
        // kiem tra da click form chua
        if(isset($_POST['click'])){

            $x = 1;
            // kiem tra email đa nhâp chưa
            if(empty($_POST['email'])){
                $err_email = "vui long nhap email";
                $x = 2;
            }

            if(empty($_POST['password'])){
                $err_pass = "vui long nhap password";
                $x = 2;
            }

            // if(!empty($_POST['email']) && !empty($_POST['email'])){
            if($x==1){
                $thongbao = "da ok";
            }
        }
     
    ?>
    
    <!-- co 3 cach de lay value trong form ra" -->
    <!-- GET:
    - khi nhập data vao form thi nó hien data len url, kèm name
    - k bao mật do làm lộ thông tin lên url
    - lây data tren url ve thi dung GET 
    

    -->

    <!-- post:
    - k lam hiển thi thông tin lên url
    - bảo mật vì k lộ thông tin
    - lây vê thi dung POST -->

    <!-- - REQUEST(LARAVEL): tra ve 1 mang gôm value va name đã nhập vao -->

    <!-- isset: kiem tra 1 bien co tồn tại k?
    empty: kiem tra 1 bien co giá tri k? -->


    <h1>xu ly form</h1>
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