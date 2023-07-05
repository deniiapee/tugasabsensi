<?php


use Illuminate\Http\Request;
use App\Models\Absensi;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensi = Absensi::with('karyawan')->get();

        return view('absensi.index', compact('absensi'));
    }

    public function store(Request $request)
    {
        $absensi = new Absensi;
        $absensi->karyawan_id = $request->input('karyawan_id');
        $absensi->tanggal = date('Y-m-d');
        $absensi->hadir = true; // Ubah sesuai kebutuhan

        $absensi->save();

        return redirect('/absensi')->with('success', 'Data absensi berhasil disimpan.');
    }
}
