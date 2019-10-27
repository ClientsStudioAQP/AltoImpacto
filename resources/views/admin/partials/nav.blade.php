<ul class="sidebar-menu" data-widget="tree">
    <li class="header">NAVEGACION</li>
    <!-- Optionally, you can add icons to the links -->
    <li {{ request()->is('admin/panel') ? 'class=active' : ' ' }}><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    <li {{ request()->is('admin/proyectos') ? 'class=active' : ' ' }}><a href="{{ route('admin.proyectos.index') }}"><i class="fa fa-list"></i> <span>Listado de Proyectos</span></a></li>
    <li><a href="#" data-toggle="modal" data-target="#elaborationModal"><i class="fa fa-plus"></i> <span>Agregar Nuevo Proyecto</span></a></li>
    <li class=""><a href="#"><i class="fa fa-group"></i> <span>Listado de Usuarios</span></a></li>
    <li class=""><a href="#"><i class="fa fa-user-plus"></i> <span>Agregar Nuevo Usuario</span></a></li>
    <li class=""><a href="#"><i class="fa fa-support"></i> <span>Contactar Soporte</span></a></li>
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
