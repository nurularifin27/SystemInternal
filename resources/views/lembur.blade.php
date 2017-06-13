@extends('layouts.master')
@section('title')
    PragmaINF | Lembur
@endsection

@section('contentheader')
    <section class="content-header">
      <h1>
        Reimburse
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
          <h3 class="box-title">Lembur</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#lemburModal">Add New</button>
            <div class="row">
            
                
            </div>
          <!-- /.row -->
        </div>
      </div>
        
<div id="lemburModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Input Lembur</h4>
      </div>
      <div class="modal-body">
                      <form action="#" method="post" role="form">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Kirim Ke</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select User" style="width: 100%;">
                  <option>Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
              <div class="form-group">
                <label>Atas Nama</label>
                  <input type="text" class="form-control" name="atas_nama" required>
              </div>
                
              <div class="form-group">
                <label>Project</label>
                  <input type="text" class="form-control" name="project" required>
              </div>
                <div class="form-group">
                <label>Keterangan</label>
                  <textarea class="form-control" name="keterangan" rows="4" style="resize:none;"></textarea>
              </div>
              </div>
              <div class="col-md-6">
            <div class="form-group">
                <label>Tanggal</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" name="tanggal" required>
                </div>
              </div>
                <div class="form-group">
                <label>Jumlah Jam</label>
                  <input type="text" class="form-control" name="jumlah_jam" required>
              </div>
            </div>
            <!-- /.col -->
            
          </div>
                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <div class="btn-group pull-right">
                    <button type="submit" class="btn bg-orange" name="draft">Save Draft</button>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
              </form>
      </div>
    </div>

  </div>
</div>
    </section>
@endsection