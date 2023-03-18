<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    {{ $title }} | Departamento de Vinculación Social
  </title>
  <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
  @stack('css-plugins')
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
  @stack('css')
  <script defer src="{{ asset('js/jquery.min.js') }}"></script>
  <script defer src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  @stack('js-plugins')
  <script defer src="{{ asset('js/adminlte.min.js') }}"></script>
  @stack('js')
</head>

{{ $slot }}

</html>