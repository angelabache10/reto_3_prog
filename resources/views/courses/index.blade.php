<x-layout.main title="Cursos">
  <x-slot name="breadcrumbs">
    {{ Breadcrumbs::render('courses.index') }}
  </x-slot>
  <section class="container-fluid mt-3">
    @if ($courses->isNotEmpty())
      <x-table>
        <x-slot name="header">
          <th>Nombre</th>
          <th>Instructor</th>
          <th>Inscripciones</th>
          <th>Fecha</th>
          <th>Duración</th>
          <th>Matrícula</th>
          <th>Monto</th>
          <th>Fase</th>
          <th>Acciones</th>
        </x-slot>
        <x-slot name="body">
          @foreach ($courses as $course)
            <x-row :data="[
              $course->name,
              $course->instructor->full_name,
              $course->ins_date,
              $course->date,
              $course->duration_hours,
              $course->student_diff,
              $course->total_amount,
              $course->phase,
              ]"
            >
              <x-slot name="actions">
                <x-button class="btn-sm" color="secondary" :url="route('courses.enrollments', ['course' => $course])" icon="clipboard-list">
                  Matrícula
                </x-button>
              </x-slot>
            </x-row>
          @endforeach
        </x-slot>
        <x-slot name="pagination">
          <div class="pagination-container">
            {{ $courses->links() }}
          </div>
        </x-slot>
      </x-table>
    @else
      <div class="empty-container">
        <h2 class="empty">No hay cursos disponibles</h2>
      </div>
    @endif
  </section>
</x-layout.main>