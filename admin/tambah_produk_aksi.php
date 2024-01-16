<?php
    include 'koneksi.php';

    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_POST['foto'];
    $status_produk = $_POST['status_produk'];
    $stock = $_POST['stock'];

    // insert ke dalam database
    $hasil = $db->query("INSERT INTO produk(nama_produk,harga, deskripsi, foto_produk, status_produk, stock)
    VALUES('$nama_produk', $harga, '$deskripsi', '$foto', '$status_produk', '$stock')");

    // mengarahkan ke halaman daftar produk
    if($hasil){
        header('location:daftar_produk.php');

    }

?>