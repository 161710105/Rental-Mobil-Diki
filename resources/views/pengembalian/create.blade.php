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
			  <div class="panel-heading">Tambah Data Pengembalian 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  	<form action="{{ route('pengembalian.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('tanggal_pengambilan') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Pengambilan</label>	
			  			<input type="date" name="tanggal_pengambilan" class="form-control"  required>
			  			@if ($errors->has('tanggal_pengambilan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_pengambilan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('tanggal_pengembalian') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Mobil</label>	
			  			<input type="date" name="tanggal_pengembalian" class="form-control"  required>
			  			@if ($errors->has('tanggal_pengembalian'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_pengembalian') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('jumlah_hari') ? ' has-error' : '' }}">
			  			<label class="control-label">Jumlah Hari</label>	
			  			<input type="number" name="jumlah_hari" class="form-control"  required>
			  			@if ($errors->has('jumlah_hari'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah_hari') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('denda') ? ' has-error' : '' }}">
			  			<label class="control-label">Denda</label>	
			  			<input type="text" name="denda" class="form-control"  required>
			  			@if ($errors->has('denda'))
                            <span class="help-block">
                                <strong>{{ $errors->first('denda') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('mobil_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Mobil</label>	
			  			<select name="mobil_id" class="form-control">
			  				@foreach($mobil as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_mobil }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('mobil_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mobil_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('customer_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Customer</label>	
			  			<select name="customer_id" class="form-control">
			  				@foreach($customer as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('customer_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('customer_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('supir_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Supir</label>	
			  			<select name="supir_id" class="form-control">
			  				@foreach($supir as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('supir_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('supir_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('total_harga') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Pengambilan</label>	
			  			<input type="text" name="total_harga" class="form-control"  required>
			  			@if ($errors->has('total_harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('total_harga') }}</strong>
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