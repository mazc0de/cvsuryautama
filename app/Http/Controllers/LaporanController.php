<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Laporan;
use Hamcrest\Core\HasToString;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LaporanController extends Controller
{

    public function index()
    {
        $title = "Laporan Harian";
        $getRoles = auth()->user()->getRoleNames();
        // dd($getRoles);
        if($getRoles[0] == "Super Admin"){
            $laporan = Laporan::all();
        }
        else{
            $user = auth()->user()->id;
            $laporan = Laporan::where('user_id', $user)->get();
        }

        return view('admin.laporan.index', compact('title','laporan'));
    }

    public function create()
    {
        $title = "Buat Laporan";
        // $user = auth()->user()->id;
        return view('admin.laporan.create', compact('title'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'date' => 'required',
            'upload' => request('upload') ? 'required|mimes:pdf,xls,xlsx':'',
        ]);

        $title = $request->file('upload')->getClientOriginalName();

        $userid = auth()->user()->id;
        // dd($userid);
        Laporan::create([
            'title' => $title,
            'date' => request('date'),
            'uploads' => $request->file('upload')->storeAs('files/laporan', $title),
            'user_id' => $userid,
        ]);


        return redirect()->route('laporan.index')->with('success', 'File berhasil diupload!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
