<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;

class HistoryController extends Controller
{
    public function index(){
      if(auth()->user()->role_id != 1){
        return view('block');
      }
      $userDone = DB::table('history')->selectRaw('count(id) as total')->get();
      $totUser = DB::table('users')->selectRaw('count(id) as total')->get();
      $history = DB::table('history')
                 ->select('users.name','calon.nama','history.created_at','history.id')
                 ->leftJoin('users','users.id','=','history.users_id')
                 ->leftJoin('calon','calon.id','=','history.calon_id')
                 ->get();
      return view('admin/history',['history'=>$history,'totUser'=>$totUser,'userDone'=>$userDone]);
    }

    public function deleteAll(){
      $delete = DB::table('history')->truncate();
      session()->flash('swal','Semua History Pemilihan Telah Dihapus');
      return back();
    }
}
