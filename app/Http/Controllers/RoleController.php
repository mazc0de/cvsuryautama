<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\{Role,Permission};

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:role-create|role-list|role-edit|role-delete',['only' => ['index']]);
        $this->middleware('permission:role-create',['only' => ['create','store']]);
        $this->middleware('permission:role-edit',['only' => ['edit','update']]);
        $this->middleware('permission:role-delete',['only' => ['destroy']]);
    }

    public function index()
    {
        $title = "Daftar Role";
        $roles = Role::orderBy('id', 'ASC')->paginate(5);
        return view('roles.index', compact('title', 'roles'));
    }

    public function create()
    {
        $title = "Tambah Role";
        $permissions = Permission::get();
        return view('roles.create', compact('title', 'permissions'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required|unique:roles,name,',
            'permission' => 'required'
        ]);

        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));

        return redirect()->route('roles.index')->with('success', 'Role berhasil ditambahkan!');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('roles.show', compact('user'));
    }

    public function edit($id)
    {
        $title = "Edit Role";
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermission = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
        ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')->all();

        return view('roles.edit', compact('title', 'role', 'permission', 'rolePermission'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required|unique:roles,name,'.$id,
            'permission' => 'required'
        ]);

        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();

        $role->syncPermissions($request->input('permission'));

        return redirect()->route('roles.index')->with('success', 'Role berhasil di edit');
    }

    public function destroy($id)
    {
        $roles = Role::find($id);
        $roles->delete();
        return redirect()->route('roles.index')->with('delete', 'Role berhasil di hapus');

    }
}
