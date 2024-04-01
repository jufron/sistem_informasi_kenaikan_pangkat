<x-layouts.app judul="sekertaris">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-user-tie"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Pegawai</h4>
          </div>
          <div class="card-body">
            {{ $pegawai }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-user-tie"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Usul Kenaikan Pangkat</h4>
          </div>
          <div class="card-body">
            {{ $usul_kenaikan_pangkat }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-shopping-bag"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>disetujui</h4>
          </div>
          <div class="card-body">
            {{ $disetujui }}
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layouts>
