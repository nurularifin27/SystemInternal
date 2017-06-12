<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Karyawan;

class KaryawanController extends Controller
{
    //
    public function postLogin(Request $request){
        if(Auth::attempt(['username'=>$request['username'],'password'=>$request['password']])){
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }
    public function postRegister(Request $request){
        $nama = $request['nama'];
        $jabatan = $request['jabatan'];
        $password = bcrypt($request['password']);
        $username = $request['username'];
        $role = "1";
            $karyawan = new Karyawan();
            $karyawan->username=$username;
            $karyawan->password=$password;
            $karyawan->jabatan=$jabatan;
            $karyawan->nama=$nama;
            $karyawan->role=$role;
            $karyawan->save();
        return redirect()->back();
    }
    public function getLogout(){
        
    }
    public function getDashboard(){
        return view('dashboard');
    }
}
