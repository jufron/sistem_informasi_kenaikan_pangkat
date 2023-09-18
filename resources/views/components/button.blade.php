<button
  type="{{ $typeButton }}"
  class="{{$className}}"
   @if ($modal === 'true') data-dismiss="modal" @endif
  >
  {{ $slot }}
</button>
