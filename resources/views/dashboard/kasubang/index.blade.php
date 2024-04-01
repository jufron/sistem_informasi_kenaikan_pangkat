<x-layouts.app judul="kasubang">
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
            {{ $pegawai_count }}
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
            <h4>Laki laki</h4>
          </div>
          <div class="card-body">
            {{ $laki_laki_count }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-file-alt"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Perempuan</h4>
          </div>
          <div class="card-body">
            {{ $perempuan_count }}
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
            <h4>Catatan Usulan</h4>
          </div>
          <div class="card-body">
            {{ $catatan_usulan }}
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
            <h4>Disposisi</h4>
          </div>
          <div class="card-body">
            {{ $disposisi }}
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layouts>
