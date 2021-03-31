<?php

namespace App\Http\Controllers;

use App\Models\Kerjasama;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KerjasamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Daftar Kerjasama";
        $kerjasama = Kerjasama::all();
        // $kerjasama->photo = json_decode()
        // $images = File::allFiles(public_path('kerjasama'))
        return view('kerjasama.index', compact('title', 'kerjasama'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Registrasi Kerjasama";
        return view('kerjasama.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'nama' => 'required',
            'instansi' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'no_hp' => 'required|numeric',
            'luas_lahan' => 'required|numeric',
            'photos' => 'required',
            'photos.*' => 'mimes:png,jpg,jpeg',
        ]);
        // str_replace(' ', '-', $request->namaperusahaan)
        if($request->hasFile('photos')){
            foreach($request->file('photos') as $file){
                $name = str_replace(' ', '-', $request->nama_perusahaan) .'-' . time() . '-' . $file->getClientOriginalName();
                $file->move(public_path().'/kerjasama/', $name);
                $data[] = $name;
            }
        }

        Kerjasama::create([
            'nama' => $request->nama,
            'instansi' => $request->instansi,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'hp' => $request->no_hp,
            'luas_lahan' => $request->luas_lahan,
            'keterangan' => $request->keterangan,
            'photo' => json_encode($data)
        ]);
        // $item = new Kerjasama();
        // $item->photo = json_encode($data);
        // $item->save();

        return back()->with('success', 'Terima kasih! tim kami akan menghubungi anda lebih lanjut');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
