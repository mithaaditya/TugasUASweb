<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/logo/icon.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="main/style.css">


    <title>The Sultan Cafe</title>
<style>
      body {
        padding-top: 100px;
      }
        </style>
</head>
<body>
<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Data siswa</h1>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>

            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>NIM</th><th>Nama</th><th>Kelas</th><th>Jenis Kelamin</th><th>Kehadiran</th>
                <th>
                    <a href="input-makanan.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from makanan order by nama ASC");

        while($row= $sql->fetch_assoc()){
        ?>

             <tr>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['jenis_makanan']?></td>
                <td><?php echo $row['jumlah']?></td>
                <td><?php echo $row['harga']?></td>
                 <td><?php echo $row['total']?></td>
                <td>
            
                <a href="edit-makanan.php?id=<?php echo $row['nama']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-siswa.php?id=<?php echo $row['nama']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>



<?php include "footer.php";?>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>