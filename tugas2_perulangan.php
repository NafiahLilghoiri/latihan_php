<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Nilai Mahasiswa</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f6d365, #ff50d9ff);
            padding: 40px;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        form {
            margin: 20px auto;
            width: 400px;
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        input, button {
            padding: 10px;
            margin: 8px;
            width: 90%;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        button {
            background: #4CAF50;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover {
            background: #45a049;
        }
        table {
            width: 60%;
            margin: 20px auto;
            border-collapse: collapse;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background: #4CAF50;
            color: white;
        }
        .A { color: green; font-weight: bold; }
        .B { color: blue; font-weight: bold; }
        .C { color: orange; font-weight: bold; }
        .D, .E { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Input Nilai Mahasiswa</h1>

    <form method="post">
        <input type="text" name="nama" placeholder="Masukkan Nama" required>
        <input type="number" name="nilai" placeholder="Masukkan Nilai (0-100)" required>
        <button type="submit" name="simpan">Tambah Data</button>
    </form>

    <?php
    session_start();

    // Inisialisasi data jika belum ada
    if (!isset($_SESSION['data'])) {
        $_SESSION['data'] = [];
    }

    // Jika ada input disimpan
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];
        $_SESSION['data'][] = ["nama" => $nama, "nilai" => $nilai];
    }

    if (!empty($_SESSION['data'])) {
        echo "<table>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                </tr>";

        $no = 1;
        foreach ($_SESSION['data'] as $mhs) {
            $nilai = $mhs['nilai'];

            // Logika kontrol untuk menentukan grade
            if ($nilai >= 85) {
                $grade = "<span class='A'>A</span>";
            } elseif ($nilai >= 70) {
                $grade = "<span class='B'>B</span>";
            } elseif ($nilai >= 60) {
                $grade = "<span class='C'>C</span>";
            } elseif ($nilai >= 50) {
                $grade = "<span class='D'>D</span>";
            } else {
                $grade = "<span class='E'>E</span>";
            }

            echo "<tr>
                    <td>$no</td>
                    <td>{$mhs['nama']}</td>
                    <td>{$mhs['nilai']}</td>
                    <td>$grade</td>
                  </tr>";
            $no++;
        }
        echo "</table>";
    }
    ?>
</body>
</html>

