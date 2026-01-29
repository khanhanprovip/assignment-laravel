<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
</head>
<body>

<h2>Đăng ký tài khoản</h2>

<form action="{{ route('check.signin') }}" method="POST">
    @csrf

    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="password" name="repass" placeholder="Nhập lại password"><br><br>

    <input type="text" name="mssv" placeholder="MSSV"><br><br>
    <input type="text" name="lopmonhoc" placeholder="Lớp môn học"><br><br>

    <select name="gioitinh">
        <option value="nam">Nam</option>
        <option value="nu">Nữ</option>
    </select><br><br>

    <button type="submit">Sign In</button>
</form>

</body>
</html>
