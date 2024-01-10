<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home text-red"></i>
        <p>Home</p>
    </a>
</li>



    <li class="nav-item {{ request()->routeIs('location_types*') || request()->routeIs('ration_categories*') || request()->routeIs('brands*') || request()->routeIs('quarters*') || request()->routeIs('measurements*') || request()->routeIs('receipt_types*')?'menu-open':'' }}">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cogs text-blue"></i>
            <p>
                Master Data
                <i class="right fas fa-angle-left text-blue"></i>
            </p>
        </a>
   
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('location_types.index')}}" class="nav-link
                    {{ request()->routeIs('location_types*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Location Type</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('ration_categories.index')}}" class="nav-link
                    {{ request()->routeIs('ration_categories*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Ration Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('brands.index')}}" class="nav-link
                    {{ request()->routeIs('brands*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Brand</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('quarters.index')}}" class="nav-link
                    {{ request()->routeIs('quarters*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Quarter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('measurements.index')}}" class="nav-link
                    {{ request()->routeIs('measurements*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Measurement</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('receipt_types.index')}}" class="nav-link
                    {{ request()->routeIs('receipt_types*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Receipt Type</p>
                    </a>
                </li>
            </ul>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('ration_dates.index')}}" class="nav-link
                    {{ request()->routeIs('ration_dates*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Ration Dates</p>
                    </a>
                </li>
            </ul>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('ration_types.index')}}" class="nav-link
                    {{ request()->routeIs('ration_types*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Ration Types</p>
                    </a>
                </li>
            </ul>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('ration_times.index')}}" class="nav-link
                    {{ request()->routeIs('ration_times*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Ration Times</p>
                    </a>
                </li>
            </ul>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('menus.index')}}" class="nav-link
                    {{ request()->routeIs('menus*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Menu</p>
                    </a>
                </li>
            </ul>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('menu_items.index')}}" class="nav-link
                    {{ request()->routeIs('menu_items*')?'active':'' }}">
                        <i class="far fa-circle nav-icon text-blue"></i>
                        <p>Menu for Items</p>
                    </a>
                </li>
            </ul>
        
    </li>


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
