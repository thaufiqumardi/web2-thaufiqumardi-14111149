@extends('templates.index')
@section('content')
<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Thaufiq Umardi</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active"><a href="mahasiswa.php"><i class="fa fa-group"></i>Mahasiswa</a></li>
            <li><a href="index.php"><i class="fa fa-university"></i>Dosen</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="box box-primary">
            <div class="box-header">
              <h2 class="box-title">
                Tambah Data Mahasiswa
              </h2>
            </div>
            <div class="box-body">

              <form class="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                    <label for="nama" class="control-label">Nama</label>
                    <input type="text" name="nama" class="form-control"/>
                  </div>
                </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin">
                      <option value="L">Laki-Laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                    <label for="jurusan" class="control-label">Jurusan</label>
                    <select class="form-control" name="jurusan">
                      <option value="teknik industri">Teknik Industri</option>
                      <option value="teknik informatika">Teknik Informatika</option>
                      <option value="desain komunikasi visual">Desain Komunikasi Visual</option>
                    </select>
                  </div>
                </div>
                  <div class="col-md-6">
                    <div class="form-group">
                    <label for="alamat" class="control-label">alamat</label>
                    <textarea class="form-control" name="alamat"></textarea>
                  </div>
                  </div>
                </div>
              
            </div>
            <div class="box-footer with-border">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-user-plus"></i> Tambahkan</button>
              </div>
              </form>
            </div>
          </div>
        </section>
      </div><!-- /.content-wrapper -->
      @stop