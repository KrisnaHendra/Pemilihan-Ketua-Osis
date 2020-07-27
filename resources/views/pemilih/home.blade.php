@extends('pemilih/template')
@section('content')
<div class="row">
  <div class="col-12">

  <div class="card">
    <!-- @if(($cek[0]->cek)==0)
    <h5 class="card-header bg-info text-white">
      <div class="row">
      <div class="col-6">
        <i class="fa fa-users"></i> Calon Ketua Osis {{ date('Y') }}
      </div>
      <div class="col-6 text-right">
        <i class="fa fa-calendar-alt"></i> {{ date('d F Y') }} <i class="fa fa-clock"></i> <span id="jam"></span> <span id="menit"></span> <span id="detik"></span>
      </div>
    </div>
    </h5>
    @endif -->

    <div class="card-body pb-0">
      @if(($cek[0]->cek)==1)
      <div class="alert alert-icon alert-danger text-danger alert-dismissible fade show" role="alert">
        <div class="row">
          <div class="col-6">
            <i class="mdi mdi-block-helper mr-2"></i>
            <strong>Terimakasih!</strong> Anda telah menggunakan hak pilih anda.
          </div>
          <div class="col-6 text-right">
            <i class="fa fa-calendar-alt"></i> {{date('d F Y')}} <i class="fa fa-clock"></i> <span id="jam"></span> <span id="menit"></span> <span id="detik"></span>
          </div>
        </div>
      </div>
      @else
      <div class="alert alert-icon alert-info text-info alert-dismissible fade show" role="alert">
        <div class="row">
          <div class="col-6">
            <i class="fa fa-users"></i>
            <strong>Pilih Calon Ketua OSIS {{ date('Y') }}</strong>
          </div>
          <div class="col-6 text-right font-weight-bold">
            <i class="fa fa-calendar-alt"></i> {{date('d F Y')}} <i class="fa fa-clock"></i> <span id="jam"></span> <span id="menit"></span> <span id="detik"></span>
          </div>
        </div>
      </div>
      @endif

      <div class="row text-center">
            @foreach($calon as $c)
            <div class="col-lg-4 col-md-6">
              <div class="card" style="height:540px">
                <img class="card-img-top" src="{{ $c->foto }}" alt="" height="250px" weight="500px">
                <div class="card-body pb-0 mb-0">
                  <h4 class="card-title text-uppercase">{{ $c->nama }} {{ $c->kelas }}</h4>
                  <table class="table table-sm text-left">
                    <tr>
                      <td><b class="badge badge-success">Visi</b></td><td>:</td>
                      <td>{{ $c->visi }}</td>
                    </tr>
                    <tr>
                      <td><b class="badge badge-warning">Misi</b></td><td>:</td>
                      <td>{{ $c->misi }}</td>
                    </tr>
                  </table>
                </div>
                <div class="card-footer">
                  <div class="btn-group btn-block mb-1" role="group">
                    <a href="#modalVisi{{$c->id}}" data-toggle="modal" class="btn btn-sm btn-teal" title="Visi & Misi Calon"><i class="fa fa-book"></i> Visi & Misi</a>
                    <a href="#modalDetail{{$c->id}}" data-toggle="modal" class="btn btn-sm btn-warning" title="Detail Calon"><i class="fa fa-eye"></i> Detail</a>
                  </div>
                  @if(($cek[0]->cek)==1)
                  <button type="button" class="btn btn-block btn-sm btn-dark" disabled><i class="fa fa-exclamation-circle" data-toggle="tooltip" title="Hanya Bisa 1x Memilih"></i> Anda telah memilih</button>
                  @else
                  <!-- {{ url('pilih') }}/{{$c->id}} -->
                  <span data-toggle="modal" data-target="#modalConfimation{{$c->id}}"><a class="btn btn-sm btn-block btn-primary text-white" data-toggle="tooltip" title="Pilih {{ $c->nama }}"><i class="fa fa-edit"></i><b> Pilih {{ $c->nama }}</b></a></span>
                  @endif
                </div>
              </div>
            </div>
            @endforeach
      </div>
      <!-- End Row -->
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal Visi Misi -->
@foreach($calon as $c)
<div id="modalVisi{{$c->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalVisiLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalVisiLabel">Visi & Misi ({{$c->nama}} {{$c->kelas}})</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body pb-0">
                <table class="table table-borderless">
                  <tr style="border-bottom: 1px solid #e6e6e6;">
                    <td><span class="btn btn-sm btn-success">Visi</span> </td><td><i class="fa fa-arrow-right"></i> </td>
                    <td>{{ $c->visi }}</td>
                  </tr>
                  <tr>
                    <td><span class="btn btn-sm btn-warning">Misi</span> </td><td><i class="fa fa-arrow-right"></i> </td>
                    <td>{{ $c->misi }}</td>
                  </tr>
                </table>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach

<!-- Modal Visi Misi -->
@foreach($calon as $c)
<div id="modalDetail{{$c->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalDetailLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetailLabel">Detail ({{$c->nama}} {{$c->kelas}})</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body pb-0">
              <div class="row">
                <div class="col-5">
                  <img src="{{$c->foto}}" class="text-center img-thumbnail" alt="">
                </div>
                <div class="col-7">
                  <table class="table table-hover pt-0 mt-0">
                    <tr>
                      <td>Nama</td><td>:</td>
                      <td>{{ $c->nama }}</td>
                    </tr>
                    <tr>
                      <td>Kelas</td><td>:</td>
                      <td>{{ $c->kelas }}</td>
                    </tr>
                    <tr>
                      <td><span class="badge badge-success">Visi</span></td><td>:</td>
                      <td>{{ $c->visi }}</td>
                    </tr>
                    <tr>
                      <td><span class="badge badge-warning">Misi</span></td><td>:</td>
                      <td>{{ $c->misi }}</td>
                    </tr>
                  </table>
                </div>
              </div>

            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach

<!-- Modal -->
@foreach($calon as $c)
<div class="modal fade" id="modalConfimation{{$c->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalConfimationLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body text-center">
        <h6 class="pb-0 mb-0">Anda memilih {{$c->nama}}, yakin dengan pilihan anda?</h6> <br>
        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Tidak</button>
        <a href="{{ url('pilih') }}/{{$c->id}}" class="btn btn-sm btn-info"><i class="fa fa-check"></i> Yakin</a>
      </div>
    </div>
  </div>
</div>
@endforeach

@if (Session::has('swal'))
      <script type="text/javascript">
        swal({
          icon: "success",
          title: "Berhasil",
          text: "{!! session('swal') !!}"
        });
      </script>
@endif

@endsection
