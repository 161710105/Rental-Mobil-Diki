@extends('layouts.user')
@section('content')
        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            
            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12"><center>
                            <h1 class="title-4">Daftar Mobil
                                <span>Rental</span>
                            </h1></center>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->
            
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">                             
                        <div class="row">
                        @foreach($mobil as $data)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
<a href="{{ route('dashboard.show',$data->id) }}">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img  src="{{asset('assets/image/foto_mobil/'.$data->foto.'')}}" style="width:210px; height: 170px;" alt="Card image cap"></a>
<h4 class="text-sm-center mt-2 mb-1">{{ $data->nama_mobil }}</h4>
<div class="location text-sm-center">
<i class="fa fa-dollar"></i>&nbspHarga : Rp.{{ $data->harga }}/Hari</div>
</div>
<br>
<div class="card-text text-sm-center">
    <!-- Button Memicu Modal -->
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="font-size:18px;width: 100px;color: white">Sewa <i class="fa fa-handshake-o"></i></button>
    <!-- End Button -->
                                        </div>
                                    </div>
                                </div>
                            </div>           
                @endforeach
                        </div>
                    </div>
                </div>
            </div>

<!-- Form Data Sewa -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Sewa Mobil</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form action="{{ route('dashboard.store') }}" method="post">
        {{csrf_field()}}
                    <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                        <label class="control-label">Nama</label>   
                        <input type="text" name="nama" class="form-control"  required>
                        @if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                        <label class="control-label">Alamat</label> 
                        <input type="text" name="alamat" class="form-control"  required>
                        @if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('no_nik') ? ' has-error' : '' }}">
                        <label class="control-label">No NIK</label> 
                        <input type="text" name="no_nik" class="form-control"  required>
                        @if ($errors->has('no_nik'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_nik') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
                        <label class="control-label">NO HP</label>  
                        <input type="text" name="no_hp" class="form-control"  required>
                        @if ($errors->has('no_hp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_hp') }}</strong>
                            </span>
                        @endif
                    </div>                    
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
                        <label class="control-label">Tanggal Pengembalian</label>   
                        <input type="date" name="tanggal_pengembalian" class="form-control"  required>
                        @if ($errors->has('tanggal_pengembalian'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tanggal_pengembalian') }}</strong>
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
                </div>

        <div class="form-group">
        &nbsp&nbsp&nbsp<button type="submit" class="btn btn-primary">Kirim</button>

        <button type="submit" class="btn btn-warning">Reset</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
</form>
        </div>
    </div>
</div>
<!-- End -->
@endsection