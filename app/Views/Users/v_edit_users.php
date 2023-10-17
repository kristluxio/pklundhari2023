<!-- left column -->
<div class="col-md-6">
 <!-- general form elements -->
  <div class="card card-primary">
  <div class="card-header">
  <h3 class="card-title">Edit</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
     <form role="form" action="<?= base_url('users/update/'.$users['nip']) ?>" method="post">
      <div class="card-body">

                
                 <div class="form-group">
                    <label>nip</label>
                    <input Name="nip" value="<?=$users['nip'] ?>" class="form-control" placeholder="nip" required>
                  </div>

                  <div class="form-group">
                    <label>nama</label>
                    <input Name="nama" value="<?=$users['nama'] ?>" class="form-control" placeholder="nama" required>
                  </div>

                  <div class="form-group">
                    <label>no_hp</label>
                    <input Name="no_hp" value="<?=$users['no_hp'] ?>" class="form-control" placeholder="no_hp" required>
                  </div>

                  <div class="form-group">
                    <label>password</label>
                    <input Name="password" value="<?=$users['password'] ?>" class="form-control" placeholder="password" required>
                  </div>

                  <div class="form-group">
                    <label>role</label>
                    <input Name="role" value="<?=$users['role'] ?>" class="form-control" placeholder="role" required>
                  </div>

                  <div class="form-group">
                    <label>email</label>
                    <input Name="email" value="<?=$users['email'] ?>" class="form-control" placeholder="email" required>
                  </div>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div> 
              </form>
              </div>
            </div>
              
           
              