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

        if($role=='1') 
        {
            return view ('petugas/dashboard');
        }

        else
        {
            return view ('warga/beranda');
        }
    }
}