<x-layouts.app judul="admin">
  <x-slot:styleOptional>
    {{-- pecah lagi --}}
    <link rel="stylesheet" href="{{ asset("assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css") }}">
  </x-slot>

  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-user-tie"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Pegawai</h4>
          </div>
          <div class="card-body">
            {{ $pegawai_count }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-user-tie"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Jabatan</h4>
          </div>
          <div class="card-body">
            {{ $jabatan_count }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-user-tie"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Unit Kerja</h4>
          </div>
          <div class="card-body">
            {{ $unit_kerja_count }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-user-tie"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Golongan</h4>
          </div>
          <div class="card-body">
            {{ $golongan_count }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="col-md-12 col-sm-12">
        <div class="card card-statistic-2">
          <div class="card-icon shadow-primary bg-primary">
            <i class="fas fa-user-tie"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>SK Kenaikan Pangkat</h4>
            </div>
            <div class="card-body">
              {{ $sk_pangkat }}
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-sm-12">
        <div class="card card-statistic-2">
          <div class="card-icon shadow-primary bg-primary">
            <i class="fas fa-user-tie"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Disposisi</h4>
            </div>
            <div class="card-body">
              {{ $disposisi }}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4>Agama</h4>
        </div>
        <div class="card-body">
          <canvas id="agama_chart"></canvas>
          <p>menampilkan seluruh agama dari seluruh pegawai yang terdaftar</p>
        </div>
      </div>
    </div>
     <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4>Jenis Kelamin</h4>
        </div>
        <div class="card-body">
          <canvas id="jenis_kelamin_chart"></canvas>
          <p>Menampilkan Seluruh pegawai yang berjenis kelamin laki-laki dan perempuan dalam bentuk diagram!</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4>Status Pegawai</h4>
        </div>
        <div class="card-body">
          <canvas id="status_chart"></canvas>
          <p>menampilkan seluruh status dari seluruh pegawai yang terdaftar</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4>Pendidikan Terakhir Setiap Pegawai </h4>
        </div>
        <div class="card-body">
          <canvas id="pendidikan_terakhir_chart"></canvas>
          <p>menampilkan seluruh status dari seluruh pegawai yang terdaftar</p>
        </div>
      </div>
    </div>
  </div>

  <x-slot:scriptOptional>
    <script src="{{ asset("assets/modules/jquery.sparkline.min.js") }}"></script>
    <script src="{{ asset("assets/modules/chart.min.js") }}"></script>
    <script src="{{ asset("assets/modules/owlcarousel2/dist/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("assets/modules/chocolat/dist/js/jquery.chocolat.min.js") }}"></script>

    {{-- Page Specific JS File  --}}
    <script src="{{ asset("assets/js/page/index.js") }}"></script>

    <script>
      var ctx = document.getElementById("agama_chart").getContext('2d');

      const kristen_count = {{ $kristen_count }};
      const katholik_count = {{ $katholik_count }};
      const islam_count = {{ $islam_count }};
      const hinduh_count = {{ $hinduh_count }};
      const budha_count = {{ $budha_count }};
      const konghuchu_count = {{ $konghuchu_count }};

      var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          datasets: [{
            data: [
              kristen_count,
              islam_count,
              katholik_count,
              hinduh_count,
              budha_count,
              konghuchu_count,
            ],
            backgroundColor: [
              '#191d21',
              '#63ed7a',
              '#ffa426',
              '#fc544b',
              '#6777ef',
              '#6797ef',
            ],
            label: 'Dataset 1'
          }],
          labels: [
            'Kristen',
            'Islam',
            'Katholik',
            'Hinduh',
            'Budha',
            'Konguchu'
          ],
        },
        options: {
          responsive: true,
          legend: {
            position: 'bottom',
          },
        }
      });

      var ctx = document.getElementById("jenis_kelamin_chart");
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["Laki-laki", "Perempuan"],
          datasets: [{
            label: 'Statistics',
            data: [ {{ $laki_laki_count }} , {{ $perempuan_count }} ],
            borderWidth: 2,
            backgroundColor: '#6777ef',
            borderColor: '#6777ef',
            borderWidth: 2.5,
            pointBackgroundColor: '#ffffff',
            pointRadius: 4
          }]
        },
        options: {
          legend: {
            display: false
          },
          scales: {
            yAxes: [{
              gridLines: {
                drawBorder: false,
                color: '#f2f2f2',
              },
              ticks: {
                beginAtZero: true,
                stepSize: 150
              }
            }],
            xAxes: [{
              ticks: {
                display: false
              },
              gridLines: {
                display: false
              }
            }]
          },
        }
      });

      var status_chart = document.getElementById("status_chart");
      var myChart = new Chart(status_chart, {
        type: 'doughnut',
        data: {
          datasets: [{
            data: [
              {{ $sudah_menikah }},
              {{ $belum_menikah }},
              {{ $janda }},
              {{ $duda }}
            ],
            backgroundColor: [
              '#191d21',
              '#63ed7a',
              '#ffa426',
              '#fc544b',
            ],
            label: 'Dataset 1'
          }],
          labels: [
            'Sudah Menikah',
            'Belum Menikah',
            'Janda',
            'Duda',
          ],
        },
        options: {
          responsive: true,
          legend: {
            position: 'bottom',
          },
        }
      });

      var pendidikan_chart = document.getElementById("pendidikan_terakhir_chart");
      const bar_chart = new Chart(pendidikan_chart, {
        type: 'bar',
        data: {
          labels: ["S3",  "D3", "D2" ,"SMP", "D1", "SMA", "D4", "S2", "S1"],
          datasets: [{
            data: [ {{ $s3 }}, {{ $d3 }}, {{ $d2 }}, {{ $smp }}, {{ $d1 }}, {{ $sma }}, {{ $d4 }}, {{ $s2 }}, {{ $s3 }} ],
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 159, 64, 0.2)',
              'rgba(255, 205, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
              'rgb(255, 99, 132)',
              'rgb(255, 159, 64)',
              'rgb(255, 205, 86)',
              'rgb(75, 192, 192)',
              'rgb(54, 162, 235)',
              'rgb(153, 102, 255)',
              'rgb(201, 203, 207)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        },
      });

    </script>
  </x-slot>
</x-layouts>
