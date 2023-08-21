<!-- left column -->
<div class="col-md-6">
 <!-- general form elements -->
  <div class="card card-primary">
  <div class="card-header">
  <h3 class="card-title">Edit</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
     <form role="form" action="<?= base_url('jadwal/update/'.$jadwal['id_jadwal']) ?>" method="post">
      <div class="card-body">

                 <div class="form-group">
                    <label>tgl_jadwal </label> 
                    <input Name="tgl_jadwal" value="<?=jadwal['tgl_jadwal'] ?>" class="form-control" placeholder="tgl_jadwal" required>
                  </div>

                  <div class="form-group">
                    <label>ket_jadwal</label>
                    <input Name="ket_jadwal" value="<?=jadwal['ket_jadwal'] ?>" class="form-control" placeholder="ket_jadwal" required>
                  </div>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
              </div>
            </div>
              
           
              