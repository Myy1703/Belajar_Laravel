<?php

namespace App\Http\Controllers;

use App\Models\Limas;
use Illuminate\Http\Request;

class VolumeLimasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // SELECT * FROM limas
        $limas = Limas::orderBy('id', 'DESC')->get();
        return view('limas.index', compact('limas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('limas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'luas_alas' => 'required|numeric|min:1',
            'tinggi' => 'required|numeric|min:1'
        ]);

        $l_alas = $request->luas_alas;
        $t = $request->tinggi;
        $hasil = 1 / 3 * $l_alas * $t;

        // INSERT INTO limas () VALUES ();
        Limas::create([
            'luas_alas' => $l_alas,
            'tinggi' => $t,
            'hasil' => $hasil
        ]);

        return redirect()->route('volumelimas.index');
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
        $limas = Limas::find($id);


        return view('limas.edit', compact('limas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'luas_alas' => 'required|numeric|min:1',
            'tinggi' => 'required|numeric|min:1'
        ]);

        $limas = Limas::find($id);

        $l_alas = $request->luas_alas;
        $t = $request->tinggi;
        $hasil = 1 / 3 * $l_alas * $t;

        $limas->update([
            'luas_alas' => $l_alas,
            'tinggi' => $t,
            'hasil' => $hasil
        ]);

        return redirect()->route('volumelimas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $limas = Limas::find($id);
        $limas->delete();

        return redirect()->route('volumelimas.index');
    }
}
