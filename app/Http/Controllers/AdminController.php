<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index (){
        return view('login');
    }
    public function dashboard_admin (){
        return view('admin.input');
    }
    public function data_user(){
        $user = User::all();
        return view('admin.data_user',compact('user'));
    }
    public function edit_user($id) {
        $user = User::select('*')
        ->where('id', $id)
        ->get();
        return view('admin.edit_user',compact('user'));
    }
    public function update_user(Request $request, User $user){
        $this->validate($request, [
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            'status'=> 'required',
        ]);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => $request->status,
        ]);
        return redirect ('/data_user')->with('success','Akun Berhasil di Ubah');
    }
    public function hapus_user($id){
        $user = User::find($id);
        $user->delete();

        return redirect('/data_user')->with('success','Akun Berhasil di Hapus');
    }
    public function login (Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)){
            return redirect()->intended('/data')->withSuccess('Anda Berhasil Login');
        }
        return redirect ("login")->withSuccess('Gagal Untuk Login');
    }
    public function register() {
        return view ('admin.registrasi');
    }
    public function auth_register(Request $request){
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'status' => $request['status']
        ]);
        return redirect('/data_user')->with('success', 'Berhasil Membuat Akun');
    }
    public function logout(Request $request){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
   
}
