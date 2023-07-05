<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Absensi Karyawan</title>
</head>
<body>
    <?
@extends('layouts.app')

@section('content')?>

<h1>Data Absensi Karyawan</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Karyawan</th>
                <th>Tanggal</th>
                <th>Hadir</th>
            </tr>
        </thead>
        <tbody>
            
        <?    @foreach ($absensi as $data)?>
                <tr>
                    <td><?php{{ $data->id }}?></td>
                    <td><?{{ $data->karyawan->nama }}?></td>
                    <td><?{{ $data->tanggal }}?></td>
                    <td><?{{ $data->hadir ? 'Ya' : 'Tidak' }}?></td>
                </tr>
          <?  @endforeach?>

        </tbody>
    </table>
@endsection

</body>
</html>
