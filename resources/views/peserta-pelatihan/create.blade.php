<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Input Peserta</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5 table-responsive">

        <h3 class="mb-4">Input Data Peserta Pelatihan</h3>

        <form action="{{ route('pesertapelatihan.store') }}" method="post">

            @csrf

            <div class="mb-3">
                <label class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Gelombang</label>
                <input type="text" name="gelombang" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">NIK</label>
                <input type="number" name="nik" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">No KK</label>
                <input type="number" name="kk" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <input type="text" name="jk" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Pendidikan Terakhir</label>
                <input type="text" name="pendidikan_terakhir" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Sekolah</label>
                <input type="text" name="nama_sekolah" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Kejuruan</label>
                <input type="text" name="kejuruan" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">No HP</label>
                <input type="number" name="no_hp" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Aktivitas</label>
                <input type="text" name="aktivitas" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <input type="text" name="status" class="form-control" required>
            </div>

            <button class="btn btn-success">Simpan Data</button>
            <a href="/pesertapelatihan" class="btn btn-secondary">Kembali</a>

        </form>

    </div>

</body>

</html>
