<?php
    $db = mysqli_connect("localhost", "root","", "dinashop");
    $data = $db->query("select * FROM produk");
    if (!$db) {
        die("tidak bisa terhubung = ".mysqli_connect_error());
    }
?>