<?php

$get_npm = $_POST["var_npm"];
$get_nama = $_POST["var_nama"];
$get_ukm = $_POST["var_ukm"];

include("koneksi.php");
$perintah = "INSERT INTO tbl_pendaftaran (npm, nama, ukm) VALUES('$get_npm','$get_nama','$get_ukm')";
$eksekusi = mysqli_query($conn, $perintah);

$cek = mysqli_affected_rows($conn);

if($cek>0){
    echo "<script>alert('Simpan Data Berhasil');</script>";
    //header("location:index.php");
    echo "<meta http-equiv='refresh' content='0;URL=index.php' />  ";
}
else{
    echo "<script>alert('Simpan Data Gagal!');</script>";
}