<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pengajuan;

class TabelController extends Controller
{
    public function index(){
        $pengajuan = Pengajuan::all();
        return view('petugas.tabel', compact(['pengajuan']));
    }
}
