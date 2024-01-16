<?php
    $db = mysqli_connect("localhost", "root","", "dinashop");
    if (!$db) {
        die("tidak bisa terhubung = ".mysqli_connect_error());
    }
?>