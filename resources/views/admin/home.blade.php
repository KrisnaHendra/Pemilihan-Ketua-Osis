@extends('admin/template')
@section('content')
<div class="row">
    <div class="col-6 pr-0">
        <div>
            <h4 class="header-title mb-3">Welcome, <b>{{ Auth::user()->name }}!</b></h4>
        </div>
    </div>
    <div class="col-6 text-right pl-0">
      <h4 class="header-title mb-3 text-info">
        <i class="fa fa-calendar-alt"></i> Today, {{ date('d F Y') }} <i class="fa fa-clock"></i> <span id="jam"></span> <span id="menit"></span> <span id="detik"></span>
      </h4>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-12">
        <div>
            <div class="card-box border-info widget-inline mb-2">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 widget-inline-box border-info">
                        <div class="text-center p-1">
                            <h2 class="mt-2"><i class="text-primary fa fa-users mr-2"></i> <b>{{ $user[0]->total }}</b></h2>
                            <p class="font-weight-bold mb-0">Total Jumlah User</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 widget-inline-box border-info">
                        <div class="text-center p-1">
                            <h2 class="mt-2"><i class="text-success fa fa-user-check mr-2"></i> <b>{{ $telahMemilih[0]->total }}</b></h2>
                            <p class="font-weight-bold mb-0">User Telah Memilih</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 widget-inline-box border-info">
                        <div class="text-center p-1">
                            <h2 class="mt-2"><i class="text-danger fa fa-user-times mr-2"></i> <b>{{ ($user[0]->total)-($telahMemilih[0]->total) }}</b></h2>
                            <p class="font-weight-bold mb-0">User Belum Memilih</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 border-info">
                        <div class="text-center p-1">
                            <h2 class="mt-2"><i class="text-warning fa fa-user-secret mr-2"></i> <b>{{ $totCalon[0]->total }}</b></h2>
                            <p class="font-weight-bold mb-0">Total Calon Ketua</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--end row -->


<marquee behavior="alternate" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
  <span class="btn btn-sm btn-success" style="font-size:15px"><i class="fa fa-edit mr-2"></i> <b>{{ $totPilih[0]->totalPilih }} dari {{ $user[0]->total }} Orang Telah Memilih</b></span>
  <span class="btn btn-sm btn-primary" style="font-size:15px"><i class="fa fa-info-circle mr-2"></i> <b>{{ $data[0]->nama }}</b> Unggul Sementara</span>
</marquee>

<div class="row mt-1">
  <div class="col-8">
  <div class="card">
      <div class="card-header bg-info">
        <b class="text-white"><i class="fa fa-chart-bar"></i> Grafik Hasil Pemilihan {{ date('d F Y') }}</b>
      </div>
      <div class="card-body" style="height:370px !important">
        <canvas id="myChartBar"></canvas>
        <!-- <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
      </div>
    </div>
  </div>
  <div class="col-4">
  <div class="card">
      <div class="card-header bg-info">
        <b class="text-white"><i class="fa fa-sort-numeric-up"></i> Hasil Sementara {{ date('d F Y') }}</b>
      </div>
      <div class="card-body pt-2" style="height: 370px !important">
        @foreach($jumlah as $key => $value)
        <b class="text-uppercase">{{ $value['nama'] }}</b>
        <div class="progress progress-lg mb-3" style="height:20px;">
            <div class="progress-bar progress-bar-striped progress-bar-animated {{($key==0) ? 'bg-success' : ''}} {{($key==1) ? 'bg-primary' : ''}} {{($key==2) ? 'bg-warning' : ''}}" role="progressbar" aria-valuenow="{{ round(($value['jumlah'] / $value['totalPilih'])*100) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ round(($value['jumlah'] / $value['totalPilih'])*100) }}%;">
                <b>{{ round(($value['jumlah'] / $value['totalPilih'])*100) }}%</b>
            </div>
        </div>
        @endforeach
        <!-- <b class="text-uppercase">Alia Anggun</b>
        <div class="progress progress-lg mb-3" style="height:20px;">
            <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                <b>40%</b>
            </div>
        </div>
        <b class="text-uppercase">Farisa Farel Salsabila</b>
        <div class="progress progress-lg" style="height:20px;">
            <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                <b>80%</b>
            </div>
        </div> -->
        <hr>
        <!-- <canvas id="pie-chart"></canvas> -->
        <b class="text-danger">Hasil Suara:</b>
        <table class="table table-sm table-hover">
          <tr class="bg-danger text-white">
            <th>No</th>
            <th>Nama</th>
            <th>Total</th>
          </tr>
          @foreach($jumlah as $k => $v)
          <tr>
            <td>{{ ++$k }}</td>
            <td>{{ $v['nama'] }}</td>
            <td><b>{{ $v['jumlah'] }} Suara</b></td>
          </tr>
          @endforeach
          <!-- <tr>
            <td>4</td>
            <td>Farisa Farel Salsabila</td>
            <td>339 Suara</td>
          </tr> -->
        </table>
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" charset="utf-8"></script>
<script type="text/javascript">
var ctx = document.getElementById('myChartBar').getContext('2d');

var myAreaChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
        <?php foreach($jumlah as $k => $v): ?>
        <?= '"' . $v['nama'] . '",' ?>
        <?php endforeach; ?>
      ],
      datasets: [{
        data: [
          <?php foreach($jumlah as $k => $v): ?>
          <?= '"' . $v['jumlah'] . '",' ?>
          <?php endforeach; ?>
        ],
        backgroundColor: ['#4fc55b', '#3db9dc', 'yellow','#e2ab3b'],
        // hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf','red'],
        hoverBorderColor: "rgba(234, 236, 244, 1)",
      }],
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        caretPadding: 10,
      },
      legend: {
        display: false,
      }
    }
});

</script>
@endsection
