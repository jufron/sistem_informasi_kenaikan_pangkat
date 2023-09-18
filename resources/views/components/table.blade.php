<div class="table-responsive">
  <table class="table table-hover" id="{{ $id }}">
    <thead>
      <tr>
        @foreach ($headLabel as $label)
        <th scope="col">{{ $label }}</th>
        @endforeach
      </tr>
    </thead>
    <tbody>
      {{ $slot }}
    </tbody>
  </table>
</div>
