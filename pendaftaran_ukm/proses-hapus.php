<?php

$ambil_npm = $_GET["kirim_npm"];

include("koneksi.php");
$perintah = "DELETE FROM tbl_pendaftaran WHERE npm = '$ambil_npm'";
$eksekusi = mysqli_query($conn, $perintah);

$cek = mysqli_affected_rows($conn);

if($cek>0){
    echo "<script>alert('Hapus Data Berhasil');</script>";
    //header("location:index.php");
    echo "<meta http-equiv='refresh' content='0;URL=index.php' />  ";
}
else{
    echo "<script>alert('Hapus Data Gagal!');</script>";
}