<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pengajuan;

class TabelController extends Controller
{
    public function index(){
        $pengajuan = Pengajuan::paginate(10);
        return view('petugas.tabel', compact(['pengajuan']));
    }
}


