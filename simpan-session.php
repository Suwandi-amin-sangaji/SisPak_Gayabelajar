<?php
include ("koneksi.php");
$user = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_kelamin = (isset($_POST['jenis_kelamin']));
    session_start(); 
    $_SESSION['nama'] = $user;//nyimpen session nama
    $_SESSION['umur'] = $umur; //nyimpen session umur
    $_SESSION['jenis_kelamin'] = $jenis_kelamin; //nyimpen session jenis kelamin
    header('location:pertanyaan.php');

?>