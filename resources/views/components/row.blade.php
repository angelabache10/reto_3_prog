@props(['data', 'actions' => null])

<tr>
  @foreach ($data as $cell)
    <td>{{ $cell }}</td>
  @endforeach
  @if ($actions)
    <td class="px-2">
      <div class="d-flex gap-1 justify-content-center align-items-center h-100">
        @if ($actions->isNotEmpty())
          {{ $actions }}
        @else
          <h4 class="mb-0">----</h4>
        @endif
      </div>
    </td>
  @endif
</tr>