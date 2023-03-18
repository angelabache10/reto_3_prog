<head>
  <link rel="stylesheet" href="{{ public_path('css/pdf.css') }}">
  <link rel="stylesheet" href="{{ public_path('css/pdf2.css') }}">
  <style>
    table {
      width: 100% !important;
    }

    td {
      padding-left: 3px;
      padding-right: 3px;
    }
  </style>
</head>
<body>
  <img src="data:image/png;base64, {{ $logo }}"/>
  <header>
    <p>REPUBLICA BOLIVARIANA DE VENEZUELA</p>
    <p>MINISTERIO DEL PODER POPULAR PARA LA EDUCACIÓN UNIVERSITARIA</p>
    <p class="bold-italic">UNIVERSIDAD POLITÉCNICA TERRITORIAL DEL ESTADO ARAGUA</p>
    <p class="bold-italic">"FEDERICO BRITO FIGUEROA"</p>
    <p class="bold-italic header-title">DEPARTAMENTO DE VINCULACIÓN SOCIO INTEGRAL</p>
  </header>
  <h1>Reporte de Pagos</h1>
  <ul class="style-none">
    <li><span>Fecha:</span> {{ $date }}</li>
  </ul>
  <table>
    <thead>
      <tr>
        <th>Estudiante</th>
        <th>Curso</th>
        <th>Monto</th>
        <th>Fecha</th>
        <th>Categoría</th>
        <th>Ref.</th>
        <th>Tipo</th>
        <th>Estado</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($payments as $payment)
        <tr>
          <td> {{ $payment->enrollment->student->full_ci }} </td>
          <td> {{ $payment->enrollment->course->name }} </td>
          <td> {{ $payment->full_amount }} </td>
          <td> {{ $payment->updated_at->format(DF) }} </td>
          <td> {{ $payment->category }} </td>
          <td> {{ $payment->ref ?? '----' }} </td>
          <td> {{ $payment->type }} </td>
          <td> {{ $payment->status }} </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>