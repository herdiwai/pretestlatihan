@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4>Barang</h4>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Tgl Faktur</label>
                        <input type="date" name="tgl_faktur" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>No Faktur</label>
                        <input type="text" name="no_faktur" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Nama Konsumen</label>
                        <input type="text" name="nama_konsumen" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Kode Barang</label>
                        <input type="text" name="kode_barang" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="text" name="jumlah" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Harga Satuan</label>
                        <select type="text" name="kategory" class="form-control">
                            <option value="">Pilih</option>
                            <option value="Buku">Buku</option>
                            <option value="Pensil">Pensil</option>
                            <option value="Solasi">Solasi</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Harga Total</label>
                        <input type="text" name="harga_total" class="form-control">
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