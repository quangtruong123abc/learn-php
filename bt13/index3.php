<?php
$numberString = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

$numbers = array_map('intval', explode(', ', $numberString));

$average = array_sum($numbers) / count($numbers);
echo "Giá trị trung bình: " . $average . "<br>";

sort($numbers);

echo "5 phần tử nhỏ nhất: ";
for ($i = 0; $i < 5; $i++) {
    echo $numbers[$i] . " ";
}

echo "<br>5 phần tử lớn nhất: ";
$length = count($numbers);
for ($i = $length - 5; $i < $length; $i++) {
    echo $numbers[$i];
    if ($i < $length - 1) {
        echo ", ";
    }
}
?>
