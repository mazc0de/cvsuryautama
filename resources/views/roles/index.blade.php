@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">{{$title}}</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>breadcumbs</h4>
                        {{-- @can('role-create') --}}
                            <div class="card-header-action">
                                <a href="{{ route('roles.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Role</a>
                            </div>
                        {{-- @endcan --}}
                    </div>
                    <div class="card-body">
                        @include('alert')
                        <table class="table table-striped">
                            <thead>
                                <tr class="tabhead">
                                    <th scope="col">#</th>
                                    <th scope="col">Role Name</th>
                                    <th scope="col">Permission</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            @foreach ($role->permissions as $permission)
                                                <span class="badge badge-info"><i class="fas fa-shield-alt"></i> {{ $permission->name }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            {{-- <a href="{{ route('roles.show',$role)}}" class="btn btn-primary" >Show Permission</a> --}}
                                            @can('role-edit')
                                                <a href="{{ route('roles.edit',$role)}}" class="btn btn-sm btn-primary" >Edit</a>
                                            @endcan
                                            @can('role-delete')
                                            <button class="btn btn-sm btn-danger trigger--fire-modal-7"
                                                data-confirm="Konfirmasi|Apakah anda yakin akan menghapus role <b>{{$role->name}}</b>?"
                                                data-confirm-yes="window.location.href='{{route('roles.delete',$role)}}'">
                                                Delete
                                            </button>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection