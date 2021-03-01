@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header pt-3 pb-1">
        <h3 class="page__heading">Permission</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>breadcumbs</h4>
                        <div class="card-header-action">
                            <a href="{{ route('permission.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Permission</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('alert')
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $permission)  
                                <tr>
                                    <td>
                                        {{$loop->iteration}}
                                    </td>
                                    <td>
                                        {{ $permission->name }}
                                    </td>
                                    <td>
                                        <a href="{{ route('permission.edit', $permission)}}" class="btn btn-sm btn-primary">Edit</a>
                                        <button class="btn btn-sm btn-danger trigger--fire-modal-7"
                                                data-confirm="Konfirmasi|Apakah anda yakin akan menghapus permission <b>{{$permission->name}}</b>?"
                                                data-confirm-yes="window.location.href='{{ route('permission.delete', $permission)}}'">
                                                Delete
                                            </button>
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