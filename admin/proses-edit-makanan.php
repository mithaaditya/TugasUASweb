<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['id_makanan'];
$nama=$_POST['nama'];
$jenis_makanan=$_POST['jenis_makanan'];
$jumlah=$_POST['jumlah'];
$harga=$_POST['harga'];
$total=$_POST['total'];

$ubah=$koneksi->query("update makanan set nama='$nama', jenis_makanan='$jenis_makanan', jumlah='$jumlah', harga='$harga',total='$total' where id_makanan='$id'");

if($ubah==true){

    header("location:tampil-makanan.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>