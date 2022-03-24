<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function show()
    {
        $user = auth()->user();
        return view('profile', compact("user"));
    }
}
