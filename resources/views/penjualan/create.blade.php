@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4>Input Penjualan</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('penjualan.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>No Faktur</label>
                        <input type="text" name="no_faktur" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Nama Konsumen</label>
                        <input type="text" name="nama_konsumen" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Barang</label>
                        <select type="text" name="barang_id" class="form-control">
                            @foreach($barang as $item)
                                <option value="{{ $item->id }}">{{ $item->kode_barang }} - {{ $item->nama_barang }} - IDR . {{ $item->harga_jual }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Jumlah Beli</label>
                        <input type="number" name="jumlah" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-sm btn-primary float-right">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection