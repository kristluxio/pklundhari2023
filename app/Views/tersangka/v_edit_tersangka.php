<!-- left column -->
<div class="col-md-6">
 <!-- general form elements -->
  <div class="card card-primary">
  <div class="card-header">
  <h3 class="card-title">Edit</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
     <form role="form" action="<?= base_url('tersangka/update/'.$tersangka['no_ktp']) ?>" method="post">
      <div class="card-body">


                   <div class="form-group">
                    <label>id_berkas</label> 
                    <input name="date" Name="id_berkas" value="<?= $tersangka['id_berkas'] ?>" class="form-control" placeholder="id_berkas" required>
                  </div>

                 <div class="form-group">
                    <label>no_ktp</label> 
                    <input name="date" Name="no_ktp" value="<?= $tersangka['no_ktp'] ?>" class="form-control" placeholder="no_ktp" required>
                  </div>

                  <div class="form-group">
                    <label>nama_tersangka</label>
                    <input Name="nama_tersangka" value="<?= $tersangka['nama_tersangka'] ?>" class="form-control" placeholder="nama_tersangka" required>
                  </div>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
              </div>
            </div>
              
           
              