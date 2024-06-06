<header id="header-container" class="fullwidth dashboard-header not-sticky">
    <div id="header">
        <div class="container">
            <div class="left-side">
                <div id="logo">
                    <a href="{{ route('dashboard') }}"><img src="{{ asset('images/nirmaan-logo.png') }}" alt=""
                            style="object-fit: contain"></a>
                </div>
            </div>
            <div class="right-side">
                <div class="header-widget">
                    <div class="header-notifications user-menu">
                        <div class="header-notifications-trigger">
                            <a href="#">
                                <div class="user-avatar status-online"><img
                                        src="{{ asset('images/user-avatar-small-01.jpg') }}" alt=""></div>
                            </a>
                        </div>
                        <div class="header-notifications-dropdown">

                            <ul class="user-menu-small-nav">
                                <li><a href="{{ route('dashboard') }}"><i class="icon-material-outline-dashboard"></i>
                                        Dashboard</a></li>
                                <li><a href="{{ route('settings') }}"><i class="icon-material-outline-settings"></i>
                                        Settings</a></li>
                                <li><a href="{{ route('logout') }}"><i
                                            class="icon-material-outline-power-settings-new"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
