<?php 
$array = [ 
    [   // Tabel 1 
        ["elemen111", "elemen112", "elemen113"],  
        ["elemen121", "elemen122", "elemen123"] 
    ], 
    [   // Tabel 2 
        ["elemen211", "elemen212", "elemen213"], 
        ["elemen221", "elemen222", "elemen223"] 
    ] 
]; 

// Contoh menampilkan semua data
foreach ($array as $tabelIndex => $tabel) {
    echo "<h3>Tabel " . ($tabelIndex + 1) . "</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    foreach ($tabel as $baris) {
        echo "<tr>";
        foreach ($baris as $elemen) {
            echo "<td>$elemen</td>";
        }
        echo "</tr>";
    }
    echo "</table><br>";
}
?>
