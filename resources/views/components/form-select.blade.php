<div class="{{ $className }} mb-3">
  <label for="{{$name}}">{{ $inputLabel }}</label>
  <select class="custom-select @error($name) is-invalid @enderror form-control-sm" id="{{$name}}" name="{{ $name }}">
    <option selected disabled value="">Pilih...</option>
    {{ $slot }}
  </select>
    @error($name)
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>
