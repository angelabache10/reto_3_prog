<x-layout.main title="Matrícula">
  <x-slot name="breadcrumbs">
    {{ Breadcrumbs::render('courses.enrollments', $course) }}
  </x-slot>
  @push('css')
    <link rel="stylesheet" href="{{ asset('css/listados.css') }}">
  @endpush
  @php
    $badgeColors = [
      'Pre-inscripciones' => 'dark',
      'Inscripciones' => 'info',
      'Pre-curso' => 'dark',
      'En curso' => 'success',
      'Finalizado' => 'danger',
    ]; 
  @endphp
  <section class="container-fluid px-2">
    <div class="card mx-2 mb-0 list-top">
      <div class="title-wrapper">
        <h2 class="h3 mb-0 mr-3 text-break">{{ $course->name }}</h2>
        <p class="m-0 h5">
          {{ $course->student_diff }} estudiantes
        </p>
      </div>
      <div class="d-flex align-items-center gap-3">
        <span class="h5 m-0">
          Fase: 
          <b class="h5 m-0 text-{{ $badgeColors[$course->phase] }} text-bold">
          {{ $course->phase }}
          </b>
        </span>
        <x-button icon="file-download" hide-text="md" :url="route('pdf.enrollments', ['course' => $course])">
          Generar PDF
        </x-button>
      </div>
    </div>
    <div class="list-bottom">
      @if($course->phase === 'Pre-inscripciones' || $enrollments->total() === 0)
        <div class="card mx-2 empty-container">
          <h5 class="empty">Este curso aún no posee estudiantes matriculados.</h5>
        </div>
      @else
        <x-table>
          <x-slot name="header">
            <tr>
              <th>Nombre</th>
              <th>Cédula</th>
              <th>¿UPTA?</th>
              <th>Solvencia</th>
              <th>Cupo</th>
              <th>Aprobación</th>
            </tr>
          </x-slot>
          <x-slot name="body">
            @foreach ($enrollments as $enrollment)
              @php
                $student = $enrollment->student;
              @endphp
              <x-row
                :data="[
                    $student->full_name,
                    $student->full_ci,
                    $student->upta,
                    $enrollment->solvency,
                    $enrollment->status,
                    $enrollment->approval,
                  ]"
              >
              </x-row>
            @endforeach
          </x-slot>
          <x-slot name="pagination">
            <div class="pagination-container">
              {{ $enrollments->links() }}
            </div>
          </x-slot>
        </x-table>
      @endif
    </div>
  </section>
</x-layout.main>