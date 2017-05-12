<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function showIndex()
    {
        $user = Auth::user();
        return view('index', compact('user'));
    }

    public function showHome()
    {
        return view('home');
    }
}