<x-layouts.app judul="Verifikasi Pengajuan KP">
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
    <h1>Verifikasi Pengajuan Kenaikan Pangkat</h1>
  </div>

  <div class="section-body">
    <div class="card">
      <div class="card-body">

        <x-table
          id="table_kenaikan_pangkat"
          :head-label="['No', 'Nama Lengkap', 'Disetujui Staf Pegawai', 'Pangkat Lama', 'Pangkat baru', 'Tggl dibuat', 'Tggl Perbaharui', 'Verifikasi Data', 'action' ]"
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
            <td>
              <form data-form="form_verifikasi_berkas_{{ $kp->id }}" action="{{ route('staf_pegawa.pengajuan.verifikasi', $kp->id) }}" method="POST">
                @method('patch')
                @csrf
                <div class="form-check mx-1">
                  <input class="form-check-input" type="radio" name="disetujui_staf_pegawai" id="persetujuan_kasubang_{{$kp->id}}" value="1" @if ($kp->disetujui_staf_pegawai == 1) checked @endif>
                  <label class="form-check-label" for="persetujuan_kasubang_{{$kp->id}}">
                    Setuju
                  </label>
                </div>
                <div class="form-check mx-1">
                  <input class="form-check-input" type="radio" name="disetujui_staf_pegawai" id="gagal_disetujui_{{$kp->id}}" value="0" @if ($kp->disetujui_staf_pegawai == 0) checked @endif>
                  <label class="form-check-label" for="gagal_disetujui_{{$kp->id}}">
                    Tidak
                  </label>
                </div>
              </form>
            </td>
            <td>
              <x-button-link href="{{ route('staf_pegawai.pengajuan.show', $kp) }}" className="btn btn-info mx-1 my-1 btn-sm">
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
        $('#table_kenaikan_pangkat').DataTable({
           rowHeight: 100,
        });
      });

      const radioButtonsAll = document.querySelectorAll('input[type="radio"]');

      radioButtonsAll.forEach((radioButton) => {
        radioButton.addEventListener('change', () => {
          const formId = radioButton.closest('tr').querySelector('form').getAttribute('data-form');
          const form = document.querySelector(`[data-form="${formId}"]`);
          form.submit();
        });
      });
    </script>
  </x-slot>
</x-layouts>
