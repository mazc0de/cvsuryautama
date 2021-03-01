<div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Name" name="name">
    @error('name')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <strong>Permission</strong> <br>
    @foreach ($permissions as $permission)
        <input type="checkbox" id="permission" name="permission[]" value="{{$permission->id}}">
        <label for="permission">{{$permission->name}}</label><br>
    @endforeach
</div>