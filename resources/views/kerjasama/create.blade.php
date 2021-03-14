@extends('layouts.app')

@section('css_kerjasama')

@endsection

@section('js_kerjasama')
<script type="text/javascript">


    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>
@endsection

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
                                {{-- <a href="{{ route('roles.index')}}" class="btn btn-primary"><i class="fas fa-chevron-  left"></i> Back</a> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('kerjasama.create')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{ old('nama')}}">
                                    @error('nama')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Nama Perusahaan</label>
                                    <input type="text" class="form-control" placeholder="Nama Perusahaan" name="nama_perusahaan" value="{{ old('nama_perusahaan')}}">
                                    @error('nama_perusahaan')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Nomor Handphone</label>
                                    <input type="text" class="form-control" placeholder="Nomor Handphone" name="no_hp" value="{{ old('no_hp')}}">
                                    @error('no_hp')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Luas Lahan (m<sup>2</sup>)</label>
                                    <input type="text" class="form-control" placeholder="Luas Lahan" name="luas_lahan" value="{{ old('luas_lahan')}}">
                                    @error('luas_lahan')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <br>
                                    <div class="form-group">
                                        <textarea name="alamat"></textarea>
                                    </div>
                                    @error('alamat')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Keterangan (opsional)</label>
                                    <input type="text" class="form-control" placeholder="Keterangan" name="keterangan" value="{{ old('keterangan')}}">
                                    @error('keterangan')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <label for="photo">Photo (min 5)</label>
                                <div class="input-group control-group increment" >
                                    <input type="file" name="photos[]" class="form-control">
                                    <div class="input-group-btn"> 
                                    <button class="btn btn-success btn-lg ml-1" type="button"><i class="fas fa-plus"></i></i> Add</button>
                                    </div>
                                </div>
                                <div class="clone hide">
                                    <div class="control-group input-group" style="margin-top:10px">
                                    <input type="file" name="photos[]" class="form-control">
                                    <div class="input-group-btn"> 
                                        <button class="btn btn-danger btn-lg ml-1" type="button"><i class="fas fa-trash"></i></i> Remove</button>
                                    </div>
                                    </div>
                                </div>
                                @error('photos')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                @enderror

                                {{-- <div class="form-group">
                                    <label for="images">Screenshot</label>
                                    <input type="file" name="images[]" class="form-control" id="" multiple="true">
                                    @error('images')
                                        <div class="mt-2 text-danger">{{ $message }}</div>
                                    @enderror
                                </div> --}}

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