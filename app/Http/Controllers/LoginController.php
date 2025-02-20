<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    
    function halamanLogin(){
        return view('login');
    }

    function prosesLogin(Request $request){
        $email = $request->email;
        $password = $request->password;

        $credential = [
            'email' => $email,
            'password' => $password,
        ];

        if (Auth::attempt($credential)) {
            return redirect('/');
        } else {
            return redirect('/login')->with('pesan', 'Username / password tidak sesuai.');
        }
    }

    function logout() {
        Auth::logout();
        return redirect('/login')->with('pesan', 'Silahkan login kembali jika diperlukan...');
    }

    function halamanGantiPassword () {
        return view('ganti-password');
    }

    function prosesGantiPassword(Request $request) {
        $passwordLama = $request->password_lama;
        $passwordBaru = $request->password_baru;

        $email = Auth::user()->email;

        if (Hash::check($passwordLama, Auth::user()->password)) {
            $user = User::find(Auth::user()->id);
            $user->password = Hash::make($passwordBaru);
            $user->save();

            return redirect('ganti-password')->with('pesan', 'Ganti Password berhasil');

        } else {
            return redirect('ganti-password')->with('pesan','Gagal: email & password tidak sesuai');
        }
    }

}
