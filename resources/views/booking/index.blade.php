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
			  <div class="panel-heading"><b>Data Booking</b>
			  	<div class="panel-title pull-right"><a class="btn btn-info" href="{{ route('booking.create') }}">Tambah</a>
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
					  <th>Alamat</th>
					  <th>No NIK</th>
					  <th>No Hp</th>
					  <th>Tanggal Pengambilan</th>
					  <th>Tanggal Pengembalian</th>
					  <th>Jumlah Hari</th>
					  <th>Mobil</th>
					  <th>Supir</th>
					  <th>Total Harga</th>
					  <th colspan="2">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($booking as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama }}</td>
				    	<td>{{ $data->alamat }}</td>
				    	<td>{{ $data->no_nik }}</td>
				    	<td>{{ $data->no_hp }}</td>
				    	<td>{{ $data->tanggal_pengambilan }}</td>
				    	<td>{{ $data->tanggal_pengembalian }}</td>
				    	<td>{{ $data->jumlah_hari }}</td>
				    	<td>{{ $data->Mobil->nama_mobil }}</td>
				    	<td>{{ $data->Supir->nama }}</td>
				    	<td>{{ $data->total_harga }}</td>
				    	</li></td>
<td>

	<a class="btn btn-warning" href="{{ route('booking.edit',$data->id) }}">Edit</a>
</td>
<td>
	<form method="post" action="{{ route('booking.destroy',$data->id) }}">
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