@extends('layouts.admin')
@section('content')
<section class="card">
<div class="card-body text-secondary">col-lg-12</div>
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<br>
			<br>
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Post 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  	<form action="{{ route('mobil.store') }}" method="post" enctype="multipart/form-data" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama_mobil') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Mobil</label>	
			  			<input type="text" name="nama_mobil" class="form-control"  required>
			  			@if ($errors->has('nama_mobil'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_mobil') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('jenis_mobil') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Mobil</label>	
			  			<input type="text" name="jenis_mobil" class="form-control"  required>
			  			@if ($errors->has('jenis_mobil'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_mobil') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('no_plat') ? ' has-error' : '' }}">
			  			<label class="control-label">Plat Nomor</label>	
			  			<input type="text" name="no_plat" class="form-control"  required>
			  			@if ($errors->has('no_plat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_plat') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('tahun_keluaran') ? ' has-error' : '' }}">
			  			<label class="control-label">Tahun Keluaran</label>	
			  			<input type="text" name="tahun_keluaran" class="form-control"  required>
			  			@if ($errors->has('tahun_keluaran'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tahun_keluaran') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('warna') ? ' has-error' : '' }}">
			  			<label class="control-label">Warna</label>	
			  			<input type="text" name="warna" class="form-control"  required>
			  			@if ($errors->has('warna'))
                            <span class="help-block">
                                <strong>{{ $errors->first('warna') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('kapasitas') ? ' has-error' : '' }}">
			  			<label class="control-label">Kapasitas</label>	
			  			<input type="text" name="kapasitas" class="form-control"  required>
			  			@if ($errors->has('kapasitas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kapasitas') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('perseneling') ? ' has-error' : '' }}">
			  			<label class="control-label">Perseneling</label>	
			  			<input type="text" name="perseneling" class="form-control"  required>
			  			@if ($errors->has('perseneling'))
                            <span class="help-block">
                                <strong>{{ $errors->first('perseneling') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('stock') ? ' has-error' : '' }}">
			  			<label class="control-label">Stock</label>	
			  			<input type="text" name="stock" class="form-control"  required>
			  			@if ($errors->has('stock'))
                            <span class="help-block">
                                <strong>{{ $errors->first('stock') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga</label>	
			  			<input type="text" name="harga" class="form-control"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Foto</label>
                          <div class="col-md-9 pr-1">
                          <input type="file" name="foto" class="form-control" required="" style="background-color: #0000">
                            @if ($errors->has('foto'))
                              <span class="help-block">
                                <strong>{{ $errors->first('foto') }}</strong>
                              </span>
                          @endif
                          </div>
                        </div>
			  		<div class="form-group {{ $errors->has('merk_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Merk</label>	
			  			<select name="merk_id" class="form-control">
			  				@foreach($merk as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_merk }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('merk_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('merk_id') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
</section>
@endsection