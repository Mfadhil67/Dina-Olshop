<?php
    include 'koneksi.php';
    //mengambil dari method POST
    $id_produk = $_POST['id_produk'];

    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_POST['foto'];
    $status_produk = $_POST['status_produk'];
    $stock = $_POST['stock'];

    // insert ke dalam database
    $hasil = $db->query("UPDATE produk SET 
    nama_produk = '$nama_produk',
    harga = '$harga',
    deskripsi = '$deskripsi',
    foto_produk = '$foto',
    status_produk = '$status_produk',
    stock = '$stock'
    WHERE id_produk = $id_produk");

    // mengarahkan ke halaman daftar produk
    if($hasil){
        header('location:daftar_produk.php');

    }

?>