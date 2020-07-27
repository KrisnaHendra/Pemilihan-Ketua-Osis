@extends('admin/template')
@section('content')

<style media="screen">
    .buttons-html5{
      background-color: #3db9dc!important;
      font-weight: bold;
    }

    .btn-secondary{
      border-color: white;
    }

</style>

<div class="row">
  <div class="col-12">
    <div class="card border-info">
      <h5 class="card-header bg-info text-white">
        <div class="row">
          <div class="col-6">
            <i class="fa fa-receipt"></i> History Pemilihan Ketua OSIS
          </div>
          <div class="col-6 text-right">
            <i class="fa fa-calendar-alt"></i> {{date('d F Y')}} <i class="fa fa-clock"></i> <span id="jam"></span> <span id="menit"></span> <span id="detik"></span>
          </div>
        </div>
      </h5>
      <div class="card-body">
        <div class="alert alert-info text-info alert-dismissible fade show text-center" role="alert">
          <h6 class="m-0 p-0 text-primary text-uppercase"><i class="fa fa-user-tag"></i> <strong>Total Pemilih <i class="fa fa-arrow-right"></i> {{ $userDone[0]->total }} dari {{ $totUser[0]->total }} orang</strong></h6>
        </div>
        <table id="datatable-buttons" class="table table-sm table-hover table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          <thead>
          <tr class="bg-primary text-white">
            <th>No</th>
            <th>Pemilih</th>
            <th>Calon</th>
            <th>Created</th>
          </tr>
          </thead>
          <tbody>
          @foreach($history as $no => $h)
          <tr>
            <td>{{ ++$no }}</td>
            <td>{{ $h->name }}</td>
            <td>{{ $h->nama }}</td>
            <?php date_default_timezone_set('Asia/Jakarta'); ?>
            <td>{{ date('d M Y H:i',$h->created_at) }}</td>
          </tr>
          @endforeach
          </tbody>
        </table>
        <span data-toggle="modal" data-target="#modalDeleteAll"> <a class="text-danger mt-2 mb-0 btn btn-block btn-sm btn-outline-danger" data-toggle="tooltip" title="Hapus Semua History"><i class="fa fa-times-circle"></i> Delete All History</a> </span>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalDeleteAll" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalDeleteAllLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body text-center">
        <h6 class="pb-0 mb-0">Anda yakin akan menghapus semua history pemilihan ini?</h6> <br>
        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Tidak</button>
        <a href="{{ url('history/deleteAll') }}" class="btn btn-sm btn-info"><i class="fa fa-check"></i> Yakin</a>
      </div>
    </div>
  </div>
</div>

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
