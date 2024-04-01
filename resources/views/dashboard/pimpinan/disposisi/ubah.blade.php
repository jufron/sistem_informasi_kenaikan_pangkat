<x-layouts.app judul="Ubah Disposisi">

  <div class="section-header">
    <h1>Ubah Disposisi</h1>
  </div>

    <div class="section-body">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('pimpinan.disposisi.update', $disposisi->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('patch')
            <x-form-select className="col-md-4" inputLabel="nama" name="pegawai_id">
              @foreach ($pegawai as $p)
              <option value="{{ $p->id }}" @if (old('pegawai_id', $disposisi->pegawai_id) == $p->id) selected @endif>{{ $p->nama_lengkap }}</option>
              @endforeach
            </x-form-select>
            <div class="row">
              <x-form
                class-name="col-md-4 col-12"
                input-lable="Pangkat Lama"
                input-type="text"
                input-placeHolder="Masukan Pangkat Lama"
                name="pangkat_lama"
                input-value="{{ old('pangkat_lama', $disposisi->pangkat_lama) }}"
              />
              <x-form
                class-name="col-md-4 col-12"
                input-lable="Pangkat Baru"
                input-type="text"
                input-placeHolder="masukan Pangkat Baru"
                name="pangkat_baru"
                input-value="{{ old('pangkat_baru', $disposisi->pangkat_baru) }}"
              />
            </div>
            <div class="form-group col-md-8">
              <label for="catatan">Catatan</label>
              <textarea class="form-control @error('catatan') invalid-feedback @enderror" name="catatan" id="catatan" rows="10">{{ old('catatan', $disposisi->catatan) }}</textarea>
              @error('catatan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

              <div class="col-md-6 mt-2 mb-4">
                <p class="my-1">File Disposisi</p>
                <x-form-file2
                  idInput="disposisi_file_input"
                  idLabel="disposisi_file_label"
                  name="disposisi_file"
                />
              </div>

              @if ($disposisi->file)
                <x-button-link href="{{ route('pimpinan.disposisi.download', $disposisi->id) }}" className="btn btn-primary mx-1 my-1">
                  <i class="fa-solid fa-download"></i>
                  Download File
                </x-button-link>
              @endif

          <x-button type-button="submit" class-name="btn btn-success" modal="false">Perbaharui</x-button>
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

    displayFileName('disposisi_file_input', 'disposisi_file_label');
    </script>
  </x-slot>
</x-layouts>
