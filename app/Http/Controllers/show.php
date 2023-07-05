<?php
// app/Http/Controllers/ProfilController.php



use Illuminate\Http\Request;
use App\Models\User;

class ProfilController extends Controller
{
    public function show()
    {
        // Mengambil data pengguna yang sedang login
        $user = auth()->user();

        return view('profil.show', compact('user'));
    }
}
?>
