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
        <h3 class="page__heading">Permission</h3>
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
                            <a href="{{ route('permission.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Permission</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Created At</th>
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
                                                {{ $permission->created_at }}
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

            <div class="col-1"></div>

        </div>
    </div>
</section>


@endsection