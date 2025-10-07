<!DOCTYPE html>
<html>
<head>
    <title>Penjumlahan Matriks Lucu</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive;
            background-color: #ffe6f0; /* 🌸 Pink lembut */
            color: #333;
            text-align: center;
            margin-top: 40px;
            animation: fadeIn 1.5s ease-in-out;
        }

        table {
            margin: 10px auto;
            border-collapse: collapse;
        }

        td {
            border: 2px solid #ffb6c1;
            padding: 10px 15px;
            font-size: 18px;
            background-color: #fff0f5;
            border-radius: 8px;
            box-shadow: 0 0 5px #ffb6c1;
            animation: popIn 0.6s ease;
        }

        .judul {
            font-size: 22px;
            color: #ff4081;
            margin-bottom: 10px;
            animation: wiggle 1.5s infinite ease-in-out;
        }

        .hasil {
            background-color: #ffd6e7;
        }

        .matriks {
            display: inline-block;
            margin: 15px;
            transition: transform 0.3s;
        }

        .matriks:hover {
            transform: scale(1.05);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes popIn {
            from { opacity: 0; transform: scale(0.8); }
            to { opacity: 1; transform: scale(1); }
        }

        @keyframes wiggle {
            0%, 100% { transform: rotate(0deg); }
            25% { transform: rotate(2deg); }
            75% { transform: rotate(-2deg); }
        }

        p {
            color: #d63384;
            font-weight: bold;
            margin-top: 20px;
            font-size: 18px;
            animation: fadeIn 2s ease;
        }
    </style>
</head>
<body>
    <h1>💖 Penjumlahan Matriks 3x3 Lucu & Estetik 💖</h1>

    <?php
    // Matriks A dan B
    $A = [
        [1, 1, 1],
        [2, 2, 2],
        [3, 3, 3]
    ];
    $B = [
        [3, 3, 3],
        [2, 2, 2],
        [1, 1, 1]
    ];

    // Matriks hasil (kosong dulu)
    $C = [];

    // Tampilkan Matriks A
    echo "<div class='judul'>🌼 Matriks A 💕</div>";
    echo "<div class='matriks'><table>";
    for ($i = 0; $i < 3; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 3; $j++) {
            echo "<td>{$A[$i][$j]}</td>";
        }
        echo "</tr>";
    }
    echo "</table></div>";

    // Tampilkan Matriks B
    echo "<div class='judul'>🌸 Matriks B 💞</div>";
    echo "<div class='matriks'><table>";
    for ($i = 0; $i < 3; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 3; $j++) {
            echo "<td>{$B[$i][$j]}</td>";
        }
        echo "</tr>";
    }
    echo "</table></div>";

    // Penjumlahan dengan looping
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
        }
    }

    // Tampilkan hasil
    echo "<div class='judul'>🎀 Hasil Penjumlahan A + B 🎀</div>";
    echo "<div class='matriks'><table class='hasil'>";
    for ($i = 0; $i < 3; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 3; $j++) {
            echo "<td>{$C[$i][$j]}</td>";
        }
        echo "</tr>";
    }
    echo "</table></div>";
    ?>

    <p>✨ Tadaa~ Penjumlahan Matriksnya Cantik Banget 😍 ✨</p>
</body>
</html>
