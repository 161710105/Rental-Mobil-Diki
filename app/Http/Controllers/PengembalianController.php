<?php

namespace App\Http\Controllers;

use App\Pengembalian;
use App\Mobil;
use App\Supir;
use Session;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengembalian = Pengembalian::with('Mobil','Supir')->get();
        return view('pengembalian.index',compact('pengembalian'));
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
        return view('pengembalian.create',compact('mobil','supir'));
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
            'no_nik' => 'required|unique:pengembalians',
            'no_hp' => 'required|unique:pengembalians',
            'tanggal_pengambilan' => 'required|',
            'tanggal_pengembalian' => 'required|',
            'jumlah_hari' => 'required|',
            'denda' => 'required|',
            'mobil_id' => 'required|',
            'customer_id' => 'required|',
            'supir_id' => 'required|',
            'total_harga' => 'required|'
        ]);
        $pengembalian = new Pengembalian;
        $pengembalian->nama = $request->nama;
        $pengembalian->alamat = $request->alamat;
        $pengembalian->no_nik = $request->no_nik;
        $pengembalian->no_hp = $request->no_hp;
        $pengembalian->tanggal_pengambilan = $request->tanggal_pengambilan;
        $pengembalian->tanggal_pengembalian = $request->tanggal_pengembalian;
        $pengembalian->jumlah_hari = $request->jumlah_hari;
        $pengembalian->demda = $request->demda;
        $pengembalian->mobil_id = $request->mobil_id;
        $pengembalian->customer_id = $request->customer_id;
        $pengembalian->supir_id = $request->supir_id;
        $pengembalian->total_harga = $request->total_harga;
        $pengembalian->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$pengembalian->customer_id</b>"
        ]);
        return redirect()->route('pengembalian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengembalian = Pengembalian::findOrFail($id);
        return view('pengembalian.show',compact('pengembalian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengembalian = Pengembalian::findOrFail($id);
        $mobil = Mobil::all();
        $selectedMobil = Pengembalian::findOrFail($id)->mobil_id;
        $supir = Supir::all();
        $selectedSupir = Pengembalian::findOrFail($id)->supir_id;
        return view('pengembalian.edit',compact('pengembalian','mobil','selectedMobil','supir','selectedSupir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request,[
            'nama' => 'required|',
            'alamat' => 'required|',
            'no_nik' => 'required|',
            'no_hp' => 'required|',
            'tanggal_pengambilan' => 'required|',
            'tanggal_pengembalian' => 'required|',
            'jumlah_hari' => 'required|',
            'total_harga' => 'required|',
            'mobil_id' => 'required|',
            'customer_id' => 'required|',
            'supir_id' => 'required|',
            'total_harga' => 'required|'
        ]);
        $pengembalian = Pengembalian::findOrFail($id);
        $pengembalian->nama = $request->nama;
        $pengembalian->alamat = $request->alamat;
        $pengembalian->no_nik = $request->no_nik;
        $pengembalian->no_hp = $request->no_hp;
        $pengembalian->tanggal_pengambilan = $request->tanggal_pengambilan;
        $pengembalian->tanggal_pengembalian = $request->tanggal_pengembalian;
        $pengembalian->jumlah_hari = $request->jumlah_hari;
        $pengembalian->denda = $request->denda;
        $pengembalian->mobil_id = $request->mobil_id;
        $pengembalian->customer_id = $request->customer_id;
        $pengembalian->supir_id = $request->supir_id;
        $pengembalian->total_harga = $request->total_harga;
        $pengembalian->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$pengembalian->customer_id</b>"
        ]);
        return redirect()->route('pengembalian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengembalian = Pengembalian::findOrFail($id);
        $pengembalian->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('pengembalian.index');
    }
}
