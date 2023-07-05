<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class AbsensiController extends Controller
{
    public function index()
    {
        // Ambil semua data karyawan dari database
        $karyawan = Karyawan::all();
        
        // Tampilkan view 'absensi' dan lewatkan data karyawan ke view
        return view('absensi', ['karyawan' => $karyawan]);
    }
}
