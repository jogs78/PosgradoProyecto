<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TecNM</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/css/socialbar.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte/css/adminlte.min.css')}}">
    <!--LINK IMAGENES-->
    <link rel="preload" href="{{asset('adminlte/img/logotec.png')}}">
    <link rel="stylesheet" href="{{asset('adminlte/img/fondo1.jpg')}}">
    
    <style>
        html {
            background-image: {{asset('adminlte/img/fondo1.jpg')}};
        }
    </style>
</head>
<body class="fondo hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center" style="width: 100%">
    <img class="animation__wobble" src="{{asset('adminlte/img/logotec.png')}}" alt="AdminLTELogo" height="300" width="500">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <ul class="nav nav-treeview">
      @yield('inicio')               
      </ul>
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contacto</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">TecNM</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

    <!-- si existe la sesion se muestra el menu de la izquierda -->


  <!-- MENU DE LA IZQUIERDA -->
<aside class="main-sidebar sidebar-dark-primary">

    <!-- Sidebar MENUU-->
    <div class="sidebar">
      <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                
                <li class="nav-item ">   
                  <p>@yield('titulo')</p>
                   

                </li>  
                <li class="nav-item ">
                    <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-chevron-circle-down"></i>
                    <p>Menu
                       <!--  Menu
                        {{-- solo puedo tener 4 tipos de menus 
                        @switch($type)
                            @case(1)
                                
                                @break
                            @case(2)
                                
                                @break
                            @default
                                
                        @endswitch
                        
                          
                          --}} -->
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @yield('submenu')
                
                
                    </ul>
                </li>              
                
                <!--REDES SOCIALES-->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-users nav-icon "></i>
                        <p> 
                            Contactos
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="https://www.tuxtla.tecnm.mx/" class="nav-link">
                            <i class="fas fa-map-marker-alt nav-icon"></i>
                            <p>ITTG</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://sii.tuxtla.tecnm.mx/" class="nav-link">
                            <i class="fas fa-map-marker-alt nav-icon"></i>
                            <p>SII</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.facebook.com/tecnmtuxtlagtz/?rf=220191508087468" class="nav-link">
                            <i class="fab fa-facebook-square nav-icon"></i>
                            <p>Facebook</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.instagram.com/p/BkJ8RUBBDRA/?hl=es" class="nav-link">
                                <i class="fab fa-instagram nav-icon"></i>
                                <p>Instagram</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.tuxtla.tecnm.mx/directorio-2020/" class="nav-link">
                                <i class="far fa-envelope nav-icon"></i>
                                <p>Mail</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="height: 100%">
      
    <!-- Main content AQUI VA EL CONTENIDO PRINCIPAL -->
    @yield('content')           
        
</div>  
    
        
  
 
  

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong><a href="{{url('/info')}}">    
    Sistema para el seguimiento de proyectos de Posgrado
    </a></strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Residentes </b>2
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/js/adminlte.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('/adminlte/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('adminlte/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.min.js"></script>

<!-- ChartJS -->
<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('adminlte/js/pages/dashboard2.js')}}"></script>
</body>
</html>