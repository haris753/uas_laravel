<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    function halamanDaftar() {
        return view('pendaftaran');
    }

    function prosesDaftar(Request $request) {
        $email = $request->email;
        $name = $request->name;
        $password = $request->email;

        $user = new User;
        $user->email = $email;
        $user->name = $name;
        $user->password = Hash::make($password);

        if ($user->save()) {
            Auth::login($user);
            return redirect('/');
        } else {
            return redirect('/daftar')->with('pesan', 'Pendaftaran Gagal');
        }

    }
}
