<!-- left column -->
<div class="col-md-6">
 <!-- general form elements -->
  <div class="card card-primary">
  <div class="card-header">
  <h3 class="card-title">Tambah Data</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
     <form role="form" action="<?= base_url('berkas/save') ?>" method="post">

              <div class="card-body">
                 <div class="form-group">
                    <label>tgl_berkas </label> 
                    <input="date" Name="tgl_berkas" class="form-control" placeholder="tgl_berkas" required>
                  </div>

                  <div class="form-group">
                    <label>resume_singkat</label>
                    <input Name="resume_singkat" class="form-control" placeholder="resume_singkat" required>
                  </div>

                  <div class="form-group">
                    <label>no_sp_kap</label>
                    <input Name="no_sp_kap" class="form-control" placeholder="no_sp_kap" required>
                  </div>

                  <div class="form-group">
                    <label>tgl_sp_kap</label>
                    <input Name="tgl_sp_kap" class="form-control" placeholder="tgl_sp_kap" required>
                  </div>

                  <div class="form-group">
                    <label>file_sp_kap</label>
                    <input Name="file_sp_kap" class="form-control" placeholder="file_sp_kap" required>
                  </div>

                  <div class="form-group">
                    <label>no_ba_kap</label>
                    <input Name="no_ba_kap" class="form-control" placeholder="no_ba_kap" required>
                  </div>

                  <div class="form-group">
                    <label>file_ba_kap</label>
                    <input Name="file_ba_kap" class="form-control" placeholder="file_ba_kap" required>
                  </div>

                  <div class="form-group">
                    <label>no_srt_permintaan</label>
                    <input Name="resume_singkatno_srt_permintaan" class="form-control" placeholder="no_srt_permintaan" required>
                  </div>

                  <div class="form-group">
                    <label>file_srt_permintaan</label>
                    <input Name="file_srt_permintaan" class="form-control" placeholder="file_srt_permintaan" required>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
              </div>
            </div>
              
           
              