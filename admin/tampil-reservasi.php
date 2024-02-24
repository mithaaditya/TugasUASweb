<!DOCTYPE php>
<php lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/logo/icon.png" type="image/x-icon">
    <link href="DataTables/datatables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="styleseet">
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="styleseet">

 
    <!-- Bootstrap CSS -->

    <title>The Sultan Cafe</title>
    <style>
      body {
        padding-top: 100px;
      }
        </style>
  </head>
<body >

<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location: login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1>Data Reservasi</h1>
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

            <table id="example" class="table table-dark table-striped">
                
                <thead>
                    <tr>
                        <th>Nama Pemesan</th><th>Email Makanan</th><th>No Hp</th><th>Jumlah Tamu</th><th>Tanggal</th><th>Waktu Makan</th><th>Tambahan Pesan</th>
                        <th>
                            <a href="reservasi.php">
                                <button style="background-color: #0d6efd;" type="button" class="btn btn-primary btn-sm">
                                    <span   class="bi-plus-square-fill"></span>&nbsp;Add
                                </button>
                            </a>
                        </th>
                    </tr> 
                </thead> 
                <tbody>
                    <?php
                    include "koneksi.php";
                    $sql=$koneksi->query("select * from reservasi order by name ASC");
                    while($row= $sql->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['nohp']?></td>
                        <td><?php echo $row['number_guest']?></td>
                        <td><?php echo $row['date']?></td>
                        <td><?php echo $row['waktu']?></td>
                        <td><?php echo $row['message']?></td>
                        <td>
                            <a href="edit-reservasi.php?id=<?php echo $row['id_reservasi']?>">
                                <button class="bi bi-pencil-square"></button>
                            </a>
                            <a href="hapus-reservasi.php?id=<?php echo $row['id_reservasi']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                                <button class="bi bi-trash" placeholder="Hapus"></button>
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
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript">
 	
new DataTable('#example');
</script>

</body>
</html>
