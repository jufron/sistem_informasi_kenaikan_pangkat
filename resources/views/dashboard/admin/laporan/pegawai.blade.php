<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap 5 CSS  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- new fontawesome css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Laporan Pegawai!</title>
    <style type="text/css" media="print">
      @page {
        size: landscape;
        size: auto;
        margin: 10mm;
        max-width: 100%; 
      }

      table {
        font-size: 10pt; 
      }

      p {
        font-size: 11px;
      }
    </style>
  </head>
  <body>
    <h1 class="mb-5 text-center">Laporan Pegawai</h1>
    <p class="my-1">Tanggal : {{ Illuminate\Support\Carbon::now()->setTimezone('Asia/Makassar')->format('d M Y') }}</p>
    <p class="mt-1 mb-4">Jam :{{ Illuminate\Support\Carbon::now()->setTimezone('Asia/Makassar')->format('H:i:s') }}</p>
    <table class="table table-responsive text-center table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nip</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">Agama</th>
          <th scope="col">Alamat</th>
          <th scope="col">Tempat Lahir</th>
          <th scope="col">Tggl Lahir</th>
          <th scope="col">Pendidikan Terakhir</th>
          <th scope="col">Gelar</th>
          <th scope="col">Tggl Masuk</th>
          <th scope="col">Jabatan</th>
          <th scope="col">Golongan</th>
          <th scope="col">Unit Kerja</th>
          <th scope="col">No Telepon</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        @foreach ($pegawai as $peg)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $peg->nip }}</td>
          <td>{{ $peg->nama_lengkap }}</td>
          <td>{{ $peg->agama->nama }}</td>
          <td>{{ $peg->alamat }}</td>
          <td>{{ $peg->tempat_lahir }}</td>
          <td>{{ $peg->tanggal_lahir }}</td>
          <td>{{ $peg->pendidikan_terakhir }}</td>
          <td>{{ $peg->gelar }}</td>
          <td>{{ $peg->tanggal_nasuk }}</td>
          <td>{{ $peg->jabatan->nama }}</td>
          <td>{{ $peg->golongan->nama }}</td>
          <td>{{ $peg->unitKerja->nama }}</td>
          <td>{{ $peg->nomor_telepon }}</td>
          <td>{{ $peg->email }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer" ></script>
    <script>
      window.print({
        orientation: "landscape"
      })
    </script>
  </body>
</html>