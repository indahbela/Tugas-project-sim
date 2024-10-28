<?php
    
    $data =mysqli_query($koneksi, "SELECT * FROM profil");
    $profil = mysqli_num_rows($data)

?>

<section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total User</h4>
                  </div>
                  <div class="card-body">
                    <?= $profil ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Artikel</h4>
                  </div>
                  <div class="card-body">
                  <?= $profil ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Siswa</h4>
                  </div>
                  <div class="card-body">
                    620
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Guru</h4>
                  </div>
                  <div class="card-body">
                    47
                  </div>
                </div>
              </div>
            </div>                  
          </div>
          <!-- row baru -->
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-home"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Fasilitas</h4>
                  </div>
                  <div class="card-body">
                    10
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                  <i class="fas fa-calendar"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Agenda</h4>
                  </div>
                  <div class="card-body">
                    42
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon" style="background-color: rgb(16, 201, 161);">
                  <i class="fas fa-trophy" aria-hidden="true"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Prestasi siswa</h4>
                  </div>
                  <div class="card-body">
                    19
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon" style="background-color: blueviolet;">
                  <i class="fas fa-comments"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Pesan Masuk</h4>
                  </div>
                  <div class="card-body">
                    47
                  </div>
                </div>
              </div>
            </div>                  
          </div>

          <!-- slider -->
          <div class="row">
            <div class="col-6 mb-4"> 
              <div class="hero bg-primary text-white">
                <div class="hero-inner" style="margin-top: -4vh;">
                  <h2>Selamat datang <?= $pecah['nama'];?></h2>
                  <p class="lead">SMA NEGERI 6 KOTA GORONTALO.</p>
                  <p>SMA Negeri 6 Gorontalo, sebuah lembaga pendidikan menengah atas negeri yang berlokasi di Jalan Barito, Kelurahan Bulotadaa Timur, Kecamatan Sipatana, Kota Gorontalo, Provinsi Gorontalo</p>
                </div>
              </div>
            </div>
            <div class="col-6 mb-4">
              <div class="card">
                <div class="card-header">
                  <h4>Browser populer</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col mb-4 mb-lg-0 text-center">
                      <div class="browser browser-chrome"></div>
                      <div class="mt-2 font-weight-bold">Chrome</div>
                      <div class="text-small text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 48%</div>
                    </div>
                    <div class="col mb-4 mb-lg-0 text-center">
                      <div class="browser browser-firefox"></div>
                      <div class="mt-2 font-weight-bold">Firefox</div>
                      <div class="text-small text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 26%</div>
                    </div>
                    <div class="col mb-4 mb-lg-0 text-center">
                      <div class="browser browser-safari"></div>
                      <div class="mt-2 font-weight-bold">Safari</div>
                      <div class="text-small text-muted"><span class="text-danger"><i class="fas fa-caret-down"></i></span> 14%</div>
                    </div>
                    <div class="col mb-4 mb-lg-0 text-center">
                      <div class="browser browser-opera"></div>
                      <div class="mt-2 font-weight-bold">Opera</div>
                      <div class="text-small text-muted">7%</div>
                    </div>
                    <div class="col mb-4 mb-lg-0 text-center">
                      <div class="browser browser-internet-explorer"></div>
                      <div class="mt-2 font-weight-bold">IE</div>
                      <div class="text-small text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 5%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        </section>