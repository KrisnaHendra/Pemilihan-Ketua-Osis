@extends('admin/template')
@section('content')
<div class="row p-0">
    <div class="col-6">
        <div>
            <h4 class="header-title mb-3">Data Calon Ketua OSIS</b></h4>
        </div>
    </div>
    <div class="col-6 text-right">
      <h4 class="header-title mb-3 text-primary">
        <i class="fa fa-calendar-alt"></i> Today, {{ date('d M Y') }} <span id="jam"></span> <span id="menit"></span> <span id="detik"></span>
      </h4>
    </div>
</div>
<!-- end -->
<div class="row mb-2">
  <div class="col-12">
  </div>
</div>

<div class="card">
  <div class="card-header bg-info text-white">
    <div class="row">
      <div class="col-6">
        <b class="text-uppercase">{{ count($calon) }} Calon Ketua Osis</b>
      </div>
      <div class="col-6 text-right">
        <a href="#modalTambah" class="btn btn-sm btn-light" data-toggle="modal"><i class="fa fa-plus-circle"></i><b> Tambah Calon Baru</b></a>
      </div>
    </div>
  </div>
  <div class="card-body">
<div class="row text-center">
      @foreach($calon as $c)
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100" style="height:500px">
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
            <div class="btn-group btn-block" role="group" aria-label="Basic example">
              <a href="#modalUpdate{{$c->id}}" data-toggle="modal" class="btn btn-sm btn-info"><i class="fa fa-edit"></i> Edit</a>
              <a href="{{ url('calon/delete') }}/{{$c->id}}" onclick="return confirm('Hapus data ini?')" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Hapus Calon"><i class="fa fa-times-circle"></i> Delete</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach

</div>
</div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalTambahLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="modalTambahLabel">Tambah Calon Baru</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="{{ url('calon/addCalon') }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <span class="text-primary mb-2" style="font-size:12px"><b>NB* : Disarankan menggunakan foto landscape agar tampilan sesuai</b></span>
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text font-weight-bold" style="width:80px">Foto Calon</span>
          </div>
          <!-- <div class="custom-file"> -->
            <input type="file" class="form-control" name="foto">
          <!-- </div> -->
        </div>
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text font-weight-bold" style="width:80px">Nama</span>
          </div>
          <input type="text" class="form-control" name="nama">
        </div>
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text font-weight-bold" style="width:80px">Kelas</span>
          </div>
          <input type="text" class="form-control" name="kelas">
        </div>
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text font-weight-bold" style="width:80px">Visi</span>
          </div>
          <textarea type="text" class="form-control" name="visi"></textarea>
        </div>
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text font-weight-bold" style="width:80px">Misi</span>
          </div>
          <textarea type="text" class="form-control" name="misi"></textarea>
        </div>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-sm btn-primary">Save</button>
    </form>
    </div>
  </div>
</div>
</div>

<!-- Modal Update -->
@foreach($calon as $c)
<div class="modal fade" id="modalUpdate{{$c->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalUpdateLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="modalUpdateLabel">Update Data {{$c->nama}}</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="{{ url('calon/update') }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$c->id}}">
        <span class="text-danger mb-2" style="font-size:12px"><b>NB* : Kosongi jika tidak mengubah foto</b></span>
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text font-weight-bold" style="width:85px">Foto Calon</span>
          </div>
            <input type="file" class="form-control" name="foto"><br>
        </div>
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text font-weight-bold" style="width:85px">Nama</span>
          </div>
          <input type="text" class="form-control" name="nama" value="{{$c->nama}}">
        </div>
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text font-weight-bold" style="width:85px">Kelas</span>
          </div>
          <input type="text" class="form-control" name="kelas" value="{{$c->kelas}}">
        </div>
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text font-weight-bold" style="width:85px">Visi</span>
          </div>
          <textarea type="text" class="form-control" name="visi">{{$c->visi}}</textarea>
        </div>
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text font-weight-bold" style="width:85px">Misi</span>
          </div>
          <textarea type="text" class="form-control" name="misi">{{$c->misi}}</textarea>
        </div>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-sm btn-primary">Save</button>
    </form>
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
