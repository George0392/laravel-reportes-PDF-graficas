

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ auth()->user()->name }}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Menu</li>
      <!-- Optionally, you can add icons to the links -->

      @can('pacientes.index')
      <li class="active">
        <a href="{{ route('pacientes.index') }}"><i class="fa fa-user"></i>
          <span>Pacientes</span>
        </a>
      </li>
      @endcan

      @can('medicos.index')
      <li class="active">
        <a href="{{ route('medicos.index') }}"><i class="fa fa-user"></i>
          <span>Medicos</span>
        </a>
      </li>
      @endcan

      @can('consultorios.index')
      <li class="active">
        <a href="{{ route('consultorios.index') }}"><i class="fa fa-home"></i>
          <span>Consultorios</span>
        </a>
      </li>
      @endcan

      @can('control.index')
      <li class="active">
        <a href="{{ route('control.index') }}"><i class="fa fa-shopping-cart "></i>
          <span>Consulta</span>
        </a>
      </li>
      @endcan

      @can('medicamento.index')
      <li class="active">
        <a href="{{ route('medicamentos.index') }}"><i class="fa fa-shopping-cart "></i>
          <span>Medicamentos</span>
        </a>
      </li>
      @endcan

      @can('entrega.index')
      <li class="active">
        <a href="{{ route('entregas.index') }}"><i class="fa fa-shopping-cart "></i>
          <span>Control de Medicina</span>
        </a>
      </li>
      @endcan





       @can('roles.index')
      <li class="active">
        <a href="{{ route('roles.index') }}"><i class="fa fa-user "></i>
          <span>Roles</span>
        </a>
      </li>
      @endcan

      @can('users.index')
      <li class="active">
        <a href="{{ route('users.index') }}"><i class="fa fa-user "></i>
          <span>Usuarios</span>
        </a>
      </li>
      @endcan

       @can('permisos.index')
      <li class="active">
        <a href="{{ route('permisos.index') }}"><i class="fa fa-user"></i>
          <span>Permisos</span>
        </a>
      </li>
      @endcan



      <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#">Link in level 2</a></li>
          <li><a href="#">Link in level 2</a></li>
        </ul>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>