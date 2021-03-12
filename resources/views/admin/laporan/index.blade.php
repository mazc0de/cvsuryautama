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
        <h3 class="page__heading">{{$title}}</h3>
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
                            <a href="{{ route('laporan.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Laporan</a>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr class="tabhead">
                                        <th scope="col">#</th>
                                        @role("Super Admin")
                                        <th scope="col">Diupload oleh</th>
                                        @endrole
                                        <th scope="col">File Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($laporan as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        @role("Super Admin")
                                        <td>{{$item->user->name}}</td>
                                        @endrole
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->date}}</td>
                                        <td>
                                            <a href="{{route('laporan.download', $item)}}" class="btn btn-sm btn-success"><i class="fas fa-download"></i> Download</a>
                                            <a href="{{route('laporan.edit', $item)}}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</a>
                                            @role("Super Admin")
                                            <button class="btn btn-sm btn-danger trigger--fire-modal-7"
                                                data-confirm="Konfirmasi|Apakah anda yakin akan menghapus role <b>{{$item->title}}</b>?"
                                                data-confirm-yes="window.location.href='{{route('laporan.delete', $item)}}'">
                                                <i class="fas fa-trash-alt"></i>
                                                Delete
                                            </button>
                                            @endrole
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