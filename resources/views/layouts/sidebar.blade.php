<section class="sidebar">
  <!-- Sidebar user panel -->
  <!-- /.search form -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">BERANDA</li>
    <li><a href="{{ url('/') }}"><i class="fa fa-fw fa-home"></i> Home</span></a></li>
 
    <li class="header">INPUT DATA</li>
    <!-- <li><a href="{{ url('/input') }}"><i class="fa fa-fw fa-tripadvisor"></i> Input Data</span></a></li> -->
 
    <li class="treeview {{ ( Request::segment(2) == 'profile' OR Request::segment(2) == 'photo' ) ? 'active' : '' }}">
      <a href="#">
        <span class="glyphicon glyphicon-user"></span> <span>Profile</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
      <li class="{{ (Request::path() == 'admin/profile') ? 'active' : '' }}"><a href="{{ url('admin/profile') }}"><i class="fa fa-circle-o"></i> Manage Profile</a></li>
 
      <li class="{{ (Request::path() == 'admin/photo') ? 'active' : '' }}"><a href="{{ url('admin/photo') }}"><i class="fa fa-circle-o"></i> Upload Photo</a></li>
 
      </ul>
    </li>
 
    <li class="{{ (Request::path() == 'admin/manage-pengalaman') ? 'active' : '' }}"><a href="{{ url('admin/manage-pengalaman') }}"><i class="fa fa-fw fa-vimeo"></i> Pengalaman Kerja</a></li>

    <li class="{{ (Request::path() == 'admin/manage-skill') ? 'active' : '' }}"><a href="{{ url('admin/manage-skill') }}"><span class="glyphicon glyphicon-calendar"></span> Manage Skill</a></li>

     <li class="{{ (Request::path() == 'admin/manage-pendidikan') ? 'active' : '' }}"><a href="{{ url('admin/manage-pendidikan') }}"><i class="fa fa-fw fa-bed"></i> Manage Pendidikan</a></li>
 
    <li class="header">OTHER</li>
    <!-- <li><a class="sync-ulang" href="{{ url('/sync-ulang') }}"><i class="fa fa-fw fa-hand-scissors-o"></i> Reset Sync</span></a></li> -->
    <!-- <li><a class="sync-ulang" href="{{ url('/tambah-item') }}"><i class="fa fa-fw fa-hand-scissors-o"></i> Penambahan Item</span></a></li> -->
    <li><a href="{{ url('/keluar') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
 
 
  </ul>
</section>