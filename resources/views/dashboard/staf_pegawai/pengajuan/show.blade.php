<x-layouts.app judul="Detail Pengajuan KP">

  <div class="section-header">
    <h1>Detail Pengajuan Kenaikan Pangkat</h1>
  </div>

    <div class="section-body">
    <div class="card">
      <div class="card-body">
        @method('patch')
        @csrf
        <div class="row">
          <div class="col-md-6 col-6">
            <p class="my-1">Nama Lengkap</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">: {{ $kenaikan_pangkat->pegawai->first()->nama_lengkap }}</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">Pangkat Lama</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">: {{ $kenaikan_pangkat->pangkat_lama }}</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">Pangkat Baru yang diajukan</p>
          </div>
          <div class="col-md-6 col-6">
            <p class="my-1">: {{ $kenaikan_pangkat->pangkat_baru }}</p>
          </div>

          <div class="col-md-6 my-2">
            <p class="my-1">Biodata</p>
            @if ($kenaikan_pangkat->biodata_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('staf_pegawai.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->biodata_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan Pangkat Terakhir</p>
            @if ($kenaikan_pangkat->sk_pangkat_terakhir_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('staf_pegawai.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->sk_pangkat_terakhir_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan sah SK mutasi</p>
            @if ($kenaikan_pangkat->sk_mutasi_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('staf_pegawai.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->sk_mutasi_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan sah SK Pengangkatan dalam jabatan struktural, surat pernyataan pelantikan dan SPMJ yang baru.</p>
            @if ($kenaikan_pangkat->sk_pengangkatan_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('staf_pegawai.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->sk_pengangkatan_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan sah pembebasan sementara dari jabatan fungsional .</p>
            @if ($kenaikan_pangkat->pembebasan_sementara_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('staf_pegawai.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->pembebasan_sementara_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan sah ijazah terakhir dan transkip nilai.</p>
            @if ($kenaikan_pangkat->ijasah_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('staf_pegawai.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->ijasah_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan sah surat tanda lulus ujian penyesuaian ijazah</p>
            @if ($kenaikan_pangkat->surat_tanda_lulus_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('staf_pegawai.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->surat_tanda_lulus_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan uraian tugas sesuai ijazah (asli) yang ditetapkan oleh pimpinan unit kerja (serendah-rendahnya oleh pejabat Eselon II) </p>
            @if ($kenaikan_pangkat->uraian_tugas_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('staf_pegawai.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->uraian_tugas_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan sah sertifikat ujian dinas atau sertifikat diklat PIM .</p>
            @if ($kenaikan_pangkat->sertifikat_ujian_dinas_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('staf_pegawai.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->sertifikat_ujian_dinas_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan asli dan masin-masing satu rangkap Penilaian prestasi kerja  tahun 2015 dan penilaian prestasi kerja tahun 2017 .</p>
            @if ($kenaikan_pangkat->penilaian_prestasi_kerja_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('staf_pegawai.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->penilaian_prestasi_kerja_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Sasaran kerja pegawai (target harus 100% dan 12 bulan) </p>
            @if ($kenaikan_pangkat->sasaran_kerja_pegawai_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('staf_pegawai.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->sasaran_kerja_pegawai_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Penilaian capaian sasaran kerja</p>
            @if ($kenaikan_pangkat->penilaian_capaian_sasaran_kerja_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('staf_pegawai.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->penilaian_capaian_sasaran_kerja_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Penilaian Perilaku Kerja.</p>
            @if ($kenaikan_pangkat->penilaian_perilaku_kerja_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('staf_pegawai.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->penilaian_perilaku_kerja_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan sah SK jabatan atasan langsung dan SK pangkat terakhir atasan langsung.</p>
            @if ($kenaikan_pangkat->sk_jabatan_atasan_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('staf_pegawai.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->sk_jabatan_atasan_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan sah kartu pegawai.</p>
            @if ($kenaikan_pangkat->kartu_pegawai_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('staf_pegawai.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->kartu_pegawai_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan sah NIP baru.</p>
            @if ($kenaikan_pangkat->nip_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('staf_pegawai.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->nip_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan sah SK 80% (SK CPNS).</p>
            @if ($kenaikan_pangkat->sk_cpns_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('staf_pegawai.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->sk_cpns_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          <div class="col-md-6 my-2">
            <p class="my-1">Scan sah 100% (SK PNS).</p>
            @if ($kenaikan_pangkat->sk_pns_file)
            <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('staf_pegawai.pengajuan.download', Crypt::encryptString($kenaikan_pangkat->sk_pns_file)) }}">Download</x-button-link>
            @else
            <div class="alert alert-danger" role="alert">
              file tidak ada
            </div>
            @endif
          </div>
          {{-- <div class="col-md-8">
            <div class="alert alert-success" role="alert">
              Pastikan seluruh Berkas telah lengkap dulu sebelum disetujui
              <div class="row">
                <div class="form-check mt-2 col-md-4">
                  <input class="form-check-input" type="radio" name="disetujui_sekertaris" id="disetujui" value="1" @if ($kenaikan_pangkat->disetujui_sekertaris == 1) checked @endif>
                  <label class="form-check-label" for="disetujui">
                    Setujui Naik Pangkat (berkas telah lengkap)
                  </label>
                </div>
                <div class="form-check mt-2 col-md-4">
                  <input class="form-check-input" type="radio" name="disetujui_sekertaris" id="gagal_disetujui" value="0" @if ($kenaikan_pangkat->disetujui_sekertaris == 0) checked @endif>
                  <label class="form-check-label" for="gagal_disetujui">
                    Tidak disetujui (berkas belum lengkap)
                  </label>
                </div>
              </div>

            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </div>

  <x-slot:scriptOptional>
    <script>

    </script>
  </x-slot>
</x-layouts>
