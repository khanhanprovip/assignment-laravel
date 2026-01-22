<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: #fff;
            width: 380px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input {
            padding: 12px;
            font-size: 15px;
            border-radius: 6px;
            border: 1px solid #ccc;
            outline: none;
        }

        input:focus {
            border-color: #3498db;
        }

        button {
            padding: 12px;
            font-size: 16px;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        button:hover {
            background: #2980b9;
        }

        .back-btn {
            text-align: center;
            margin-top: 15px;
            display: block;
            color: #555;
            text-decoration: none;
            font-size: 14px;
        }

        .back-btn:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>➕ Thêm sản phẩm</h1>

    <form method="POST" action="">
        @csrf
        <input type="text" name="name" placeholder="Nhập tên sản phẩm" required>
        <button type="submit">Thêm</button>
    </form>

<a href="{{ url('/') }}" class="home-btn">⬅ Quay về Home</a>
</div>

</body>
</html>
