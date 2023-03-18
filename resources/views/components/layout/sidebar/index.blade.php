@php
  $user = auth()->user();
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <div class="sidebar mt-0 h-100">
    <div class="user-panel my-3 pb-3 d-flex align-items-center">
      <div class="image pl-2">
      <img src="{{ asset($user->image) }}" class="img-circle elevation-2" alt="Imagen del usuario">
      </div>
      <div class="info">
        <p class="d-block text-white m-0">{{ $user->full_name }}</p>
        <span class="text-bold text-muted">{{ $user->role }}</span>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu">
        <x-layout.sidebar.item :url="route('home')" icon="home">
          Inicio
        </x-layout.sidebar.item>
        <x-layout.sidebar.item :url="route('courses.index')" icon="graduation-cap">
          Lista de cursos
        </x-layout.sidebar.item>
        <x-layout.sidebar.item :url="route('clubs.index')" icon="basketball-ball">
          Lista de clubes
        </x-layout.sidebar.item>
        <x-layout.sidebar.item :url="route('items.stock.index')" icon="list-alt">
          Inventario actual
        </x-layout.sidebar.item>
        <div class="divider"></div>
        <x-layout.sidebar.item :url="route('logout')" icon="sign-out-alt">
          Cerrar Sesión
        </x-layout.sidebar.item>
      </ul>
    </nav>
  </div>
</aside>