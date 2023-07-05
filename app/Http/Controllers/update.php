<?php
public function update(Request $request, $id)
{
    $karyawan = Karyawan::find($id);
    $karyawan->nama = $request->input('nama');
    $karyawan->email = $request->input('email');
    // Update atribut lain sesuai kebutuhan

    $karyawan->save();

    return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil diperbarui.');
}
?>
