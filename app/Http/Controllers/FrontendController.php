<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil;
use App\Supir;
use App\Booking;
use App\Pengembalian;
use App\ Merk;
use Carbon\Carbon;
use Session;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.index');
    }
    public function listmobil()
    {
        $mobil = Mobil::all();
        $supir = Supir::all();
        
        return view('frontend.listmobil',compact('mobil','supir'));
    }
    public function hasilbooking()
    {
        $mobil = Mobil::all();
        $supir = Supir::all();
        $booking = Booking::all();
        return view('frontend.hasilbooking',compact('booking','mobil','supir'));
    }
    public function beresbooking()
    {
        return view('frontend.beresbooking');
    }
    // public function edithasilbooking()
    // {
    //     $mobil = Mobil::all();
    //     $supir = Supir::all();
    //     $booking = Booking::all();
    //     return view('frontend.edithasilbooking',compact('booking','mobil','supir'));
    // }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|',
            'alamat' => 'required|',
            'no_nik' => 'required|unique:bookings',
            'no_hp' => 'required|unique:bookings',
            'tanggal_pengambilan' => 'required|',
            'tanggal_pengembalian' => 'required|',
            'mobil_id' => 'required|',
            'supir_id' => 'required|',
        ]);
        $booking = new Booking;
        $booking->nama = $request->nama;
        $booking->alamat = $request->alamat;
        $booking->no_nik = $request->no_nik;
        $booking->no_hp = $request->no_hp;
        $booking->tanggal_pengambilan = $request->tanggal_pengambilan;
        $booking->tanggal_pengembalian = $request->tanggal_pengembalian;
        $booking->mobil_id = $request->mobil_id;
        $booking->supir_id = $request->supir_id;
        $awal = new Carbon($request->tanggal_pengambilan);
        $akhir = new Carbon($request->tanggal_pengembalian);
        $hasil = "{$awal->diffInDays($akhir)}";
        $booking->jumlah_hari = $hasil;
        $mobil = Mobil::where('id',$booking->mobil_id)->first();
        $harga = $mobil->harga;
        $supir = Supir::where('id',$booking->supir_id)->first();
        $harga = $supir->harga;
        $booking->total_harga=($mobil->harga + $supir->harga) * $hasil;


        $booking->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan data Booking"
        ]);
        return redirect()->route('hasilbooking');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('frontend.detailmobil',compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        $mobil = Mobil::all();
        $selectedMobil = Booking::findOrFail($id)->mobil_id;
        $supir = Supir::all();
        $selectedSupir = Booking::findOrFail($id)->supir_id;
        return view('frontend.edithasilbooking',compact('booking','mobil','selectedMobil','supir','selectedSupir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required|',
            'alamat' => 'required|',
            'no_nik' => 'required|',
            'no_hp' => 'required|',
            'tanggal_pengambilan' => 'required|',
            'tanggal_pengembalian' => 'required|',
            'mobil_id' => 'required|',
            'supir_id' => 'required|'
        ]);
        $booking = Booking::findOrFail($id);
        $mobil = Mobil::findOrFail($id);
        $supir = Supir::findOrFail($id);
        $booking->nama = $request->nama;
        $booking->alamat = $request->alamat;
        $booking->no_nik = $request->no_nik;
        $booking->no_hp = $request->no_hp;
        $booking->tanggal_pengambilan = $request->tanggal_pengambilan;
        $booking->tanggal_pengembalian = $request->tanggal_pengembalian;
        $awal = new Carbon($request->tanggal_pengambilan);
        $akhir = new Carbon($request->tanggal_pengembalian);
        $hasil= "{$awal->diffInDays($akhir)}";
        $booking->jumlah_hari=$hasil;
        $booking->mobil_id = $request->mobil_id;
        $booking->supir_id = $request->supir_id;
        $booking->total_harga=($mobil->harga + $supir->harga) * $hasil;
        $booking->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$booking->mobil_id</b>"
        ]);
        return redirect()->route('hasilbooking');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return view('frontend.beresbooking');
    }
}
