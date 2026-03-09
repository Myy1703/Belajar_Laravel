<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Edit Volume Limas Segi Empat</h3>
<form action="{{ route('volumelimas.update', $limas->id) }}" method="post">

    @csrf
@method('PUT')
    <label for="">Luas Alas</label>
    <br>
    <input type="number" step="any" name="luas_alas" id="" value="{{ $limas->luas_alas }}" required>
    <br>

    <label for="">Tinggi</label>
    <br>
    <input type="number" step="any" name="tinggi" id="" value="{{ $limas->tinggi }}" required>
    <br>

    <button type="submit">Hitung dan Simpan</button>
</form>

</body>
</html>
