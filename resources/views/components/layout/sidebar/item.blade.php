<li class="nav-item">
  <a href="{{ $url ?? '' }}" class="nav-link @isset($menu)has-treeview @endisset">
    <i class="nav-icon fas fa-{{ $icon }}"></i>
    <p>
      {{ $slot }}
      @isset($menu) <i class="right fas fa-angle-left"></i> @endisset
    </p>
  </a>
  @isset ($menu)
    <ul class="nav nav-treeview">
      {{ $menu }}
    </ul>
  @endisset
</li>