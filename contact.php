
<?php include "header.php"; ?>
<!-- ======= Contact Section ======= -->

<section id="contact" class="contact ">
      <div class="container mb-5 mt-5">
      <?php 

if(@$_GET['pesan']=="inputBerhasil"){

?>
        <div class="alert alert-success">
        Berhasil Terkirim!
        </div>
<?php

}

?>
        <div class="section-title">
          <h2><span>Contact</span> Us</h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
      </div>

      <div class="container mt-5 "> 
        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-3 col-md-6 info">
              <img src="icons/bootstrap-icons-1.9.0/geo-alt.svg" alt="">
              <h4>Location:</h4>
              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <img src="icons/bootstrap-icons-1.9.0/clock.svg" alt="">
              <h4>Open Hours:</h4>
              <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <img src="icons/bootstrap-icons-1.9.0/envelope.svg" alt="">
              <h4>Email:</h4>
              <p>info@example.com<br>contact@example.com</p>
            </div>

            <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
              <img src="icons/bootstrap-icons-1.9.0/phone.svg" alt="">
              <h4>Call:</h4>
              <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
            </div>
          </div>
        </div>

        <form action="proses-contact.php" method="post" role="form" class="form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email"  placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject"  placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>

          <div class="text-center mt-3"><button type="submit">Send Message</button></div>
        </form>

      </div>
    </section><!-- End Contact Section -->
    <?php include "kontak.php"; ?>
<?php include "footer.php";?>