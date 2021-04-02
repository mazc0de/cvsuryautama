<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Kerjasama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = "CV. Surya Utama";
        return view('home.index', compact('title'));
    }

    public function kerjasama(Request $request)
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

    public function contact(Request $request){
        // dd($request->all());
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // send emails
        Mail::to('test@test.com')->send(new ContactFormMail($data));
        return back()->with('success', 'Terima kasih! telah mengirim pesan kepada kami!');

    }
}
