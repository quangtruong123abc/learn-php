<?php
$students = array(
    array(
        'name' => 'Nguyen Van Cuong 1',
        'email' => 'thehal@gmail.com',
        'age' => '29'
    ),
    array(
        'name' => 'Nguyen Van Cuong 2',
        'email' => 'thehal@gmail.com',
        'age' => '29'
    ),
    array(
        'name' => 'Nguyen Van Cuong 3',
        'email' => 'thehal@gmail.com',
        'age' => '29'
    ),
    array(
        'name' => 'Nguyen Van Cuong 4',
        'email' => 'thehal@gmail.com',
        'age' => '29'
    ),
    array(
        'name' => 'Nguyen Van Cuong 5',
        'email' => 'thehal@gmail.com',
        'age' => '29'
    ),
    array(
        'name' => 'Nguyen Van Cuong 6',
        'email' => 'thehal@gmail.com',
        'age' => '29'
    )
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
            width: 50%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Student List</h1>
    // sử dụng vòng lặp for in ra danh sách sinh viên và hiển thị nó trong table
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
        </tr>
        <?php
        $num_students = count($students);

        for ($i = 0; $i < $num_students; $i++) {
            $student = $students[$i];
        ?>
        <tr>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['email']; ?></td>
            <td><?php echo $student['age']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
