@extends('layouts.master')
@section('title')
    PragmaINF | Account
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
          <h3 class="box-title">Account</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#accountModal">Add New</button>
          <!-- /.row -->
        </div>
        <div class="box-body">
            <table id="listTabel" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama Account</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody
                    <tr>
                        <td>1</td>
                        <td>Pembelian</td>
                        <td>Buat Beli</td>
                        <td>
                            action
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pembelian</td>
                        <td>Buat Beli</td>
                        <td>
                            action
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pembelian</td>
                        <td>Buat Beli</td>
                        <td>
                            action
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pembelian</td>
                        <td>Buat Beli</td>
                        <td>
                            action
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pembelian</td>
                        <td>Buat Beli</td>
                        <td>
                            action
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pembelian</td>
                        <td>Buat Beli</td>
                        <td>
                            action
                        </td>
                    </tr>
                </tbody>
                </table>
        </div>
      </div>
        
<div id="accountModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Input Account</h4>
      </div>
      <div class="modal-body">
                      <form action="#" method="post" role="form">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Nama Account</label>
                  <input type="text" class="form-control" name="nama_account" required>
              </div>
                
              <div class="form-group">
                <label>Keterangan</label>
                  <textarea class="form-control" name="keterangan" rows="4" style="resize:none;"></textarea>
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