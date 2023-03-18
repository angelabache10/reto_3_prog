<x-layout.main title="Clubes">
  <x-slot name="breadcrumbs">
    {{ Breadcrumbs::render('clubs.index') }}
  </x-slot>
  <section class="container-fluid mt-3">
    @if ($clubs->isNotEmpty())
      <x-table>
        <x-slot name="header">
          <th>Nombre</th>
          <th>Instructor</th>
          <th>Día</th>
          <th>Hora de Inicio</th>
          <th>Hora de Cierre</th>
          <th>Miembros</th>
          <th>Estado</th>
          <th>Acciones</th>
        </x-slot>
        <x-slot name="body">
          @foreach ($clubs as $club)
            <x-row :data="[
              $club->name,
              $club->instructor->full_name,
              $club->day,
              $club->start_hour->format(TF),
              $club->end_hour->format(TF),
              $club->members_count,
              $club->status,
              ]"
            >
              <x-slot name="actions">
                <x-button 
                  :url="route('clubs.memberships', ['club' => $club])" 
                  color="secondary" 
                  icon="clipboard-list"
                >
                  Miembros
                </x-button>
              </x-slot>
            </x-row>
          @endforeach
        </x-slot>
        <x-slot name="pagination">
          <div class="pagination-container">
            {{ $clubs->links() }}
          </div>
        </x-slot>
      </x-table>
    @else
      <div class="empty-container">
        <h2 class="empty">No hay clubs disponibles</h2>
      </div>
    @endif
  </section>
</x-layout.main>