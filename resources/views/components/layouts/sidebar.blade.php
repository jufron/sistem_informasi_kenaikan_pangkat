<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Admin</a>
    </div>

    <ul class="sidebar-menu">
      {{-- kalo active kasih class active di li --}}
      @rolle('super_admin')
      <li @if (request()->routeIs('dashboard.admin')) class="active" @endif><a class="nav-link" href="{{ route('dashboard.admin') }}"><i class="fas fa-th"></i> <span>Dashboard</span></a></li>
      <li @if (request()->routeIs('admin.jabatan.index')) class="active" @endif><a class="nav-link" href="{{ route('admin.jabatan.index') }}"><i class="fas fa-th"></i> <span>Jabatan</span></a></li>
      <li @if (request()->routeIs('admin.unit-kerja.index')) class="active" @endif><a class="nav-link" href="{{ route('admin.unit-kerja.index') }}"><i class="fas fa-th"></i> <span>Unit Kerja</span></a></li>
      <li @if (request()->routeIs('admin.gologan.index')) class="active" @endif><a class="nav-link" href="{{ route('admin.gologan.index') }}"><i class="fas fa-th"></i> <span>Golongan</span></a></li>
      <li @if (request()->routeIs('admin.pegawai.index')) class="active" @endif><a class="nav-link" href="{{ route('admin.pegawai.index') }}"><i class="fas fa-th"></i> <span>Pegawai</span></a></li>
      <li @if (request()->routeIs('admin.pengajuan.index')) class="active" @endif><a class="nav-link" href="{{ route('admin.pengajuan.index') }}"><i class="fas fa-th"></i> <span>Kenaikan Pangkat</span></a></li>
      <li @if (request()->routeIs('admin.laporan.index')) class="active" @endif><a class="nav-link" href="{{ route('admin.laporan.index') }}"><i class="fas fa-th"></i> <span>Laporan</span></a></li>
      @elserolle('sekertaris')
      <li @if (request()->routeIs('dashboard.sekertaris')) class="active" @endif><a class="nav-link" href="{{ route('dashboard.sekertaris') }}"><i class="fas fa-th"></i> <span>Dashboard</span></a></li>
      <li @if (request()->routeIs('sekertaris.pengajuan.index')) class="active" @endif><a class="nav-link" href="{{ route('sekertaris.pengajuan.index') }}"><i class="fas fa-th"></i> <span>Pengajuan</span></a></li>
      @elserolle('kasubang')
      <li @if (request()->routeIs('dashboard.kasubang')) class="active" @endif><a class="nav-link" href="{{ route('dashboard.kasubang') }}"><i class="fas fa-th"></i> <span>Dashboard</span></a></li>
      <li @if (request()->routeIs('kasubang.pegawai.index')) class="active" @endif><a class="nav-link" href="{{ route('kasubang.pegawai.index') }}"><i class="fas fa-th"></i> <span>Pegawai</span></a></li>
      <li @if (request()->routeIs('kasubang.kenaikan-pangkat.index')) class="active" @endif><a class="nav-link" href="{{ route('kasubang.kenaikan-pangkat.index') }}"><i class="fas fa-th"></i> <span>Pengajuan Kenaikan Pangkat</span></a></li>
      @endrolle
    </ul>

  </aside>
</div>
