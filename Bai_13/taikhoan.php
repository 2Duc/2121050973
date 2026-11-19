<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
        }
        tr, th, td {
            border: 1px solid black;
        }
        .btn-add {
            background-color: green;
            padding: 10px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1>Tài khoản</h1>
    <div style="margin: 20px 0;">
        <a class="btn-add" href="index.php?page_layout=themtaikhoan">Thêm tài khoản</a>
    </div>
    
    <?php
        $sql = "select * from nguoi_dung";
        $result = mysqli_query($conn, $sql);
    ?>

    <table>
        <tr>
            <th>id</th>
            <th>Tên đăng nhập</th>
            <th>email</th>
            <th>Họ tên</th>
            <th>Ngày sinh</th>
            <th>Số điện thoại</th>
            <th>Giới tính</th>
        </tr>
        <?php
            while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php $row['id'] ?></td>
            <td><?php $row['ten_dang_nhap'] ?></td>
            <td><?php $row['email'] ?></td>
            <td><?php $row['ho_ten'] ?></td>
            <td><?php $row['ngay_sinh'] ?></td>
            <td><?php $row['so_dien_thoai'] ?></td>
            <td><?php $row['gioi_tinh'] ?></td>
        </tr>
        <?php
           
            }
        ?>
    </table>
</body>
</html>