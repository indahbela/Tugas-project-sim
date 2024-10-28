<?php 
  $kd = $_GET['agenda'];
  $query=mysqli_query($koneksi,"SELECT * FROM agenda WHERE id_agenda='$kd'");
  while ($data=mysqli_fetch_array($query)) {
    $kd = $data['id_agenda'];
    $label = $data['nama_agenda'];
    $deskripsi = $data['deskripsi'];
    $tanggal = $data['tanggal'];
    $foto = $data['foto'];
 ?>

<section class="section">
          <div class="section-header">
            <h1>Tambah data</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Forms</a></div>
              <div class="breadcrumb-item">Editor</div>
            </div>
          </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Form tambah</h4>
                  </div>
                  <div class="card-body">
                    <form action="mod/agenda/aksi_edit.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="kd" value="<?php echo $kd; ?>">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Label</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="nama" value="<?= $label; ?>">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="form-control" name="deskripsi" ><?php echo $deskripsi; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">tanggal</label>
                      <div class="col-sm-12 col-md-7">
                        <input class="form-control" name="tanggal" type="date"><?php echo $tanggal; ?>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto</label>
                      <div class="col-sm-12 col-md-7">
                      <img src="upload/<?php echo $data['foto']; ?>" width="70px"  height="50px" alt="<?php echo $data['foto']; ?>"/>
                      <input type="checkbox" name="ubah_foto" value="true"> Centang jika ingin mengubah foto<br>
                        <input type="file" name="foto">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php } ?>