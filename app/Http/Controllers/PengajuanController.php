<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;

class PengajuanController extends Controller
{
    // Menampilkan semua pengajuan
    public function index()
    {
        $data = Pengajuan::all();
        return response()->json($data); 
    }

    // Menyimpan pengajuan baru
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama'   => 'required|string|max:255',
            'email'  => 'nullable|email|max:255',
            'paspor' => 'required|string|max:50',
            'tujuan' => 'required|string',
            'lampiran' => 'nullable|file|mimes:jpg,jpeg,png|max:5120', // max 5 MB
        ]);

        // Simpan file lampiran (jika ada)
        $lampiranPath = null;
        if ($request->hasFile('lampiran')) {
            $lampiranPath = $request->file('lampiran')->store('lampiran', 'public');
        }

        // Buat nomor permohonan unik otomatis
        $nomor_permohonan = 'BAP-' . date('Y') . '-' . strtoupper(substr(uniqid(), -5));

        // Simpan ke database
        $pengajuan = Pengajuan::create([
            'nomor_permohonan' => $nomor_permohonan,
            'nama'   => $validated['nama'],
            'email'  => $validated['email'] ?? null,
            'paspor' => $validated['paspor'],
            'tujuan' => $validated['tujuan'],
            'lampiran' => $lampiranPath,
            'status' => 'pending',
        ]);

        // Response
        return response()->json([
            'message' => 'Pengajuan berhasil disimpan',
            'nomor_permohonan' => $pengajuan->nomor_permohonan,
            'data' => $pengajuan
        ], 201);
    }
}
