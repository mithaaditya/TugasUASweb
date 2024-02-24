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
            <br><br><br><br><br>
                <form action="proses-edit-makanan.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from makanan where id_makanan='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="nama"> Nama Pemesan</label>  
                        <input type="hidden" name="id_makanan" value="<?php echo $row['id_makanan']?>" class="form-control">
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Jenis_makanan"> Jenis Makanan</label>
                        <select name="jenis_makanan" class="form-control">
                        <option value="<?php echo $row['jenis_makanan']?>" selected><?php echo $row['jenis_makanan']?></option>
                            <option value="Ramen Ayam">Ramen Ayam</option>
                            <option value="Nasi Goreng Spesial"> Nasi Goreng Spesial</option>
                            <option value="Big Burger">Big Burger</option>
                            <option value="Steak"> Steak</option>
                            <option value="Mie Goreng Ayam">Mie Goreng Ayam</option>
                            <option value="Spageti"> Spageti</option>
                        </select>
                    </div>
  
                    <div class="form-group">
                        <label for="jumlah">Jumlah Makanan</label>
                        <select name="jumlah"  class="form-control">
                        <option value="<?php echo $row['jumlah']?>" selected><?php echo $row['jumlah']?></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="harga">Harga Makanan</label>
                        <input type="text" name="harga" value="<?php echo $row['harga']?>"class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="total">Total Makanan</label>
                        <input type="text" name="total" value="<?php echo $row['total']?>"class="form-control">
                    </div>


                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>