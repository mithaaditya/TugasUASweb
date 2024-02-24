<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['id_reservasi'];
$name=$_POST['name'];
$email=$_POST['email'];
$nohp=$_POST['nohp'];
$number_guest=$_POST['number_guest'];
$date=$_POST['date'];
$waktu=$_POST['waktu'];
$message=$_POST['message'];

$ubah=$koneksi->query("update reservasi set name='$name', email='$email', nohp='$nohp', number_guest='$number_guest',date='$date', waktu='$waktu',message='$message' where id_reservasi='$id'");

if($ubah==true){

    header("location:tampil-reservasi.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>