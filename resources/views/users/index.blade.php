@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h4>
            ok
        </h4>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>breadcumbs</h4>
                        <div class="card-header-action">
                            <a href="{{ route('users.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add User</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('alert')
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Roles</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>
                                            @if (!empty($user->getRoleNames()))
                                                @foreach($user->getRoleNames() as $roles)
                                                    <label class="badge badge-success"><i class="fas fa-user-lock"></i> {{ $roles }}</label>
                                                @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            {{-- <a href="{{ route('users.show',$user)}}" class="btn btn-primary" >show</a> --}}
                                            {{-- @role('super-admin') --}}
                                                <a href="{{ route('users.edit',$user)}}" class="btn btn-primary btn-sm" >edit</a>
                                                <button class="btn btn-sm btn-danger trigger--fire-modal-7"
                                                    data-confirm="Konfirmasi|Apakah anda yakin akan menghapus user <b>{{$user->username}}</b>?"
                                                    data-confirm-yes="window.location.href='{{route('users.delete',$user)}}'">
                                                    Delete
                                                </button>
                                            {{-- @endrole --}}
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