<?php 
include_once "../config/koneksi.php";

$id             = $_POST['id'];
$owner          = trim($_POST['owner']);
$harga_tawaran  = trim($_POST['harga_tawaran']);
$kandidat       = trim($_POST['kandidat']);
$nope           = trim($_POST['nope']);
$email           = trim($_POST['email_kandidat']);

if(empty($owner) || empty($harga_tawaran) || empty($kandidat) || empty($nope || empty($email))){
    echo "<script>alert('Lengkapi Data Anda.');window.location='main.php?page=item&&id=$id';</script>";
} else {
    $query = "INSERT INTO t_lelang (kandidat,harga_tawar,nope_kandidat,user_id,barang_id,email_kandidat) VALUES (
        '$kandidat',
        '$harga_tawaran',
        '$nope',
        '$owner',
        '$id',
        '$email'
    )";
    
    $excute = mysqli_query($koneksi,$query);
    if($excute){
        echo "<script>alert('Tawaran Masuk Antrian.');window.location='main.php?page=item&&id=$id';</script>";
    }
}
?>