@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">Data Barang</h4>
                {{-- <a href="{{ route('barang.create') }}" class="btn btn-sm btn-primary">Tambah Barang</a> --}}
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
                            <td>Kode Barang</td>
                            <td>Nama Barang</td>
                            <td>Harga Jual</td>
                            <td>Harga Beli</td>
                            <td>Satuan</td>
                            <td>Kategory</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($barang as $item)
                        <tr>
                            <td>{{ $item->kode_barang }}</td>
                            <td>{{ $item->nama_barang }}</td>
                            <td>{{ $item->harga_jual }}</td>
                            <td>{{ $item->harga_beli }}</td>
                            <td>{{ $item->satuan }}</td>
                            <td>{{ $item->kategory }}</td>
                            <td>
                                {{-- <form action="{{ route('barang.destroy', $item->id) }}" method="post">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">delete</button>
                                    <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-sm btn-info">edit</a>
                                </form> --}}
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