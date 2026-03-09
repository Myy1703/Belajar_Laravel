<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '' }}</title>
</head>
<body>
    <h3>{{ $title ?? '' }}</h3>
    <a href="{{ route('siswa.create') }}">Tambah Siswa</a>
    <table width="100%" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nilai</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $siswa as $index => $item )
            <tr>
                <td>{{ $index += 1 }}</td>
                <td>{{ $item['nama'] }}</td>
                <td>{{ $item['nilai'] }}</td>
                <td>
                    {{ $status = $item['nilai'] >=75 ? 'Lulus' : 'Tidak Lulus' }}
                    {{-- @if ($item['nilai'] >= 75)
                        <span>Lulus</span>
                    @else
                        <span>Tidak Lulus</span>
                    @endif --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
