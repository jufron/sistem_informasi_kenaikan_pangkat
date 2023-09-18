
<div class="modal fade @if ($modalSize === 'large')bd-example-modal-lg @endif" id="{{$modalId}}" tabindex="-1" role="dialog" aria-labelledby="{{$modalLable}}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered @if($modalSize === 'large') modal-lg @endif" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="{{$modalLable}}">{{$modalTitle}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{ $slot }}
      </div>
      <div class="modal-footer">
        {{ $footerModal }}
      </div>
    </div>
  </div>
</div>
