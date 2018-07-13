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
			  <div class="panel-heading">Edit Data Merk 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  	<form action="{{ route('merk.update',$merk->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama_merk') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Merk</label>	
			  			<input type="text" name="nama_merk" class="form-control" value="{{ $merk->nama_merk }}"  required>
			  			@if ($errors->has('nama_merk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_merk') }}</strong>
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