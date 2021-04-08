<?php

namespace App\Http\Controllers;

use Database\Seeders\PermissionTableSeeder;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;



class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:permission-create|permission-list|permission-edit|permission-delete',['only' => ['index']]);
        $this->middleware('permission:permission-create',['only' => ['create','store']]);
        $this->middleware('permission:permission-edit',['only' => ['edit','update']]);
        $this->middleware('permission:permission-delete',['only' => ['destroy']]);
    }
    public function index(){
        $title = "Daftar Permission";
        $permissions = Permission::all();
        return view('admin.permission.index', compact('title','permissions'));
    }

    public function create(){
        $title = "Tambah Permission";
        $permission = new Permission();
        return view('admin.permission.create', compact('title','permission'));
    }

    public function store(Request $request){
        // dd(request()->all());
        $this->validate($request, [
            'name' => 'required|unique:permissions,name'
        ]);

        Permission::create(['name' => $request->input('name')]);

        return redirect()->route('permission.index')->with('success', 'Permission berhasil ditambah!');
    }

    public function edit($id){
        $title = "Edit Permission";
        $permission = Permission::find($id);
        return view('admin.permission.edit', compact('title','permission'));
    }

    public function update(Request $request, $id){
        // dd($request->all());

        $this->validate($request, [
            'name' => 'required|unique:permissions,name,'.$id
        ]);

        $data = $request->all();
        $permission = Permission::find($id);
        $permission->update($data);
        return redirect()->route('permission.index')->with('success', 'Permission berhasil diedit!');
    }

    public function destroy($id){
        Permission::find($id)->delete();
        return redirect()->route('permission.index')->with('delete', 'Permission berhasil dihapus!');
    }

}
