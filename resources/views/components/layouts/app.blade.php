<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard | {{ $judul ?? 'Laravel' }}</title>

  {{-- all style --}}
  <x-layouts.css />

  {{-- add yout style if excist --}}
  {{ $styleOptional ?? null }}
</head>
<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <x-layouts.topbar />
      <x-layouts.sidebar />
      {{-- content --}}
      <div class="main-content">
        <section class="section">
          {{ $slot }}
        </section>
      </div>
      {{-- end content --}}
      <x-layouts.footer />

      {{-- modal --}}
      <x-modal
        modalId="modal-logout"
        modalLable="Modal-logout-lable"
        modalTitle="Keluar"
        modalSize="normal"
        >
        Yakin ingin keluar...?
        <x-slot:footerModal>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <x-button typeButton="button" className="btn btn-secondary" modal="true">Close</x-button>
            <x-button typeButton="submit" className="btn btn-danger" modal="false">Keluar</x-button>
          </form>
        </x-slot>
      </x-modal>

      {{ $modal_layouts ?? null }}

    </div>
  </div>

  @include('sweetalert::alert')

  {{-- all script --}}
  <x-layouts.js />

    {{-- add yout style if excist --}}
  {{ $scriptOptional ?? null }}
</body>
</html>
