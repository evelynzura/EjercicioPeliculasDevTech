<aside class="main-sidebar sidebar-dark-primary elevation-4" style="overflow-x:hidden">
  <!-- Brand Logo -->
  <a href="{{url('/')}}" class="brand-link">
    <img src="{{url('/')}}/img/user.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Evelyn Zura</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition"><div class="os-resize-observer-host"><div class="os-resize-observer observed" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer observed"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 296px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;"><div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{url('/')}}/img/user.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Administrador</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!--=====================================
        Botón Administradores
        ======================================-->
        <li class="nav-item">
          <a href="{{ url('/verPeliculas') }}" class="nav-link">
            <i class="nav-icon fa-solid fa-film"></i>
            <p>Películas</p>
          </a>
        </li>
        <!--=====================================
        Botón Categorías
        ======================================-->
        <li class="nav-item">
          <a href="{{ url('/verCategorias') }}" class="nav-link">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>Categorías</p>
          </a>
        </li>
        <!--=====================================
        Botón Artículos
        ======================================-->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-ticket"></i>
            <p>Renta</p>
          </a>
        </li>
        <!--=====================================
        Botón Opiniones
        ======================================-->
        <li class="nav-item">
          <a href="{{ url('/verClientes') }}" class="nav-link">
            <i class="nav-icon fas fa-user-friends"></i>
            <p>Clientes</p>
          </a>
        </li>
        <!--=====================================
        Botón Banner
        ======================================-->
        <li class="nav-item">
          <a href="{{ url('/verEmpleados') }}" class="nav-link">
            <i class="nav-icon fas fa-user-check"></i>
            <p>Empleados</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="height: 21.4131%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div>
  <!-- /.sidebar -->
</aside>
