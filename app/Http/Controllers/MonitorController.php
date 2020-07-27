<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;

class MonitorController extends Controller
{
    public function index(){
      if(auth()->user()->role_id != 3){
        return view('block');
      }
      $data['data'] = DB::table('history')
                       ->select('calon.nama')
                       ->selectRaw('COUNT(history.id) as jumlah')
                       ->leftJoin('calon','calon.id','=','history.calon_id')
                       ->groupBy('calon_id','nama')
                       // ->orderBy('jumlah','DESC')
                       ->get();
      $data['totPilih'] = DB::table('history')->selectRaw('COUNT(id) as totalPilih')->get();
      $data['jumlah'] = [];
      foreach ($data['data'] as $key => $value) {
        $data['jumlah'][$key]['nama'] = $value->nama;
        $data['jumlah'][$key]['jumlah'] = $value->jumlah;
        $data['jumlah'][$key]['totalPilih'] = $data['totPilih'][0]->totalPilih;
      }
      $data['user'] = DB::table('users')->selectRaw('COUNT(id) as total')->get();
      $data['telahMemilih'] = DB::table('history')->selectRaw('COUNT(id) as total')->get();
      $data['totCalon'] = DB::table('calon')->selectRaw('COUNT(id) as total')->get();
      // dd($data['telahMemilih']);
      return view('monitor/home',$data);
    }
}
