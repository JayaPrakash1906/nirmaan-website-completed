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
                        <nav id="breadcrumbs" class="dark">
                            <ul>
                                <li><a href="{{ route('dashboard') }}">Home</a></li>
                                <li>Start Ups Main</li>
                            </ul>
                        </nav>
                    </div>
                    <form action="{{route('add.links')}}" method="post" enctype='multipart/form-data'>
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="dashboard-box margin-top-0">
                                    <div class="headline">
                                        <h3><i class="icon-feather-user-plus"></i> For Investors</h3>
                                    </div>
                                    <input type="hidden" name="name" value="for investors">
                                    <div class="content with-padding padding-bottom-10">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Reach To Us Link</h5>
                                                    <input name='link_1' type="text"  class="client-name with-border" value="{{$links[0]}}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <button type='submit' id="addNewClient" class="button ripple-effect big margin-top-30"><i
                                    class="icon-feather-plus"></i> Add</button>
                        </div>
                        </form>
                        <form action="{{route('add.links')}}" method="post" enctype='multipart/form-data'>
                            @csrf
                            <div class="row margin-top-20">
                                <div class="col-xl-12">
                                    <div class="dashboard-box margin-top-0">
                                        <div class="headline">
                                            <h3><i class="icon-feather-user-plus"></i> For Stratups</h3>
                                        </div>
                                    <input type="hidden" name="name" value="for startups">
                                        <div class="content with-padding padding-bottom-10">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="submit-field">
                                                        <h5>Work With Us Link</h5>
                                                        <input name='link_1' type="text"  class="client-name with-border" value="{{$links[1]}}"  required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <button type='submit' id="addNewClient" class="button ripple-effect big margin-top-30"><i
                                        class="icon-feather-plus"></i> Add</button>
                            </div>
                            </form>
                            <form action="{{route('add.links')}}" method="post" enctype='multipart/form-data'>
                                @csrf
                                <div class="row margin-top-20">
                                    <div class="col-xl-12">
                                        <div class="dashboard-box margin-top-0">
                                            <div class="headline">
                                                <h3><i class="icon-feather-user-plus"></i> For Interns</h3>
                                            </div>
                                        <input type="hidden" name="name" value="for interns">
                                            <div class="content with-padding padding-bottom-10">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="submit-field">
                                                            <h5>Work With Nirmaan</h5>
                                                            <input name='link_1' type="text"  class="client-name with-border" value="{{$links[2][0]}}"  required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="submit-field">
                                                            <h5>Active Start Ups</h5>
                                                            <input name='link_2' type="text"  class="client-name with-border" value="{{$links[2][1]}}"  required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <button type='submit' id="addNewClient" class="button ripple-effect big margin-top-30"><i
                                            class="icon-feather-plus"></i> Add</button>
                                </div>
                                </form>
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
