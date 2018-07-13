@extends('layouts.admin')
@section('content')
<section class="card">
<div class="card-body text-secondary">col-lg-12</div>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			<br>	
			<br>
			<br>
			  <div class="panel-heading"><b>Data Mobil</b>
			  	<div class="panel-title pull-right"><a class="btn btn-info" href="{{ route('mobil.create') }}">Tambah</a>
			  	</div>
			  </div>
		<br>
			  <div class="panel-body">
			  	<div class="table-responsive m-b-40">
				  <table class="table table-borderless table-data3">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama</th>
					  <th>Jenis Mobil</th>
					  <th>No Plat</th>
					  <th>Tahun Keluaran</th>
					  <th>Warna</th>
					  <th>Kapasitas</th>
					  <th>Perseneling</th>
					  <th>Stock</th>
					  <th>Harga</th>
					  <th>Foto</th>
					  <th>Merk</th>
					  <th colspan="2">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($mobil as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama_mobil }}</td>
				    	<td>{{ $data->jenis_mobil }}</td>
				    	<td>{{ $data->no_plat }}</td>
				    	<td>{{ $data->tahun_keluaran }}</td>
				    	<td>{{ $data->warna }}</td>
				    	<td>{{ $data->kapasitas }}</td>
				    	<td>{{ $data->perseneling }}</td>
				    	<td>{{ $data->stock }}</td>
				    	<td>Rp.{{ $data->harga }}/Hari</td>
				    	<td><img src="{{asset('/assets/image/foto_mobil/'.$data->foto.'')}}"></td>
				    	<td>{{ $data->Merk->nama_merk }}</td>
				    	</li></td>
<td>
	<a class="btn btn-warning" href="{{ route('mobil.edit',$data->id) }}">Edit</a>
</td>
<td>
	<form method="post" action="{{ route('mobil.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger">Delete</button>
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
</div>
</section>
@endsection