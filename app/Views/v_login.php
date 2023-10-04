
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Login Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<<?= base_url() ?>/template/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Login</b>CI4</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
    <?php
    //pesan validasi error
     $errors=session()->getFlashdata('errors'); 
        if (!empty($errors)) { ?>
          <div class="alert alert-danger" role="alert">
      <ul>
        <?php foreach ($errors as $errors) : ?>
           <li><?= esc($errors) ?></li> 
          <?php endforeach ?>
        </ul>
        </div>
       <?php } ?>
       <?php 
       if (session()->getFlashdata('pesan')){
          echo '<div class="alert alert-success" role="alert">';
          echo session()->getFlashdata('pesan');
          echo '</div>';

       }
       ?>
     <?php 
     echo form_open('auth/cek_login');
     ?>
        </div>
        <div class="input-group mb-3">
          <input name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
            </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      <?php echo form_close(); ?>

      <a href="<?= base_url('auth/register') ?>" class="text-center">Belum Punya Akun,Register Disini</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="<?= base_url() ?>/tamplate/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/tamplate/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/tamplate/dist/js/adminlte.min.js"></script>
<script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500,0).slideUp(500,function() {
        $(this).remove();
      })
    },3000);
<\script>
</body>
</html>
