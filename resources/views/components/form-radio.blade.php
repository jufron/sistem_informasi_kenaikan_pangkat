<div class="form-check {{ $className }}">
  <input
    class="form-check-input"
    type="radio"
    name="{{ $name }}"
    id="{{ $label }}"
    value="{{ $value }}"
    {{-- @dump($check) --}}
    @if ($check) checked @endif
    >
  <label class="form-check-label" for="{{ $label }}">
    {{ $slot }}
  </label>
</div>
