<div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') ?? $permission->name}}">
    @error('name')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>