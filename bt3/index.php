<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisibility Check</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="number" id="number" required>
        <button type="submit" name="check">Check Divisibility</button>
    </form>

    <?php
        if (isset($_POST["check"])) {
                $input = $_POST["number"];
                    $number = intval($input);
                    if ($number % 7 === 0) {
                        echo "<p>The number $number is divisible by 7.</p>";
                    } else {
                        echo "<p>The number $number is not divisible by 7.</p>";
                    }
        }
    
    ?>
</body>
</html>
