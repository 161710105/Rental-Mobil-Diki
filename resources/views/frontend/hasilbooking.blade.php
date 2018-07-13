@extends('layouts.user')
@section('content')
        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            
            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12"><center>
                            <h1 class="title-4">Hasil
                                <span>Booking</span>
                            </h1></center>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->
        <section class="card">
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-primary">
            <br>
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
<a class="btn btn-warning" href="{{ route('dashboard.edit',$data->id) }}">Edit <i class="fa fa-edit"></i></a>
</td>
<td>
<a class="btn btn-primary" href="beresbooking">Selesai <i class="fa fa-check"></i></a>
  <!-- <form method="post" action="{{ route('dashboard.destroy',$data->id) }}">
    <input name="_token" type="hidden" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="DELETE">

    <button class="btn btn-primary" style="font-size:14px">Selesai <i class="fa fa-check"></i></button>
  </form> -->
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