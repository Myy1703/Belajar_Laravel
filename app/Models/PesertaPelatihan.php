<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PesertaPelatihan extends Model
{
    protected $fillable = [
        'jurusan',
        'gelombang',
        'nama',
        'nik',
        'kk',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'pendidikan_terakhir',
        'nama_sekolah',
        'kejuruan',
        'no_hp',
        'email',
        'aktivitas',
        'status'
    ];
}
