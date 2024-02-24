<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location: ../login.php");
  }
?>
<?php

$name=$_POST['name'];
$email=$_POST['email'];
$nohp=$_POST['nohp'];
$number_guest=$_POST['number_guest'];
$date=$_POST['date'];
$waktu=$_POST['waktu'];
$message=$_POST['message'];


include "../koneksi.php";

$simpan=$koneksi->query("insert into reservasi(name,email,nohp,number_guest,date,waktu,message) 
                        values ('$name','$email','$nohp','$number_guest','$date','$waktu','$message')");
if($simpan==true){

    header("location:tampil-reservasi.php? pesan=inputBerhasil");
} else{
    echo "Error";
}
?>