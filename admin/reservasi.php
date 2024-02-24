<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<!-- ***** Reservation Us Area Starts ***** -->
<?php 

if(@$_GET['pesan']=="inputBerhasil"){

?>
        <div class="alert alert-success">
        Berhasil Terkirim!
        </div>
<?php

}

?>
     
<section class="section" id="reservation">
  <div class="container">
   <div class="row">
          <div class="col-lg-6 align-self-center">
              <div class="left-text-content">
                  <div class="section-heading">
                      <h6>Contact Us</h6>
                      <h2>Anda bisa melakukan reservasi kami di sini</h2>
                  </div>
                  <p>Anda bisa menghubungi kami dengan kontak dibawah, atau mengisi form disamping</p>
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="phone">
                              <img src="icons/bootstrap-icons-1.9.0/phone.svg" alt="">
                              <h4>Phone Number</h4>
                              <span><a href="#">0859-9459-0999</a></span>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="message">
                              <img src="icons/bootstrap-icons-1.9.0/envelope.svg" alt="">
                              <h4>Email</h4>
                              <span><a href="#">thesultancafe001@gmail.com</a></span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6">
              <div class="contact-form">
                  <form id="form-contact" action="proses-input-reservasi.php" method="post">
                    <div class="row">
                      <div class="col-lg-12">
                          <h4>Table Reservasi</h4>
                      </div>
                      <div class="col-lg-6 col-sm-12">
                        <fieldset>
                          <input name="name" type="text"  placeholder="Your Name*" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-6 col-sm-12">
                        <fieldset>
                        <input name="email" type="text" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                      </fieldset>
                      </div>
                      <div class="col-lg-6 col-sm-12">
                        <fieldset>
                          <input name="nohp" type="text"placeholder="Phone Number*" required="">
                        </fieldset>
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <select value="number_guest" name="number_guest" ">
                              <option value="number_guest">Number Of Guests</option>
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
                              <input  name="date" type="text" class="form-control" placeholder="yyyy-mm-dd">
                              <div class="input-group-addon" >
                                <span class="glyphicon glyphicon-th"></span>
                              </div>
                            </div>
                          </div>   
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <select value="waktu" name="waktu" >
                              <option value="waktu">Time</option>
                              <option name="Breakfast" id="Breakfast">Breakfast</option>
                              <option name="Lunch" >Lunch</option>
                              <option name="Dinner" >Dinner</option>
                          </select>
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <textarea name="message" rows="6"  placeholder="Message" required=""></textarea>
                        </fieldset>
                      </div>
                      <div class="col-lg-6">
                        <fieldset>
                        <input type="submit" name="kirim" value="SIMPAN"  class="main-button-icon">
                    
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
      </div>
  </div>
</section>
<?php include "tampil-reservasi.php";?>
<!-- ***** Reservation Area Ends ***** -->
<?php include "footer.php";?>