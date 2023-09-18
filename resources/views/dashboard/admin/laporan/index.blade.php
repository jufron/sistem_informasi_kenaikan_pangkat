<x-layouts.app title="Jabatan">
  <x-slot:styleOptional>
    {{-- new fontawesome css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </x-slot>

  <div class="section-header">
    <h1>Laporan</h1>
  </div>

  <div class="section-body">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-4">
            <h6>Jabatan</h6>
            <x-button-link href="{{ route('admin.laporan.jabatan.pdf') }}" className="btn btn-primary mt-2 mx-2 mb-4" target="_blank">
              Laporan
            </x-buttonLink>
          </div>
          <div class="col-md-4">
            <h6>Unit Kerja</h6>
            <x-button-link href="{{ route('admin.laporan.unit_kerja.pdf') }}" className="btn btn-primary mt-2 mx-2 mb-4" target="_blank">
              Laporan
            </x-buttonLink>
          </div>
          <div class="col-md-4">
            <h6>Golongan</h6>
            <x-button-link href="{{ route('admin.laporan.golongan.pdf') }}" className="btn btn-primary mt-2 mx-2 mb-4" target="_blank">
              Laporan 
            </x-buttonLink>
          </div>
          <div class="col-md-4">
            <h6>Pegawai</h6>
            <x-button-link href="{{ route('admin.laporan.pegawai.pdf') }}" className="btn btn-primary mt-2 mx-2 mb-4" target="_blank">
              Laporan 
            </x-buttonLink>
          </div>
          <div class="col-md-4">
            <h6>Disetujui Kenaikan Pangkat</h6>
            <x-button-link href="{{ route('admin.laporan.disetujui.pdf') }}" className="btn btn-primary mt-2 mx-2 mb-4" target="_blank">
              Laporan
            </x-buttonLink>
          </div>
          <div class="col-md-4">
            <h6>Mengajukan Kenaikan Pangkat</h6>
            <x-button-link href="{{ route('admin.laporan.mengajukan.pdf') }}" className="btn btn-primary mt-2 mx-2 mb-4" target="_blank">
              Laporan
            </x-buttonLink>
          </div>
        </div>
      </div>
    </div>
  </div>

  <x-slot:scriptOptional>
    {{-- new fontawesome js--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </x-slot>
</x-layouts>
