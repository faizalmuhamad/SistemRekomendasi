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
      </h1>
    </section>
    <section class="content">
      <div class="row"> 
        <div class="col-md-12"> 
          <div class="box">
            <div class="box-body">
              <form action="<?php echo site_url('guru/setting_association_rule') ?>" method="post" enctype="multipart/form-data">
                <table border="1px" width="100%">
                  <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <?php 
                      for($i=1;$i<31;$i++){
                        echo "<th>$i</th>";
                      }
                    ?>
                    <th>aksi</th>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                      <?php if(count($id_siswa) < 1){ ?>
                        <tr>
                          <td colspan="33" align="center"><i>belum ada data</i></td>
                        </tr>
                      <?php }else{ ?>
                        <?php foreach($id_siswa as $id){ ?>
                          <?php
                            $this->load->model ('m_guru');
                            $siswa = $this->m_guru->get_dataset_tersedia($id['id_siswa'])->result_array();
                          ?>
                            <tr>
                              <td><?php echo $i; ?></td>
                              <td><?php echo $id['nama_siswa']; ?></td>
                              <input type="hidden" name="id_mapel" value="<?php echo $id_matpel; ?>">
                              <?php foreach ($siswa as $sis) {?>
                              <td><?php echo $sis['skor']; ?></td>
                              <?php }?>
                              <td>
                                <?php if(count($siswa) > 0){ ?>
                                  <input type="checkbox" name="id_siswa[]"  value="<?php echo $id['id_siswa'] ?>">
                                <?php }else{ ?>
                                <?php } ?>
                              </td>
                            </tr>                        
                        <?php $i++;}?>
                      <?php }?>
                   </tbody>  
                </table>
                <?php if(count($id_siswa) > 0){ ?>     
                  <input class="button" type="submit" value="Generate rules" name="Simpan">
                <?php } ?>
                </form>
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