<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('data');
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
             $kode_barang = $request -> kode_barang;
            $nama_barang = $request -> nama_barang;
            $jenis_varian = $request -> jenis_varian;
            $qty = $request -> qty;
            $harga_jual = $request -> harga_jual;

            $total_harga = $qty *$harga_jual;

            $diskon = 0;
            if ($total_harga >= 500000){
                $diskon = 50;
            }elseif($total_harga >= 200000){
                $diskon = 20;
            }elseif($total_harga >= 100000){
                $diskon = 10;
            }

            $harga_setelah_diskon = $total_harga - ($total_harga *($diskon/100));

        Barang::create([
            'kode_barang' => $request -> kode_barang,
            'nama_barang' => $request -> nama_barang,
            'jenis_varian' => $request -> jenis_varian,
            'qty' => $request -> qty,
            'harga_jual' => $request -> harga_jual,
            'total_harga' => $total_harga,
            'diskon' => $diskon,
            'harga_setelah_diskon' => $harga_setelah_diskon
        ]);

        /*
        return view('hasil_barang')->with([
            'kode_barang' => $kode_barang,
            'nama_barang' => $nama_barang,
            'jenis_varian' => $jenis_varian,
            'qty' => $qty,
            'harga_jual' => $harga_jual,
            'total_harga' => $total_harga,
            'diskon' => $diskon,
            'harga_setelah_diskon' => $harga_setelah_diskon,
        ]);
        */
        $barang = Barang::all();
        return view('hasil',compact('barang'));
        
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
 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
