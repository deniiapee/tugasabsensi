<?php
use Illuminate\Http\Request;
use App\Models\User;

class ProfilController extends Controller
{
    public function edit()
    {
        // Mengambil data pengguna yang sedang login
        $user = auth()->user();

        return view('profil.edit', compact('user'));
    }
}

public function edit($id)
{
    $karyawan = Karyawan::find($id);

    return view('karyawan.edit', compact('karyawan'));
}
