@php
    $urls = explode('/', $_SERVER['REQUEST_URI']);
    $activepage = $urls[count($urls) - 1];
@endphp

<div class="dashboard-sidebar">
    <div class="dashboard-sidebar-inner" data-simplebar>
        <div class="dashboard-nav-container">
            <a href="#" class="dashboard-responsive-nav-trigger">
                <span class="hamburger hamburger--collapse">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </span>
                <span class="trigger-title">Dashboard Navigation</span>
            </a>

            <div class="dashboard-nav">
                <div class="dashboard-nav-inner">
                    <ul data-submenu-title="Menu">
                        <li
                            @php if ($activepage == "dashboard") {
                            echo "class=active";
                        } @endphp>
                            <a href="{{ route('dashboard') }}"><i class="icon-material-outline-dashboard"></i>
                                Dashboard</a>
                        </li>
                        <li
                            @php if ($activepage == "teams") {
                            echo "class=active";
                        } @endphp>
                            <a href="{{ route('teams') }}"><i class="icon-material-outline-dashboard"></i>
                                Teams Page</a>
                        </li>
                        <li
                            @php if ($activepage == "startups_main") {
                            echo "class=active";
                        } @endphp>
                            <a href="{{ route('startups.main') }}"><i class="icon-material-outline-dashboard"></i>
                                Startups Main Page</a>
                        </li>
                        <li
                            @php if ($activepage == "media") {
                            echo "class=active";
                        } @endphp>
                            <a href="{{ route('media') }}"><i class="icon-material-outline-dashboard"></i>
                                Media Page</a>
                        </li>
                        <li
                            @php if ($activepage == "about-stats") {
                            echo "class=active";
                        } @endphp>
                            <a href="{{ route('about.stats') }}"><i class="icon-material-outline-dashboard"></i>
                                Stats Page</a>
                        </li>
                        <li
                            @php if ($activepage == "add-project" || $activepage == "manage-projects") {
								echo "class=active-submenu";
							} @endphp>
                            <a href="#"><i class="icon-material-outline-business-center"></i> Projects</a>
                            <ul>
                                <li><a href="{{route('add.project')}}">Add Project</a></li>
                                <li><a href="{{route('manage.projects')}}">Manage Projects </a></li>
                            </ul>
                        </li>
                        <li
                            @php if ($activepage == "add-startup-jobs") {
								echo "class=active-submenu";
							} @endphp>
                            <a href="#"><i class="icon-material-outline-business-center"></i>Jobs</a>
                            <ul>
                                <li><a href="{{route('add.jobs')}}">Add Jobs</a></li>
                                <li><a href="{{route('manage.jobs')}}">Manage Jobs</a></li>
                            </ul>
                        </li>
                        <li
                            @php if ($activepage == "this_is_nirmaan" || $activepage == "they_are_talking" || $activepage == "what_happens") {
								echo "class=active-submenu";
							} @endphp>
                            <a href="#"><i class="icon-material-outline-business-center"></i> Intro page</a>
                            <ul>
                                <li><a href="{{route('home.page1')}}">This Is Nirmaan</a></li>
                                <li><a href="{{route('home.page5')}}">They Are Talking </a></li>
                                <li><a href="{{route('home.page6')}}">What Happens In Nirmaan </a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul data-submenu-title="Account">
                        <li><a href="{{ route('logout') }}"><i class="icon-material-outline-power-settings-new"></i>
                                Logout</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>

{{-- about.stats --}}