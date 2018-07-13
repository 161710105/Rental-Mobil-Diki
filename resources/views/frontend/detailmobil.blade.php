@extends('layouts.user')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<br>
			<br>
			<br>
			<br>
			<div class="panel panel-primary">
			  <center><div class="panel-heading"><h3>Detail Data Mobil</h3></center>
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <br>
			  <div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
                          <center>
                          <div class="col-md-9 pr-1">
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
                      </center>
                        </div>
                        <center>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Mobil :</label>&nbsp&nbsp<label class="control-label"><strong>{{ $mobil->nama_mobil }}</strong></label>	
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Jenis Mobil :</label>&nbsp&nbsp<label class="control-label"><strong>{{ $mobil->jenis_mobil }}</strong></label>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Plat Nomor :</label>&nbsp&nbsp<label class="control-label"><strong>{{ $mobil->no_plat }}</strong></label>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Tahun Keluaran :</label>&nbsp&nbsp<label class="control-label"><strong>{{ $mobil->tahun_keluaran }}</strong></label>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Warna :</label>&nbsp&nbsp<label class="control-label"><strong>{{ $mobil->warna }}</strong></label>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Kapasitas :</label>&nbsp&nbsp<label class="control-label"><strong>{{ $mobil->kapasitas }}</strong></label>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Perseneling :</label>&nbsp&nbsp<label class="control-label"><strong>{{ $mobil->perseneling }}</strong></label>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Harga Sewa :</label>&nbsp&nbsp<label class="control-label"><strong>{{ $mobil->harga }}&nbsp/Hari</strong></label>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Merk :</label>&nbsp&nbsp<label class="control-label"><strong>{{ $mobil->Merk->nama_merk }}</strong></label>
			  		</div>
			  		</center>
			  		
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection