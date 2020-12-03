@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4>Barang</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('barang.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Kode Barang</label>
                        <input type="text" name="kode_barang" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Harga jual</label>
                        <input type="number" name="harga_jual" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Harga Beli</label>
                        <input type="number" name="harga_beli" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Satuan</label>
                        <select type="text" name="satuan" class="form-control">
                            <option value="">Pilih</option>
                            <option value="Pax">Pax</option>
                            <option value="Unit">Unit</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Kategory</label>
                        <select type="text" name="kategory" class="form-control">
                            <option value="">Pilih</option>
                            <option value="Buku">Buku</option>
                            <option value="Pensil">Pensil</option>
                            <option value="Solasi">Solasi</option>
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