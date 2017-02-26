@extends('templates.index')
@section('content')
 <!-- Left side column. contains the logo and sidebar -->
 @if(Auth::guest())
    <script>
        window.alert('login');
        window.location.href('login');
    </script>
 @else
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/avatar.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{Auth::User()->name}}</p>
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
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="mahasiswa"><i class="fa fa-group"></i>Mahasiswa</a></li>
            <li><a href="dosen.php"><i class="fa fa-university"></i>Dosen</a></li>
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
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  
                  <h3>1</h3>
                  <p>Mahasiswa</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <a href="mahasiswa.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  
                  <h3>3</h3>
                  <p>Dosen</p>
                </div>
                <div class="icon">
                  <i class="fa fa-university"></i>
                </div>
                <a href="dosen.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-4 col-xs-6">
              
            </div>
          </div>
        </section>
      </div><!-- /.content-wrapper -->
      @endif
@endsection
