<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;

class PemilihController extends Controller
{
    public function index(){
      if(auth()->user()->role_id != 1){
        return view('block');
      }
      $cek = DB::table('history')->selectRaw('COUNT(id) as cek')->where('users_id',auth()->user()->id)->get();
      $calon = DB::table('calon')->get();
      return view('admin/tampilanPemilih',['calon'=>$calon,'cek'=>$cek]);
    }

    public function pilih($id){
      DB::table('history')->insert([
        'calon_id' => $id,
        'users_id' => auth()->user()->id,
        'created_at' => time()
      ]);
      session()->flash('swal','Terimakasih atas pilihan anda!');
      return back();
    }

    public function home(){
      if(auth()->user()->role_id != 2){
        return view('block');
      }
      $cek = DB::table('history')->selectRaw('COUNT(id) as cek')->where('users_id',auth()->user()->id)->get();
      $calon = DB::table('calon')->get();
      return view('pemilih/home',['cek'=>$cek,'calon'=>$calon]);
    }
}
