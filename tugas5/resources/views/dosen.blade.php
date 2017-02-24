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
            <li><a href="mahasiswa"><i class="fa fa-group"></i>Mahasiswa</a></li>
            <li class="active"><a href="dosen"><i class="fa fa-university"></i>Dosen</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <i class="fa fa-university"></i>Data Dosen
            <a href="tambah-dosen.php" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Tambah Dosen</a>
          </h1>

          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-university"></i> Data Dosen</a></li>
            
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="box box-primary">
            <div class="box-body">
              <table class="table table-bordered table-hover" id="data-dosen">
                <thead>
                  <th>ID</th>
                  <th>NIDN</th>
                  <th>Nama</th>
                  <th>Alamat Tinggal</th>
                  <th>Aksi</th>
                </thead>
                
                <tbody>
                      
              </table>
              <div class="modal fade" id="modal_edit"  data-backdrop="static" data-keyboard="false">
              <div class="modal-dialog">
                <div class="modal-content" style="margin-top:100px;">
                  
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" style="text-align:center;">Anda yakin ingin Mengedit <span class="grt"></span>?</h4>
                  </div>
                  
                  <div class="modal-footer">
                    <span id="preloader-delete"></span>
                    </br>
                      <a class="btn btn-primary" id="edit_link" href="">Ya</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="delete_cancel_link">Cancel</button>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="modal_delete_m_n"  data-backdrop="static" data-keyboard="false">
              <div class="modal-dialog">
                <div class="modal-content" style="margin-top:100px;">
                  
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" style="text-align:center;">Anda yakin ingin menghapus <span class="grt"></span>?</h4>
                  </div>
                  
                  <div class="modal-footer">
                    <span id="preloader-delete"></span>
                    </br>
                      <a class="btn btn-primary" id="delete_link_m_n" href="">Delete</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="delete_cancel_link">Cancel</button>
                    
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </section>
      </div><!-- /.content-wrapper -->
@stop