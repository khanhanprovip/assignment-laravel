<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>

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
            width: 420px;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0 0 20px 0;
        }

        li {
            padding: 12px 15px;
            margin-bottom: 10px;
            background: #f0f2f5;
            border-radius: 6px;
            color: #333;
            font-size: 15px;
        }

        li:hover {
            background: #e3e7ed;
        }

        .add-btn {
            display: block;
            text-align: center;
            padding: 12px;
            background: #2ecc71;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: 0.3s;
        }

        .add-btn:hover {
            background: #27ae60;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Danh sách sản phẩm</h1>

    <ul>
        @foreach($products as $p)
            <li>{{ $p['name'] }}</li>
        @endforeach
    </ul>

    <a href="{{ route('product.add') }}" class="add-btn">➕ Thêm sản phẩm</a>
</div>

</body>
</html>
