<?php
// Inisialisasi variabel hasil
$hasil = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil input dari form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $umur     = $_POST["umur"];
    $role     = $_POST["role"];
    $nilai    = $_POST["nilai"];
    $stok     = $_POST["stok"];

    // 1. Login
    if ($username == "admin" && $password == "12345") {
        $hasil .= "<p>✅ Login berhasil!</p>";
    } else {
        $hasil .= "<p>❌ Login gagal!</p>";
    }

    // 2. Cek umur
    if ($umur >= 18) {
        $hasil .= "<p>👤 Umur $umur → Boleh mendaftar.</p>";
    } else {
        $hasil .= "<p>👤 Umur $umur → Belum cukup umur.</p>";
    }

    // 3. Cek role
    if ($role == "admin") {
        $hasil .= "<p>🛠️ Role: Admin → Akses penuh.</p>";
    } else {
        $hasil .= "<p>👥 Role: User → Akses terbatas.</p>";
    }

    // 4. Cek nilai mahasiswa
    if ($nilai >= 60) {
        $hasil .= "<p>🎓 Nilai $nilai → Lulus.</p>";
    } else {
        $hasil .= "<p>🎓 Nilai $nilai → Tidak Lulus.</p>";
    }

    // 5. Cek stok barang
    if ($stok > 0) {
        $hasil .= "<p>📦 Stok tersedia: $stok</p>";
    } else {
        $hasil .= "<p>📦 Stok habis.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Demo Percabangan PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #fc93f2ff, #ACB6E5);
            padding: 30px;
        }
        .container {
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.2);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        button {
            background: #4CAF50;
            color: white;
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: #45a049;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background: #f1f1f1;
            border-radius: 10px;
        }
        .result p {
            margin: 8px 0;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>🔹 Percabangan PHP 🔹</h2>
        <form method="POST">
            <label>Username:</label>
            <input type="text" name="username" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <label>Umur:</label>
            <input type="number" name="umur" required>

            <label>Role:</label>
            <select name="role">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>

            <label>Nilai:</label>
            <input type="number" name="nilai" required>

            <label>Stok Barang:</label>
            <input type="number" name="stok" required>

            <button type="submit">Proses</button>
        </form>

        <?php if (!empty($hasil)) : ?>
            <div class="result">
                <h3>🔎 Hasil:</h3>
                <?= $hasil; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
