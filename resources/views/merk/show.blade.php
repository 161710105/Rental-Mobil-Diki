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
			  <div class="panel-heading">Show Data Merk 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Merk</label>	
			  			<input type="text" name="nama_merk" class="form-control" value="{{ $merk->nama_merk }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Mobil</label>	
			  			<textarea rows="10" class="form-control" readonly>@foreach($merk->Mobil as $data)
			  				-{{ $data->nama_mobil }}
			  				@endforeach
			  			</textarea> 
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection