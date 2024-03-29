<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function show(User $user){
        return view('profiles.show', compact('user'));
    }
}
