<section class="section">

          <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Components</a></div>
              <div class="breadcrumb-item">Profile</div>
            </div>
          </div>

          <div class="section-body">
            <a href="adminweb.php?mod=add" class="btn btn-primary mb-3"><i class="fas fa-plus mx-2" aria-hidden="true"></i>tambah</a>
            <a href="" style="background-color: rgba(0, 161, 35, 0.884);" class="btn btn-success mx-1 mb-3"><i class="fas fa-print mx-2" aria-hidden="true"></i>Print</a>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Profile Sekolah</h4>
                    <div class="card-header-action">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
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