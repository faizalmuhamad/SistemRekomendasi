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
  <link href="<?php echo base_url ()?>assets/plugins/datatables/dataTables.bootstrap.css" rel='stylesheet' type='text/css'>
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
        <li>
          <a href="<?php echo site_url('guru')?>">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
          </a>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-tasks"></i>
            <span>Materi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo site_url('guru/mata_pelajaran')?>"><i class="fa fa-circle-o"></i> Mata Pelajaran</a></li>            <li><a href=""><i class="fa fa-circle-o"></i> Rules</a></li>
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
        Mata Pelajaran
        <a data-toggle="modal" data-target="#myModal" class="btn btn-xs bg-navy"><i class="fa fa-plus"></i> Tambah</a>
      </h1>
    </section>

    <section class="content">
      <div class="row"> 
      <div class="col-md-12"> 
        <div class="box">
            <div class="box-body">
              <div class="input-group">
                <input type="text" id="myInputTextField" class="form-control" placeholder="Search">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
              </div>
              <table id="tableMatpel" class="table table-bordered table-hover">
                <thead>
                   <th width="5%"><center>No</center></th>
                   <th width="31%">Mata pelajaran</th>
                   <th width="20%"><center>Tingkat kelas</center></th>
                   <th width="10%">Jurusan</th>
                   <th width="34%">Aksi</th>
                 </thead>
                 <tbody>
                    <?php $i=1; ?>
                    <?php foreach($matpel as $matpel){ ?>
                      <tr>
                        <td align="center"><?php echo "$i" ?></td>
                        <td><?php echo $matpel['nama_mata_pelajaran'] ?></td>
                        <td align="center"><?php echo $matpel['tingkat_kelas'] ?></td>
                        <td><?php echo $matpel['nama_jurusan'] ?></td>
                        <td>                                          
                          <a href="<?php echo site_url('guru/soal/'.$matpel['id_matpel_tingkat_kelas']) ?>" class="btn bg-navy"> Soal </a>               
                          <a href="<?php echo site_url('guru/detail_matpel/'.$matpel['id_matpel_tingkat_kelas']) ?>" class="btn bg-navy"> Detail </a>
                          <a href="<?php echo site_url('guru/hapus_matpel/'.$matpel['id_matpel_tingkat_kelas']) ?>" class="btn bg-navy" onclick="return confirm ('Apakah anda yakin ingin menghapus data ini ?');"> Hapus </a>                      
                        </td>
                      </tr>
                    <?php $i++;}?>
                 </tbody>
              </table>
            </div>
          </div>
      </div> 
    </div>
    </section>
  </div>  
  <!--Modal-->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Mata Pelajaran</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" action="<?php echo site_url('guru/proses_tambah_matpel') ?>" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="matpel" class="col-sm-3 control-label">Mata Pelajaran</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="matpel" placeholder="Mata Pelajaran" required>
                </div>
              </div>
              <div class="form-group">
                <label for="id_tingkat_kelas" class="col-sm-3 control-label">Tingkat Kelas</label>
                <div class="col-sm-9">
                  <select class="form-control" name="id_tingkat_kelas">
                    <?php foreach ($tingkat_kelas as $tk) { ?>
                      <option value="<?php echo $tk['id_tingkat_kelas'] ?>"><?php echo $tk['tingkat_kelas'] ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="id_tingkat_kelas" class="col-sm-3 control-label">Jurusan</label>
                <div class="col-sm-9">
                  <select class="form-control" name="id_jurusan">
                    <?php foreach ($jurusan as $tk) { ?>
                      <option value="<?php echo $tk['id_jurusan'] ?>"><?php echo $tk['nama_jurusan'] ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn bg-navy pull-right">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--End Modal-->
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
<!-- ./wrapper -->

<script src="<?php echo base_url ()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url ()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url ()?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url ()?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url ()?>assets/dist/js/app.min.js"></script>
<script>
  $(function () {
    oTable = $('#tableMatpel').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      'sDom': 'tip'
    }); 
    $('#myInputTextField').keyup(function(){
          oTable.search($(this).val()).draw() ;
    })
  });
</script>
</body>
</html>