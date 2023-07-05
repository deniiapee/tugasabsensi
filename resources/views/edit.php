<form method="POST" action="{{ route('profil.update') }}">
    @csrf
    @method('PUT')

    <label for="name">Nama:</label>
    <input type="text" id="name" name="name" value="{{ $user->name }}" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $user->email }}" required>

    <!-- Tambahkan field lainnya sesuai kebutuhan -->

    <button type="submit">Simpan</button>
</form>
