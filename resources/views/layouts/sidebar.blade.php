<section class="sidebar">
  <!-- Sidebar user panel -->
  <!-- /.search form -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">BERANDA</li>
    
    <li class="">
      <a href="{{ url('/') }}">
        <i class="fa fa-home fa-fw"></i><span> Home</span>
      </a>
    </li>
 
    <li class="header">INPUT DATA</li>
 
    <li class="treeview {{ ( Request::segment(2) == 'profile' OR Request::segment(2) == 'photo' ) ? 'active' : '' }}">
      <a href="#">
        <i class="fa fa-user fa-fw"></i><span> Profile</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
      <li class="{{ (Request::path() == 'admin/profile') ? 'active' : '' }}"><a href="{{ url('admin/profile') }}"><i class="fa fa-circle-o fa-fw"></i> Manage Profile</a></li>
 
      <li class="{{ (Request::path() == 'admin/photo') ? 'active' : '' }}"><a href="{{ url('admin/photo') }}"><i class="fa fa-circle-o fa-fw"></i> Upload Photo</a></li>
 
      </ul>
    </li>
 
    <li class="{{ (Request::path() == 'admin/manage-pengalaman') ? 'active' : '' }}"><a href="{{ url('admin/manage-pengalaman') }}"><i class="fa fa-free-code-camp fa-fw"></i><span> Pengalaman Kerja</span></a></li>

    <li class="{{ (Request::path() == 'admin/manage-skill') ? 'active' : '' }}"><a href="{{ url('admin/manage-skill') }}"><i class="fa fa-calendar fa-fw"></i><span> Manage Skill</span></a></li>

     <li class="{{ (Request::path() == 'admin/manage-pendidikan') ? 'active' : '' }}"><a href="{{ url('admin/manage-pendidikan') }}"><i class="fa fa-bed fa-fw"></i><span> Manage Pendidikan</span></a></li>
 
    <li class="header">OTHER</li>
    <li><a href="{{ url('/keluar') }}"><i class="glyphicon glyphicon-log-out fa-fw"></i><span> Logout</span></a></li>
 
 
  </ul>
</section>