<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      @rolle('pimpinan')
      <a href="index.html">Pimpinan</a>
      @elserolle('sekertaris')
      <a href="index.html">Sekertaris</a>
      @elserolle('kasubag')
      <a href="index.html">Kasubag</a>
      @elserolle('staf_pegawai')
      <a href="index.html">Staf Pegawai</a>
      @elserolle('pegawai')
      <a href="index.html">Pegawai</a>
      @endrolle
    </div>

    <ul class="sidebar-menu">
      @rolle('pimpinan')
      <li @routeis('dashboard.pimpinan')class="active"@endrouteis>
        <a class="nav-link" href="{{ route('dashboard.pimpinan') }}">
          <i class="fas fa-th"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li @routeis('pimpinan.disposisi.index')class="active"@endrouteis>
        <a class="nav-link" href="{{ route('pimpinan.disposisi.index') }}">
          <i class="fas fa-th"></i>
          <span>Disposisi</span>
        </a>
      </li>
      <li @routeis('pimpinan.sk-kenaikan-pangkat.index')class="active"@endrouteis>
        <a class="nav-link" href="{{ route('pimpinan.sk-kenaikan-pangkat.index') }}">
          <i class="fas fa-th"></i>
          <span>SK Kenaikan Pangkat</span>
        </a>
      </li>
      {{-- <li @if (request()->routeIs('admin.jabatan.index')) class="active" @endif><a class="nav-link" href="{{ route('admin.jabatan.index') }}"><i class="fas fa-th"></i> <span>Jabatan</span></a></li> --}}
      {{-- <li @if (request()->routeIs('admin.unit-kerja.index')) class="active" @endif><a class="nav-link" href="{{ route('admin.unit-kerja.index') }}"><i class="fas fa-th"></i> <span>Unit Kerja</span></a></li> --}}
      {{-- <li @if (request()->routeIs('admin.gologan.index')) class="active" @endif><a class="nav-link" href="{{ route('admin.gologan.index') }}"><i class="fas fa-th"></i> <span>Golongan</span></a></li> --}}
      {{-- <li @if (request()->routeIs('admin.pegawai.index')) class="active" @endif><a class="nav-link" href="{{ route('admin.pegawai.index') }}"><i class="fas fa-th"></i> <span>Pegawai</span></a></li> --}}
      {{-- <li @if (request()->routeIs('admin.pengajuan.index')) class="active" @endif><a class="nav-link" href="{{ route('admin.pengajuan.index') }}"><i class="fas fa-th"></i> <span>Kenaikan Pangkat</span></a></li> --}}
      {{-- <li @if (request()->routeIs('admin.laporan.index')) class="active" @endif><a class="nav-link" href="{{ route('admin.laporan.index') }}"><i class="fas fa-th"></i> <span>Laporan</span></a></li> --}}
      @elserolle('sekertaris')
      <li @if (request()->routeIs('dashboard.sekertaris')) class="active" @endif><a class="nav-link" href="{{ route('dashboard.sekertaris') }}"><i class="fas fa-th"></i> <span>Dashboard</span></a></li>
      <li @if (request()->routeIs('sekertaris.pengajuan.index')) class="active" @endif><a class="nav-link" href="{{ route('sekertaris.pengajuan.index') }}"><i class="fas fa-th"></i> <span>Pengajuan</span></a></li>
      @elserolle('kasubag')
      <li @routeis('dashboard.kasubag')class="active"@endrouteis>
        <a class="nav-link" href="{{ route('dashboard.kasubag') }}">
          <i class="fas fa-th"></i> 
          <span>Dashboard</span>
        </a>
      </li>
      <li @routeis('kasubag.catatan-usulan.index')class="active"@endrouteis>
        <a class="nav-link" href="{{ route('kasubag.catatan-usulan.index') }}">
          <i class="fas fa-th"></i> 
          <span>Catatan Usulan</span>
        </a>
      </li>
      <li @routeis('kasubag.disposisi.index')class="active"@endrouteis>
        <a class="nav-link" href="{{ route('kasubag.disposisi.index') }}">
          <i class="fas fa-th"></i> 
          <span>Disposisi</span>
        </a>
      </li>
      {{-- <li @if (request()->routeIs('kasubang.pegawai.index')) class="active" @endif><a class="nav-link" href="{{ route('kasubang.pegawai.index') }}"><i class="fas fa-th"></i> <span>Pegawai</span></a></li> --}}
      @elserolle('staf_pegawai')
      <li @routeis('dashboard.staf_pegawai')class="active"@endrouteis>
        <a class="nav-link" href="{{ route('dashboard.staf_pegawai') }}">
          <i class="fas fa-th"></i>
          <span>Pegawai</span>
        </a>
      </li>
      <li @routeis('staf_pegawai.unit-kerja.index')class="active"@endrouteis>
        <a class="nav-link" href="{{ route('staf_pegawai.unit-kerja.index') }}">
          <i class="fas fa-th"></i> 
          <span>Unit Kerja</span>
        </a>
      </li>
      <li @routeis('staf_pegawai.jabatan.index')class="active"@endrouteis>
        <a class="nav-link" href="{{ route('staf_pegawai.jabatan.index') }}">
          <i class="fas fa-th"></i> 
          <span>Jabatan</span>
        </a>
      </li>
      <li @routeis('staf_pegawai.golongan.index')class="active"@endrouteis>
        <a class="nav-link" href="{{ route('staf_pegawai.golongan.index') }}">
          <i class="fas fa-th"></i> 
          <span>Golongan</span>
        </a>
      </li>
      <li @routeis('staf_pegawai.pengajuan.index')class="active"@endrouteis>
        <a class="nav-link" href="{{ route('staf_pegawai.pengajuan.index') }}">
          <i class="fas fa-th"></i> 
          <span>Verifikasi Pengajuan KP</span>
        </a>
      </li>
      <li @routeis('staf_pegawai.catatan-usulan.index')class="active"@endrouteis>
        <a class="nav-link" href="{{ route('staf_pegawai.catatan-usulan.index') }}">
          <i class="fas fa-th"></i> 
          <span>Catatan Usulan</span>
        </a>
      </li>
      @elserolle('pegawai')
      <li @routeis('dashboard.pegawai')class="active"@endrouteis>
        <a class="nav-link" href="{{ route('dashboard.pegawai') }}">
          <i class="fas fa-th"></i> 
          <span>Dashboard</span>
        </a>
      </li>
      <li @routeis('pegawai.pegawai.index') class="active" @endrouteis>
        <a class="nav-link" href="{{ route('pegawai.pegawai.index') }}">
          <i class="fas fa-th"></i> 
          <span>Pegawai</span>
          </a>
        </li>
      <li @routeis('pegawai.kenaikan-pangkat.index') class="active" @endrouteis>
        <a class="nav-link" href="{{ route('pegawai.kenaikan-pangkat.index') }}">
          <i class="fas fa-th">
          </i> <span>Usul Kenaikan Pangkat</span>
        </a>
      </li>
      <li @routeis('pegawai.sk-kenaikan-pangkat.index') class="active" @endrouteis>
        <a class="nav-link" href="{{ route('pegawai.sk-kenaikan-pangkat.index') }}">
          <i class="fas fa-th"></i> 
          <span>SK Kenaikan Pangkat</span>
        </a>
      </li>
      @endrolle
    </ul>

  </aside>
</div>
