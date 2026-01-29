<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nhập tuổi</title>
</head>
<body>

<h2>Nhập tuổi của bạn</h2>

<form action="/set-age" method="POST">
    @csrf
    <input type="text" name="age" placeholder="Nhập tuổi">
    <button>Lưu</button>
</form>

</body>
</html>
