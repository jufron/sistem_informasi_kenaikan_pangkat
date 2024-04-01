<x-layouts.app judul="Pegawai">
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
    <h1>Pegawai</h1>
  </div>

  <div class="section-body">
    <div class="card">
      <div class="card-body">
        <x-button-link href="{{ route('pegawai.pegawai.create') }}" className="btn btn-primary my-4">
          Tambah
        </x-buttonLink>
        <x-table
          id="table_pegawai"
          :head-label="['No', 'Foto', 'Nama Lengkap', 'Jabatan', 'Golongan', 'Unit kerja', 'Tggl dibuat', 'Tggl Perbaharui', 'action' ]"
          >
          @foreach ($pegawai as $peg)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>
              @if ($peg->foto)
              <img alt="foto_pegawai" src="{{ asset('storage/'.$peg->foto) }}" class="profile-widget-picture" width="50px" height="auto">
              @else
              <img alt="foto_pegawai" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle profile-widget-picture" width="50px" height="auto">
              @endif
            </td>
            <td>{{ $peg->nama_lengkap }}</td>
            <td>{{ $peg->jabatan->nama }}</td>
            <td>{{ $peg->golongan->nama }}</td>
            <td>{{ $peg->unitKerja->nama }}</td>
            <td>{{ $peg->tanggal_buat }}</td>
            <td>{{ $peg->tanggal_perbaharui }}</td>
            <td class="d-flex" style="width: 130px">
              <form id="form_delete_pegawai" action="{{ route('pegawai.pegawai.delete', $peg) }}" method="POST" class="mx-1 my-1">
                @method('delete')
                @csrf
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-show-pegawai" id="showPegawai" data-url="{{ route('pegawai.pegawai.show', $peg) }}">
                  <i class="fa-solid fa-circle-info"></i>
                </button>
                <x-button-link href="{{ route('pegawai.pegawai.edit', $peg) }}" className="btn btn-warning mx-1 my-1 btn-sm">
                  <i class="fa-solid fa-pen-to-square"></i>
                </x-button-link>
                {{-- <x-button type-button="submit" class-name="btn btn-danger btn-sm" modal="false">
                  <i class="fa-regular fa-trash-can"></i>
                </x-button> --}}
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

      const modals_delete_jabatan = document.querySelectorAll('#form_delete_pegawai');

      const button_show = document.querySelectorAll('#showPegawai');
      const root_modal_body = document.querySelector('#modal-body');

      button_show.forEach(show => {
        show.addEventListener('click', function () {
          const url = this.getAttribute('data-url');
          getData(url);
        });
      });

      function getData (url) {
        loading(true);

        axios.get(url)
          .then(function (response) {

            // loading(false);
            renderHtml(response);
          })
          .catch(function (error) {
            console.log(error);
          })
          .finally(() => {
            loading(false);
          });
      }

      function loading (state) {
        if (state == true) {
          const element = `
          <div class="d-flex justify-content-center">
            <div class="spinner-border text-primary" role="status">
              loading....
            </div>
          </div>
          `;
          root_modal_body.innerHTML = element;
        }
      }

      function renderHtml (ress) {
        const {tanggal_lahir, tanggal_masuk, created_at, updated_at} = ress.data;
        const {nip, nama_lengkap, jenis_kelamin, agama, alamat, tempat_lahir, status_perkawinan, pendidikan_terakhir, gelar, golongan, jabatan, unit_kerja, nomor_telepon, email, foto } = ress.data.pegawai;
        const element = `
          <img alt="foto_pegawai" src="{{ asset('storage/${foto}') }}" class="profile-widget-picture" width="100px" height="auto">
          <div class="row my-3" style="font-size: 16px">
            <div class="col-md-4 col-6"> <p> Nama Lengkap </p> </div>
            <div class="col-md-8 col-6"><p><span class="mx-1">:</span> ${nama_lengkap}</p></div>
            <div class="col-md-4 col-6"> <p>Jenis Kelamin</p> </div>
            <div class="col-md-8 col-6"><p><span class="mx-1">:</span> ${jenis_kelamin}</p></div>
            <div class="col-md-4 col-6"> <p>Agama</p> </div>
            <div class="col-md-8 col-6"><p><span class="mx-1">:</span> ${agama.nama}</p></div>
            <div class="col-md-4 col-6"> <p>Alamat</p> </div>
            <div class="col-md-8 col-6"><p><span class="mx-1">:</span> ${alamat}</p></div>
            <div class="col-md-4 col-6"> <p>Tempat Lahir</p> </div>
            <div class="col-md-8 col-6"><p><span class="mx-1">:</span> ${tempat_lahir}</p></div>
            <div class="col-md-4 col-6"> <p>Tanggal_lahir</p> </div>
            <div class="col-md-8 col-6"><p><span class="mx-1">:</span> ${tanggal_lahir}</p></div>
            <div class="col-md-4 col-6"> <p>Status Perkawinan</p> </div>
            <div class="col-md-8 col-6"><p><span class="mx-1">:</span> ${status_perkawinan}</p></div>
            <div class="col-md-4 col-6"> <p>Pendidikan Terakhir</p> </div>
            <div class="col-md-8 col-6"><p><span class="mx-1">:</span> ${pendidikan_terakhir}</p></div>
            <div class="col-md-4 col-6"> <p>Gelar</p> </div>
            <div class="col-md-8 col-6"><p><span class="mx-1">:</span> ${gelar}</p></div>
            <div class="col-md-4 col-6"> <p>Tanggal Masuk</p> </div>
            <div class="col-md-8 col-6"><p><span class="mx-1">:</span> ${tanggal_masuk}</p></div>
            <div class="col-md-4 col-6"> <p>Golongan</p> </div>
            <div class="col-md-8 col-6"><p><span class="mx-1">:</span> ${golongan}</p></div>
            <div class="col-md-4 col-6"> <p>Jabatan</p> </div>
            <div class="col-md-8 col-6"><p><span class="mx-1">:</span> ${jabatan.nama}</p></div>
            <div class="col-md-4 col-6"> <p>Unit Kerja</p> </div>
            <div class="col-md-8 col-6"><p><span class="mx-1">:</span> ${unit_kerja.nama}</p></div>
            <div class="col-md-4 col-6"> <p>Nomor Telepon</p> </div>
            <div class="col-md-8 col-6"><p><span class="mx-1">:</span> ${nomor_telepon}</p></div>
            <div class="col-md-4 col-6"> <p>Email</p> </div>
            <div class="col-md-8 col-6"><p><span class="mx-1">:</span> ${email}</p></div>
            </div>
            <div class="row">
              <div class="col-md-4 col-6"> <p>Tanggal Buat</p> </div>
              <div class="col-md-8 col-6"><p><span class="mx-1">:</span> ${created_at}</p></div>
              <div class="col-md-4 col-6"> <p>Tanggal Perbaharui</p> </div>
              <div class="col-md-8 col-6"><p><span class="mx-1">:</span> ${updated_at}</p></div>
            </div>
        `;
        root_modal_body.innerHTML = element;
      }

    </script>
  </x-slot>
</x-layouts>
