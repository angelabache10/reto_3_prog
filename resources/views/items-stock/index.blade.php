<x-layout.main title="Inventario actual">
  <x-slot name="breadcrumbs">
    {{ Breadcrumbs::render('items.stock.index') }}
  </x-slot>
  @push('css')
    <link rel="stylesheet" href="{{ asset('css/listados.css') }}">
  @endpush
  <section class="container-fluid mt-3">
    <div class="card mx-2 mb-0 list-top">
      <div class="w-100 d-flex justify-content-between align-items-center">
        <h3>Stock de artículos</h3>
        <div>
          <x-button :url="route('pdf.items')" icon="file-download">
            Generar PDF
          </x-button>
        </div>
      </div>
    </div>
    @if ($items->isNotEmpty())
      <x-table>
        <x-slot name="header">
          <th>Código</th>
          <th>Artículo</th>
          <th>Stock disponible</th>
          <th>Stock total</th>
        </x-slot>
        <x-slot name="body">
          @foreach ($items as $item)
            <x-row :data="['#'.$item->code, $item->name, $item->stock, $item->total_stock]">
            </x-row>
          @endforeach
        </x-slot>
        <x-slot name="pagination">
          <div class="pagination-container">
            {{ $items->links() }}
          </div>
        </x-slot>
      </x-table>
    @else
      <div class="card mx-2 empty-container">
        <h5 class="empty">No existen artículos registrados.</h5>
      </div>
    @endif
  </section>
</x-layout.main>