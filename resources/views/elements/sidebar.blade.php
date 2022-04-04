<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <br>
        <ul class="pcoded-item pcoded-left-item">
            <li class=""> <a href="{{url('/')}}"> <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span> <span class="pcoded-mtext">Dashboard</span> <span class="pcoded-mcaret"></span></a></li>
        </ul>
        <div class="pcoded-navigation-label">Administration</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu {{in_array(request()->route()->getName(), ['users.create','users.index','roles.create','roles.index','permissions.create']) ? "active pcoded-trigger" : null}}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-view-grid"></i><b>W</b></span>
                    <span class="pcoded-mtext">Authorization </span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="{{request()->routeIs('users.create') ? 'active' : null}}"> <a href="{{route('users.create')}}"> <span class="pcoded-mtext">User Create</span></a> </li>
                    <li class="{{request()->routeIs('users.index') ? 'active' : null}}"> <a href="{{route('users.index')}}"> <span class="pcoded-mtext">User List</span></a> </li>
                </ul>
                <ul class="pcoded-submenu">
                    <li class="{{request()->routeIs('permissions.create') ? 'active' : null}}"> <a href="{{route('permissions.create')}}"> <span class="pcoded-mtext">Permission</span></a> </li>
                    <li class="{{request()->routeIs('roles.create') ? 'active' : null}}"> <a href="{{route('roles.create')}}"> <span class="pcoded-mtext">New Role</span></a> </li>
                    <li class="{{request()->routeIs('roles.index') ? 'active' : null}}"> <a href="{{route('roles.index')}}"> <span class="pcoded-mtext"> Role List</span></a> </li>
                </ul>
            </li>
        </ul>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu {{in_array(request()->route()->getName(), ['supplier.create','supplier.index']) ? "active pcoded-trigger" : null}}">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-view-grid"></i><b>W</b></span>
                    <span class="pcoded-mtext">Supplier </span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="{{request()->routeIs('supplier.create') ? 'active' : null}}"> <a href="{{route('supplier.create')}}"> <span class="pcoded-mtext">Supplier Create</span></a> </li>
                    <li class="{{request()->routeIs('supplier.index') ? 'active' : null}}"> <a href="{{route('supplier.index')}}"> <span class="pcoded-mtext">Supplier List</span></a> </li>
                </ul>
            </li>
        </ul>

    </div>
</nav>
