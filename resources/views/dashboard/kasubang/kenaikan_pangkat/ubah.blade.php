<x-layouts.app judul="Ubah">

  <div class="section-header">
    <h1>Ubah Data Kenaikan Pangkat</h1>
  </div>

    <div class="section-body">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('kasubang.kenaikan-pangkat.update', $kenaikan_pangkat) }}" method="POST" enctype="multipart/form-data">
          @method('patch')
          @csrf
          <div class="row">
            <div class="col-md-8 mb-4">
              <div class="form-group">
                <label for="disabledTextInput">Nama Lengkap</label>
                <input type="text" id="disabledTextInput" class="form-control" value="{{ $kenaikan_pangkat->pegawai->first()->nama_lengkap }}" disabled>
              </div>
            </div>
            <div class="row col-md-12">
              <x-form
                class-name="col-md-4 col-12"
                input-lable="Pangkat Sebelumnya"
                input-type="text"
                input-placeHolder="masukan pangkat lama"
                name="pangkat_lama"
                input-value="{{ old('pangkat_lama', $kenaikan_pangkat->pangkat_lama) }}"
              />
              <x-form
                class-name="col-md-4 col-12"
                input-lable="Pangkat baru yang mau diajukan"
                input-type="text"
                input-placeHolder="masukan pangkat baru"
                name="pangkat_baru"
                input-value="{{ old('pangkat_baru', $kenaikan_pangkat->pangkat_baru) }}"
              />
            </div>
            <div class="col-md-8">
              <div class="alert alert-warning" role="alert">
                Aturan saat melakukan upload berkas
                <ul>
                  <li>uUkuran maksimal dokumen tidak lebih dari 2 MB</li>
                  <li>Dokument wajib berekstensi PDF</li>
                  <li>Jika dokument yang diminta lebih dari satu harap untuk melakukan penggabungan menjadi 1 dokument</li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="alert alert-info" role="alert">
                bagi PNS yang mengalami mutasi antar Unit kerja, antar wilayah kerja
              </div>
            </div>
            <div class="col-md-8 my-2">
              <p class="my-1">Biodata</p>
              <x-form-file2
                idInput="biodata_file_input"
                idLabel="biodata_file_label"
                name="biodata_file"
                value="{{ $kenaikan_pangkat->biodata_file }}"
              />
              @if ($kenaikan_pangkat->biodata_file)
              <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('kasubang.kenaikan-pangkat.download', Crypt::encryptString($kenaikan_pangkat->biodata_file)) }}">Download</x-button-link>
              @endif
            </div>

            <div class="col-md-8 my-2">
              <p class="my-1">Scan Fotocopy Pangkat Terakhir</p>
              <x-form-file2
                idInput="sk_pangkat_terakhir_file_input"
                idLabel="sk_pangkat_terakhir_file_label"
                name="sk_pangkat_terakhir_file"
                value="{{ $kenaikan_pangkat->sk_pangkat_terakhir_file }}"
              />
              @if ($kenaikan_pangkat->sk_pangkat_terakhir_file)
              <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('kasubang.kenaikan-pangkat.download', Crypt::encryptString($kenaikan_pangkat->sk_pangkat_terakhir_file)) }}">Download</x-button-link>
              @endif
            </div>
            <div class="col-md-8 my-2">
              <p class="my-1">Scan Fotocopy sah SK mutasi</p>
              <div class="alert alert-info" role="alert">
                bagi PNS yang mengalami mutasi antar Unit kerja, antar wilayah kerja
              </div>
              <x-form-file2
                idInput="sk_mutasi_file_input"
                idLabel="sk_mutasi_file_label"
                name="sk_mutasi_file"
                value="{{ $kenaikan_pangkat->sk_mutasi_file }}"
              />
              @if ($kenaikan_pangkat->sk_mutasi_file)
              <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('kasubang.kenaikan-pangkat.download', Crypt::encryptString($kenaikan_pangkat->sk_mutasi_file)) }}">Download</x-button-link>
              @endif
            </div>
            <div class="col-md-8 my-2">
              <p class="my-1">Scan Fotocopy sah SK Pengangkatan dalam jabatan struktural, surat pernyataan pelantikan dan SPMJ yang baru.</p>
              <x-form-file2
                idInput="sk_pengangkatan_file_input"
                idLabel="sk_pengangkatan_file_label"
                name="sk_pengangkatan_file"
                value="{{ $kenaikan_pangkat->sk_pengangkatan_file }}"
              />
              @if ($kenaikan_pangkat->sk_pengangkatan_file)
              <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('kasubang.kenaikan-pangkat.download', Crypt::encryptString($kenaikan_pangkat->sk_pengangkatan_file)) }}">Download</x-button-link>
              @endif
            </div>
            <div class="col-md-8 my-2">
              <p class="my-1">Scan Fotocopy sah pembebasan sementara dari jabatan fungsional .</p>
              <div class="alert alert-info" role="alert">
                apabila PNSD yang bersangkutan sebelum diangkat dalam jabatan struktural menduduki jabatan fungsional
              </div>
              <x-form-file2
                idInput="pembebasan_sementara_file_input"
                idLabel="pembebasan_sementara_file_label"
                name="pembebasan_sementara_file"
                value="{{ $kenaikan_pangkat->pembebasan_sementara_file }}"
              />
              @if ($kenaikan_pangkat->pembebasan_sementara_file)
              <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('kasubang.kenaikan-pangkat.download', Crypt::encryptString($kenaikan_pangkat->pembebasan_sementara_file)) }}">Download</x-button-link>
              @endif
            </div>
            <div class="col-md-8 my-2">
              <p class="my-1">Scan Fotocopy sah ijazah terakhir dan transkip nilai.</p>
              <div class="alert alert-info" role="alert">
                Apabila pejabat strukutral memperoleh ijazah yang lebih tinggi maka lampirkan pula SK ijin belajar / tugas belajar serta transkip nilai yang telah dilegalisir oleh pejabat yang berwenang
              </div>
              <x-form-file2
                idInput="ijasah_file_input"
                idLabel="ijasah_file_label"
                name="ijasah_file"
                value="{{ $kenaikan_pangkat->ijasah_file }}"
              />
              @if ($kenaikan_pangkat->ijasah_file)
              <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('kasubang.kenaikan-pangkat.download', Crypt::encryptString($kenaikan_pangkat->ijasah_file)) }}">Download</x-button-link>
              @endif
            </div>
            <div class="col-md-8 my-2">
              <p class="my-1">Scan Fotocopy sah surat tanda lulus ujian penyesuaian ijazah</p>
              <x-form-file2
                idInput="surat_tanda_lulus_file_input"
                idLabel="surat_tanda_lulus_file_label"
                name="surat_tanda_lulus_file"
                value="{{ $kenaikan_pangkat->surat_tanda_lulus_file }}"
              />
              @if ($kenaikan_pangkat->surat_tanda_lulus_file)
              <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('kasubang.kenaikan-pangkat.download', Crypt::encryptString($kenaikan_pangkat->surat_tanda_lulus_file)) }}">Download</x-button-link>
              @endif
            </div>
            <div class="col-md-8 my-2">
              <p class="my-1">Scan uraian tugas sesuai ijazah (asli) yang ditetapkan oleh pimpinan unit kerja (serendah-rendahnya oleh pejabat Eselon II) </p>
              <x-form-file2
                idInput="uraian_tugas_file_input"
                idLabel="uraian_tugas_file_label"
                name="uraian_tugas_file"
                value="{{ $kenaikan_pangkat->uraian_tugas_file }}"
              />
              @if ($kenaikan_pangkat->uraian_tugas_file)
              <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('kasubang.kenaikan-pangkat.download', Crypt::encryptString($kenaikan_pangkat->uraian_tugas_file)) }}">Download</x-button-link>
              @endif
            </div>
            <div class="col-md-8 my-2">
              <p class="my-1">Scan Fotocopy sah sertifikat ujian dinas atau sertifikat diklat PIM .</p>
              <div class="alert alert-info" role="alert">
                bagi PNS yang kenaikan pangkatnya mengakibatkan pindah golongan / ruang
              </div>
              <x-form-file2
                idInput="sertifikat_ujian_dinas_file_input"
                idLabel="sertifikat_ujian_dinas_file_label"
                name="sertifikat_ujian_dinas_file"
                value="{{ $kenaikan_pangkat->sertifikat_ujian_dinas_file }}"
              />
              @if ($kenaikan_pangkat->sertifikat_ujian_dinas_file)
              <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('kasubang.kenaikan-pangkat.download', Crypt::encryptString($kenaikan_pangkat->sertifikat_ujian_dinas_file)) }}">Download</x-button-link>
              @endif
            </div>
            <div class="col-md-8 my-2">
              <p class="my-1">Scan asli dan fotocopy masin-masing satu rangkap Penilaian prestasi kerja  tahun 2015 dan penilaian prestasi kerja tahun 2017 .</p>
              <x-form-file2
                idInput="penilaian_prestasi_kerja_file_input"
                idLabel="penilaian_prestasi_kerja_file_label"
                name="penilaian_prestasi_kerja_file"
                value="{{ $kenaikan_pangkat->penilaian_prestasi_kerja_file }}"
              />
              @if ($kenaikan_pangkat->penilaian_prestasi_kerja_file)
              <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('kasubang.kenaikan-pangkat.download', Crypt::encryptString($kenaikan_pangkat->penilaian_prestasi_kerja_file)) }}">Download</x-button-link>
              @endif
            </div>
            <div class="col-md-8 my-2">
              <p class="my-1">Sasaran kerja pegawai (target harus 100% dan 12 bulan) </p>
              <x-form-file2
                idInput="sasaran_kerja_pegawai_file_input"
                idLabel="sasaran_kerja_pegawai_file_label"
                name="sasaran_kerja_pegawai_file"
                value="{{ $kenaikan_pangkat->sasaran_kerja_pegawai_file }}"
              />
              @if ($kenaikan_pangkat->sasaran_kerja_pegawai_file)
              <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('kasubang.kenaikan-pangkat.download', Crypt::encryptString($kenaikan_pangkat->sasaran_kerja_pegawai_file)) }}">Download</x-button-link>
              @endif
            </div>
            <div class="col-md-8 my-2">
              <p class="my-1">Penilaian capaian sasaran kerja</p>
              <x-form-file2
                idInput="penilaian_capaian_sasaran_kerja_file_input"
                idLabel="penilaian_capaian_sasaran_kerja_file_label"
                name="penilaian_capaian_sasaran_kerja_file"
                value="{{ $kenaikan_pangkat->penilaian_capaian_sasaran_kerja_file }}"
              />
              @if ($kenaikan_pangkat->penilaian_capaian_sasaran_kerja_file)
              <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('kasubang.kenaikan-pangkat.download', Crypt::encryptString($kenaikan_pangkat->penilaian_capaian_sasaran_kerja_file)) }}">Download</x-button-link>
              @endif
            </div>
            <div class="col-md-8 my-2">
              <p class="my-1">Penilaian Perilaku Kerja.</p>
              <x-form-file2
                idInput="penilaian_perilaku_kerja_file_input"
                idLabel="penilaian_perilaku_kerja_file_label"
                name="penilaian_perilaku_kerja_file"
                value="{{ $kenaikan_pangkat->penilaian_perilaku_kerja_file }}"
              />
              @if ($kenaikan_pangkat->penilaian_perilaku_kerja_file)
              <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('kasubang.kenaikan-pangkat.download', Crypt::encryptString($kenaikan_pangkat->penilaian_perilaku_kerja_file)) }}">Download</x-button-link>
              @endif
            </div>
            <div class="col-md-8 my-2">
              <p class="my-1">Scan Fotocopy sah SK jabatan atasan langsung dan SK pangkat terakhir atasan langsung.</p>
              <x-form-file2
                idInput="sk_jabatan_atasan_file_input"
                idLabel="sk_jabatan_atasan_file_label"
                name="sk_jabatan_atasan_file"
                value="{{ $kenaikan_pangkat->sk_jabatan_atasan_file }}"
              />
              @if ($kenaikan_pangkat->sk_jabatan_atasan_file)
              <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('kasubang.kenaikan-pangkat.download', Crypt::encryptString($kenaikan_pangkat->sk_jabatan_atasan_file)) }}">Download</x-button-link>
              @endif
            </div>
            <div class="col-md-8 my-2">
              <p class="my-1">Scan Fotocopy sah kartu pegawai.</p>
              <x-form-file2
                idInput="kartu_pegawai_file_input"
                idLabel="kartu_pegawai_file_label"
                name="kartu_pegawai_file"
                value="{{ $kenaikan_pangkat->kartu_pegawai_file }}"
              />
              @if ($kenaikan_pangkat->kartu_pegawai_file)
              <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('kasubang.kenaikan-pangkat.download', Crypt::encryptString($kenaikan_pangkat->kartu_pegawai_file)) }}">Download</x-button-link>
              @endif
            </div>
            <div class="col-md-8 my-2">
              <p class="my-1">Scan Fotocopy sah NIP baru.</p>
              <x-form-file2
                idInput="nip_file_input"
                idLabel="nip_file_label"
                name="nip_file"
                value="{{ $kenaikan_pangkat->nip_file }}"
              />
              @if ($kenaikan_pangkat->nip_file)
              <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('kasubang.kenaikan-pangkat.download', Crypt::encryptString($kenaikan_pangkat->nip_file)) }}">Download</x-button-link>
              @endif
            </div>
            <div class="col-md-8 my-2">
              <p class="my-1">Scan Fotocopy sah SK 80% (SK CPNS).</p>
              <x-form-file2
                idInput="sk_cpns_file_input"
                idLabel="sk_cpns_file_label"
                name="sk_cpns_file"
                value="{{ $kenaikan_pangkat->sk_cpns_file }}"
              />
              @if ($kenaikan_pangkat->sk_cpns_file)
              <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('kasubang.kenaikan-pangkat.download', Crypt::encryptString($kenaikan_pangkat->sk_cpns_file)) }}">Download</x-button-link>
              @endif
            </div>
            <div class="col-md-8 my-2">
              <p class="my-1">Scan Fotocopy sah 100% (SK PNS).</p>
              <x-form-file2
                idInput="sk_pns_file_input"
                idLabel="sk_pns_file_label"
                name="sk_pns_file"
                value="{{ $kenaikan_pangkat->sk_pns_file }}"
              />
              @if ($kenaikan_pangkat->sk_pns_file)
              <x-button-link className="btn btn-success my-2 mx-2" href="{{ route('kasubang.kenaikan-pangkat.download', Crypt::encryptString($kenaikan_pangkat->sk_pns_file)) }}">Download</x-button-link>
              @endif
            </div>
            <div class="col-md-8">
              <div class="alert alert-success" role="alert">
                Pastikan seluruh Berkas telah lengkap dulu sebelum disetujui
                <div class="row">
                  <div class="form-check mt-2 col-md-4">
                    <input class="form-check-input" type="radio" name="disetujui_kasubang" id="persetujuan_kasubang" value="1" @if ($kenaikan_pangkat->disetujui_kasubang == 1) checked @endif>
                    <label class="form-check-label" for="persetujuan_kasubang">
                      Setujui Naik Pangkat (berkas telah lengkap)
                    </label>
                  </div>
                  <div class="form-check mt-2 col-md-4">
                    <input class="form-check-input" type="radio" name="disetujui_kasubang" id="gagal_disetujui" value="0" @if ($kenaikan_pangkat->disetujui_kasubang == 0) checked @endif>
                    <label class="form-check-label" for="gagal_disetujui">
                      Tidak disetujui (berkas belum lengkap)
                    </label>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <x-button type-button="submit" class-name="btn btn-primary mt-3" modal="false">Simpan</x-button>
        </form>
      </div>
    </div>
  </div>

  <x-slot:scriptOptional>
    <script>

      function displayFileName(inputName, labelName) {
        const input = document.getElementById(inputName);
        const label = document.getElementById(labelName);

        input.addEventListener('change', function () {
            var fileName = input.files[0].name;
            label.textContent = fileName;
        });
     }

    displayFileName('biodata_file_input', 'biodata_file_label');
    displayFileName('sk_pangkat_terakhir_file_input', 'sk_pangkat_terakhir_file_label');
    displayFileName('sk_mutasi_file_input', 'sk_mutasi_file_label');
    displayFileName('sk_pengangkatan_file_input', 'sk_pengangkatan_file_label');
    displayFileName('pembebasan_sementara_file_input', 'pembebasan_sementara_file_label');
    displayFileName('ijasah_file_input', 'ijasah_file_label');
    displayFileName('surat_tanda_lulus_file_input', 'surat_tanda_lulus_file_label');
    displayFileName('uraian_tugas_file_input', 'uraian_tugas_file_label');
    displayFileName('sertifikat_ujian_dinas_file_input', 'sertifikat_ujian_dinas_file_label');
    displayFileName('penilaian_prestasi_kerja_file_input', 'penilaian_prestasi_kerja_file_label');
    displayFileName('sasaran_kerja_pegawai_file_input', 'sasaran_kerja_pegawai_file_label');
    displayFileName('penilaian_capaian_sasaran_kerja_file_input', 'penilaian_capaian_sasaran_kerja_file_label');
    displayFileName('penilaian_perilaku_kerja_file_input', 'penilaian_perilaku_kerja_file_label');
    displayFileName('sk_jabatan_atasan_file_input', 'sk_jabatan_atasan_file_label');
    displayFileName('kartu_pegawai_file_input', 'kartu_pegawai_file_label');
    displayFileName('nip_file_input', 'nip_file_label');
    displayFileName('sk_cpns_file_input', 'sk_cpns_file_label');
    displayFileName('sk_pns_file_input', 'sk_pns_file_label');

    </script>
  </x-slot>
</x-layouts>
