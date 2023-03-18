<x-layout.main title="Inicio">
  <x-slot name="breadcrumbs">
    {{ Breadcrumbs::render('home') }}
  </x-slot>
  @push('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  @endpush
  <section class="container-fluid px-sm-4">
    <div class="empty-container" style="height: 80vh">
      <div class="empty d-flex flex-column">
        <span class="mb-3 display-3 font-weight-bold">Bienvenido al reto 3</span>
        <span class="h1">Integrantes del grupo:</span>
        <span class="h1">Myriam Yaqueno</span>
        <span class="h1">Esteban Florez</span>
        <span class="h1">Angelica Abache</span>
      </div>
    </div>
  </section>
</x-layout.main>