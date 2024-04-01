<x-layouts.app judul="Unit Kerja">
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
    <h1>Unit Kerja</h1>
  </div>

  <div class="section-body">
    <div class="card">
      <div class="card-body">
        <x-button-link href="{{ route('staf_pegawai.unit-kerja.create') }}" className="btn btn-primary my-4">
          Tambah
        </x-buttonLink>
        <x-table
          id="table_unit_kerja"
          :head-label="['no', 'nama', 'tanggal dibuat', 'action']"
          >
          @foreach ($unit_kerja as $uk)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $uk->nama }}</td>
            <td>{{ $uk->tanggal_buat }}</td>
            <td>
              <form id="form_delete_unit-kerja" action="{{ route('staf_pegawai.unit-kerja.delete', $uk) }}" method="POST">
                @method('delete')
                @csrf
                <x-button type-button="submit" class-name="btn btn-danger" modal="false">
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
        $('#table_unit_kerja').DataTable({
           rowHeight: 100,
        });
      });

      const modals_delete_jabatan = document.querySelectorAll('#form_delete_unit-kerja');

      modals_delete_jabatan.forEach(modal_jabatan => {
        modal_jabatan.addEventListener('submit', function (e) {
          e.preventDefault();
          popup_delete(e);
        });
      });

    </script>
  </x-slot>
</x-layouts>
