<?php
session_start();

  if(empty($_SESSION['namauser'])AND empty($_SESSION['passuser'])){
   header('location:index.php');
  }else{


  $user = $_SESSION['namauser'];
  $pass = $_SESSION['passuser'];

  include "../lib/koneksi.php";
  include "../lib/config.php";

  $query = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$user' AND password='$pass'");
  $pecah= mysqli_fetch_array($query);  

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>administrator</title>
  <link rel="icon" href="assets/img/avatar/sman6.png" type="image/*">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="assets/modules/weather-icon/css/weather-icons.min.css">
  <link rel="stylesheet" href="assets/modules/weather-icon/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
<section class="section">
<div class="section-body">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Data Profile Sekolah</h4>
          <div class="card-header-action">
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered" id="sortable-table">
              <thead>
                <tr>
                  <th class="text-center">
                    No.
                  </th>
                  <th>label</th>
                  <th>deskripsi</th>
                  <th>Foto</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                          $no=1;
                          $query=mysqli_query($koneksi,"SELECT * FROM profil");
                          while ($data=mysqli_fetch_array($query)) {
                      ?>
                <tr>
                  <td class="text-center"><?= $no; ?></td>
                  <td><?= $data['nama_profil'];?></td>
                  <td><?= $data['deskripsi'];?></td>
                  <td><img src="upload/<?php echo $data['foto']; ?>" width="150px" style="border-radius: 5px;"  height="100px" alt="<?php echo $data['foto']; ?>"/></td>
      
                </tr>
                <?php $no++; }?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<script>
window.print();
</script>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
  <script src="assets/modules/chart.min.js"></script>
  <script src="assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="assets/modules/summernote/summernote-bs4.js"></script>
  <script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/index-0.js"></script>
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>
<?php } ?>