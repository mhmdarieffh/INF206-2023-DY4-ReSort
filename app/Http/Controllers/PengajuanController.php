<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pickup;
use App\Models\Pengajuan;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PengajuanSampahNotification;


class PengajuanController extends Controller
{
    public function index(): View
    {
        $pengajuan = Pengajuan::latest()->paginate(5);

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
            'tanggal' => date('Y-m-d'),
        ]);
        
        $petugas = User::where('role', 'petugas')->get(); // Ganti dengan query yang sesuai untuk mendapatkan daftar petugas
        foreach ($petugas as $petugas) {
            $petugas->notify(new PengajuanSampahNotification($request->nama));

        return redirect()->route('ajuSuccess')
            ->with('success', 'Pengajuan created successfully.');
        }
    

    }
