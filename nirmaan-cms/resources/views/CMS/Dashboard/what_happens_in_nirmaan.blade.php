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
                                <li>Intro Page</li>
                            </ul>
                        </nav>
                    </div>
                    <form action="{{route('add.content')}}" method="post" enctype='multipart/form-data'>
                        @csrf
                        <div class="row margin-top-10">
                            <div class="col-xl-12">
                                <div class="dashboard-box margin-top-0">
                                    <div class="headline">
                                        <h3><i class="icon-feather-user-plus"></i> Add Event</h3>
                                    </div>
                                    <div class="content with-padding padding-bottom-10">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Event Name</h5>
                                                    <input class="with-border" type="text" name="event_name" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Content</h5>
                                                    <textarea name="content" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Image</h5>
                                                    <div class="uploadButton ">
                                                        <input name="image" class="uploadButton-input" type="file" accept="image/*" id="upload" required/>
                                                        <label class="uploadButton-button ripple-effect" for="upload">Upload Image</label>
                                                        <span class="uploadButton-file-name">Please upload Image </span>
                                                    </div>
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
                    <div class="row margin-top-20">
                        <div class="col-xl-12">
                            <div class="dashboard-box margin-top-0">
                                <div class="headline">
                                    <h3><i class="icon-feather-user-plus"></i> Events</h3>
                                </div>
                                <div class="content with-padding with-border padding-bottom-10">
                                    @if (count($contents)>0)
                                    @foreach ($contents as $index => $content)
                                    <div class="content with-border">
                                        <ul class="dashboard-box-list with-border">
                                            <li>
                                                <div class="job-listing">
                                                    <div class="job-listing-details">
                                                        <div class="job-listing-description">
                                                            <h3 class="job-listing-title">{{$content->event_name}}
                                                            </h3>

                                                            <!-- Job Listing Footer -->
                                                            <div class="job-listing-footer">
                                                                <p> <b>description :</b> {{$content->content}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Buttons -->
                                                <form action="{{route('delete.content',['contentId' => $content->id])}}" method="post">
                                                    @csrf
                                                <div class="always-visible">
                                                    <button
                                                        class="button ripple-effect" type="submit"><i
                                                            class="icon-material-outline-delete"></i> Remove Content</button>
                                                    
                                                </div>
                                            </form>

                                            </li>
                                        </ul>
                                    </div>
                                    @endforeach
                                    @else
                                        <p>No Content Found</p>
                                    @endif
                                </div>
                            </div>
                        </div>
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
