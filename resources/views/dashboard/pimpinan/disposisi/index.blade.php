<x-layouts.app judul="Disposisi">
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
    <h1>Disposisi</h1>
  </div>

  <div class="section-body">
    <div class="card">
      <div class="card-body">
        <x-table
          id="table_golongan"
          :head-label="['no', 'Nama Pegawai', 'Pangkat Lama', 'Pangkat Baru', 'Catatan', 'File Usulan',  'tanggal dibuat', 'tanggal_perbaharui', 'action']"
          >
          @foreach ($disposisi as $ds)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $ds->pegawai->nama_lengkap }}</td>
            <td>{{ $ds->pangkat_lama }}</td>
            <td>{{ $ds->pangkat_baru }}</td>
            <td>{{ stringLimit($ds->catatan, 15) }}</td>
            <td>
                <x-button-link href="{{ route('pimpinan.disposisi.download', $ds) }}" className="btn btn-success mx-1 my-1 btn-sm">
                  <i class="fa-solid fa-download"></i>
                </x-button-link>
            </td>
            <td>{{ $ds->tanggal_buat }}</td>
            <td>{{ $ds->tanggal_perbaharui }}</td>
            <td>
              <x-button-link href="{{ route('pimpinan.disposisi.edit', $ds) }}" className="btn btn-warning mx-1 my-1 btn-sm">
                <i class="fa-solid fa-pen-to-square"></i>
              </x-button-link>
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

    </script>
  </x-slot>
</x-layouts>
