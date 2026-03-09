<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
    {
        return view('belajar');
    }
    public function getSiswa()
    {
        $title = "Data Siswa";
        $siswa = [
            [
                'nama' => 'Joko Widodo',
                'nilai' => 11,
            ],
            [
                'nama' => 'Balil',
                'nilai' => 20,
            ],
            [
                'nama' => 'Susilo',
                'nilai' => 100,
            ]
        ];
        return view('siswa', compact('title', 'siswa'));
    }

    public function create()
    {
        return view('tambah-siswa');
    }
    public function store(Request $request)
    {
        $nama = $request->nama;
        $nilai = $request->nilai;
        $status = $nilai >= 75 ? 'Lulus' : 'Tidak Lulus';
        return "Siswa $nama dengan nilai $nilai dinyatakan $status";
    }
}
