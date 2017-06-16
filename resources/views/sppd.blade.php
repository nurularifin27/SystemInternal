@extends('layouts.master')
@section('title')
    PragmaINF | SPPD
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
          <h3 class="box-title pull-left">SPPD</h3>
            <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#sppdModal">Add New</button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            
                <table id="listTabel" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Kirim Ke</th>
                    <th>Tujuan</th>
                    <th>Project</th>
                    <th>Tanggal</th>
                    <th>Jumlah Hari</th>
                    <th>Harian (Rp)</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Jakarta</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>91</td>
                        <td>300000</td>
                        <td>2700000</td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Jakarta</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>91</td>
                        <td>300000</td>
                        <td>2700000</td>
                        <td><span class="label label-warning">saved as draft</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Jakarta</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>91</td>
                        <td>300000</td>
                        <td>2700000</td>
                        <td><span class="label label-info">wait for approve</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Jakarta</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>91</td>
                        <td>300000</td>
                        <td>2700000</td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Jakarta</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>91</td>
                        <td>300000</td>
                        <td>2700000</td>
                        <td><span class="label label-warning">saved as draft</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Jakarta</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>91</td>
                        <td>300000</td>
                        <td>2700000</td>
                        <td><span class="label label-info">wait for approve</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Jakarta</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>91</td>
                        <td>300000</td>
                        <td>2700000</td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Jakarta</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>91</td>
                        <td>300000</td>
                        <td>2700000</td>
                        <td><span class="label label-warning">saved as draft</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Jakarta</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>91</td>
                        <td>300000</td>
                        <td>2700000</td>
                        <td><span class="label label-info">wait for approve</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Jakarta</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>91</td>
                        <td>300000</td>
                        <td>2700000</td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Jakarta</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>91</td>
                        <td>300000</td>
                        <td>2700000</td>
                        <td><span class="label label-warning">saved as draft</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Jakarta</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>91</td>
                        <td>300000</td>
                        <td>2700000</td>
                        <td><span class="label label-info">wait for approve</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                </tbody>
                </table>
        </div>
      </div>
        
<div id="sppdModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Input SPPD</h4>
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
                <label>Tujuan</label>
                  <input type="text" class="form-control" name="tujuan" required>
              </div>
                <div class="form-group">
                <label>Project</label>
                  <input type="text" class="form-control" name="project" required>
              </div>
            <div class="form-group">
                <label>Total</label>
                <input type="text" name="total" class="form-control" value="10" disabled>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Tanggal</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                            <input type="text" class="form-control pull-right" id="reservation" name="tanggal">
                    </div>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Jumlah Hari</label>
                <input type="text" name="jumlah_hari" class="form-control" value="10" disabled>
              </div>
            <div class="form-group">
                <label>Harian</label>
                <div class="input-group">
                    <span class="input-group-addon">Rp</span>
                    <input type="text" class="form-control" name="harian" required>
                    <span class="input-group-addon">.00</span>
                </div>
              </div>
              <!-- /.form-group -->
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