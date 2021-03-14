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
                        <h4>Daftar Kerjasama</h4>
                        <div class="card-header-action">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr class="tabhead">
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Nama Perusahaan</th>
                                        <th scope="col">No HP</th>
                                        <th scope="col">Luas Lahan</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Photo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kerjasama as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->nama_kerjasama}}</td>
                                        <td>{{$item->hp}}</td>
                                        <td>{{$item->luas_lahan}}</td>
                                        <td>{{$item->alamat}}</td>
                                        <td>
                                            @php $images = json_decode($item->photo, true); @endphp
                                            @if (is_array($images) && !empty($images))
                                                @foreach($images as $image)
                                                <img src="{{ url('kerjasama/' .$image )}}" alt="" srcset="" width="50px">
                                                @endforeach
                                            @endif
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