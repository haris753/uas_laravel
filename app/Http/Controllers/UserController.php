<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    function halamanDaftarUser() {
        $users = User::get();
        return view('tentangkami', ['users'=>$users]);
    }

}
