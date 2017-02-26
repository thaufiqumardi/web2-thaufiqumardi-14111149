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
            <li><a href="/"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active"><a href="mahasiswa"><i class="fa fa-group"></i>Mahasiswa</a></li>
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
            <div class="box-header with-border">
              <h2 class="box-title">
                Tambah Data Mahasiswa
              </h2>
            </div>
            <div class="box-body">
              <form class="form" action="{{url('tambah-mahasiswa/action')}}" method="POST">
                <input type="hidden" name="_token" value="<?php echo csrf_token();?>"/>
                <div class="row">
                  <div class="col-md-6">
                  <label for="nim" class="control-label">Nim</label>
                  <input type="text" name="nim" class="form-control"/>
                </div>
                </div>
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
                      <option selected disabled>Jenis Kelamin:</option>
                      <option>Laki-Laki</option>
                      <option>Perempuan</option>
                    </select>
                  </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                    <label for="jurusan" class="control-label">Jurusan</label>
                    <select class="form-control" name="jurusan">
                      <option selected disabled>Silahkan Pilih Jurusan</option>
                      <option>Teknik Industri</option>
                      <option>Teknik Informatika</option>
                      <option>Desain Komunikasi Visual</option>
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
              <div class="pull-left">
                @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                    @endforeach
                </div>
                @endif
                @if(Session::has('flash_message'))
                  <div class='alert alert-success'>
                    {{Session::get('flash_message')}}
                    <a href="{{url('mahasiswa')}}" class="btn btn-primary">Lihat</a>
                  </div>
                @endif
              </div>
            </div>
            </form>
          </div>
        </section>
      </div><!-- /.content-wrapper -->
@stop