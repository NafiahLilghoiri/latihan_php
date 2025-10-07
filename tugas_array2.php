<!DOCTYPE html>
<html>
<head>
  <title>Tugas Array PHP</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background-color: #ffe4ec;
      color: #333;
      text-align: center;
      padding: 20px;
    }
    h1 {
      background-color: #ffb6c1;
      color: white;
      padding: 10px;
      border-radius: 15px;
      width: 60%;
      margin: 20px auto;
      box-shadow: 0 0 10px #ff8ba0;
    }
    table {
      margin: 10px auto;
      border-collapse: collapse;
      width: 60%;
      background-color: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
    }
    th, td {
      border: 1px solid #ffb6c1;
      padding: 10px;
    }
    th {
      background-color: #ffb6c1;
      color: white;
    }
    .section {
      margin-top: 30px;
      padding: 15px;
      border-radius: 15px;
      background-color: #fff0f5;
      width: 70%;
      margin-left: auto;
      margin-right: auto;
      box-shadow: 0 0 8px rgba(255, 182, 193, 0.6);
    }
  </style>
</head>
<body>
  <h1>✨ Tugas Array PHP ✨</h1>

  <!-- Soal 1 -->
  <div class="section">
    <h2>Soal 1</h2>
    <?php
    $siswa = [
      ["Andi", 80, 85],
      ["Budi", 90, 88],
      ["Citra", 75, 92]
    ];

    echo "<p>Nilai Bahasa siswa ke-2: <b>" . $siswa[1][2] . "</b></p>";

    echo "<table>
          <tr><th>Nama</th><th>Matematika</th><th>Bahasa</th></tr>";
    foreach ($siswa as $data) {
      echo "<tr>";
      foreach ($data as $nilai) {
        echo "<td>$nilai</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
    ?>
  </div>

  <!-- Soal 2 -->
  <div class="section">
    <h2>Soal 2</h2>
    <?php
    $buah = [
      ["Apel", 15000, 10],
      ["Jeruk", 12000, 8],
      ["Mangga", 20000, 5]
    ];

    echo "<p>Nama buah pertama: <b>" . $buah[0][0] . "</b></p>";

    $total = 0;
    foreach ($buah as $b) {
      $total += $b[1] * $b[2];
    }

    echo "<p>Total nilai stok × harga semua buah: <b>Rp " . number_format($total, 0, ',', '.') . "</b></p>";

    echo "<table>
          <tr><th>Nama Buah</th><th>Harga</th><th>Stok</th></tr>";
    foreach ($buah as $b) {
      echo "<tr><td>$b[0]</td><td>Rp " . number_format($b[1], 0, ',', '.') . "</td><td>$b[2]</td></tr>";
    }
    echo "</table>";
    ?>
  </div>

  <!-- Soal 3 -->
  <div class="section">
    <h2>Soal 3</h2>
    <?php
    $produk = [
      ["nama" => "Laptop", "kategori" => "Elektronik", "harga" => 8500000, "rating" => 4.8],
      ["nama" => "Headphone", "kategori" => "Aksesoris", "harga" => 350000, "rating" => 4.6],
      ["nama" => "Smartphone", "kategori" => "Elektronik", "harga" => 9500000, "rating" => 4.9]
    ];

    $tertinggi = max(array_column($produk, "harga"));
    $produk_termahal = array_filter($produk, fn($p) => $p["harga"] == $tertinggi);
    $p = reset($produk_termahal);

    echo "<p>Produk dengan harga tertinggi: <b>{$p['nama']}</b> (Rp " . number_format($p['harga'], 0, ',', '.') . ")</p>";

    echo "<table>
          <tr><th>Nama Produk</th><th>Kategori</th><th>Harga</th><th>Rating</th></tr>";
    foreach ($produk as $item) {
      echo "<tr><td>{$item['nama']}</td><td>{$item['kategori']}</td>
            <td>Rp " . number_format($item['harga'], 0, ',', '.') . "</td><td>{$item['rating']}</td></tr>";
    }
    echo "</table>";
    ?>
  </div>

  <!-- Soal 4 -->
  <div class="section">
    <h2>Soal 4</h2>
    <?php
    $angka = [];
    for ($i=0; $i<3; $i++) {
      for ($j=0; $j<3; $j++) {
        $angka[$i][$j] = rand(1,9);
      }
    }

    echo "<table>";
    foreach ($angka as $baris) {
      echo "<tr>";
      foreach ($baris as $nilai) {
        echo "<td>$nilai</td>";
      }
      echo "</tr>";
    }
    echo "</table>";

    $jumlah = 0;
    foreach ($angka as $baris) {
      foreach ($baris as $nilai) {
        $jumlah += $nilai;
      }
    }

    echo "<p>Jumlah total semua elemen: <b>$jumlah</b></p>";
    ?>
  </div>

</body>
</html>
