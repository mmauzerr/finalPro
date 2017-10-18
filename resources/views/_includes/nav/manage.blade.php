<div class="side-menu">
    <aside class="menu m-t-50 p-l-5">
        <p class="menu-label">
            General
        </p>
        <ul class="menu-list">
            <li><a href="{{ route('manage.dashboard') }}" class="{{Nav::isRoute('manage.dashboard')}}">DashBoard</a></li>
        </ul>

        <p class="menu-label">
            Administration
        </p>
        <ul class="menu-list">
            <li><a href="{{route('users.index')}}" class="{{Nav::isResource('users')}}">Manage Users</a></li>
            <li>
                <a class="has-submenu {{Nav::hasSegment(['roles','permissions'], 2)}}">Roles &amp; Permission</a>
                <ul class="submenu">
                    <li><a href="{{route('roles.index')}}" class="{{Nav::isRoute('roles.index')}}">Roles</a></li>
                    <li><a href="{{route('permissions.index')}}" class="{{Nav::isRoute('permissions.index')}}">Permissions</a></li>
                </ul>
            </li>
            {{--<li>--}}
                {{--<a class="has-submenu">Example Accordion</a>--}}
                {{--<ul class="submenu">--}}
                    {{--<li><a href="{{route('roles.index')}}">Roles</a></li>--}}
                    {{--<li><a href="{{route('permissions.index')}}">Permissions</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a class="has-submenu">Another Example</a>--}}
                {{--<ul class="submenu">--}}
                    {{--<li><a href="{{route('roles.index')}}">Roles</a></li>--}}
                    {{--<li><a href="{{route('permissions.index')}}">Permissions</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul>
    </aside>
</div>