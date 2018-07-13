<?php

namespace App\Http\Controllers;

use App\Mobil;
use App\Merk;
use File;
use Session;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = Mobil::with('Merk')->get();
        return view('mobil.index',compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merk = Merk::all();
        return view('mobil.create',compact('merk'));
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
            'nama_mobil' => 'required|',
            'jenis_mobil' => 'required|',
            'no_plat' => 'required|unique:mobils',
            'tahun_keluaran' => 'required|',
            'warna' => 'required|',
            'kapasitas' => 'required|',
            'perseneling' => 'required|',
            'stock' => 'required|',
            'harga' => 'required|',
            'foto'=>'required|',
            'merk_id' => 'required'
        ]);
        $mobil = new Mobil;
        $mobil->nama_mobil = $request->nama_mobil;
        $mobil->jenis_mobil = $request->jenis_mobil;
        $mobil->no_plat = $request->no_plat;
        $mobil->tahun_keluaran = $request->tahun_keluaran;
        $mobil->warna = $request->warna;
        $mobil->kapasitas = $request->kapasitas;
        $mobil->perseneling = $request->perseneling;
        $mobil->stock = $request->stock;
        $mobil->harga = $request->harga;
        //upload foto
        if ($request->hasFile('foto')){
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/image/foto_mobil/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $mobil->foto = $filename;
        }
        $mobil->merk_id = $request->merk_id;
        $mobil->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$mobil->nama_mobil</b>"
        ]);
        return redirect()->route('mobil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('mobil.show',compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobil = Mobil::findOrFail($id);
        $merk = Merk::all();
        $selectedMerk = Mobil::findOrFail($id)->merk_id;
        return view('mobil.edit',compact('mobil','merk','selectedMerk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_mobil' => 'required|',
            'jenis_mobil' => 'required|',
            'no_plat' => 'required|',
            'tahun_keluaran' => 'required|',
            'warna' => 'required|',
            'kapasitas' => 'required|',
            'perseneling' => 'required|',
            'stock' => 'required|',
            'harga' => 'required|',
            'foto' => 'image|max:2048',
            'merk_id' => 'required'
        ]);
        $mobil = Mobil::findOrFail($id);
        $mobil->nama_mobil = $request->nama_mobil;
        $mobil->jenis_mobil = $request->jenis_mobil;
        $mobil->no_plat = $request->no_plat;
        $mobil->tahun_keluaran = $request->tahun_keluaran;
        $mobil->warna = $request->warna;
        $mobil->kapasitas = $request->kapasitas;
        $mobil->perseneling = $request->perseneling;
        $mobil->stock = $request->stock;
        $mobil->harga = $request->harga;

        //edit upload foto

       if ($request->hasFile('foto')){
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/image/foto_mobil/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);

                //Hapus Foto Lama jika ada
                if($mobil->foto){
                    $old_foto = $mobil->foto;
                    $filepath = public_path(). DIRECTORY_SEPARATOR .'/assets/image/foto_mobil'.DIRECTORY_SEPARATOR.$mobil->foto;
                    try{
                        File::delete($filepath);
                    } catch (FileNotFoundException $e){
                    //File yang sudah dihapus tidak ada
                    }
                }
            $mobil->foto = $filename;
        }
        
        $mobil->merk_id = $request->merk_id;
        $mobil->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$mobil->nama_mobil</b>"
        ]);
        return redirect()->route('mobil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        $mobil =Mobil::findOrFail($id);
        if ($mobil->foto){

            $old_foto = $mobil->foto;
            $filepath = public_path().DIRECTORY_SEPARATOR.'/assets/image/foto'.DIRECTORY_SEPARATOR.$mobil->foto;
            try{
                File::delete($filepath);
            }catch (FileNotFoundException $e){

            }
        }
        $mobil->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('mobil.index');
    }
}
