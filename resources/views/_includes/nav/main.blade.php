<nav class="navbar has-shadow" >
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item is-paddingless" href="{{ route('home') }}">
                <img style="margin-left: -10px" src="{{asset('images/logo.png')}}" alt="FinalPro logo">
            </a>

            @if( Request::segment(1) == 'manage' )
                <button class="navbar-item is-hidden-desktop" id="admin-slideout-button">
                    <span class="icon">
                        <i class="fa fa-arrow-circle-o-right"></i>
                    </span>
                </button>
            @endif

            <button class="button navbar-burger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item is-tab is-active m-l-10">Learn</a>
                <a class="navbar-item is-tab">Discuss</a>
                <a class="navbar-item is-tab">Share</a>
            </div><!-- end of .navbar-->

            <div class="navbar-end navbar-menu" style="overflow: visible">
            @guest
                <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
                <a href="{{route('register')}}" class="navbar-item is-tab">Join the Community</a>
            @else
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        Hey &nbsp;&nbsp;<i class="user-name">{{ Auth::user()->name }}</i>
                    </a>
                    <div class="navbar-dropdown is-right">
                        <a href="#" class="navbar-item">
                            <span class="icon">
                                <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                            </span>Profile
                        </a>
                        <a href="#" class="navbar-item">
                              <span class="icon">
                                <i class="fa fa-fw fa-bell m-r-5"></i>
                              </span>Notifications
                        </a>
                        <a href="{{ route('manage.dashboard') }}" class="navbar-item">
                          <span class="icon">
                            <i class="fa fa-fw fa-cog m-r-5"></i>
                          </span>Manage
                        </a>

                        <hr class="navbar-devider" style="margin: 5px 0">

                        <a href="{{ route('logout') }}"
                           class="navbar-item"
                           onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <span class="icon">
                                <i class="fa fa-fw fa-sign-out m-r-5"></i>
                            </span>Logout
                        </a>

                        @include('_includes.forms.logout')

                    </div><!-- end of .navbar-dropdown is-right -->
                </div><!-- end of .navbar-item has-dropdown is-hoverable  -->
            @endguest
            </div>
        </div>
    </div>
</nav>