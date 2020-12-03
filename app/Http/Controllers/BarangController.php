<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Penjualan;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $barang = Barang::all();
        $penjualan = Penjualan::all();
        return view('admin.admin_index', compact('barang','penjualan'));
    }

    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $val =$request->validate([
            'kode_barang'=> 'required',
            'nama_barang'=> 'required',
            'harga_jual'=> 'required|integer',
            'harga_beli'=> 'required|integer',
            'satuan'=> 'required',
            'kategory'=> 'required',
        ]);
        
        Barang::create($val);

        return redirect()->route('barang.index')->with('status', 'Barang Berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        $barang->update($request->all());

        return redirect()->route('barang.index')->with('status', 'Barang Berhasil diUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id)->delete();

        return redirect()->route('barang.index')->with('status', 'Barang Berhasil diHapus!!');
    }
}
