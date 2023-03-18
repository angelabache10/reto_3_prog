@props(['prepend' => false, 'validNumber' => false])

<div class="mb-3">
  @if($slot->isNotEmpty())
    <label for="duration">
      @if($attributes->get('required'))
        <i class="mr-1 fas fa-asterisk text-danger"></i>
      @endif
      {{ $slot }}
    </label>
  @endif
  <div class="input-group">
    @if($prepend)
      <div class="input-group-prepend">
        {{ $prepend ?? '' }}
      </div>
    @endif
    <input
      {{ $attributes
          ->class(['form-control'])
          ->merge(['type' => 'text', 'autocomplete' => 'off'])
      }}
      @if($validNumber)
        min="0"
        onkeypress="return event.charCode >= 48"
        oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)"
      @endif
    />
    @if($prepend == false)
      <div class="input-group-append">
        {{ $append ?? '' }}
      </div>
    @endif
  </div>
  @error($attributes->get('name'))
    <p class="text-danger">{{ ucfirst($message) }}</p>
  @enderror
</div>