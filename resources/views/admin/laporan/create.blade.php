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
              <div class="card">
                  <div class="card-body">
                      <div class="card-header">
                          <div class="card-header-action">
                              <a href="{{ route('laporan.index')}}" class="btn btn-primary"><i class="fas fa-chevron-left"></i> Back</a>
                          </div>
                      </div>
                      <div class="card-body">
                        <form action="{{ route('laporan.create')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{-- <input type="text" name="userid" value="{{$user->id}}"> --}}
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" class="form-control" name="date">
                                @error('date')
                                    <div class="mt-2 text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Upload">Upload</label>
                                <input type="file" name="upload" class="form-control" id="">
                                @error('upload')
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