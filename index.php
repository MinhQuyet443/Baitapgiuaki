<?php
include 'connect.php';

$search = isset($_GET['search']) ? $_GET['search'] : '';
$sql = "SELECT * FROM table_students WHERE fullname LIKE '%$search%' OR hometown LIKE '%$search%'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h1>Danh sách sinh viên</h1>
    

    <form method="GET">
        <input type="text" name="search" placeholder="Tìm kiếm sinh viên" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
        <button type="submit">Tìm kiếm</button>
    </form>
    
   
    <table border="1">
        <tr>
            <th>Thứ tự</th>
            <th>Họ và tên</th>
            <th>Ngày sinh</th>
            <th>Giới tính</th>
            <th>Quê quán</th>
            <th>Trình độ học vấn</th>
            <th>Nhóm</th>
            <th>Hành động</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['fullname']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['gender'] == 1 ? "Nam" : "Nữ"; ?></td>
            <td><?php echo $row['hometown']; ?></td>
            <td>
                <?php
                switch ($row['level']) {
                    case 0: echo "Tiến sĩ"; break;
                    case 1: echo "Thạc sĩ"; break;
                    case 2: echo "Kỹ sư"; break;
                    default: echo "Khác"; break;
                }
                ?>
            </td>
            <td><?php echo "Nhóm " . $row['group']; ?></td>
            <td>
                <a href="chinhsua.php?id=<?php echo $row['id']; ?>">Sửa</a> |
                <a href="xoa.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <a href="add.php">Thêm sinh viên</a>
</body>
</html>