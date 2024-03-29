<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    protected $table = 'pengajuan';
    protected $dates = ['tanggal'];

    

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'alamat',
        'organik',
        'anorganik',
        'tanggal'
    ];
}
