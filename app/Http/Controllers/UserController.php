<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:role-create|role-list|role-edit|role-delete',['only' => ['index']]);
        $this->middleware('permission:role-create',['only' => ['create','store']]);
        $this->middleware('permission:role-edit',['only' => ['edit','update']]);
        $this->middleware('permission:role-delete',['only' => ['destroy']]);
    }

    public function dashboard(){
        $title = "Dashboard";
        return view('admin.dashboard.index', compact('title'));
    }

    public function index()
    {
        $title = "Daftar User";
        $users = User::orderBy('id','ASC')->paginate(10);

        return view('admin.users.index', compact('title','users'));
    }

    public function create()
    {
        $title = 'Tambah Pengguna';
        $user = new User();
        $roles = Role::all();

        return view('admin.users.create', compact('title', 'roles', 'user'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required|same:password_confirmation',
            'roles' => 'required'
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);
        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')->with('success', 'User berhasil ditambah!');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $title = "Edit User : ". $user->name;
        $roles = Role::pluck('name','id')->all();
        $userRole = $user->roles->pluck('id')->all();
        // $userRole = $user->roles->pluck('id')->all();
        return view('admin.users.edit', compact('title','user','roles', 'userRole'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|unique:users,username,'.$id,
            'password' => 'same:password_confirmation',
            'roles' => 'required'
        ]);

        $data = $request->all();
        if(!empty($data['password'])){
            $data['password'] = Hash::make($data['password']);
        }else{
            $data = Arr::except($data, array('password'));
        }

        $user = User::find($id);
        $user->update($data);

        DB::table('model_has_roles')->where('model_id', $id)->delete();
        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')->with('success', 'User berhasil diedit!');

    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')->with('delete','User berhasil dihapus!');
    }
}
