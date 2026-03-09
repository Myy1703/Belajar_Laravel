<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('luaspermukaantabung.store') }}" method="post">
        @csrf

        <label for="">Ruas Jari-Jari</label>
        <br>

        <input type="number" name="jariJari" id="" required>
        <br>

        <label for="">Tinggi</label>
        <br>

        <input type="number" name="tinggi" id="" required>
        <br>

        <button type="submit">Hitung</button>
    </form>
    @isset($hasil)
        <h3>Hasil Luas Permukaan: {{ $hasil }}</h3>
    @endisset
</body>
</html>
