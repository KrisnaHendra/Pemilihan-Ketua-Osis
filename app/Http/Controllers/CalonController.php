<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;

class CalonController extends Controller
{
  public function index(){
    if(auth()->user()->role_id != 1){
      return view('block');
    }
    $calon = DB::table('calon')->get();
    return view('admin/calon',['calon'=>$calon]);
  }

  public function addCalon(Request $req){
    $file = $req->file('foto');
    // dd($tes);
    DB::table('calon')->insert([
      'foto' => $file->move('photo'),
      'nama' => $req->nama,
      'kelas' => $req->kelas,
      'visi' => $req->visi,
      'misi' => $req->misi,
      'created_at' => time(),
      'created_by' => auth()->user()->id
    ]);
    session()->flash('swal','Data Calon Baru Berhasil Ditambahkan!');
    return back();
  }

  public function delete($id){
    DB::table('calon')->where('id',$id)->delete();
    session()->flash('swal','Data Calon Berhasil Dihapus!');
    return back();
  }

  public function update(Request $req){
    $foto = $req->file('foto');
    if($foto != ''){
      DB::table('calon')->where('id',$req->id)->update([
        'foto' => $foto->move('photo'),
        'nama' => $req->nama,
        'kelas' => $req->kelas,
        'visi' => $req->visi,
        'misi' => $req->misi,
      ]);
    }else{
      DB::table('calon')->where('id',$req->id)->update([
        'nama' => $req->nama,
        'kelas' => $req->kelas,
        'visi' => $req->visi,
        'misi' => $req->misi,
      ]);
    }
    session()->flash('swal','Data Calon Berhasil Diupdate!');
    return back();
  }

}
