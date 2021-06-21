<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tarim Borsası</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <!-- Font Awesome -->
  
  <link rel="stylesheet" href="<?php echo SITE_PUBLIC; ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo SITE_PUBLIC; ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo SITE_PUBLIC; ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo SITE_PUBLIC; ?>/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo SITE_PUBLIC; ?>/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo SITE_PUBLIC; ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo SITE_PUBLIC; ?>/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo SITE_PUBLIC; ?>/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>      
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
   
      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="<?php echo SITE_URL;?>/Admin/logout" role="button">
            <ion-icon name="log-out-outline">Logout</ion-icon>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo SITE_PUBLIC; ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Tarım Borsası</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo SITE_PUBLIC; ?>/dist/img/user8-128x128.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block"><?php echo $homepage["username"];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">Hizmetler</li>
          <li class="nav-item">
            <a href="<?php echo SITE_URL; ?>/Satici/borsaurunekle" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Borsa Ürün Ekle</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?php echo SITE_URL;?>/Satici/borsadakiurunler" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Borsadaki ürünler</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo SITE_URL; ?>/Alici/aliciekle" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Alıcı TL Girişi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo SITE_URL; ?>/Alici/aliciListele" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p class="text">Borsadaki Alıcı Listesi</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?php echo SITE_URL; ?>/Alici/dovizEkle" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Alıcı Döviz Girişi</p>
            </a>
          </li>
            <li class="nav-item">
            <a href="<?php echo SITE_URL; ?>/Alici/dovizListele" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p class="text">Döviz Ceviri</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?php echo SITE_URL;?>/Alici/SartliislemListe"" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Ürün Bekleyen Alıcılar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo SITE_URL;?>/Alici/fiyatbelirle"" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Fiyat Belirle</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo SITE_URL;?>/Panel/raporAl" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Rapor Al</p>
            </a>
          </li>
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
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    
    <!-- Main content -->
    <section class="content">
     
    </section>
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
   
            
           

          
           
    </section>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-5 connectedSortable">

           

         

         
    </section>
    
    
    
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
