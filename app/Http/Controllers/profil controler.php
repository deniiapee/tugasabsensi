<?php 
use Illuminate\Http\Request;
use App\Models\User;

class ProfilController extends Controller
{
    // ...

    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            // Tambahkan validasi untuk field lainnya sesuai kebutuhan
        ]);

        // Mengambil data pengguna yang sedang login
        $user = auth()->user();

        // Update data profil
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // Update field lainnya sesuai kebutuhan

        // Simpan perubahan
        $user->save();

        return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
    }
}
