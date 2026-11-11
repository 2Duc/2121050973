<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>
<body>
    <h1>Trang chủ</h1>
    <?php
        session_start();
        // Nếu chưa đăng nhập thì chưa chuyển trang
        if (!isset($_SESSION['dangnhap'])) {
            header('Location: dangnhap.php');
        }
    ?>
</body>
</html>