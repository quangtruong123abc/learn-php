<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>

<?php

        $err_email = "";
        $err_subject = "";
        $err_message = "";
        $err_name = "";
        $thongbao = "";
if(isset($_POST['click'])){
    $x = 1;
    if(empty($_POST['email'])){
        $err_email = "vui long nhap email";
        $x = 2;
    }

    if(empty($_POST['name'])){
        $err_name = "vui long nhap name";
        $x = 2;
    }
    if(empty($_POST['subject'])){
        $err_subject = "vui long nhap subject";
        $x = 2;
    }
    if(empty($_POST['message'])){
        $err_message = "vui long nhap message";
        $x = 2;
    }

    if ($x==1){
        $thongbao ="Thank you for contacting us, ! We will get back to you soon.";
    }
 }
?>


    <h1>Contact Us</h1>
    <p><?php echo $thongbao; ?></p>
    <form action="" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <p><?php echo $err_name; ?></p>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <p><?php echo $err_email; ?></p>
        
        <label for="subject">Subject:</label><br>
        <input type="text" id="subject" name="subject"><br>
        <p><?php echo $err_subject; ?></p>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50"></textarea><br>
        <p><?php echo $err_message; ?></p>
        
        <input type="submit" name="click" value="Send">
    </form>
</body>
</html>
