<x-layouts.app title="Tambah">

  <div class="section-header">
    <h1>Tambah Unit kerja Baru</h1>
  </div>

    <div class="section-body">
    <div class="card">
      <div class="card-body">

        <form action="{{ route('admin.unit-kerja.store') }}" method="POST">
          @csrf
          <x-form
            class-name="col-md-4 col-12"
            input-lable="Nama Jabatan"
            input-type="text"
            input-placeHolder="masukan naam baru"
            name="nama"
            input-value="{{ old('nama') }}"
          />

          <x-button type-button="submit" class-name="btn btn-success" modal="false">Simpan</x-button>
        </form>
      </div>
    </div>
  </div>

</x-layouts>
