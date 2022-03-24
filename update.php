<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$gambar   = $_POST['gambar'];
//$nim            = $_POST['nim'];
//$nama           = $_POST['nama'];
//$jurusan        = $_POST['jurusan'];
//$jenis_kelamin  = $_POST['jenis_kelamin'];
//$alamat         = $_POST['alamat'];
// query SQL untuk insert data
$query="UPDATE home SET gambar='$gambar'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
