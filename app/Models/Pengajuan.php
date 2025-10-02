<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $table = 'pengajuan';

    // Kolom yang boleh diisi
    protected $fillable = [
        'nomor_permohonan',
        'nama',
        'email',
        'paspor',
        'tujuan',
        'lampiran',
        'status',
        'tanggal',
        'jam_mulai',
        'jam_selesai',
        'lokasi',
        'petugas',
        'catatan_admin',
    ];
}
