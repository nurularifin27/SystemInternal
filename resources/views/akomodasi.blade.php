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
          <h3 class="box-title pull-left">Akomodasi</h3>
            <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#akomodasiModal">Add New</button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
                <table id="listTabel" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Kirim Ke</th>
                    <th>Atas Nama</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th>Total</th>
                    <th>Dibayar</th>
                    <th>Sisa</th>
                    <th>Rincian</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Oka Hartanto</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td>90000000</td>
                        <td>1000000</td>
                        <td><a href="{{route('detail-akomodasi')}}">See Detail</a></td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Oka Hartanto</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td>90000000</td>
                        <td>1000000</td>
                        <td><a href="{{route('detail-akomodasi')}}">See Detail</a></td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Oka Hartanto</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td>90000000</td>
                        <td>1000000</td>
                        <td><a href="{{route('detail-akomodasi')}}">See Detail</a></td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Oka Hartanto</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td>90000000</td>
                        <td>1000000</td>
                        <td><a href="{{route('detail-akomodasi')}}">See Detail</a></td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Oka Hartanto</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td>90000000</td>
                        <td>1000000</td>
                        <td><a href="{{route('detail-akomodasi')}}">See Detail</a></td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Oka Hartanto</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td>90000000</td>
                        <td>1000000</td>
                        <td><a href="{{route('detail-akomodasi')}}">See Detail</a></td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Oka Hartanto</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td>90000000</td>
                        <td>1000000</td>
                        <td><a href="{{route('detail-akomodasi')}}">See Detail</a></td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Oka Hartanto</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td>90000000</td>
                        <td>1000000</td>
                        <td><a href="{{route('detail-akomodasi')}}">See Detail</a></td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Oka Hartanto</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td>90000000</td>
                        <td>1000000</td>
                        <td><a href="{{route('detail-akomodasi')}}">See Detail</a></td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Oka Hartanto</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td>90000000</td>
                        <td>1000000</td>
                        <td><a href="{{route('detail-akomodasi')}}">See Detail</a></td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Oka Hartanto</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td>90000000</td>
                        <td>1000000</td>
                        <td><a href="{{route('detail-akomodasi')}}">See Detail</a></td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Oka Hartanto</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td>90000000</td>
                        <td>1000000</td>
                        <td><a href="{{route('detail-akomodasi')}}">See Detail</a></td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Oka Hartanto</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td>90000000</td>
                        <td>1000000</td>
                        <td><a href="{{route('detail-akomodasi')}}">See Detail</a></td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Oka Hartanto</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td>90000000</td>
                        <td>1000000</td>
                        <td><a href="{{route('detail-akomodasi')}}">See Detail</a></td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Oka Hartanto</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td>90000000</td>
                        <td>1000000</td>
                        <td><a href="{{route('detail-akomodasi')}}">See Detail</a></td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Oka Hartanto</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td>90000000</td>
                        <td>1000000</td>
                        <td><a href="{{route('detail-akomodasi')}}">See Detail</a></td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Oka Hartanto</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td>90000000</td>
                        <td>1000000</td>
                        <td><a href="{{route('detail-akomodasi')}}">See Detail</a></td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Oka Hartanto</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td>90000000</td>
                        <td>1000000</td>
                        <td><a href="{{route('detail-akomodasi')}}">See Detail</a></td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Oka Hartanto</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td>90000000</td>
                        <td>1000000</td>
                        <td><a href="{{route('detail-akomodasi')}}">See Detail</a></td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Oka Hartanto</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td>90000000</td>
                        <td>1000000</td>
                        <td><a href="{{route('detail-akomodasi')}}">See Detail</a></td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oka, Yanwar, Nurul</td>
                        <td>Oka Hartanto</td>
                        <td>01/02/2017 - 02/02/2017</td>
                        <td>Project System Internal Perusahaan</td>
                        <td>91000000</td>
                        <td>90000000</td>
                        <td>1000000</td>
                        <td><a href="{{route('detail-akomodasi')}}">See Detail</a></td>
                        <td><span class="label label-success">Approved</span></td>
                        <td>
                                <a href="#"><i class="fa fa-edit"></i></a>
                                <a href="#"><i class="fa fa-trash-o"></i></a>
                            
                        </td>
                    </tr>
                </tbody>
                </table>
        </div>
      </div>
        
<div id="akomodasiModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Input Akomodasi</h4>
      </div>
      <div class="modal-body">
          <form action="#" method="get" role="form">
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
                <label>Tanggal</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                            <input type="text" class="form-control pull-right" id="reservation" name="tanggal">
                    </div>
              </div>
              <div class="form-group">
                <label>Keterangan</label>
                  <textarea class="form-control" name="keterangan_akomodasi" rows="4" style="resize:none;"></textarea>
              </div>
                <div class="form-group">
                <label>Total</label>
                  <input type="text" name="total" class="form-control" value="10" disabled>
              </div>
                <div class="form-group">
                <label>Dibayar</label>
                  <input type="text" name="total" class="form-control" value="10" disabled>
              </div>
                <div class="form-group">
                <label>Sisa</label>
                  <input type="text" name="total" class="form-control" value="10" disabled>
              </div>
                
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              
              <!-- /.form-group -->
              <div class="form-group" id="rincianAkomodasi">
                <label>Rincian</label>
                  <div class="row rincian">
                  <div class="col-md-5">
                    <input type="text" placeholder="keterangan" class="form-control pull-left" name="keterangan">
                  </div>
                    <div class="col-md-5">
                    <input type="text" placeholder="nominal" class="form-control pull-right" name="nominal">
                  </div>
                      <div class="col-md-2">
                        <!--  <div class="glyphicon glyphicon-remove rrr" style="font-size:2.0em;cursor:pointer;"></div>
                         <a onclick="removedetail-akomodasi()"><span class="glyphicon glyphicon-remove" style="font-size:2.0em;"></span></a> -->
                      </div>
                    </div>
                  <br>
              </div>
                <hr>
                <button class="btn btn-primary pull-right" onclick="addRincian()" type="button">New</button>
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
<script>
function addRincian() {
    var element = document.getElementById("detail-akomodasiAkomodasi");
    
    var x = document.createElement("DIV");
    x.setAttribute("class","row");
    
    var y = document.createElement("DIV");
    y.setAttribute("class","col-md-5");
    x.appendChild(y);
    
    var z = document.createElement("INPUT");
    z.setAttribute("type","text");
    z.setAttribute("name","keterangan");
    z.setAttribute("placeholder","keterangan");
    z.setAttribute("class","form-control pull-left");
    y.appendChild(z);
    
    var a = document.createElement("DIV");
    a.setAttribute("class","col-md-5");
    x.appendChild(a);
    
    var b = document.createElement("INPUT");
    b.setAttribute("type","text");
    b.setAttribute("name","nominal");
    b.setAttribute("placeholder","nominal");
    b.setAttribute("class","form-control pull-right");
    a.appendChild(b);
    
    var c = document.createElement("DIV");
    c.setAttribute("class","col-md-2");
    x.appendChild(c);
    
    var d = document.createElement("DIV");
    d.setAttribute("class","glyphicon glyphicon-remove rrr");
    d.setAttribute("style","font-size:2.0em;cursor:pointer;");
    c.appendChild(d);
    
    var brr = document.createElement("BR");
    element.appendChild(x);
    element.appendChild(brr);
};
$(document).ready(function() {
    $(".rrr").click(function() {
        var index = $(this).parent().parent().index(".detail-akomodasi");
        alert(index);
    });
});
</script>
@endsection