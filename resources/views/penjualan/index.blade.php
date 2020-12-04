@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">Data Penjualan</h4>
                {{-- <a href="{{ route('penjualan.create') }}" class="btn btn-sm btn-primary">Tambah Penjual</a> --}}
            </div>
            {{-- Alert --}}
            <div>
                @if(session('status'))
                    <div class="alert alert-info">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>Tgl Faktur</td>
                            <td>No Faktur</td>
                            <td>Nama Konsumen</td>
                            <td>Kode Barang</td>
                            <td>Jumlah</td>
                            <td>Harga Satuan</td>
                            <td>Harga Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penjualan as $item)
                        <tr>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->no_faktur }}</td>
                            <td>{{ $item->nama_konsumen }}</td>
                            <td>{{ $item->barang_id }}</td>
                            <td>{{ $item->jumlah }}</td>
                            <td>{{ $item->harga_satuan }}</td>
                            <td>{{ $item->harga_total }}</td>
                            <td>
                                {{-- <form action="{{ route('penjualan.destroy', $item->id) }}" method="post">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">delete</button>
                                </form> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $penjualan->links() }}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4>Input Penjualan</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('penjualan.store') }}" method="POST">
                    @csrf

                    {{-- <div class="form-group">
                        <label>No Faktur</label>
                        <input type="text" name="no_faktur" class="form-control">
                    </div> --}}

                    <div class="form-group">
                        <label>Nama Konsumen</label>
                        <input type="text" name="nama_konsumen" pattern="[A-Za-z\s]+" class="form-control" required>
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
</div>
@endsection