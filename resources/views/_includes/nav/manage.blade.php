<div class="side-menu">
    <aside class="menu m-t-50 p-l-10">
        <p class="menu-label">
            General
        </p>
        <ul class="menu-list">
            <li><a href="{{ route('manage.dashboard') }}">DashBoard</a></li>
        </ul>

        <p class="menu-label">
            Administration
        </p>
        <ul class="menu-list">
            <li><a href="{{route('users.index')}}">Manage Users</a></li>
            <li><a href="{{ route('permissions.index') }}">Roles &amp; Permission</a></li>
        </ul>
    </aside>
</div>