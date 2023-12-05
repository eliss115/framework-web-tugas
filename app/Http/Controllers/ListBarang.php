<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class ListBarang extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        return view('hasil_barang',compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function editBarang(string $id)
    {
        $barang= Barang::where('kode_barang',$id)-> get();
        return view ('edit_barang', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateBarang(Request $request, string $id)
    {
        $data = [
            0 => $request -> kode_barang,
            'nama_barang' => $request -> nama_barang,
            'jenis_varian' => $request -> jenis_varian,
            'qty' => $request -> qty,
            'harga_jual' => $request -> harga_jual,
            'total_harga' => $request -> total_harga,
            'diskon' => $request -> diskon,
            'harga_setelah_diskon' => $request -> harga_setelah_diskon
        ];
        $proses = Barang::find($data[0])->updateBarang($data);

        return view ('hasil', compact('proses'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
