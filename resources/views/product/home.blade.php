<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang Home</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f4f8;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            background: white;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 15px;
        }

        a {
            display: block;
            padding: 12px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            text-align: center;
            transition: 0.3s;
        }

        a:hover {
            background: #2980b9;
        }

        .divider {
            margin: 20px 0;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>

<div class="box">
    <h1>Trang Home</h1>

    <ul>
        <!-- PHẦN CŨ -->
        <li>
            <a href="{{ route('product.index') }}">
                📦 Danh sách sản phẩm
            </a>
        </li>

        <li>
            <a href="/sinhvien">
                🎓 Thông tin sinh viên
            </a>
        </li>

        <li>
            <a href="/banco/8">
                ♟️ Bàn cờ
            </a>
        </li>
    </ul>

    <div class="divider"></div>


    <ul>
        <!-- Sign in -->
        <li>
            <a href="{{ route('signin') }}">
                📝 Đăng ký tài khoản
            </a>
        </li>

        <!-- Age -->
        <li>
            <a href="{{ route('age.form') }}">
                🔞 Nhập tuổi
            </a>
        </li>
    </ul>
</div>

</body>
</html>
