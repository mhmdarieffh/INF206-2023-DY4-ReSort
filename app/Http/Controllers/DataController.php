<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    public function index(){

        $data = DB::table('pengajuan')
                        ->select(DB::raw('SUM(organik) as total_organik'), DB::raw('SUM(anorganik) as total_anorganik'), 'tanggal')
                        ->groupBy('tanggal')
                        ->orderBy('tanggal', 'DESC')
                        ->paginate(10);


                        
                        
        return view('petugas.data', compact('data'));

        
    }
}
