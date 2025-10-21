<?php
include "connection.php";

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id = intval($_GET['id']); // tránh SQL injection

// Nếu người dùng đã xác nhận xóa
if (isset($_POST['confirm']) && $_POST['confirm'] === 'yes') {
    $query = "DELETE FROM table1 WHERE id = $id";
    if (mysqli_query($link, $query)) {
        header("Location: index.php?status=deleted");
        exit();
    } else {
        echo "Lỗi khi xóa: " . mysqli_error($link);
    }
}

// Nếu người dùng bấm hủy
if (isset($_POST['confirm']) && $_POST['confirm'] === 'no') {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Xác nhận xóa</title>
</head>
<body>
    <h3>Bạn có chắc chắn muốn xóa bản ghi có ID = <?php echo $id; ?> không?</h3>
    <form method="post">
        <button type="submit" name="confirm" value="yes"> Đồng ý</button>
        <button type="submit" name="confirm" value="no"> Hủy</button>
    </form>
</body>
</html>


