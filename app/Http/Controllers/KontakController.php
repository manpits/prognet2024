<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Kontak::all();
        return view('kontaks', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kontak-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newKontak = new Kontak();

        $newKontak->nama = $request['nama'];
        $newKontak->alamat = $request['alamat'];
        $newKontak->telepon = $request['telepon'];
        $newKontak->email = $request['email'];
        $newKontak->lahir = $request['lahir'];

        $newKontak->save();

        return redirect()->route('kontaks.index');
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
        $kontak =  Kontak::find($id);
        return view('kontak-edit', compact('kontak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kontak = Kontak::find($id);

        $kontak->nama = $request['nama'];
        $kontak->alamat = $request['alamat'];
        $kontak->telepon = $request['telepon'];
        $kontak->email = $request['email'];
        $kontak->lahir = $request['lahir'];

        $kontak->save();

        return redirect()->route('kontaks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kontak = Kontak::find($id);
        $kontak->delete();
        return redirect()->route('kontaks.index');
    }
}
