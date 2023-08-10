<!-- left column -->
<div class="col-md-6">
 <!-- general form elements -->
  <div class="card card-primary">
  <div class="card-header">
  <h3 class="card-title">Tambah Data</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
     <form role="form" action="<?= base_url('product/save') ?>" method="post">
              <div class="card-body">
                 <div class="form-group">
                    <label>Product Name</label>
                    <input Name="prodcut_name" class="form-control" placeholder="Product Name" required>
                  </div>
                  <div class="form-group">
                    <label>Product Description</label>
                    <input name="product_description" class="form-control"placeholder="Product Description" required>
                  </div>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
              </div>
            </div>
              
           
              