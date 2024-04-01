<x-layouts.app judul="SK kenaikan Pangkat">
  <x-slot:styleOptional>
    {{-- datatable css --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

    {{-- new fontawesome css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
      .table tr, td {
        height: 50px;
      }
    </style>
  </x-slot>

  <div class="section-header">
    <h1>SK kenaikan Pangkat</h1>
  </div>

  <div class="section-body">
    <div class="card">
      <div class="card-body">
        <x-button-link href="{{ route('pimpinan.sk-kenaikan-pangkat.create') }}" className="btn btn-primary my-4">
          Tambah
        </x-buttonLink>
        <x-table
          id="table_golongan"
          :head-label="['no', 'Nama Pegawai', 'Pangkat Lama', 'Pangkat Baru', 'Catatan', 'File Usulan',  'tanggal dibuat', 'tanggal_perbaharui', 'action']"
          >
          @foreach ($sk_kenaikan_pangkat as $skp)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $skp->pegawai->nama_lengkap }}</td>
            <td>{{ $skp->pangkat_lama }}</td>
            <td>{{ $skp->pangkat_baru }}</td>
            <td>{{ stringLimit($skp->catatan, 15) }}</td>
            <td>
                <x-button-link href="{{ route('pimpinan.sk-kenaikan-pangkat.download', $skp) }}" className="btn btn-success mx-1 my-1 btn-sm">
                  <i class="fa-solid fa-download"></i>
                </x-button-link>
            </td>
            <td>{{ $skp->tanggal_buat }}</td>
            <td>{{ $skp->tanggal_perbaharui }}</td>
            <td>
              <form id="form_delete_sk_kenaikan_pangkat" action="{{ route('pimpinan.sk-kenaikan-pangkat.delete', $skp) }}" method="POST">
                @method('delete')
                @csrf
                <x-button-link href="{{ route('pimpinan.sk-kenaikan-pangkat.edit', $skp) }}" className="btn btn-warning mx-1 my-1 btn-sm">
                  <i class="fa-solid fa-pen-to-square"></i>
                </x-button-link>
                <x-button type-button="submit" class-name="btn btn-danger btn-sm ml-1 my-1" modal="false">
                  <i class="fa-regular fa-trash-can"></i>
                </x-button>
              </form>
            </td>
          </tr>
         @endforeach
        </x-table>
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
        $('#table_golongan').DataTable({
           rowHeight: 100,
        });
      });

      const modals_delete_jabatan = document.querySelectorAll('#form_delete_sk_kenaikan_pangkat');

      modals_delete_jabatan.forEach(modal_jabatan => {
        modal_jabatan.addEventListener('submit', function (e) {
          e.preventDefault();
          popup_delete(e);
        });
      });

    </script>
  </x-slot>
</x-layouts>
