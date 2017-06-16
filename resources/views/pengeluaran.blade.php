@extends('layouts.master')
@section('title')
    PragmaINF | Transaksi
@endsection

@section('contentheader')
    <section class="content-header">
      <h1>
        Transaksi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Transaksi</li>
      </ol>
    </section>
@endsection

@section('content')
    <section class="content">
        <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Pengeluaran</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form action="#" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Tujuan Akun</label>
                <select class="form-control" style="width: 100%;" name="tujuan_akun" required>
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
              <div class="form-group">
                <label>Tanggal</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" name="tanggal" required>
                </div>
                <!-- /.input group -->
              </div>
                
              <div class="form-group">
                <label>Jumlah</label>
                <div class="input-group">
                    <span class="input-group-addon">Rp</span>
                    <input type="text" class="form-control" name="jumlah" required>
                    <span class="input-group-addon">.00</span>
                </div>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Keterangan</label>
                <textarea class="form-control" name="keterangan" rows="4" style="resize:none;"></textarea>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Attachment</label>
                <input type="file" name="attachment" class="form-control">
              </div>
              <!-- /.form-group -->
            </div>
            
            <!-- /.col -->
            
          </div>
            <input type="submit" name="go" value="Submit" class="btn btn-primary">
              </form>
          <!-- /.row -->
        </div>
      </div>
    </section>
@endsection