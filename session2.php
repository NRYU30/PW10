<?php
session_start();

//pemeriksaan session
if (isset($_SESSION['Login']))  {
    //jika sudah login
    //menampilkan isi session
    echo "<h1>Selamat Datang ". $_SESSION['Login'] ."<h1>";
    echo "<h2>Halaman ini hanya bisa diakses jika anda sudah
 login</h2>";
    echo "<h2>Klik <a href=' session3.php'>di sini 
(session03.php) </a untuk LOGOUT</h2>";
} else {
    //session belum ada artinya belum login
    die ("Anda belum login! Anda tidak berhak masuk ke halaman login <a href='session1.php'>di sini</a>");
}
?>