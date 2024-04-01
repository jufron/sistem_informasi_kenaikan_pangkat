<x-layouts.app judul="Usul Kenaikan Pangkat">
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
    <h1>Usul Kenaikan Pangkat</h1>
  </div>

  <div class="section-body">
    <div class="card">
      <div class="card-body">
        <x-button-link href="{{ route('pegawai.kenaikan-pangkat.create') }}" className="btn btn-primary my-4">
          Tambah
        </x-buttonLink>
        <x-table
          id="table_pegawai"
          :head-label="['No', 'Nama Lengkap', 'Disetujui Staf Pegawai', 'Pangkat Lama', 'Pangkat baru', 'Tggl dibuat', 'Tggl Perbaharui', 'action' ]"
          >
          @foreach ($kenaikan_pangkat as $kp)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            @foreach ($kp->pegawai as $kpp)
            <td> {{ $kpp->nama_lengkap }} </td>
            @endforeach
            <td>
              @if ($kp->disetujui_staf_pegawai == 1)
                <span class="badge badge-success">
                  <i class="fa-solid fa-circle-check"></i>
                  Disetujui</span>
                @else
                <span class="badge badge-secondary">
                  <i class="fa-solid fa-circle-xmark"></i>
                  Belum disetujui</span>
              @endif
            </td>
            <td>{{ $kp->pangkat_lama }}</td>
            <td>{{ $kp->pangkat_baru }}</td>
            <td>{{ $kp->tanggal_buat }}</td>
            <td>{{ $kp->tanggal_perbaharui }}</td>
            <td class="d-flex" style="width: 130px">
              <form id="form_delete_kenaikan_pangkat" action="{{ route('pegawai.kenaikan-pangkat.delete', $kp) }}" method="POST" class="mx-1 my-1">
                @method('delete')
                @csrf
                <x-button-link href="{{ route('pegawai.kenaikan-pangkat.edit', $kp) }}" className="btn btn-warning mx-1 my-1 btn-sm">
                  <i class="fa-solid fa-pen-to-square"></i>
                </x-button-link>
                <x-button type-button="submit" class-name="btn btn-danger btn-sm" modal="false">
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

  <x-slot:modal_layouts>
    <x-modal
      modalId="modal-show-pegawai"
      modalLable="Modal-show-pegawai-lable"
      modalTitle="Detail Pegawai"
      modalSize="large">
      <div id="modal-body">

      </div>
      <x-slot:footerModal>
        <x-button typeButton="button" className="btn btn-secondary" modal="true">Close</x-button>
      </x-slot>
    </x-modal>
  </x-slot>

  <x-slot:scriptOptional>

    {{-- new fontawesome js--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- datatable js --}}
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

    {{-- swetalert js --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- swetalert function --}}
    <script src="{{ asset('assets/js/swetalert.js') }}"></script>

    {{-- axioos --}}
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
      $(document).ready( function () {
        $('#table_pegawai').DataTable({
           rowHeight: 100,
        });
      });

      const modals_delete_jabatan = document.querySelectorAll('#form_delete_kenaikan_pangkat');

      modals_delete_jabatan.forEach(modal_jabatan => {
        modal_jabatan.addEventListener('submit', function (e) {
          e.preventDefault();
          popup_delete(e);
        });
      });

    </script>
  </x-slot>
</x-layouts>
