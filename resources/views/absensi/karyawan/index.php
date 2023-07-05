<?php
use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensi = Absensi::all();
        return view('absensi.index', compact('absensi'));
    }

    public function create()
    {
        return view('absensi.create');
    }

    public function store(Request $request)
    {
        $absensi = new Absensi;
        $absensi->karyawan_id = $request->karyawan_id;
        $absensi->tanggal = $request->tanggal;
        $absensi->jam_masuk = $request->jam_masuk;
        $absensi->jam_keluar = $request->jam_keluar;
        $absensi->save();

        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil disimpan.');
    }

    public function edit($id)
    {
        $absensi = Absensi::findOrFail($id);
        return view('absensi.edit', compact('absensi'));
    }

    public function update(Request $request, $id)
    {
        $absensi = Absensi::findOrFail($id);
        $absensi->karyawan_id = $request->karyawan_id;
        $absensi->tanggal = $request->tanggal;
        $absensi->jam_masuk = $request->jam_masuk;
        $absensi->jam_keluar = $request->jam_keluar;
        $absensi->save();

        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $absensi = Absensi::findOrFail($id);
        $absensi->delete();

        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil dihapus.');
    }
}
