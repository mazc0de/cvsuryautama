<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index(){
        $title = "Daftar Permission";
        $permissions = Permission::all();
        return view('permission.index', compact('title','permissions'));
    }

    public function create(){
        $title = "Tambah Permission";
        return view('permission.create', compact('title'));
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
        return view('permission.edit', compact('title','permission'));
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
