
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
                            <a href="{{ route('roles.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Role</a>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr class="tabhead">
                                        <th scope="col">#</th>
                                        <th scope="col">Pengirim</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Screenshot</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($helpdesk as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->user->name}}</td>
                                            <td>{{$item->category}}</td>
                                            <td>{{$item->title}}</td>
                                            <td style="width: 40%;">{{$item->description}}</td>
                                            <td>
                                                <a href="{{ asset('storage/'.$item->images) }}" target="_blank">
                                                    <img src="{{ asset('storage/'.$item->images) }}" alt="" srcset="" width="100px">
                                                </a>

                                            </td>
                                            {{-- <td>
                                                <div class="gallery-item" data-image="{{ asset('storage/'.$item->images) }}" data-title="Image 1" href="{{ asset('storage/'.$item->images) }}" title="Image 1" style="background-image: url(&quot;{{ asset('storage/'.$item->images) }}&quot;);"></div>
                                                <img src="{{ asset('storage/'.$item->images) }}" alt="" srcset="" width="50px"></td> --}}
                                            <td>{{$item->status}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="myModal" class="modal">
                <img class="modal-content" id="img01">
              </div>
            <div class="col-1"></div>

        </div>
    </div>
</section>
@endsection