<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location: login.php");
  }
?>
<?php

$nama=$_POST['nama'];
$jenis_makanan=$_POST['jenis_makanan'];
$jumlah=$_POST['jumlah'];
$harga=$_POST['harga'];
$total=$_POST['total'];

include "koneksi.php";

$simpan=$koneksi->query("insert into makanan(nama,jenis_makanan,jumlah,harga,total) 
                        values ('$nama','$jenis_makanan','$jumlah', '$harga','$total')");
if($simpan==true){

    header("location:food-detail.php? pesan=inputBerhasil");
} else{
    echo "Error";
}




?>