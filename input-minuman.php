
<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:login.php");
  }
?>
<?php include "header.php";?>
<div class="container">
        <div class="row">
            <div class="col-md-12">
            <br><br><br><br><br>
                <form action="proses-input-minuman.php" method="POST">
                  
                    <div class="form-group">
                        <label for="nama"> Nama Pemesan</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Jenis_minuman"> Jenis Minuman</label>
                        <select name="jenis_minuman" class="form-control">
                        <option value="jenis_minuman">Pilih Minuman</option>
                            <option value="Black Coffe">Black Coffe</option>
                            <option value="Juice Semangka"> Juice Semangka</option>
                            <option value="Milk Shake">Milk Shake</option>
                            <option value="Teh Tarik"> Teh Tarik</option>
                            <option value="Ice Cream Big Topping">Ice Cream Big Topping</option>
                            <option value="Ice Cream Mix"> Ice Cream Mix</option>
                        </select>
                    </div>
  
                    <div class="form-group">
                        <label for="Jumlah Minuman">Jumlah Minuman</label>
                        <select name="jumlah" class="form-control">
                        <option value="jumlah">Jumlah Minuman</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="harga">Harga Minuman</label>
                        <input type="text" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="total">Total Minuman</label>
                        <input type="text" name="total" class="form-control">
                    </div>


                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>