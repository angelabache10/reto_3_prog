@props(['color' => 'primary', 'icon', 'hideText' => null, 'url' => null])

@if ($url)
<a href="{{ $url }}" {{
  $attributes
  ->class(['btn', 'btn-'.$color])
}}>
  @isset($icon)
  <i class="fas fa-{{ $icon }} m-none mr-{{$hideText}}-1"></i>
  @endisset
  <span 
    @isset($hideText)
    class="d-none d-{{ $hideText }}-inline"
    @endisset
    >{{ $slot }}</span>
</a>
@else
<button
  {{
    $attributes
      ->class(['btn', 'btn-'.$color])
      ->merge(['type' => 'button'])
  }}
>
  @isset($icon)
  <i class="fas fa-{{ $icon }}"></i>
  @endisset
  <span
    @isset($hideText)
    class="d-none d-{{ $hideText }}-inline"
    @endisset
    >{{ $slot }}</span>
</button>
@endif