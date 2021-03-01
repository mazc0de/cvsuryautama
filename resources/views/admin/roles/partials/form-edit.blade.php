<div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') ?? $role->name}}">
    @error('name')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <strong>Permission</strong> <br>
    @foreach ($permission as $permissions)
        <input type="checkbox" id="permission" name="permission[]" value="{{$permissions->id}}"
        {{ in_array($permissions->id, $rolePermission) ? 'checked' : ''}}>
        <label for="permission">{{$permissions->name}}</label><br>
    @endforeach
</div>