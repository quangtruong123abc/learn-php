<?php session_start();
if(isset($_POST['save-session']))
{
$_SESSION['name'] = $_POST['username'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="username" value=""/> <br/>
        <input type="submit" name="save-session" value="luu-session"/>
    </form>
    
</body>
</html>