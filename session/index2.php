<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Check</title>
</head>
<body>
    <h1>Session Check</h1>
    <?php
    if(isset($_SESSION['name'])){
        echo 'ten dang nhap la: ' . $_SESSION['name'] ;
    }
    ?>
</body>
</html>

