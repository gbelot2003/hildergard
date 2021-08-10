<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function show($slug)
    {
        $user = User::where('slug', '=', $slug)->first();
        return View('users.profile', compact('user'));
    }
}
