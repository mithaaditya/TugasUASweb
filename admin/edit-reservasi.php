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
                <form action="proses-edit-reservasi.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from reservasi where id_reservasi='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                <div class="col-lg-6">
              <div class="contact-form">
                  <form id="form-contact" action="proses-input-reservasi" method="post">
                    <div class="row">
                      
                      <div class="col-lg-12">
                          <h4>Table Reservasi</h4>
                      </div>
                      <div class="col-lg-6 col-sm-12">
                        <fieldset>
                        <input type="hidden" name="id_reservasi" value="<?php echo $row['id_reservasi']?>" class="form-control">
                          <input name="name" type="text"  placeholder="Your Name*" required="" value="<?php echo $row['name']?>">
                        </fieldset>
                      </div>
                      <div class="col-lg-6 col-sm-12">
                        <fieldset>
                        <input name="email" type="text" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required=""value="<?php echo $row['email']?>">
                      </fieldset>
                      </div>
                      <div class="col-lg-6 col-sm-12">
                        <fieldset>
                          <input name="nohp" type="text"placeholder="Phone Number*" required="" value="<?php echo $row['nohp']?>">
                        </fieldset>
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <select value="number_guest" name="number_guest" >
                              <option value="<?php echo $row['number_guest']?>" selected><?php echo $row['number_guest']?></option>
                              <option name="1" >1</option>
                              <option name="2" >2</option>
                              <option name="3" >3</option>
                              <option name="4" >4</option>
                              <option name="5" >5</option>
                              <option name="6" >6</option>
                              <option name="7" >7</option>
                              <option name="8" >8</option>
                              <option name="9" >9</option>
                              <option name="10" >10</option>
                              <option name="11" >11</option>
                              <option name="12" >12</option>
                          </select>
                        </fieldset>
                      </div>
                      <div class="col-lg-6">
                          <div id="filterDate2">    
                            <div class="input-group date" data-date-format="yyyy/mm/dd">
                              <input  name="date" type="text" class="form-control" placeholder="yyyy/mm/dd" value="<?php echo $row['date']?>">
                              <div class="input-group-addon" >
                                <span class="glyphicon glyphicon-th"></span>
                              </div>
                            </div>
                          </div>   
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <select value="waktu" name="waktu" >
                              <option values="<?php echo $row['waktu']?>" selected><?php echo $row['waktu']?></option>
                              <option name="Breakfast" id="Breakfast">Breakfast</option>
                              <option name="Lunch" >Lunch</option>
                              <option name="Dinner" >Dinner</option>
                          </select>
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <textarea name="message" rows="6"  placeholder="Message" required="" > <?php echo $row['message']?></textarea>
                        </fieldset>
                      </div>
                      <div class="col-lg-6">
                        <fieldset>
                        <input type="submit" name="kirim" value="SIMPAN"  class="main-button-icon" >
                    
                        </fieldset>
                      </div>
                      <div class="col-lg-6">
                        <fieldset>
                        
                        <input type="reset" name="kosongkan" value="KOSONGKAN" class="main-button-icon" >
                        </fieldset>
                      </div>
                    </div>
                  </form>
              </div>
          </div>
</div></div></div>
<?php include "footer.php";?>