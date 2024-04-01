<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard | {{ $judul ?? 'Laravel' }}</title>

  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icon/favicon-16x16.png') }}">
  <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('icon/android-chrome-192x192.png') }}">
  <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('icon/android-chrome-512x512.png') }}">

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
