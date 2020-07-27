@extends('pemilih/template')
@section('content')
<!-- <div class="row btn-btn-block btn-info">
    <div class="col-6">
        <div>
            <h4 class="header mb-3">Welcome, <b>{{ Auth::user()->name }}!</b></h4>
        </div>
    </div>
    <div class="col-6 text-right">
      <h4 class="header mb-3 text-primary">
        <i class="fa fa-calendar-alt"></i> Today, {{ date('d M Y') }} <span id="jam"></span> <span id="menit"></span> <span id="detik"></span>
      </h4>
    </div>
</div> -->
<div class="alert alert-icon alert-success text-dark alert-dismissible fade show mt-2" role="alert" style="font-size:15px">
  <div class="row">
    <div class="col-6">
      <i class="fa fa-exclamation-circle mr-1"></i>
      <strong>Monitoring Pilketos.</strong> Dibawah Ini Merupakan Info PILKETOS Hari Ini
    </div>
    <div class="col-6 text-right font-weight-bold">
        <i class="fa fa-calendar-alt"></i> Today, {{ date('d F Y') }} <i class="fa fa-clock"></i> <span id="jam"></span> <span id="menit"></span> <span id="detik"></span>
    </div>
  </div>
</div>
<!-- end row -->
<!--
<div class="row">
    <div class="col-12">
        <div>
            <div class="card-box widget-inline">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 widget-inline-box">
                        <div class="text-center p-3">
                            <h2 class="mt-2"><i class="text-primary mdi mdi-access-point-network mr-2"></i> <b>8954</b></h2>
                            <p class="text-muted mb-0">Lifetime total sales</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 widget-inline-box">
                        <div class="text-center p-3">
                            <h2 class="mt-2"><i class="text-teal mdi mdi-airplay mr-2"></i> <b>7841</b></h2>
                            <p class="text-muted mb-0">Income amounts</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 widget-inline-box">
                        <div class="text-center p-3">
                            <h2 class="mt-2"><i class="text-info mdi mdi-black-mesa mr-2"></i> <b>{{$user[0]->total}}</b></h2>
                            <p class="text-muted mb-0">Total users</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6">
                        <div class="text-center p-3">
                            <h2 class="mt-2"><i class="text-danger mdi mdi-cellphone-link mr-2"></i> <b>325</b></h2>
                            <p class="text-muted mb-0">Total visits</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> -->
<!--end row -->
<div class="row">

  <div class="col-lg-3">
    <div class="card mb-2 bg-white border-primary">
      <div class="row">
        <div class="col-5 mt-4 mb-4 text-right">
          <i class="fa fa-users text-primary" style="font-size:50px"></i>
        </div>
        <div class="col-7 text-left mt-4" style="font-size:15px">
          <b style="font-size:20px">{{ $user[0]->total }}</b> <br class="p-0 m-0"> Total User
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3">
    <div class="card mb-2 bg-white border-success">
      <div class="row">
        <div class="col-5 mt-4 mb-4 text-right">
          <i class="fa fa-user-check text-success" style="font-size:50px"></i>
        </div>
        <div class="col-7 text-left mt-4" style="font-size:15px">
          <b style="font-size:20px">{{ $telahMemilih[0]->total }}</b> <br class="p-0 m-0"> Telah Memilih
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3">
    <div class="card mb-2 bg-white border-danger">
      <div class="row">
        <div class="col-5 mt-4 mb-4 text-right">
          <i class="fa fa-user-times text-danger" style="font-size:50px"></i>
        </div>
        <div class="col-7 text-left mt-4" style="font-size:15px">
          <b style="font-size:20px">{{ ($user[0]->total)-($telahMemilih[0]->total) }}</b> <br class="p-0 m-0"> Belum Memilih
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3">
    <div class="card mb-2 bg-white border-warning">
      <div class="row">
        <div class="col-5 mt-4 mb-4 text-right">
          <i class="fa fa-user-secret text-warning" style="font-size:50px"></i>
        </div>
        <div class="col-7 text-left mt-4" style="font-size:15px">
          <b style="font-size:20px">{{ $totCalon[0]->total }}</b> <br class="p-0 m-0"> Calon Ketua
        </div>
      </div>
    </div>
  </div>


</div>

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
      <div class="card-body" style="height:380px !important">
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
      <div class="card-body pt-2" style="height: 380px !important">
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
            <th>Suara</th>
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
