<!-- Sidebar -->
<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="Image">
          <img src="template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" Alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= session()->get('nama') ?></a>
        </div>
      </div> <?= session()->get('nama') ?> - <?= session()->get('email') ?>
                <small>Member since Nov. 2012<?small>
                </p>
                </li>
                
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>sub menu 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>sub menu 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Product') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Product
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Instansi') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Instansi
              </p>
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Jadwal') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Jadwal
               </p>
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('users') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Users
               </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('tersangka') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Tersangka
               </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('berkas') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Berkas
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

          <!-- v_home -->
          
        

 