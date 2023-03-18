@props(['header', 'body'])

<div class="card mx-2">
  <div class="card-body table-responsive p-0">
    <table class="table table-bordered text-center mb-0">
      <thead class="thead-dark">
        <tr>
          {{ $header }}
        </tr>
      </thead>
      <tbody>
        {{ $body }}
      </tbody>
    </table>
  </div>
  <div class="card-footer d-flex justify-content-center">
    {{ $pagination }}
  </div>
</div>