@extends('layouts.app')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
                        <strong>Data Master Barang</strong>
                        <a href="{{ route('barang.create') }}" class="btn btn-sm btn-primary float-right">Tambah</a>
					</div>

					<div class="card-body">
							<table class="table table-inverse">
								<thead>
									<tr>
										<th>Kode Barang</th>
										<th>Nama Barang</th>
										<th>Harga Jual</th>
										<th>Harga Beli</th>
										<th>Satuan</th>
										<th>Kategori</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($barang as $item ) { ?>
								<tr>
									<td><?= $item->kode_barang ?></td>
									<td><?= $item->nama_barang ?></td>
									<td><?= $item->harga_jual ?></td>
									<td><?= $item->harga_beli ?></td>
									<td><?= $item->satuan ?></td>
									<td><?= $item->kategory ?></td>
									<td>
                                        <form action="{{ route('barang.destroy', $item->id) }}" method="post">
                                            @csrf 
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">delete</button>
                                            <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-sm btn-info">edit</a>
                                        </form>
									</td>
								</tr>

								<?php } ?>
								</tbody>
							</table>
					</div>
				</div>
           

				<div class="card mt-4">
					<div class="card-header">
                        <strong>Data Penjualan</strong>
                        {{-- <a href="{{ route('penjualan.create') }}" class="btn btn-sm btn-primary float-right">Tambah</a> --}}
					</div>
					<div class="card-body">
							<table class="table table-inverse">
								<thead>
									<tr>
										<th>Tgl Faktur</th>
										<th>No Faktur</th>
										<th>Nama Konsumen</th>
										<th>Kode Barang</th>
										<th>Jumlah</th>
										<th>Harga Satuan</th>
                                        <th>Harga Total</th>
                                        <th>Action</th>
									</tr>
								</thead>
								<tbody>
								@foreach ($penjualan as $item)
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
</div>
@endsection