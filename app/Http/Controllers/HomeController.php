<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $role=Auth::user()->role;

        if($role=='petugas') 
        {
            return view ('petugas/dashboard');
        }

        else if ($role=='warga')
        {
            return view ('warga/beranda');
        }
    }
}