<x-layout.core :title="$title">
  @prepend('css')
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
  @endprepend
  <body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed">
    <div class="wrapper">
      <header class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav align-items-center">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
              <i class="fas fa-bars"></i>
            </a>
          </li>
          <li class="nav-item">
            <span class="d-none d-sm-inline-block h5 m-0">Departamento de Vinculación Social</span>
          </li>
        </ul>
        <img src="{{ asset('img/logo-upta.png') }}" alt="Logo de la UPTA" class="brand-image footer-img d-sm-none" height="35">
      </header>

      <x-layout.sidebar/>
      {{ $slot }}
      <footer class="main-footer">
        <div class="position-relative d-flex d-sm-block justify-content-center">
          <img src="{{ asset('img/logo-upta.png') }}" alt="Logo de la UPTA" class="brand-image position-absolute footer-img d-none d-sm-inline" height="40">
          <strong class="ml-sm-5 text-center">Copyright © 2022 -
            <a href="#">UPT Aragua "Federico Brito Figueroa".</a>
          </strong>
          <div class="float-right d-none d-md-inline-block">
            <span>Todos los derechos reservados.</span>
          </div>
        </div>
      </footer>
    </div>
    {{ $extra ?? '' }}
  </body>
</x-layout.core>