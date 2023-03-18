<x-layout.main title="Miembros">
  <x-slot name="breadcrumbs">
    {{ Breadcrumbs::render('clubs.memberships', $club) }}
  </x-slot>
  @push('css')
    <link rel="stylesheet" href="{{ asset('css/listados.css') }}">
  @endpush
  <section class="container-fluid px-2">
    <div class="card mx-2 mb-0 list-top">
      <div class="title-wrapper">
        <h2 class="h3 mb-0 mr-3 text-break">Club de {{ $club->name }}</h2>
        <p class="m-0 h5">
          Miembros: {{ $club->members_count }}
        </p>
      </div>
      <x-button icon="file-download" hide-text="md" :url="route('pdf.memberships', ['club' => $club])">
        Generar PDF
      </x-button>
    </div>
    <div class="list-bottom">
      @if($memberships->total() === 0)
        <div class="card mx-2 empty-container">
          <h2 class="empty">Este curso aún no posee miembros.</h2>
        </div>
      @else
        <x-table>
          <x-slot name="header">
            <tr>
              <th>Nombre</th>
              <th>Cédula</th>
              <th>¿UPTA?</th>
            </tr>
          </x-slot>
          <x-slot name="body">
            @foreach ($memberships as $membership)
              @php
                $student = $membership->student;
              @endphp
              <x-row
                :data="[
                    $student->full_name,
                    $student->full_ci,
                    $student->upta,
                  ]"
              >
              </x-row>
            @endforeach
          </x-slot>
          <x-slot name="pagination">
            <div class="pagination-container">
              {{ $memberships->links() }}
            </div>
          </x-slot>
        </x-table>
      @endif
    </div>
  </section>
</x-layout.main>