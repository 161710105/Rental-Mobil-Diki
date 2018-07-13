@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<br>
			<br>
			<br>
			<br>
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Mobil 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">nama_mobil</label>	
			  			<input type="text" name="nama_mobil" class="form-control" value="{{ $mobil->nama_mobil }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">jenis_mobil</label>
						<input type="text" name="jenis_mobil" class="form-control" value="{{ $mobil->jenis_mobil }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">no_plat</label>
						<input type="text" name="no_plat" class="form-control" value="{{ $mobil->no_plat }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">tahun_keluaran</label>
						<input type="text" name="tahun_keluaran" class="form-control" value="{{ $mobil->tahun_keluaran }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">warna</label>
						<input type="text" name="warna" class="form-control" value="{{ $mobil->warna }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">kapasitas</label>
						<input type="text" name="kapasitas" class="form-control" value="{{ $mobil->kapasitas }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">perseneling</label>
						<input type="text" name="perseneling" class="form-control" value="{{ $mobil->perseneling }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">stock</label>
						<input type="text" name="stock" class="form-control" value="{{ $mobil->stock }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">harga</label>
						<input type="text" name="harga" class="form-control" value="{{ $mobil->harga }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Merk</label>
						<input type="text" name="title" class="form-control" value="{{ $mobil->Merk->nama_merk }}"  readonly>
			  		</div>
			  		
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection