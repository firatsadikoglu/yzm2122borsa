<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tarim Borsası </title>
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
            <a href="#" class="d-block"><?php 
                Session::int();
            echo Session::get("username");
            ?></a>
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
            <h1 class="m-0 text-dark">Borsamızda ürün almak için bekleyen alıcı listesi:</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
     <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Satıştaki Ürünler</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                
                  
                  
       <?php
         function build_table($array){
            // start table
             
             $html = '<table class="table table-hover text-nowrap">';
             echo "<thead>";
             // header row
                $html .= '<tr>';
                foreach($array[0] as $key=>$value){
                        $html .= '<th>' . htmlspecialchars($key) . '</th>';
                     }
                $html .= '</tr>';
            echo "</thead>";
            // data rows
            echo "<tbody>";
                foreach( $array as $key=>$value){
                    $html .= '<tr>';
                    foreach($value as $key2=>$value2){
                        $html .= '<td>' . htmlspecialchars($value2) . '</td>';
                    }
                    $html .= '</tr>';
                }
            // finish table and return it
            echo "</tbody>";
            $html .= '</table>';
            return $html;
        }
         echo build_table($sartliislemler);
       ?> 
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </section>
     
 
    
    
  </div>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo SITE_PUBLIC; ?>/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo SITE_PUBLIC; ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo SITE_PUBLIC; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo SITE_PUBLIC; ?>/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo SITE_PUBLIC; ?>/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo SITE_PUBLIC; ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo SITE_PUBLIC; ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo SITE_PUBLIC; ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo SITE_PUBLIC; ?>/plugins/moment/moment.min.js"></script>
<script src="<?php echo SITE_PUBLIC; ?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo SITE_PUBLIC; ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo SITE_PUBLIC; ?>/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo SITE_PUBLIC; ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo SITE_PUBLIC; ?>/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo SITE_PUBLIC; ?>/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo SITE_PUBLIC; ?>/dist/js/demo.js"></script>
</body>
</html>
