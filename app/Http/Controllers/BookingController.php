<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Mobil;
use App\Supir;
use Carbon\Carbon;
use Session;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supir=Supir::all();
        $mobil=Mobil::all();
        $booking = Booking::with('Mobil','Supir')->get();
        return view('booking.index',compact('booking','supir','mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobil = Mobil::all();
        $supir = Supir::all();
        return view('booking.create',compact('mobil','supir'));
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
        return redirect()->route('booking.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::findOrFail($id);
        return view('booking.show',compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        $mobil = Mobil::all();
        $selectedMobil = Booking::findOrFail($id)->mobil_id;
        $supir = Supir::all();
        $selectedSupir = Booking::findOrFail($id)->supir_id;
        return view('booking.edit',compact('booking','mobil','selectedMobil','supir','selectedSupir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
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
        return redirect()->route('booking.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
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
        return redirect()->route('booking.index');
    }
}
