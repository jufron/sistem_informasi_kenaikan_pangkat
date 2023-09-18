<div class="custom-file">
  <input type="file" class="custom-file-input @error($name) is-invalid @enderror" id="{{ $idInput }}" name="{{ $name }}" @if ($value) value="{{ $value }}" @endif >
  <label class="custom-file-label" for="{{ $idInput }}" id="{{ $idLabel }}">Pilih file</label>
  @error($name)
  <div class="invalid-feedback">
    {{ $message }}
  </div>
  @enderror
</div>
