@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4>Data Penjualan</h4>
                <a href="{{ route('penjualan.create') }}" class="btn btn-sm btn-primary">Tambah Penjual</a>
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
                                <form action="{{ route('penjualan.destroy', $item->id) }}" method="post">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection