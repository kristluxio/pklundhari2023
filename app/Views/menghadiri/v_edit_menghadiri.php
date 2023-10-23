<!-- left column -->
<div class="col-md-6">
 <!-- general form elements -->
  <div class="card card-primary">
  <div class="card-header">
  <h3 class="card-title">Edit</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
     <form role="form" action="<?= base_url('menghadiri/update/'.$menghadiri['id_jadwal']) ?>" method="post">
      <div class="card-body">
                   <div class="form-group">
                    <label>id_jadwal</label> 
                    <input name="date" Name="id_jadwal" value="<?= $menghadiri['id_jadwal'] ?>" class="form-control" placeholder="id_jadwal" required>
                  </div> 

                  <div class="form-group">
                    <label>no_ktp</label> 
                    <input name="date" Name="no_ktp" value="<?= $menghadiri['no_ktp'] ?>" class="form-control" placeholder="no_ktp" required>
                  </div> 

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
              </div>
            </div>
              
           
              