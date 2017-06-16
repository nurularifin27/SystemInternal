<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
        
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dollar"></i>
            <span>Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('pemasukan') }}"><i class="fa fa-circle-o"></i> Pemasukan</a></li>
            <li><a href="{{ route('pengeluaran') }}"><i class="fa fa-circle-o"></i> Pengeluaran</a></li>
            <li><a href="{{ route('mutasi')}}"><i class="fa fa-circle-o"></i> Mutasi</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Reimburse</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('sppd') }}"><i class="fa fa-circle-o"></i> SPPD</a></li>
            <li><a href="{{ route('akomodasi') }}"><i class="fa fa-circle-o"></i> Akomodasi</a></li>
            <li><a href="{{ route('lembur') }}"><i class="fa fa-circle-o"></i> Lembur</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text-o"></i> <span>Administrasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('sppd') }}"><i class="fa fa-circle-o"></i> SPPD</a></li>
            <li><a href="{{ route('akomodasi') }}"><i class="fa fa-circle-o"></i> Akomodasi</a></li>
            <li><a href="{{ route('lembur') }}"><i class="fa fa-circle-o"></i> Lembur</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i> <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('data.karyawan') }}"><i class="fa fa-circle-o"></i> Karyawan</a></li>
            <li><a href="{{ route('data.account') }}"><i class="fa fa-circle-o"></i> Account</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gears"></i> <span>Security</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Hak Akses</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>