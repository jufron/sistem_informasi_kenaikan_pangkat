<div class="form-group {{$className}}">
  <label for="{{ $name }}"> {{ $inputLable }} </label>
  <input
    id="{{ $name }}"
    type="{{ $inputType }}"
    class="form-control @error($name) is-invalid @enderror"
    @if ( $inputValue )
    value="{{ $inputValue }}"
    @endif
    placeholder="{{ $inputPlaceHolder }}"
    name="{{ $name }}"
    >
  @error($name)
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>
