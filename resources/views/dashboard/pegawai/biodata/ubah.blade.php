<x-layouts.app Judul="Tambah">

  <div class="section-header">
    <h1>Perbaharui data Pegawai</h1>
  </div>

    <div class="section-body">
    <div class="card">
      <div class="card-body">

        <form action="{{ route('pegawai.pegawai.update', $pegawai) }}" method="POST" enctype="multipart/form-data">
          @method('patch')
          @csrf
          <div class="row">
            <x-form
              class-name="col-md-3 col-12"
              input-lable="Nip"
              input-type="number"
              input-placeHolder="masukan Nip"
              name="nip"
              input-value="{{ old('nip', $pegawai->nip) }}"
            />
            <x-form
              class-name="col-md-4 col-12"
              input-lable="Nama lengkap"
              input-type="text"
              input-placeHolder="masukan nama lengkap"
              name="nama_lengkap"
              input-value="{{ old('nama_lengkap', $pegawai->nama_lengkap) }}"
            />
            <div class="col-md-3">
              Jenis Kelamin
              <div class="row mt-3">
                <x-form-radio
                 className="col-md-6 col-6"
                 name="jenis_kelamin"
                 label="laki-laki"
                 value="laki-laki"
                 check="{{ old('jenis_kelamin', $pegawai->jenis_kelamin) == 'laki-laki' }}"
                 >Laki-laki</x-form-radio>
                <x-form-radio
                 className='col-md-6 col-6'
                 name="jenis_kelamin"
                 label="perempuan"
                 value="perempuan"
                 check="{{ old('jenis_kelamin', $pegawai->jenis_kelamin) == 'perempuan' }}"
                 >Perempuan</x-form-radio>
              </div>
            </div>
            <x-form-select className="col-md-3" inputLabel="Agama" name="agama_id">
              @foreach ($agama as $agm)
                <option value="{{ $agm->id }}" @if (old('agama_id', $pegawai->agama_id) == $agm->id) selected @endif>{{ $agm->nama }}</option>
              @endforeach
            </x-form-select>
            <x-form
              class-name="col-md-5 col-12"
              input-lable="Alamt"
              input-type="text"
              input-placeHolder="masukan alamat"
              name="alamat"
              input-value="{{ old('alamat', $pegawai->alamat) }}"
            />
            <x-form
              class-name="col-md-3 col-12"
              input-lable="Tempat Lahir"
              input-type="text"
              input-placeHolder="masukan tempat lahir"
              name="tempat_lahir"
              input-value="{{ old('tempat_lahir', $pegawai->tempat_lahir) }}"
            />
            <x-form
              class-name="col-md-3 col-12"
              input-lable="Tanggal Lahir"
              input-type="date"
              input-placeHolder="masukan tanggal lahir"
              name="tanggal_lahir"
              input-value="{{ old('tanggal_lahir', $pegawai->tanggal_lahir) }}"
            />
            <x-form-select className="col-md-3" inputLabel="Status" name="status_perkawinan">
              @foreach ($status_perkawinan as $sp)
              <option value="{{ $sp }}" @if (old('status_perkawinan', $pegawai->status_perkawinan) == $sp) selected @endif>{{ $sp }}</option>
              @endforeach
            </x-form-select>
            <x-form-select className="col-md-2" inputLabel="Pendidikan Terakhir" name="pendidikan_terakhir">
              @foreach ($pendidikan_terakhir as $pt)
              <option value="{{ $pt }}" @if (old('pendidikan_terakhir', $pegawai->pendidikan_terakhir) == $pt) selected @endif>{{ $pt }}</option>
              @endforeach
            </x-form-select>
            <x-form
              class-name="col-md-3 col-12"
              input-lable="Gelar"
              input-type="text"
              input-placeHolder="contoh S.Pd"
              name="gelar"
              input-value="{{ old('gelar', $pegawai->gelar) }}"
            />
            <x-form
              class-name="col-md-3 col-12"
              input-lable="Tanggal Masuk"
              input-type="date"
              input-placeHolder="tanggal masuk"
              name="tanggal_masuk"
              input-value="{{ old('tanggal_masuk', $pegawai->tanggal_masuk) }}"
            />
            <x-form-select className="col-md-3" inputLabel="Jabatan" name="jabatan_id">
              @foreach ($jabatan as $jb)
              <option value="{{ $jb->id }}" @if (old('jabatan_id', $pegawai->jabatan_id) == $jb->id) selected @endif>{{ $jb->nama }}</option>
              @endforeach
            </x-form-select>
            <x-form-select className="col-md-3" inputLabel="Golongan" name="golongan_id">
              @foreach ($golongan as $gol)
              <option value="{{ $gol->id }}" @if (old('golongan_id', $pegawai->golongan_id) == $gol->id) selected @endif>{{ $gol->nama }}</option>
              @endforeach
            </x-form-select>
            <x-form-select className="col-md-3" inputLabel="Unit Kerja" name="unit_kerja_id">
              @foreach ($unit_kerja as $uk)
              <option value="{{ $uk->id }}" @if (old('unit_kerja_id', $pegawai->unit_kerja_id) == $uk->id) selected @endif>{{ $uk->nama }}</option>
              @endforeach
            </x-form-select>
            <x-form
              class-name="col-md-3 col-12"
              input-lable="Telepon"
              input-type="tel"
              input-placeHolder="+62"
              name="nomor_telepon"
              input-value="{{ old('nomor_telepon', $pegawai->nomor_telepon) }}"
            />
            <x-form
              class-name="col-md-3 col-12"
              input-lable="Email"
              input-type="email"
              input-placeHolder="example@mail.com"
              name="email"
              input-value="{{ old('email', $pegawai->email) }}"
            />
            <x-form-file
              className="col-md-4"
              label="Foto"
              name="foto"
              id="form_foto"
            />
             <div class="image-box col-md-2 col-6">
                @if ($pegawai->foto)
                <img class="img-responsive img-thumbnail" src="{{ asset('storage/'.$pegawai->foto) }}" width="100%" height="100%" alt="Foto" id="review_foto">
                @else
                <img class="img-responsive img-thumbnail" src="{{ asset('assets/img/avatar/avatar-1.png') }}" width="100%" height="100%" alt="Foto" id="review_foto">
                @endif
              </div>
          </div>
          <x-button type-button="submit" class-name="btn btn-success mt-3" modal="false">Simpan</x-button>
        </form>
      </div>
    </div>
  </div>

  <x-slot:scriptOptional>
    <script>
      const imageInput = document.getElementById('form_foto');
      const previewImage = document.getElementById('review_foto');

      imageInput.addEventListener('change', () => {
        const selectedFile = imageInput.files[0];

        if (selectedFile) {
            previewImage.style.display = 'block';

            const reader = new FileReader();

            reader.onload = function () {
              previewImage.src = reader.result;
            };

            reader.readAsDataURL(selectedFile);
        }
      });
    </script>
  </x-slot>
</x-layouts>
