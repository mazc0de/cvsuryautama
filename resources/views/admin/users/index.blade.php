@extends('layouts.app')

@push('datatables-css')
    <link href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endpush

@push('datatables-js')
    <script src="{{ asset('assets/js/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets/js/modules-datatables.js') }}"></script>
@endpush

@section('content')
<section class="section">
    <div class="section-header pt-3 pb-1">
        <h3 class="page__heading">Users</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                @include('alert')
                <div class="card">
                    <div class="card-header">
                        <h4></h4>
                        <div class="card-header-action">
                            <a href="{{ route('users.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add User</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Roles</th>
                                        <th>Action</th>
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
            <div class="col-1"></div>

        </div>
    </div>
</section>

@endsection