<!doctype html>
<html lang="en">

<head>
    <title>Nirmaan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors/green.css') }}">
</head>

<body class="gray">
    <div id="wrapper">
        @include('cms.common.navigation')
        <div class="dashboard-container">
            @include('cms.common.sidebar')
            <div class="dashboard-content-container" data-simplebar>
                <div class="dashboard-content-inner">
                    <div class="dashboard-headline">
                        <h3>Welcome!</h3>
                        <nav id="breadcrumbs" class="dark">
                            <ul>
                                <li><a href="{{ route('dashboard') }}">Home</a></li>
                                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            </ul>
                        </nav>
                    </div>
                    @include('cms.common.footer')
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts
================================================== -->
    <script src={{ asset('js/jquery-3.6.0.min.js') }}></script>
    <script src={{ asset('js/jquery-migrate-3.3.2.min.js') }}></script>
    <script src={{ asset('js/mmenu.min.js') }}></script>
    <script src={{ asset('js/tippy.all.min.js') }}></script>
    <script src={{ asset('js/simplebar.min.js') }}></script>
    <script src={{ asset('js/bootstrap-slider.min.js') }}></script>
    <script src={{ asset('js/bootstrap-select.min.js') }}></script>
    <script src={{ asset('js/snackbar.js') }}></script>
    <script src={{ asset('js/clipboard.min.js') }}></script>
    <script src={{ asset('js/counterup.min.js') }}></script>
    <script src={{ asset('js/magnific-popup.min.js') }}></script>
    <script src={{ asset('js/slick.min.js') }}></script>
    <script src={{ asset('js/custom.js') }}></script>

    <!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
    <script>
        // Snackbar for user status switcher
        $('#snackbar-user-status label').click(function() {
            Snackbar.show({
                text: 'Your status has been changed!',
                pos: 'bottom-center',
                showAction: false,
                actionText: "Dismiss",
                duration: 3000,
                textColor: '#fff',
                backgroundColor: '#383838'
            });
        });
    </script>

</body>

</html>
