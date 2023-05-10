<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PengajuanController extends Controller
{
    public function index(): View
    {
        $pengajuans = Pengajuan::latest()->paginate(5);

        return view('pickup.index', compact('pickups'));
    }

    public function create(): View
    {

        return view('pengajuan');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'organik' => 'required',
            'anorganik' => 'required',
        ]);

        Pengajuan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'organik' => $request->organik,
            'anorganik' => $request->anorganik,
        ]);
    
        return redirect()->route('beranda')
            ->with('success', 'Pengajuan created successfully.');
    }
}