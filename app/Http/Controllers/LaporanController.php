<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Laporan;
use Illuminate\Http\Request;
use Hamcrest\Core\HasToString;
use Illuminate\Support\Facades\Storage;
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
        return view('admin.laporan.create', compact('title'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'date' => 'required',
            'upload' => request('upload') ? 'required|mimes:pdf,xls,xlsx':'',
        ]);

        $title = $request->file('upload')->getClientOriginalName();
        dd($title);

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

    public function edit($id)
    {
        $title = "Edit Laporan";
        $laporan = Laporan::find($id);
        return view('admin.laporan.edit', compact('title','laporan'));
    }

    public function update(Request $request, $id)
    {
        $laporan = Laporan::find($id);
        $title = $laporan->title;

        $this->validate($request,[
            'date' => 'required',
            'upload' => 'nullable|mimes:pdf,xls,xlsx',
        ]);

        if($request->upload){
            $title = $request->file('upload')->getClientOriginalName();
            Storage::delete($laporan->uploads);
            $upload = $request->file('upload')->storeAs('files/laporan', $title);
        }elseif($laporan->uploads){
            $upload = $laporan->uploads;
        }else{
            $laporan = null;
        }

        $laporan->update([
            'title' => $title,
            'date' => request('date'),
            'uploads' => $upload,
        ]);

        return redirect()->route('laporan.index')->with('success', 'File berhasil diupload!');

    }

    public function download($title)
    {
        $laporan = Laporan::find($title);
        try{
            // return Storage::disk('local')->download('files/laporan/'.$request->file);
            return Storage::download('files/laporan/'.$title);
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function destroy($id)
    {
        $laporan = Laporan::find($id);
        Storage::delete($laporan->uploads);
        $laporan->delete();
        // dd($laporan);
        return redirect()->route('laporan.index')->with('delete', 'File berhasil dihapus!');

    }
}
