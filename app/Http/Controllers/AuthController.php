<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
      public function getLogin()
      {
        return view('login');
      }

      public function postLogin(Request $request)
      {
        // print_r($request->all());die;
        if(!auth()->attempt(['username'=>$request->username,'password'=>$request->password])){
          session()->flash('message_danger','Cek username dan password!');
          return redirect()->back();
        }else if((auth()->user()->role_id) == 1 ){
          return redirect()->route('home');
        }else if((auth()->user()->role_id) == 2){
          return redirect()->route('home_pemilih');
        }else{
          return redirect()->route('monitoring');
        }
      }

      public function getRegister()
      {
        return view('register');
      }

      public function postRegister(Request $request)
      {
        $this->validate($request,[
          'name' => 'required|min:4',
          'email' => 'required|email|unique:users,email',
          'password' => 'required|min:5|confirmed'
        ]);
        // dd('Registrasi OK');
        $user = User::create([
          'name' => $request->name,
          'username' => $request->username,
          'email' => $request->email,
          'password' => bcrypt($request->password),
          'role_id' => '1',
        ]);
        auth()->loginUsingId($user->id);
        session()->flash('message','Akun Berhasil Dibuat');
        return redirect()->back();
      }

      public function logout()
      {
        auth()->logout();
        session()->flash('message','You Have Been Logged Out');
        return redirect()->route('login');
      }
}
