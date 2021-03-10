<?php

namespace App\Http\Controllers;

use App\Models\Helpdesk;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function index()
    {
        $title = "Daftar Tiket";
        $helpdesk = Helpdesk::all();
        return view('admin.helpdesk.index',compact('title','helpdesk'));
    }

    public function submit()
    {
        $title = "Helpdesk";
        return view('admin.helpdesk.submit', compact('title'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'images' => request('images') ? 'required|mimes:jpg,jpeg,png':'',
        ]);

        $userid = auth()->user()->id;
        $ext = $request->file('images')->getClientOriginalExtension();
        $title =$request->input('title') . "-" . $userid . "." . $ext;
        $title2 = str_replace(' ', '-', $title);

        Helpdesk::create([
            'user_id' => $userid,
            'category' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'images' => $request->file('images')->storeAs('images/helpdesk', $title2),
        ]);

        return redirect()->route('help.submit')->with('success', 'Tiket anda telah berhasil terkirim, tim IT akan segera memprosesnya');
    }

    public function getImage($images){
        $path = storage_path('app/images/helpdesk'. $images);
        // dd($path);
    }
}
