<div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Name" name="name" value="{{old('name')}}">
    @error('name')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label>Username</label>
    <input type="username" class="form-control" placeholder="username" name="username" value="{{old('username')}}">
    @error('username')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label>Password</label>
    <input id="password" type="password"
        class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}"
        placeholder="Set account password" name="password" tabindex="2">
    @error('password')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label>Confirm Password</label>
    <input id="password_confirmation" type="password" placeholder="Confirm account password"
        class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid': '' }}"
        name="password_confirmation" tabindex="2">
    @error('password_confirmation')
        <div class="mt-2 text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Roles</label>
    <select class="form-control" data-height="100%" style="height: 100%;" name="roles">
        <option selected disabled>Choose role</option>
        @foreach ($roles as $role)
            <option value="{{$role->id}}">{{$role->name}}</option>
        @endforeach
    </select>
</div>