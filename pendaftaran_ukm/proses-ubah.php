<?php
$ambil_npm = $_POST["old_npm"];
$get_npm = $_POST["var_npm"];
$get_nama = $_POST["var_nama"];
$get_ukm = $_POST["var_ukm"];

include("koneksi.php");

$perintah = "UPDATE tbl_pendaftaran SET NPM='$get_npm', Nama='$get_nama',UKM='$get_ukm' WHERE npm = '$ambil_npm'";
$eksekusi = mysqli_query($conn, $perintah);

$cek = mysqli_affected_rows($conn);

if($cek>0){
    echo "<script>alert('Data Berhasil diubah');</script>";
    //header("location:index.php");
    echo "<meta http-equiv='refresh' content='0;URL=index.php' />  ";
}
else{
    echo "<script>alert('ubah Data Gagal!');</script>";
}