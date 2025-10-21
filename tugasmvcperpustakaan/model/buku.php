<?php 
class buku { 
    private $databuku = [ 
    ["judul" => "Laskar Pelangi", "pengarang" => "Andrea Hirata", "tahun" => 2005],
    ["judul" => "Bumi Manusia", "pengarang" => "Pramoedya Ananta Toer", "tahun" => 1980],
    ["judul" => "Negeri 5 Menara", "pengarang" => "Ahmad Fuadi", "tahun" => 2009]
];
    public function getAllproduk() {
        return $this->databuku;
    }
}
