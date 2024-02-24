<?php include "header.php"; ?>
  
          <!-- Product section-->
          <section>
            <div class="container px-4 px-lg-5 ">
            <BR><BR><BR>
            <?php 

if(@$_GET['pesan']=="inputBerhasil"){

?>
        <div class="alert alert-success">
        Berhasil Terkirim!
        </div>
<?php

}

?>
                <div class="row gx-4 gx-lg-5 align-items-center mt-5">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-title mb-2">
                            <h2>Detail <span>Menu</span></h2>
                          </div>
                    
                    </div>
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="assets/menu/drink/7.png" alt="..." /></div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder">Black Coffe</h1>
                        <div class="fs-5 mb-3">
                            <span>Rp20.000</span>
                        </div>
                        <p class="lead">Nikmati hari mu dengan kopi hitam khas The Sultan Cafe. Black Coffee dibuat dari biji kopi pilihan yang tinggi kualitasnya diproses dengan cara tradisional untuk menjaga cita rasa yang nikmat dari kopi</p>
                        <div class="d-flex">
                        <a href="input-minuman.php"> <button class="btn flex-shrink-0" type="button">
                                Pesan
                            </button>
                        <a href="drink.php">      
                            <button class="btn flex-shrink-0" type="button">
                                Kembali
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  

<!-- ***** Footer Start ***** -->
<?php include "footer.php";?>