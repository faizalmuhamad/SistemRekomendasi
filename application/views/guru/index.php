<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Rekomendasi</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="<?php echo base_url ()?>assets/bootstrap/css/bootstrap.min.css" rel='stylesheet' type='text/css'>
  <link href="<?php echo base_url ()?>assets/dist/css/AdminLTE.min.css" rel='stylesheet' type='text/css'>
  <link href="<?php echo base_url ()?>assets/dist/css/custom.css" rel='stylesheet' type='text/css'>
  <link href="<?php echo base_url ()?>assets/dist/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
  <link href="<?php echo base_url ()?>assets/dist/css/skins/_all-skins.min.css" rel='stylesheet' type='text/css'>
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="<?php echo site_url('home')?>" class="logo">
      <span class="logo-mini"><b>SR</b></span>
      <span class="logo-lg"><b>SI</b>REKOM</span>
    </a>
    <nav class="navbar navbar-static-top">
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="<?php echo site_url('login/logout')?>"><i class="fa fa-power-off"></i> Keluar</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="header">NAVIGASI</li>
        <li class="active">
          <a href="<?php echo site_url('guru')?>">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-tasks"></i>
            <span>Materi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('guru/mata_pelajaran')?>"><i class="fa fa-circle-o"></i> Mata Pelajaran</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Rules</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-institution"></i>
            <span>Tata Usaha</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Siswa</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Kelas</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Jurusan</a></li>
          </ul>
        </li>
        <li>
          <a href="">
            <i class="fa fa-book"></i> <span>E-book</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Beranda
        <small>Selamat Datang</small>
      </h1>
    </section>

    <section class="content">
    	<div class="row">
			<div class="col-md-6">    
				<div class="box">
					<div class="box-header with-border">
					  <h3 class="box-title">Materi</h3>
					</div>
					<div class="box-body">
						<div class="row margin-bottom">
					        <div class="col-sm-6">
					          <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
					        </div>
					        <div class="col-sm-6">
					          <div class="row">
					            <div class="col-sm-6">
					              <img class="img-responsive" src="../../dist/img/photo2.png" alt="Photo">
					              <br>
					              <img class="img-responsive" src="../../dist/img/photo3.jpg" alt="Photo">
					            </div>
					            <div class="col-sm-6">
					              <img class="img-responsive" src="../../dist/img/photo4.jpg" alt="Photo">
					              <br>
					              <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
					            </div>
					          </div>
					        </div>
					      </div>
					  <h3>Fitur :</h3>
					  <p>
					  	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					  </p>
					</div>
				</div>
			</div>
			<div class="col-md-6">    
				<div class="box">
					<div class="box-header with-border">
					  <h3 class="box-title">Tata Usaha</h3>
					</div>
					<div class="box-body">
						<div class="row margin-bottom">
					        <div class="col-sm-6">
					          <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
					        </div>
					        <div class="col-sm-6">
					          <div class="row">
					            <div class="col-sm-6">
					              <img class="img-responsive" src="../../dist/img/photo2.png" alt="Photo">
					              <br>
					              <img class="img-responsive" src="../../dist/img/photo3.jpg" alt="Photo">
					            </div>
					            <div class="col-sm-6">
					              <img class="img-responsive" src="../../dist/img/photo4.jpg" alt="Photo">
					              <br>
					              <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
					            </div>
					          </div>
					        </div>
					      </div>
					  <h3>Fitur :</h3>
					  <p>
					  	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					  </p>
					</div>
				</div>
			</div>  
			<div class="col-md-12">    
				<div class="box">
					<div class="box-header with-border">
					  <h3 class="box-title">Ebook</h3>
					</div>
					<div class="box-body">
						<div class="row margin-bottom">
					        <div class="col-sm-6">
					          <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
					        </div>
				      	</div>
					  <h3>Fitur :</h3>
					  <p>
					  	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					  </p>
					</div>
				</div>
			</div> 
		</div>
    </section>
  </div>

  	<footer class="main-footer">
		<div class="container">
			<div class="row">
			  <div class="col-md-8">
			    <p><strong>Universitas Pendidikan Indonesia</strong><br>Jl. Dr. Setiabudhi No. 229 Bandung 40154 Jawa Barat - Indonesia<br>Telp. 022-2013163 Fax. 022-2013651</p> 
			  </div>
			  <div class="col-md-4">
			  	<br><br>
			    <strong>Copyright &copy; 2017 .</strong> All rights
			    reserved.
			  </div>
			</div>
		</div>
	</footer>
</div>

<script src="<?php echo base_url ()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url ()?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url ()?>assets/dist/js/app.min.js"></script>
</body>
</html>
