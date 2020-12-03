<?php

namespace App\Http\Controllers;

use App\Penjualan;
use App\Barang;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualan = Penjualan::all();
        return view('penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::create()->all();
        return view('penjualan.create', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'no_faktur'=> 'required|unique:penjualans',
        ]);
        
        $id = $request->barang_id;
        $barang = Barang::find($id);
        $hargaSatuan = $barang['harga_jual'];
        $hargaTotal = $hargaSatuan * $request->jumlah;

        Penjualan::create([
            'no_faktur' =>$request->no_faktur,
            'nama_konsumen' =>$request->nama_konsumen,
            'barang_id' =>$request->barang_id,
            'jumlah' =>$request->jumlah,
            'harga_satuan' =>$hargaSatuan,
            'harga_total' =>$hargaTotal
        ]);

        return redirect()->route('penjualan.index')->with('status', 'Penjualan Berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Penjualan::find($id)->delete();

        return redirect()->route('penjualan.index')->with('status', 'Data Penjualan Berhasil diHapus!!');
    }
}
