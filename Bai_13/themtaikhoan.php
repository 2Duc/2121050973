<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .khoi {
            border: 1px solid black;
            border-radius: 10px;
            width: 250px;
            margin: 20px auto;
            background-color: antiquewhite;
        }
        input {
            padding: 5px 0;
            margin: 10px 0;
        }

        form {
            padding: 10px;
        }
        h1 {
            margin: 5px 0;
            text-align: center;
        }
        p {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Thêm tài khoản</h1>
    <form action="" method="post">
        <div class="">
            <input type="text" name="tenDangNhap" placeholder="Tên đăng nhập">
        </div>
        <div class="">
            <input type="password" name="matKhau" placeholder="Mật khẩu">
        </div>
        <div class="">
            <input type="email" name="email" placeholder="Email">
        </div>
        <div class="">
            <input type="text" name="hoVaTen" placeholder="Họ và tên">
        </div>
        <div class="">
            <input type="date" name="ngaySinh" placeholder="Ngày sinh">
        </div>
        <div class="">
            <input type="text" name="soDienThoai" placeholder="Số điện thoại">
        </div>
        <div class="">
            <input type="radio" name="gioiTinh"> Nam
            <input type="radio" name="gioiTinh"> Nữ
        </div>
    </form>
</body>
</html>