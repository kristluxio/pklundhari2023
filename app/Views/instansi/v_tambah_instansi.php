<!-- left column -->
<div class="col-md-6">
 <!-- general form elements -->
  <div class="card card-primary">
  <div class="card-header">
  <h3 class="card-title">Tambah Data</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
     <form role="form" action="<?= base_url('instansi/save') ?>" method="post">

              <div class="card-body">
                 <div class="form-group">
                    <label>nama_instansi </label> 
                    <input Name="nama_instansi" class="form-control" placeholder="nama_instansi" required>
                  </div>

                  <div class="form-group">
                    <label>ket_instansi</label>
                    <input name="ket_instansi" class="form-control" placeholder="ket_instansi" required>
                  </div>
                  
                 <div class="form-group">
                    <label>logo_instansi</label> 
                    <input Name="logo_instansi" class="form-control" placeholder="logo_instansi" required>
                    </div>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
              </div>
            </div>
              
           
              