<li class="side-menus {{Route::currentRouteNamed('dashboard') ? 'active' : ''}}">
    <a class="nav-link" href="{{route('dashboard')}}">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>

@role('Super Admin')
<li class="nav-item dropdown {{ Route::currentRouteNamed('users.*') ? 'active' : ''}}">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user-cog"></i> <span>User Management</span></a>
    <ul class="dropdown-menu" style="display: none;">
        <li class="{{ Route::currentRouteNamed('users.*') ? 'active' : ''}}">
            <a class="nav-link " href="{{ route('users.index')}}"><i class="fas fa-user"></i>Users</a>
        </li>
        <li class="{{ Route::currentRouteNamed('roles.*') ? 'active' : ''}}">
            <a class="nav-link " href="{{ route('roles.index')}}"><i class="fas fa-user-tag"></i>Roles</a>
        </li>
        <li class="{{ Route::currentRouteNamed('permission.*') ? 'active' : ''}}">
            <a class="nav-link " href="{{ route('permission.index')}}"><i class="fas fa-user-shield"></i>Permission</a>
        </li>
    </ul>
</li>
@endrole

<li class="side-menusm {{ Route::currentRouteNamed('laporan.*') ? 'active' : ''}}">
    <a class="nav-link" href="{{route('laporan.index')}}">
        <i class=" fas fa-folder-open"></i><span>Laporan</span>
    </a>
</li>

<li class="side-menus trigger--fire-modal-1" data-confirm="Konfirmasi|Apakah anda yakin akan logout?"
    data-confirm-yes="window.location.href='{{route('logout')}}'">
    <a class="nav-link text-danger" href="#">
        <i class=" fas fa-power-off"></i><span>Logout</span>
    </a>
</li>