<?php
$mang = range(1, 100); // Tạo mảng từ 1 đến 100

$viTriChiaHetCho3 = array(); // Mảng lưu trữ vị trí các số chia hết cho 3

for ($i = 0; $i < count($mang); $i++) {
    if ($mang[$i] % 3 == 0) {
        $viTriChiaHetCho3[] = $i;
    }
}

echo "Các số chia hết cho 3 nằm ở vị trí: " . implode(', ', $viTriChiaHetCho3);
?>
