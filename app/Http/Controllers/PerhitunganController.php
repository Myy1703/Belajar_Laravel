<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerhitunganController extends Controller
{

    function index()
    {
        return view('balok.lp_balok');
    }

    function indexVolumeKubus()
    {
        return view('kubus.volume_kubus');
    }

    function indexLpTabung()
    {
        return view('tabung.lp_tabung');
    }

    function indexVolumeTabung()
    {
        return view('tabung.volume_tabung');
    }

    function store(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $operator = $request->operator;

        $hasil = 0;

        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;

            case '-':
                $hasil = $angka1 - $angka2;
                break;

            case '*':
                $hasil = $angka1 * $angka2;
                break;

            case '/':
                if ($angka2 == 0) {
                    return back()->with('error', 'Tidak bisa dibagi 0!');
                }
                $hasil = $angka1 / $angka2;
                break;
        }

        return view('perhitungan.index', compact('hasil'));
    }

    function storeLpKubus(Request $request)
    {
        $s = $request->sisi;
        $hasil = 6 * $s * $s;

        return view('balok.lp_balok', compact('hasil'));
    }

    function storeVolumeKubus(Request $request)
    {
        $s = $request->sisiKubus;
        $hasil = $s * $s * $s;

        return view('kubus.volume_kubus', compact('hasil'));
    }

    function storeLpTabung(Request $request)
    {
        // LP tabung = 2 * 3.14 * r * (r+t)
        $r = $request->jariJari;
        $t = $request->tinggi;
        $hasil = 2 * 3.14 * $r * ($r + $t);

        return view('tabung.lp_tabung', compact('hasil'));
    }

    function storeVolumeTabung(Request $request)
    {
        // LP tabung = 2 * 3.14 * r * (r+t)
        $r = $request->jariJari;
        $t = $request->tinggi;
        $hasil = 3.14 * $r * $r * $t;

        return view('tabung.lp_tabung', compact('hasil'));
    }
}
