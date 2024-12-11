<?php
include 'connect.php';


$id = $_GET['id'];
$sql = "SELECT * FROM table_students WHERE id = $id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $student = $result->fetch_assoc();
} else {
    echo "Không tìm thấy sinh viên!";
    exit;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['fullname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $hometown = $_POST['hometown'];
    $level = $_POST['level'];
    $group = $_POST['group'];

    $updateSql = "UPDATE table_students 
                  SET fullname = '$fullname', dob = '$dob', gender = '$gender', 
                      hometown = '$hometown', level = '$level', `group` = '$group'
                  WHERE id = $id";

    if ($conn->query($updateSql) === TRUE) {
        header('Location: index.php'); 
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sửa thông tin sinh viên</title>
   <link rel="stylesheet" href="chinhsua.css">
</head>
<body>
    <h1>Sửa thông tin sinh viên</h1>
    <form method="POST">
        <label>Họ và tên:</label>
        <input type="text" name="fullname" value="<?= $student['fullname'] ?>" required><br>

        <label>Ngày sinh:</label>
        <input type="date" name="dob" value="<?= date('Y-m-d', strtotime($student['dob'])) ?>" required><br>

        <label>Giới tính:</label>
        <input type="radio" name="gender" value="1" <?= $student['gender'] == 1 ? 'checked' : '' ?>> Nam
        <input type="radio" name="gender" value="0" <?= $student['gender'] == 0 ? 'checked' : '' ?>> Nữ<br>

        <label>Quê quán:</label>
        <input type="text" name="hometown" value="<?= $student['hometown'] ?>" required><br>

        <label>Trình độ học vấn:</label>
        <select name="level" required>
            <option value="0" <?= $student['level'] == 0 ? 'selected' : '' ?>>Tiến sĩ</option>
            <option value="1" <?= $student['level'] == 1 ? 'selected' : '' ?>>Thạc sĩ</option>
            <option value="2" <?= $student['level'] == 2 ? 'selected' : '' ?>>Kỹ sư</option>
            <option value="3" <?= $student['level'] == 3 ? 'selected' : '' ?>>Khác</option>
        </select><br>

        <label>Nhóm:</label>
        <input type="number" name="group" value="<?= $student['group'] ?>" required><br>

        <button type="submit">Lưu</button>
    </form>
</body>
</html>