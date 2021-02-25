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
                            <a href="{{ route('permission.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Permission</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                                {{session('success')}}
                            </div>
                            </div>
                        @endif
                        @if (session('delete'))
                        <div class="alert alert-danger alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                                {{session('delete')}}
                            </div>
                            </div>
                        @endif
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
                                        <a href="{{ route('permission.delete', $permission)}}" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-sm btn-danger">Delete</a>
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