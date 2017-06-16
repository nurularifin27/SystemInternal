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
          <h3 class="box-title">Mutasi</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form action="" method="GET">
                <div class="col-md-2">
                <div class="form-group">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" name="mutasi_awal" placeholder="Start Date">
                </div>
                <!-- /.input group -->
                </div>
                </div>
                
                <div class="col-md-2">
                <div class="form-group">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker2" name="mutasi_akhir" placeholder="End Date">
                </div>
                <!-- /.input group -->
                </div>
                </div>
                
                <div class="col-md-2">
                <div class="form-group">
                <select class="form-control" style="width: 100%;" name="status" required>
                  <option selected="selected">Approve</option>
                  <option>Draft</option>
                  <option>Other</option>
                </select>
                <!-- /.input group -->
                </div>
                </div>
                
                <div class="col-md-2">
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-2">
                </div>
            </form>
        </div>
        </div>
        
        <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Mutasi 12/03/207 - 12/04/2017</h3>
            <h3 class="label label-success">Approved</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="listTabel2" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Tujuan AKun</th>
                    <th>Keterangan</th>
                    <th>Pemasukan</th>
                    <th>Pengeluaran</th>
                </tr>
                </thead>
                <tbody
                    <tr>
                        <td>01/02/2017</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>01/02/2017</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>01/02/2017</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Project System Internal Perusahaan</td>
                        <td></td>
                        <td>20000000</td>
                    </tr>
                    <tr>
                        <td>01/02/2017</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>01/02/2017</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>01/02/2017</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Project System Internal Perusahaan</td>
                        <td></td>
                        <td>20000000</td>
                    </tr>
                    <tr>
                        <td>01/02/2017</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>01/02/2017</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>01/02/2017</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Project System Internal Perusahaan</td>
                        <td></td>
                        <td>20000000</td>
                    </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th colspan="3">Total</th>
                    <th rowspan="1" colspan="1">900000000</th>
                    <th rowspan="1" colspan="1">120000000</th>
                </tr>
                <tr>
                    <th colspan="3">Saldo</th>
                    <th rowspan="1" colspan="1"></th>
                    <th rowspan="1" colspan="1">120000000</th>
                </tr>
                </tfoot>
                </table>
        </div>
        </div>
    </section>
@endsection