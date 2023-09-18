<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap 5 CSS  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- new fontawesome css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Laporan Jabatan!</title>
    <style type="text/css" media="print">
      @page {
        size: auto;
        margin: 10mm;
      }
      
      p {
        font-size: 11px;
      }
    </style>
  </head>
  <body>
    <h1 class="mb-5 text-center">Laporan Jabatan</h1>
    <p class="my-1">Tanggal : {{ Illuminate\Support\Carbon::now()->setTimezone('Asia/Makassar')->format('d M Y') }}</p>
    <p class="mt-1 mb-4">Jam :{{ Illuminate\Support\Carbon::now()->setTimezone('Asia/Makassar')->format('H:i:s') }}</p>
    <table class="table table-responsive text-center table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Tggl Buat</th>
          <th scope="col">Tggl Perbaharui</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        @foreach ($jabatan as $jb)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $jb->nama }}</td>
          <td>{{ $jb->tanggal_buat }}</td>
          <td>{{ $jb->tanggal_perbaharui }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer" ></script>
    <script>
      window.print()
    </script>
  </body>
</html>