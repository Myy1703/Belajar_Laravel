<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Belajar Berhitung Di Laravel</h1>
    <nav>
        <a href="{{ route('perhitungan.index') }}">Perhitungan</a>|
        <a href="{{ route('luaspermukaankubus.index') }}">Luas Permukaan Kubus</a>|
        <a href="{{ route('volumekubus.index') }}">Volume Kubus</a>|
        <a href="{{ route('luaspermukaantabung.index') }}">Luas Permukaan Tabung</a>|
        <a href="{{ route('volumetabung.index') }}">Volume Tabung</a>|
        <a href="{{ route('volumelimas.index') }}">Volume Limas Segi Empat</a>
        <br>
        <a href="{{ route('pesertapelatihan.index') }}">Masukkan Data Peserta</a>
    </nav>
</body>
</html>
