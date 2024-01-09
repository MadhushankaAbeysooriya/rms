<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home text-red"></i>
        <p>Home</p>
    </a>
</li>


@can('province-list','district-list','hospital-list')
    <li class="nav-item {{ request()->routeIs('district*','province*','hospitals*')?'menu-open':'' }}">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cogs text-blue"></i>
            <p>
                Master Data
                <i class="right fas fa-angle-left text-blue"></i>
            </p>
        </a>

        @can('province-list')    
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('province.index')}}" class="nav-link
                    {{ request()->routeIs('province*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Province</p>
                    </a>
                </li>
            </ul>
        @endcan

        @can('district-list')    
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('district.index')}}" class="nav-link
                    {{ request()->routeIs('district*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>District</p>
                    </a>
                </li>
            </ul>
        @endcan
       
        @can('hospital-list')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('hospitals.index')}}" class="nav-link
                    {{ request()->routeIs('hospitals*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Hospital</p>
                    </a>
                </li>
            </ul>
        @endcan

    </li>
@endcan

@can('role-list','user-list','logindetail-list','searchdetail-list')
    <li class="nav-item {{ request()->routeIs('users*', 'roles*','logindetails.index','searchdetails.index')?'menu-open':'' }}">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt text-purple"></i>
            <p>
                System Management
                <i class="right fas fa-angle-left text-purple"></i>
            </p>
        </a>

        @can('role-list')
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('roles.index')}}" class="nav-link
                    {{ request()->routeIs('roles.edit','roles.index')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-purple"></i>
                        <p>User Roles</p>
                    </a>
                </li>
            </ul>
        @endcan

        @can('user-list')    
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('users.index')}}" class="nav-link
                    {{ request()->routeIs('users.index','users.edit')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-purple"></i>
                        <p>All Users</p>
                    </a>
                </li>
            </ul>
        @endcan

        @can('logindetail-list')    
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('logindetails.index')}}" class="nav-link
                    {{ request()->routeIs('logindetails.index')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-purple"></i>
                        <p>Login Detail</p>
                    </a>
                </li>
            </ul>
        @endcan

        @can('searchdetail-list')    
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('searchdetails.index')}}" class="nav-link
                    {{ request()->routeIs('searchdetails.index')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-purple"></i>
                        <p>Search Detail</p>
                    </a>
                </li>
            </ul>
        @endcan
    </li>
@endcan

<li class="nav-item">
    <a href="{{ route('change.index') }}" class="nav-link {{ Request::is('change.index') ? 'active' : '' }}">
        <i class="nav-icon fas fa-key text-orange"></i>
        <p>Change Password</p>
    </a>
</li>
