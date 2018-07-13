<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $fillable = ['nama_mobil','jenis_mobil','no_plat','tahun_keluaran','warna','kapasitas','perseneling','stock','harga','foto','merk_id'];

public function Merk ()
    {
    return $this->belongsTo('App\Merk','merk_id');
    }
public function Supir()
    {
        return $this->belongsToMany('App\Supir','bookings','mobil_id','supir_id');
    }
public function Customer()
    {
        return $this->belongsToMany('App\Customer','pemesanans','mobil_id','customer_id');
    }
public function Pengembalian()
    {
        return $this->HasMany('App\Pengembalian','mobil_id');
    }
public function Booking()
    {
        return $this->HasMany('App\Booking','mobil_id');
    }
}