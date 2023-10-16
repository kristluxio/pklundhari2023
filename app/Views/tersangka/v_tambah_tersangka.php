<!-- left column -->
<div class="col-md-6">
 <!-- general form elements -->
  <div class="card card-primary">
  <div class="card-header">
  <h3 class="card-title">Tambah Data</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
     <form role="form" action="<?= base_url('tersangka/save') ?>" method="post">

               <div class="card-body">
                 <div class="form-group">
                    <label>id_berkas </label> 
                    <input Name="id_berkas" class="form-control" placeholder="id_berkas" required>
                  </div>

              <div class="card-body">
                 <div class="form-group">
                    <label>no_ktp </label> 
                    <input Name="no_ktp" class="form-control" placeholder="no_ktp" required>
                  </div>

                  <div class="form-group">
                    <label>nama_tersangka</label>
                    <input Name="nama_tersangka" class="form-control" placeholder="nama_tersangka" required>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
              </div>
            </div>
              
           
              