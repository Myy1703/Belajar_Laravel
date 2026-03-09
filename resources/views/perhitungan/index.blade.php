<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h2>Perhitungan</h2>
    <a href="{{ url('navbar') }}">Kembali</a>

    <form action="{{ route('perhitungan.store') }}" method="post">
@csrf
        <input type="number" name="angka1" id="" required>
        <br>

        <select name="operator" id="" required>
            <option value="">--Pilih Operator--</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>

        <input type="number" name="angka2" id="" required>
        <br>

        <button type="submit">Hitung</button>

    </form>
@isset($hasil)
<h3>Hasil: {{ $hasil }}</h3>
{{-- @dd($hasil) --}}
@endisset

</body>
</html>
