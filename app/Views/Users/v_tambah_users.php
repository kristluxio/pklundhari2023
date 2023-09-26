<!-- left column -->
<div class="col-md-6">
 <!-- general form elements -->
  <div class="card card-primary">
  <div class="card-header">
  <h3 class="card-title">Tambah Data</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
     <form role="form" action="<?= base_url('users/save') ?>" method="post">

              <div class="card-body">
                 <div class="form-group">
                    <label>nip </label> 
                    <input Name="nip" class="form-control" placeholder="nip" required>
                  </div>

                  <div class="form-group">
                    <label>nama</label>
                    <input Name="nama" class="form-control" placeholder="nama" required>
                  </div>

                  <div class="form-group">
                    <label>no_hp</label>
                    <input Name="no_hp" class="form-control" placeholder="no_hp" required>
                  </div>

                  <div class="form-group">
                    <label>password</label>
                    <input Name="password" class="form-control" placeholder="password" required>
                  </div>

                  <div class="form-group">
                    <label>role</label>
                    <!-- <input Name="role" class="form-control" placeholder="role" required>-->
                    <select name="role" id="role" class="form-control" placeholder="role" required>
                      <option value="Penyidik">Penyidik</option>
                      <option value="Jaksa">Jaksa</option>
                      <option value="Dokter">Dokter</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>email</label>
                    <input Name="email" class="form-control" placeholder="email" required>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
              </div>
            </div>
              
           
              