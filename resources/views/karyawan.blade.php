@extends('layouts.master')
@section('title')
    PragmaINF | Karyawan
@endsection

@section('contentheader')
    <section class="content-header">
      <h1>
        Master Data
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Sppd</li>
      </ol>
    </section>
@endsection

@section('content')
    <section class="content">
        <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Karyawan</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#karyawanModal">Add New</button>
            <div class="row">
            
                
            </div>
          <!-- /.row -->
        </div>
      </div>
        
<div id="karyawanModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Input Karyawan</h4>
      </div>
      <div class="modal-body">
                      <form action="#" method="post" role="form">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nama Lengkap</label>
                  <input type="text" class="form-control" name="nama" required>
              </div>
                
              <div class="form-group">
                <label>Jabatan</label>
                  <input type="text" class="form-control" name="jabatan" required>
              </div>
              </div>
            <div class="col-md-6">
            <div class="form-group">
                <label>Username</label>
                  <input type="text" class="form-control" name="username" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                  <input type="password" class="form-control" name="password" required>
              </div>
            </div>
            <!-- /.col -->
            
          </div>
                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <div class="btn-group pull-right">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
              </form>
      </div>
    </div>
  </div>
</div>
    </section>
@endsection