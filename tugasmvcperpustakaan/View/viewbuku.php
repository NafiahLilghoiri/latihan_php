<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Daftar Buku Perpustakaan</title>
<style>
    body {
        background-color: #f9f4f0;
        color: #3c1414; /* mahogany */
        font-family: "Poppins", sans-serif;
        text-align: center;
    }
    h1 {
        color: #4a1f1f;
    }
    table {
        margin: 20px auto;
        border-collapse: collapse;
        width: 70%;
        background-color: #fffaf8;
        box-shadow: 0 0 10px rgba(60, 20, 20, 0.3);
        border-radius: 12px;
        overflow: hidden;
    }
    th, td {
        padding: 12px 20px;
        border-bottom: 1px solid #e0b7a4;
    }
    th {
        background-color: #6b2e2e;
        color: #fff;
    }
</style>
</head>
<body>
    <h1>📚 Daftar Buku Perpustakaan</h1>
    <table>
        <tr>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
        </tr>
        <tr>
            <td>Laskar Pelangi</td>
            <td>Andrea Hirata</td>
            <td>2005</td>
        </tr>
        <tr>
            <td>Bumi Manusia</td>
            <td>Pramoedya Ananta Toer</td>
            <td>1980</td>
        </tr>
        <tr>
            <td>Negeri 5 Menara</td>
            <td>Ahmad Fuadi</td>
            <td>2009</td>
        </tr>
    </table>
     <?php 
    class viewbuku { 
        public function tampilkan($buku) { 
            echo "<ul>"; 
            foreach ($buku as $p) {}
            echo "</ul>"; 
        } 
    }
    ?> 
</body>
</html>
