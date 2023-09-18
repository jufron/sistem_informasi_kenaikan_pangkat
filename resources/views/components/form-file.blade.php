<div class="form-group {{ $className }}">
  <label>{{ $label }}</label>
  <input type="file" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror" @if ($id) id="{{ $id }}" @endif>
    @error($name)
    <div class="invalid-feedback">
      {{ $message }}
    </div>
  @enderror
</div>
