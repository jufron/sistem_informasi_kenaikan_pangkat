<x-layouts.app judul="Detail">
  <x-slot:styleOptional>
    {{-- datatable css --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

    {{-- new fontawesome css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
      .table tr, td {
        height: 30px;
      }
    </style>
  </x-slot>

  <div class="section-header">
    <h1>Detail Pegawai Pengajuan Kenaikan Pangkat</h1>
  </div>
    <div class="section-body">
    <div class="card">
      <div class="card-body">
        @if ($kenaikan_pangkat->pegawai->first()->foto)
        <img alt="foto_pegawai" src="{{ asset('storage/'.$kenaikan_pangkat->pegawai->first()->foto) }}" class="profile-widget-picture" width="100px" height="auto">
        @else
        <img alt="foto_pegawai" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="profile-widget-picture" width="100px" height="auto">
        @endif
        <div class="row mt-3">
          <div class="col-md-6 col-6">
            <p class="my-1">Nama Lengkap</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">: {{ $kenaikan_pangkat->pegawai->first()->nama_lengkap }}</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">Jenis Kelamin</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">: {{ $kenaikan_pangkat->pegawai->first()->jenis_kelamin }}</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">Agama</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">: {{ $kenaikan_pangkat->pegawai->first()->agama->nama }}</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">Alamat</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">: {{ $kenaikan_pangkat->pegawai->first()->alamat }}</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">Tempat Lahir</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">: {{ $kenaikan_pangkat->pegawai->first()->tempat_lahir }}</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">Tanggal Lahir</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">: {{ $kenaikan_pangkat->pegawai->first()->tanggal_lahir }}</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">Status Perkawinan</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">: {{ $kenaikan_pangkat->pegawai->first()->status_perkawinan }}</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">Pendidikan Terakhir</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">: {{ $kenaikan_pangkat->pegawai->first()->pendidikan_terakhir }}</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">Gelar</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">: {{ $kenaikan_pangkat->pegawai->first()->gelar }}</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">Tanggal Masuk</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">: {{ $kenaikan_pangkat->pegawai->first()->tanggal_masuk }}</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">Golongan</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">: {{ $kenaikan_pangkat->pegawai->first()->golongan->nama }}</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">Jabatan</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">: {{ $kenaikan_pangkat->pegawai->first()->jabatan->nama }}</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">Unit Kerja</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">: {{ $kenaikan_pangkat->pegawai->first()->unitKerja->nama }}</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">Nomor Telepon</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">: {{ $kenaikan_pangkat->pegawai->first()->nomor_telepon }}</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">Email</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">: {{ $kenaikan_pangkat->pegawai->first()->email }}</p>
          </div>

          <div class="col-md-6 col-6 mt-2">
            <p class="my-1">Pangkat Lama</p>
          </div>
          <div class="col-md-6 col-6 mt-2">
            <p class="my-1">: {{ $kenaikan_pangkat->pangkat_lama }}</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">Pangkat Baru yang diajukan</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">: {{ $kenaikan_pangkat->pangkat_baru }}</p>
          </div>

          <div class="col-md-6 col-6 mt-2">
            <p class="my-1">Tanggal Buat</p>
          </div>
          <div class="col-md-6 col-6 mt-2">
            <p class="my-1">: {{ $kenaikan_pangkat->tanggal_buat }}</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">Tanggal Perbaharui</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">: {{ $kenaikan_pangkat->tanggal_perbaharui }}</p>
          </div>
          {{-- riwayat table kenaikan pangkat --}}
          <div class="col-md-12 my-4">
            <h3>Riwayat</h3>
            <x-table
              id="table_riwayat_kenaikan_pangkat"
              :head-label="['No', 'Nama Lengkap', 'Pangkat Lama', 'Pangkat baru', 'Tggl Pengajuan', 'Tggl Perbaharui' ]"
              >
              @foreach ($pegawai as $p)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                @foreach ($p->pegawai as $a)
                <td> {{ $a->nama_lengkap }} </td>
                @endforeach
                <td>{{ $p->pangkat_lama }}</td>
                <td>{{ $p->pangkat_baru }}</td>
                <td>{{ $p->tanggal_buat }}</td>
                <td>{{ $p->tanggal_perbaharui }}</td>
              </tr>
              @endforeach
            </x-table>
          </div>
          {{-- riwayat table kenaikan pangkat --}}
          <div class="col-md-6 my-2">
            <p class="my-1">Biodata</p>
            @if ($kenaikan_pangkat->biodata_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('sekertaris.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->biodata_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan Fotocopy Pangkat Terakhir</p>
            @if ($kenaikan_pangkat->sk_pangkat_terakhir_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('sekertaris.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->sk_pangkat_terakhir_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan Fotocopy sah SK mutasi</p>
            @if ($kenaikan_pangkat->sk_mutasi_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('sekertaris.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->sk_mutasi_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan Fotocopy sah SK Pengangkatan dalam jabatan struktural, surat pernyataan pelantikan dan SPMJ yang baru.</p>
            @if ($kenaikan_pangkat->sk_pengangkatan_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('sekertaris.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->sk_pengangkatan_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan Fotocopy sah pembebasan sementara dari jabatan fungsional .</p>
            @if ($kenaikan_pangkat->pembebasan_sementara_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('sekertaris.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->pembebasan_sementara_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan Fotocopy sah ijazah terakhir dan transkip nilai.</p>
            @if ($kenaikan_pangkat->ijasah_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('sekertaris.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->ijasah_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan Fotocopy sah surat tanda lulus ujian penyesuaian ijazah</p>
            @if ($kenaikan_pangkat->surat_tanda_lulus_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('sekertaris.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->surat_tanda_lulus_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan uraian tugas sesuai ijazah (asli) yang ditetapkan oleh pimpinan unit kerja (serendah-rendahnya oleh pejabat Eselon II) </p>
            @if ($kenaikan_pangkat->uraian_tugas_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('sekertaris.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->uraian_tugas_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan Fotocopy sah sertifikat ujian dinas atau sertifikat diklat PIM .</p>
            @if ($kenaikan_pangkat->sertifikat_ujian_dinas_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('sekertaris.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->sertifikat_ujian_dinas_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan asli dan fotocopy masin-masing satu rangkap Penilaian prestasi kerja  tahun 2015 dan penilaian prestasi kerja tahun 2017 .</p>
            @if ($kenaikan_pangkat->penilaian_prestasi_kerja_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('sekertaris.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->penilaian_prestasi_kerja_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Sasaran kerja pegawai (target harus 100% dan 12 bulan) </p>
            @if ($kenaikan_pangkat->sasaran_kerja_pegawai_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('sekertaris.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->sasaran_kerja_pegawai_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Penilaian capaian sasaran kerja</p>
            @if ($kenaikan_pangkat->penilaian_capaian_sasaran_kerja_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('sekertaris.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->penilaian_capaian_sasaran_kerja_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Penilaian Perilaku Kerja.</p>
            @if ($kenaikan_pangkat->penilaian_perilaku_kerja_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('sekertaris.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->penilaian_perilaku_kerja_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan Fotocopy sah SK jabatan atasan langsung dan SK pangkat terakhir atasan langsung.</p>
            @if ($kenaikan_pangkat->sk_jabatan_atasan_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('sekertaris.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->sk_jabatan_atasan_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan Fotocopy sah kartu pegawai.</p>
            @if ($kenaikan_pangkat->kartu_pegawai_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('sekertaris.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->kartu_pegawai_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan Fotocopy sah NIP baru.</p>
            @if ($kenaikan_pangkat->nip_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('sekertaris.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->nip_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan Fotocopy sah SK 80% (SK CPNS).</p>
            @if ($kenaikan_pangkat->sk_cpns_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('sekertaris.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->sk_cpns_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan Fotocopy sah 100% (SK PNS).</p>
            @if ($kenaikan_pangkat->sk_pns_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('sekertaris.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->sk_pns_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>

          <div class="col-md-8">
            <form action="{{ route('admin.pengajuan.update', $kenaikan_pangkat) }}" method="POST">
              @csrf
              @method('patch')
              <div class="alert alert-success" role="alert">
                Pastikan seluruh Berkas telah lengkap dulu sebelum disetujui
                <div class="row">
                  <div class="form-check mt-2 col-md-4">
                    <input class="form-check-input" type="radio" name="disetujui_atasan" id="disetujui" value="1" @if ($kenaikan_pangkat->disetujui_atasan == 1) checked @endif>
                    <label class="form-check-label" for="disetujui">
                      Setujui Naik Pangkat (berkas telah lengkap)
                    </label>
                  </div>
                  <div class="form-check mt-2 col-md-4">
                    <input class="form-check-input" type="radio" name="disetujui_atasan" id="gagal_disetujui" value="0" @if ($kenaikan_pangkat->disetujui_atasan == 0) checked @endif>
                    <label class="form-check-label" for="gagal_disetujui">
                      Tidak disetujui (berkas belum lengkap)
                    </label>
                  </div>
                </div>
              </div>
              <x-button type-button="submit" class-name="btn btn-primary mt-3" modal="false">Simpan</x-button>
            </form>
          </div>

        </div>

      </div>
    </div>
  </div>

  <x-slot:scriptOptional>
    {{-- new fontawesome js--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- datatable js --}}
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

    {{-- swetalert js --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- swetalert function --}}
    <script src="{{ asset('assets/js/swetalert.js') }}"></script>

    <script>
      $(document).ready( function () {
        $('#table_riwayat_kenaikan_pangkat').DataTable({
           rowHeight: 100,
        });
      });
    </script>
  </x-slot>
</x-layouts>
