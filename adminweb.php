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
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="assets/user.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><?= $pecah['nama'];?></Php></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Menu Admin</div>
              <a href="adminweb.php?mod=profil" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="logout.php" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <img src="assets/img/avatar/sman6.png" width="30" alt="">
            <a href="index.html">SMAN 6 GORONTALO</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
          <img src="assets/img/avatar/sman6.png" width="30" alt="">
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Master index</li>
            <li>
              <a href="adminweb.php?mod=home" class="nav-link"><i class="fas fa-fire " aria-hidden="true"></i><span>Dashboard</span></a>
            </li>
            <li>
              <a href="adminweb.php?mod=profile" class="nav-link"><i class="fas fa-university " aria-hidden="true"></i><span>Profile Sekolah</span></a>
            </li>
            <li>
              <a href="adminweb.php?mod=tentang" class="nav-link"><i class="fas fa-info-circle " aria-hidden="true"></i><span>Tentang</span></a>
            </li>
            <li>
              <a href="adminweb.php?mod=sambutan" class="nav-link"><i class="fas fa-folder " aria-hidden="true"></i><span>Sambutan Kepsek</span></a>
            </li>
            <li>
              <a href="adminweb.php?mod=agenda" class="nav-link"><i class="fas fa-calendar " aria-hidden="true"></i><span>Agenda</span></a>
            </li>
            <li>
              <a href="adminweb.php?mod=berita" class="nav-link"><i class="fas fa-newspaper " aria-hidden="true"></i><span>Berita</span></a>
            </li>
            <li>
              <a href="adminweb.php?mod=prestasi" class="nav-link"><i class="fas fa-graduation-cap " aria-hidden="true"></i><span>Prestasi siswa</span></a>
            </li>
            <li>
              <a href="adminweb.php?mod=guru" class="nav-link"><i class="fas fa-user-circle " aria-hidden="true"></i><span>Guru</span></a>
            </li>
            <li>
              <a href="adminweb.php?mod=fasilitas" class="nav-link"><i class="fas fa-sitemap" aria-hidden="true"></i><span>Fasilitas</span></a>
            </li>
            <li>
              <a href="adminweb.php?mod=kontak" class="nav-link"><i class="fas fa-inbox" aria-hidden="true"></i><span>Kontak</span></a>
            </li>
            <li>
              <a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt " ria-hidden="true"></i><span>Log out</span></a>
            </li>
          
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <?php 
        if ($_GET['mod']== 'home'){
          include ('mod/home/index.php');

        }else if ($_GET['mod']=='profil'){
          include ('mod/home/profile_admin.php');

        }else if($_GET['mod']=='profile'){ //profil
          include("mod/profile/index.php");
        }else if($_GET['mod']=='add'){
          include("mod/profile/tambah.php");
        }else if($_GET['mod']=='edit'){
          include("mod/profile/edit.php");
        }else if($_GET['mod']=='cetak'){
          include("mod/profile/cetak.php");

        }else if($_GET['mod']=='tentang'){ //tentang
          include("mod/tentang/index.php");
        }else if($_GET['mod']=='add_tentang'){
          include("mod/tentang/tambah.php");
        }else if($_GET['mod']=='edit_tentang'){
          include("mod/tentang/edit.php");
        }else if($_GET['mod']=='cetak'){
          include("mod/tentang/cetak.php");

        }else if($_GET['mod']=='sambutan'){ //sambutan
          include("mod/sambutan/index.php");
        }else if($_GET['mod']=='add_sambutan'){
          include("mod/sambutan/tambah.php");
        }else if($_GET['mod']=='edit_sambutan'){
          include("mod/sambutan/edit.php");

        }else if($_GET['mod']=='agenda'){ //agenda
          include("mod/agenda/index.php");
        }else if($_GET['mod']=='add_agenda'){
          include("mod/agenda/tambah.php");
        }else if($_GET['mod']=='edit_agenda'){
          include("mod/agenda/edit.php");

        }else if($_GET['mod']=='berita'){ //berita
          include("mod/berita/index.php");
        }else if($_GET['mod']=='add_berita'){
          include("mod/berita/tambah.php");
        }else if($_GET['mod']=='edit_berita'){
          include("mod/berita/edit.php");

        } else{
          include ('mod/home/404.php');
        }
        ?>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2024 <div class="bullet"></div> Developer By <a href="https://4lifbima.github.io/">alif</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

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