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
			  <div class="panel-heading">Edit Data Mobil 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  	<form action="{{ route('mobil.update',$mobil->id) }}" method="post" enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama_mobil') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Mobil</label>	
			  			<input type="text" name="nama_mobil" class="form-control" value="{{ $mobil->nama_mobil }}" required>
			  			@if ($errors->has('nama_mobil'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_mobil') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('jenis_mobil') ? ' has-error' : '' }}">
			  			<label class="control-label">jenis_mobil</label>	
			  			<input type="text" value="{{ $mobil->jenis_mobil }}" name="jenis_mobil" class="form-control"  required>
			  			@if ($errors->has('jenis_mobil'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_mobil') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('no_plat') ? ' has-error' : '' }}">
			  			<label class="control-label">no_plat</label>	
			  			<input type="text" value="{{ $mobil->no_plat }}" name="no_plat" class="form-control"  required>
			  			@if ($errors->has('no_plat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_plat') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('tahun_keluaran') ? ' has-error' : '' }}">
			  			<label class="control-label">tahun_keluaran</label>	
			  			<input type="text" value="{{ $mobil->tahun_keluaran }}" name="tahun_keluaran" class="form-control"  required>
			  			@if ($errors->has('tahun_keluaran'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tahun_keluaran') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('warna') ? ' has-error' : '' }}">
			  			<label class="control-label">warna</label>	
			  			<input type="text" value="{{ $mobil->warna }}" name="warna" class="form-control"  required>
			  			@if ($errors->has('warna'))
                            <span class="help-block">
                                <strong>{{ $errors->first('warna') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('kapasitas') ? ' has-error' : '' }}">
			  			<label class="control-label">kapasitas</label>	
			  			<input type="text" value="{{ $mobil->kapasitas }}" name="kapasitas" class="form-control"  required>
			  			@if ($errors->has('kapasitas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kapasitas') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('perseneling') ? ' has-error' : '' }}">
			  			<label class="control-label">perseneling</label>	
			  			<input type="text" value="{{ $mobil->perseneling }}" name="perseneling" class="form-control"  required>
			  			@if ($errors->has('perseneling'))
                            <span class="help-block">
                                <strong>{{ $errors->first('perseneling') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('stock') ? ' has-error' : '' }}">
			  			<label class="control-label">stock</label>	
			  			<input type="text" value="{{ $mobil->stock }}" name="stock" class="form-control"  required>
			  			@if ($errors->has('stock'))
                            <span class="help-block">
                                <strong>{{ $errors->first('stock') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">harga</label>	
			  			<input type="text" value="{{ $mobil->harga }}" name="harga" class="form-control"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Foto</label>
                          <div class="col-md-9 pr-1">
                          <input type="file" name="foto" class="form-control" value="{{ $mobil->foto }}" style="background-color: #0000">
                            @if(isset($mobil)&& $mobil->foto)
                            <p>
                            	<br>
                            	<img src="{{asset('assets/image/foto_mobil/'.$mobil->foto)}}"
                            	style="width:350px; height: 300px;">
                            </p>
                            @endif
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
			  				<option value="{{ $data->id }}" {{ $selectedMerk == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_merk }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('merk_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('merk_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
</section>
@endsection