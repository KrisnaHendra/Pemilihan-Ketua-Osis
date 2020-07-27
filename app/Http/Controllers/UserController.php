<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;

class UserController extends Controller
{
    public function index(){
      if(auth()->user()->role_id != 1){
        return view('block');
      }
      $user = DB::table('users')->select('users.*','role.role')->leftJoin('role','role.id','=','users.role_id')->get();
      return view('admin/user',['user'=>$user]);
    }

    public function addUser(request $req){
      User::create([
        'name' => $req->nama,
        'username' => $req->username,
        'email' => $req->email,
        'password' => bcrypt($req->password),
        'role_id' => $req->role_id,
      ]);
      session()->flash('message','Data User Berhasil Ditambahkan!');
      return redirect()->back();
    }

    public function delete($id){
      DB::table('users')->where('id',$id)->delete();
      session()->flash('message','Data user berhasil dihapus!');
      return back();
    }

    public function update(Request $request)
    {
      $pass = $request->password;
      // print_r($pass);die;
      if($pass!=''){
        DB::table('users')->where('id',$request->id)->update([
          'name' => $request->nama,
          'username' => $request->username,
          'email' => $request->email,
          'password' => bcrypt($request->password),
          'role_id' => $request->role_id
        ]);
      }else{
        DB::table('users')->where('id',$request->id)->update([
          'name' => $request->nama,
          'username' => $request->username,
          'email' => $request->email,
          'role_id' => $request->role_id
        ]);
      }
      session()->flash('message','Data user Berhasil diubah!');
    	return redirect()->back();
    }
}
