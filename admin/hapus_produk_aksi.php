<?php 
    include 'koneksi.php';
    // mengambil id dari method get
    $id_produk = $_GET['id_produk'];

    //menghapus
    $hasil =$db->query("DELETE FROM produk WHERE id_produk=$id_produk");

    // mengarahkan ke halaman daftar produk
    if($hasil){
        header('location:daftar_produk.php');

    }
?>