<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['fullname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $hometown = $_POST['hometown'];
    $level = $_POST['level'];
    $group = $_POST['group'];

    $sql = "INSERT INTO table_students (fullname, dob, gender, hometown, level, `group`) 
            VALUES ('$fullname', '$dob', '$gender', '$hometown', '$level', '$group')";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Thêm sinh viên</title>
    <link rel="stylesheet" href="chinhsua.css">
</head>
<body>
    <h1>Thêm sinh viên</h1>
    <form method="POST">
        <label>Họ và tên:</label>
        <input type="text" name="fullname" required><br>

        <label>Ngày sinh:</label>
        <input type="date" name="dob" required><br>

        <label>Giới tính:</label>
        <input type="radio" name="gender" value="1" required> Nam
        <input type="radio" name="gender" value="0" required> Nữ<br>

        <label>Quê quán:</label>
        <input type="text" name="hometown" required><br>

        <label>Trình độ học vấn:</label>
        <select name="level" required>
            <option value="0">Tiến sĩ</option>
            <option value="1">Thạc sĩ</option>
            <option value="2">Kỹ sư</option>
            <option value="3">Khác</option>
        </select><br>

        <label>Nhóm:</label>
        <input type="number" name="group" required><br>

        <button type="submit">Lưu</button>
    </form>
</body>
</html>