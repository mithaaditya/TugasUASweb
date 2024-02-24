<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location: login.php");
  }
?>
<?php

$nama=$_POST['nama'];
$jenis_minuman=$_POST['jenis_minuman'];
$jumlah=$_POST['jumlah'];
$harga=$_POST['harga'];
$total=$_POST['total'];

include "koneksi.php";

$simpan=$koneksi->query("insert into minuman(nama,jenis_minuman,jumlah,harga,total) 
                        values ('$nama','$jenis_minuman','$jumlah', '$harga','$total')");
if($simpan==true){

    header("location:drink-detail.php? pesan=inputBerhasil");
} else{
    echo "Error";
}




?>