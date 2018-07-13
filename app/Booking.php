<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['nama','alamat','no_nik','no_hp','tanggal_pengambilan','tanggal_pengembalian','jumlah_hari','mobil_id','supir_id','total_harga'];
    public $timestamps = true;

    public function Mobil() 
	{
	return $this->belongsTo('App\Mobil','mobil_id');
	}

public function Supir() 
	{
	return $this->belongsTo('App\Supir','supir_id');
	}
}
