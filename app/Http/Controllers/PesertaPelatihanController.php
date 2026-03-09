<?php

namespace App\Http\Controllers;

use App\Models\PesertaPelatihan;
use Illuminate\Http\Request;

class PesertaPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // SELECT * FROM limas
        $peserta = PesertaPelatihan::orderBy('id', 'DESC')->get();
        return view('peserta-pelatihan.index', compact('peserta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peserta-pelatihan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jurusan' => 'required',
            'gelombang' => 'required',
            'nama' => 'required',
            'nik' => 'required',
            'kk' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'pendidikan_terakhir' => 'required',
            'nama_sekolah' => 'required',
            'kejuruan' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'aktivitas' => 'required',
            'status' => 'required'
        ]);

        $jurusan = $request->jurusan;
        $gelombang = $request->gelombang;
        $nama = $request->nama;
        $nik = $request->nik;
        $kk = $request->kk;
        $jk = $request->jk;
        $tempat_lahir = $request->tempat_lahir;
        $tanggal_lahir = $request->tanggal_lahir;
        $pendidikan_terakhir = $request->pendidikan_terakhir;
        $nama_sekolah = $request->nama_sekolah;
        $kejuruan = $request->kejuruan;
        $no_hp = $request->no_hp;
        $email = $request->email;
        $aktivitas = $request->aktivitas;
        $status = $request->status;

        // INSERT INTO limas () VALUES ();
        PesertaPelatihan::create([
            'jurusan' => $jurusan,
            'gelombang' => $gelombang,
            'nama' => $nama,
            'nik' => $nik,
            'kk' => $kk,
            'jk' => $jk,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'pendidikan_terakhir' => $pendidikan_terakhir,
            'nama_sekolah' => $nama_sekolah,
            'kejuruan' => $kejuruan,
            'no_hp' => $no_hp,
            'email' => $email,
            'aktivitas' => $aktivitas,
            'status' => $status
        ]);

        return redirect()->route('pesertapelatihan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $peserta = PesertaPelatihan::find($id);


        return view('peserta-pelatihan.edit', compact('peserta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'jurusan' => 'required',
            'gelombang' => 'required',
            'nama' => 'required',
            'nik' => 'required',
            'kk' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'pendidikan_terakhir' => 'required',
            'nama_sekolah' => 'required',
            'kejuruan' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'aktivitas' => 'required',
            'status' => 'required'
        ]);

        $peserta = PesertaPelatihan::find($id);

        $jurusan = $request->jurusan;
        $gelombang = $request->gelombang;
        $nama = $request->nama;
        $nik = $request->nik;
        $kk = $request->kk;
        $jk = $request->jk;
        $tempat_lahir = $request->tempat_lahir;
        $tanggal_lahir = $request->tanggal_lahir;
        $pendidikan_terakhir = $request->pendidikan_terakhir;
        $nama_sekolah = $request->nama_sekolah;
        $kejuruan = $request->kejuruan;
        $no_hp = $request->no_hp;
        $email = $request->email;
        $aktivitas = $request->aktivitas;
        $status = $request->status;

        // INSERT INTO limas () VALUES ();
        $peserta->update([
            'jurusan' => $jurusan,
            'gelombang' => $gelombang,
            'nama' => $nama,
            'nik' => $nik,
            'kk' => $kk,
            'jk' => $jk,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'pendidikan_terakhir' => $pendidikan_terakhir,
            'nama_sekolah' => $nama_sekolah,
            'kejuruan' => $kejuruan,
            'no_hp' => $no_hp,
            'email' => $email,
            'aktivitas' => $aktivitas,
            'status' => $status
        ]);

        return redirect()->route('pesertapelatihan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peserta = PesertaPelatihan::find($id);
        $peserta->delete();

        return redirect()->route('pesertapelatihan.index');
    }
}
