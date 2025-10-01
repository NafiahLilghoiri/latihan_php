<?php
// ----------------- FUNGSI 1 -----------------
function terbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

// ----------------- FUNGSI 2 -----------------
$sekarang = getdate();
$tanggal_getdate = $sekarang["mday"] . "-" . $sekarang["mon"] . "-" . $sekarang["year"];

// ----------------- FUNGSI 3 -----------------
$tanggal_date = date('d-F-Y');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas Fungsi PHP</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #e1fe89ff, #ff72c0ff);
            color: #333;
            text-align: center;
            padding: 30px;
        }
        h1 {
            background: #fff;
            padding: 15px;
            border-radius: 15px;
            display: inline-block;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.2);
        }
        .card {
            background: #fff;
            margin: 20px auto;
            padding: 20px;
            border-radius: 15px;
            width: 400px;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.2);
            transition: 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .result {
            font-size: 18px;
            color: #444;
            margin-top: 10px;
        }
        .highlight {
            font-weight: bold;
            color: #007BFF;
        }
    </style>
</head>
<body>

    <h1>✨ Tugas Fungsi PHP ✨</h1>

    <div class="card">
        <h2>1️⃣ Bilangan Terbesar</h2>
        <?php
        $bil1 = 250;
        $bil2 = 500;
        echo "<div class='result'>Bilangan pertama: <span class='highlight'>$bil1</span><br>";
        echo "Bilangan kedua: <span class='highlight'>$bil2</span><br>";
        echo "Bilangan terbesar adalah: <span class='highlight'>" . terbesar($bil1, $bil2) . "</span></div>";
        ?>
    </div>

    <div class="card">
        <h2>2️⃣ Tanggal Sekarang (getdate)</h2>
        <div class="result">
            <?= "Hari ini: <span class='highlight'>$tanggal_getdate</span>"; ?>
        </div>
    </div>

    <div class="card">
        <h2>3️⃣ Tanggal Sekarang (date)</h2>
        <div class="result">
            <?= "Hari ini: <span class='highlight'>$tanggal_date</span>"; ?>
        </div>
    </div>

</body>
</html>
