@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">{{$title}}</h3>
    </div>
    <div class="section-body">
        <div class="row">

            <div class="col-1"></div>

            <div class="col-lg-10">
                @include('alert')

                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <div class="card-header-action">
                                <a href="{{ route('roles.index')}}" class="btn btn-primary"><i class="fas fa-chevron-left"></i> Back</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('help.submit')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select class="form-control" data-height="100%" style="height: 100%;" name="category">
                                        <option selected disabled>Choose role</option>
                                            <option value="Bug">Bug</option>
                                            <option value="Saran">Saran</option>
                                            <option value="Keluhan">Keluhan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" class="form-control" placeholder="Judul" name="title" value="{{ old('name')}}">
                                    @error('title')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <br>
                                    <textarea id="" cols="172" rows="10" name="description"></textarea>
                                    @error('description')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="images">Screenshot</label>
                                    <input type="file" name="images" class="form-control" id="">
                                    @error('images')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                    <button class="btn btn-secondary" type="reset">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-1"></div>

        </div>
    </div>
</section>
@endsection