@extends('templates.index')
@section('content')
<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{url('dist/img/avatar.png')}}" class="img-circle" alt="User Image">
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
            <li class="active"><a href="{{url('mahasiswa')}}"><i class="fa fa-group"></i>Mahasiswa</a></li>
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
          <div class="row">
          <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h2 class="box-title">
                Edit Data Mahasiswa {{$data->nama}}
              </h2>
            </div>
            <div class="box-body">
              <form class="form-horizontal" action="{{url('/mahasiswa/update')}}/{{$data->id}}" method="POST">
                <input type="hidden" name="_method" value="PATCH"/>
                <input type="hidden" name="_token" value="<?php echo csrf_token();?>"/>
               <div class="form-group">
                    <label for="nim" class="control-label col-md-2">NIM</label>
                    <div class="col-md-10">
                      <input type="text" name="nim" class="form-control" value="{{$data->nim}}"/>
                    </div>
               </div>
               <div class="form-group">
                    <label for="nama" class="control-label col-md-2">Nama</label>
                    <div class="col-md-10">
                      <input type="text" name="nama" class="form-control" value="{{$data->nama}}"/>
                    </div>
               </div>
               <div class="form-group">
                <label for="nama" class="control-label col-md-2">Jenis Kelamin</label>
                <div class="col-md-10">
                  <select class="select2 form-control" name="jenis_kelamin">
                    @if($data->jenis_kelamin=="Laki-Laki")
                      <option selected>Laki-Laki</option>
                      <option>Perempuan</option>
                    @else
                      <option>Laki-Laki</option>
                      <option selected>Perempuan</option>
                    @endif
                  </select>
                </div>
               </div>
               <div class="form-group">
                <label for="jurusan" class="control-label col-md-2">Jurusan</label>
                <div class="col-md-10">
                  <select name="jurusan" class="form-control">
                    @if($data->jurusan=="Teknik Industri")
                      <option selected>Teknik Industri</option>
                      <option>Teknik Informatika</option>
                      <option>Desain Komunikasi Visual</option>
                    @elseif($data->jurusan=="Teknik Informatika")
                      <option>Teknik Industri</option>
                      <option selected>Teknik Informatika</option>
                      <option>Desain Komunikasi Visual</option>
                    @elseif($data->jurusan=="Desain Komunikasi Visual")
                      <option>Teknik Industri</option>
                      <option>Teknik Informatika</option>
                      <option selected>Desain Komunikasi Visual</option>
                    @endif
                  </select>
                </div>
               </div>
              <div class="form-group">
                <label for="alamat" class="control-label col-md-2">Alamat</label>
                <div class="col-md-10">
                  <textarea name="alamat" class="form-control">{{$data->alamat}}</textarea>
                </div>
              </div>
            </div>
            <div class="box-footer with-border">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i> Simpan</button>
              </div>
            </div>
            </form>
          </div>
          </div>
          @if(Session::has('flash_message'))
            <div class="col-md-6">
              <div class='alert alert-success'>
                {{Session::get('flash_message')}}<br>
                <a type="button" class="btn btn-primary" href="{{url('mahasiswa')}}"><i class="fa fa-chevron-left"></i> Kembali</a>
              </div>
            </div>
          @endif
          </div>
        </section>
      </div><!-- /.content-wrapper -->
@stop