<?php include 'navbarina.php';?>

<?php echo $alert; ?>

<div class="container-fluid contact-container">
    <div class="row padding">
        <div class="col-lg-7 col-sm-12 formcontact">
            <form action="" method="post">
                <h1 style="text-align:center; padding-top:20px;">Hubungi Kami</h1>
                <hr style="width:28%; border:2px solid; margin:auto; margin-bottom:10px;">
                <h6 style="text-align:center;">Terhubung dengan Kami</h6>
                
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="name" class="form-control" required><br>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required><br>
                </div>

                <div class="form-group">
                    <label>Nomor HP</label>
                    <input type="number" name="phone" class="form-control" required><br>
                </div>

                <div class="form-group">
                    <label>Pesan</label>
                    <textarea class="form-control" name="message" rows="5" required></textarea><br>
                </div>

                <input type="submit" name="submit" value="Kirim" class="btn" id="sendbtn">
            </form>
        </div>

        <div class="col-lg-5 col-sm-12 pikmaps">
            <div class="container-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.1377500085227!2d106.74760631458811!3d-6.11214999557426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1d167bf898dd%3A0x98e26d844c24a360!2sMarketing%20Gallery%20Rumah%20PIK%202!5e0!3m2!1sid!2sid!4v1615621157775!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            
            <div class="mapcaption">
                <h2 style="color: #3c3c3c; font-style:bold;">Galeri Marketing PIK2</h2>
                <h6>Sedayu Indo City</h6><br>

                <p>Kontak Kami</p>
                <p>Email: officialpik2@gmail.com</p>
                <p>Nomor HP: 0851 5708 6969</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid padding fixedbg">
  <div class="row padding">
    <div class="col-lg-12 text-center fixedbgtext reveal reveal-right"">
        <h1>Kami memberikan servis terbaik</h1>
        <hr style="width:36%; border:3px solid; color:#caa461; margin:auto;">
        <br>
    </div>
  </div>
</div>

<?php include 'footerina.php';?>