@extends('admin/template')
@section('content')
<div class="row">
    <div class="col-6">
        <div>
            <h4 class="header-title mb-3">Data User E-Pilketos</b></h4>
        </div>
    </div>
    <div class="col-6 text-right">
      <h4 class="header-title mb-3 text-primary">
        <i class="fa fa-calendar-alt"></i> Today, {{ date('d M Y') }} <span id="jam"></span> <span id="menit"></span> <span id="detik"></span>
      </h4>
    </div>
</div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-primary">
          <div class="row">
          <div class="col-6">
            <b class="text-white"><i class="fa fa-users"></i> Data User {{ date('d M Y') }}</b>
          </div>
          <div class="col-6 text-right">
            <a href="#modalTambah" data-toggle="modal" class="btn btn-sm btn-light pt-0 pb-0"><i class="fa fa-plus-circle"></i> Tambah User</a>
          </div>
        </div>
        </div>
        <div class="card-body">
          @if (Session::has('message'))
                <div class="alert alert-success alert-dismissable" role="alert">
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">×</span>
                   </button>
                   <p class="mb-0">{!! session('message') !!}</p>
               </div>
          @endif
          <table id="responsive-datatable" class="table table-sm table-hover table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Created</th>
                      <th class="text-right">Action</th>
                  </tr>
              </thead>

              <tbody>
                  @foreach($user as $no => $u)
                  <tr>
                      <td>{{ ++$no }}</td>
                      <td>{{ $u->name }}</td>
                      <td>{{ $u->username }}</td>
                      <td>{{ $u->email }}</td>
                      @if($u->role_id == 1)
                      <td><span class="badge badge-info">{{ $u->role }}</span></td>
                      @elseif($u->role_id == 2)
                      <td><span class="badge badge-success">{{ $u->role }}</span></td>
                      @else
                      <td><span class="badge badge-warning">{{ $u->role }}</span></td>
                      @endif
                      <td>{{ $u->created_at }}</td>
                      <td class="text-right">
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a href="#modalUpdate{{$u->id}}" data-toggle="modal" type="button" class="btn btn-sm btn-info pt-0 pb-0"><i class="fa fa-edit text-white"></i> </a>
                          <a href="{{ url('user/delete') }}/{{ $u->id }}" onclick="return confirm('Hapus data ini?')" type="button" class="btn btn-sm btn-danger pt-0 pb-0"><i class="fa fa-times-circle"></i></a>
                        </div>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Tambah -->
  <div class="modal fade" id="modalTambah" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalTambahLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTambahLabel">Tambah User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ url('user/addUser') }}" method="post">
          {{csrf_field()}}
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Tuliskan nama" name="nama" required autofocus>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Tuliskan username" name="username" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" placeholder="Tuliskan email" name="email" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Role</label>
              <div class="col-sm-10">
                <select class="form-control" name="role_id" required>
                  <option value="">Pilih Role ..</option>
                  <option value="1">Administrator</option>
                  <option value="2">Chooser</option>
                  <option value="3">The Monitor</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="Tuliskan password" required>
              </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Update -->
@foreach($user as $u)
<div class="modal fade" id="modalUpdate{{$u->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="modalUpdateLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="modalUpdateLabel">Update {{ $u->name }}</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="{{ url('user/update') }}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$u->id}}">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="{{$u->name}}" name="nama" required autofocus>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="{{$u->username}}" name="username" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" value="{{$u->email}}" name="email" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-10">
              <select class="form-control" name="role_id" required>
                <option value="">Pilih Role ..</option>
                <option value="1">Administrator</option>
                <option value="2">Chooser</option>
                <option value="3">The Monitor</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password">
              <span class="text-danger">*Kosongi password jika tidak diubah</span>
            </div>
          </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>
  </div>
</div>
</div>
@endforeach
@endsection
