@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4>Barang</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('barang.update',$barang->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Kode Barang</label>
                        <input type="text" name="kode_barang" class="form-control" value="{{ $barang->kode_barang }}">
                    </div>

                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" value="{{ $barang->nama_barang }}">
                    </div>

                    <div class="form-group">
                        <label>Harga jual</label>
                        <input type="number" name="harga_jual" class="form-control" value="{{ $barang->harga_jual }}">
                    </div>

                    <div class="form-group">
                        <label>Harga Beli</label>
                        <input type="number" name="harga_beli" class="form-control" value="{{ $barang->harga_beli }}">
                    </div>

                    <div class="form-group">
                        <label>Satuan</label>
                        <select type="text" name="satuan" class="form-control">
                            <option value="">Pilih</option>
                            <option value="Pax" {{ $barang->satuan == "Pax" ? 'selected' : '' }}>Pax</option>
                            <option value="Unit" {{ $barang->satuan == "Unit" ? 'selected' : '' }}>Unit</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Kategory</label>
                        <select type="text" name="kategory" class="form-control">
                            <option value="">Pilih</option>
                            <option value="Buku" {{ $barang->kategory == "Buku" ? 'selected' : '' }}>Buku</option>
                            <option value="Pensil" {{ $barang->kategory == "Pensil" ? 'selected' : '' }}>Pensil</option>
                            <option value="Solasi" {{ $barang->kategory == "Solasi" ? 'selected' : '' }}>Solasi</option>
                        </select>
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