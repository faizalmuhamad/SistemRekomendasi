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
<body class="skin-red layout-top-nav">
  <div class="wrapper">
    <header class="main-header">
      <nav class="navbar navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <a href="<?php echo site_url('home')?>" class="navbar-brand"><b>SISTEM REKOMENDASI</b></a>
          </div>
          <!-- Navbar Right Menu -->
          <div class="navbar-form navbar-right">
            <?php echo form_open(site_url('login/index'), 'role="form"')?>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" name="username">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <input type="submit" name="login" class="btn btn-default" value="Login">
              </div>
            <?php echo form_close ();?>
          </div>
          <!-- /.navbar-custom-menu -->
        </div>
        <!-- /.container-fluid -->
      </nav>
    </header>
    <div class="content-wrapper">
      <div class="row">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img src="http://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="First slide">
            </div>
            <div class="item">
              <img src="http://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">
            </div>
            <div class="item">
              <img src="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="fa fa-angle-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="fa fa-angle-right"></span>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="container">
            <h2 class="page-header text-center">Fitur:</h2>
            <div class="col-md-4">
              <div class="box box-widget widget-user">
                <div class="widget-user-header bg-black" style="background: url('../dist/img/photo1.png') center center;">
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="description-block">
                        <h5 class="description-header">Fitur1</h5><br>
                        <span class="description-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- /.row -->
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box box-widget widget-user">
                <div class="widget-user-header bg-black" style="background: url('../dist/img/photo1.png') center center;">
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="description-block">
                        <h5 class="description-header">Fitur1</h5><br>
                        <span class="description-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- /.row -->
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box box-widget widget-user">
                <div class="widget-user-header bg-black" style="background: url('../dist/img/photo1.png') center center;">
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="description-block">
                        <h5 class="description-header">Fitur1</h5><br>
                        <span class="description-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- /.row -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <p><strong>Universitas Pendidikan Indonesia</strong><br>Jl. Dr. Setiabudhi No. 229 Bandung 40154 Jawa Barat - Indonesia<br>Telp. 022-2013163 Fax. 022-2013651<br><strong>Copyright &copy; 2017 .</strong> All rights
            reserved.</p> 
          </div>
          <div class="col-md-4">
            <a>Kontak</a> |
            <a>Tentang</a>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </footer>
  </div>

  <script src="<?php echo base_url ()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="<?php echo base_url ()?>assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url ()?>assets/dist/js/app.min.js"></script>
</body>
</html>
