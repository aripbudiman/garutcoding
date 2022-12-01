<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index($id){
        $users =User::findOrFail($id);
        return $users;
        return view('auth.profile',['title'=>'Profile'],compact('users'));
    }
}
