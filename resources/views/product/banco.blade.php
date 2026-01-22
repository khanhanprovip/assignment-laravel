<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bàn cờ vua</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Nút về Home */
        .home-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            background: #333;
            color: #fff;
            padding: 10px 16px;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
            transition: 0.3s;
        }

        .home-btn:hover {
            background: #555;
        }

        .board {
            border: 8px solid #333;
            box-shadow: 0 10px 25px rgba(0,0,0,0.4);
        }

        table {
            border-collapse: collapse;
        }

        td {
            width: 70px;
            height: 70px;
        }

        .white {
            background-color: #f0d9b5;
        }

        .black {
            background-color: #b58863;
        }

        h2 {
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<!-- Nút về Home -->
<a href="{{ url('/') }}" class="home-btn">⬅ Quay về Home</a>




<div>
    <h2>Bàn cờ vua {{ $n }} × {{ $n }}</h2>

    <div class="board">
        <table>
            @for ($i = 0; $i < $n; $i++)
                <tr>
                    @for ($j = 0; $j < $n; $j++)
                        <td class="{{ ($i + $j) % 2 == 0 ? 'white' : 'black' }}"></td>
                    @endfor
                </tr>
            @endfor
        </table>
    </div>
</div>

</body>
</html>
