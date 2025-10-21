<?php 
require_once "model/buku.php"; 
require_once "View/viewbuku.php"; 
 
class ProdukController { 
    public function index() { 
        $model = new buku(); 
        $View = new viewbuku(); 
 
        // Ambil data dari model 
        $buku = $model->getAllProduk(); 
 
        // Kirim data ke view 
        $View->tampilkan($buku); 
    } 
}
