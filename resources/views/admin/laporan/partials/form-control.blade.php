<div class="form-group">
    <label for="exampleFormControlFile1">Upload Laporan</label>
    <input type="file" class="form-control-file" name="laporanexcel">
    @error('date')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
{{-- <div class="form-group">
    <div class="input-group" id="datetimepicker">
        <input class=" form-control" type="text">
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
</div> --}}
<input class="datepick form-control" type="text">