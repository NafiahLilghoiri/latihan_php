<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perulangan 100 - 1000</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #a8edea, #fed6e3);
            text-align: center;
            padding: 40px;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 28px;
        }
        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(80px, 1fr));
            gap: 12px;
            margin-top: 20px;
        }
        .box {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 15px;
            font-size: 18px;
            color: #444;
            transition: 0.3s;
        }
        .box:hover {
            transform: scale(1.1);
            background: #f9f9f9;
            color: #000;
            box-shadow: 0 6px 12px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <h1>Perulangan Angka dari 100 sampai 1000</h1>
    <div class="container">
        <?php
            for ($i = 100; $i <= 1000; $i++) {
                echo "<div class='box'>$i</div>";
            }
        ?>
    </div>
</body>
</html>

