<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peserta Pelatihan</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5 table-responsive">

        <h2 class="mb-4">Data Peserta Pelatihan</h2>

        <a href="{{ 'pesertapelatihan/create' }}" class="btn btn-primary mb-3">
            Tambah Data
        </a>

        <table class="table table-bordered table-striped table-hover">

            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Jurusan</th>
                    <th>Gelombang</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>KK</th>
                    <th>JK</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Pendidikan</th>
                    <th>Sekolah</th>
                    <th>Kejuruan</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Aktivitas</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($peserta as $index => $v)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $v->jurusan }}</td>
                        <td>{{ $v->gelombang }}</td>
                        <td>{{ $v->nama }}</td>
                        <td>{{ $v->nik }}</td>
                        <td>{{ $v->kk }}</td>
                        <td>{{ $v->jk }}</td>
                        <td>{{ $v->tempat_lahir }}</td>
                        <td>{{ $v->tanggal_lahir }}</td>
                        <td>{{ $v->pendidikan_terakhir }}</td>
                        <td>{{ $v->nama_sekolah }}</td>
                        <td>{{ $v->kejuruan }}</td>
                        <td>{{ $v->no_hp }}</td>
                        <td>{{ $v->email }}</td>
                        <td>{{ $v->aktivitas }}</td>
                        <td>{{ $v->status }}</td>

                        <td>

                            <a href="{{ route('pesertapelatihan.edit', $v->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('pesertapelatihan.destroy', $v->id) }}" method="post"
                                style="display:inline">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm">
                                    Delete
                                </button>

                            </form>

                        </td>

                    </tr>
                @endforeach
            </tbody>

        </table>

    </div>

</body>

</html>
