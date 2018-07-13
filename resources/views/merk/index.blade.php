@extends('layouts.admin')
@section('content')
<section class="card">
<div class="card-body text-secondary">col-lg-12</div>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<br>
			<br>
			<br>
			<div class="panel panel-primary">
			  <div class="panel-heading"><b>Data Merk</b>
			  	<div class="panel-title pull-right"><a class="btn btn-info" href="{{ route('merk.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  	<div class="table-responsive m-b-40">
				  <table class="table table-borderless table-data3">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Merk</th>
					  <th>Nama Mobil</th>
					  <th colspan="2">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($merk as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama_merk }}</td>
				    	<td>@foreach($data->Mobil as $merk)<li>{{ $merk->nama_mobil }}@endforeach</li></td>
<td>
	<a class="btn btn-warning" href="{{ route('merk.edit',$data->id) }}">Edit</a>
</td>
<td>
	<form method="post" action="{{ route('merk.destroy',$data->id) }}">
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