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
                                <li>Teams</li>
                            </ul>
                        </nav>
                    </div>
                    <form action="" method="post" enctype='multipart/form-data'>
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="dashboard-box margin-top-0">
                                    <div class="headline">
                                        <h3><i class="icon-feather-user-plus"></i> Add Project</h3>
                                    </div>
                                    <div class="content with-padding padding-bottom-10">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Teams Trained</h5>
                                                    <input name='teams_trained' type="text"  class="with-border" value="{{$data->teams_trained}}" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Graduated Teams</h5>
                                                    <input name='graduated_teams' type="text"  class="with-border" value="{{$data->graduated_teams}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="submit-field">
                                                    <h5>Active Teams</h5>
                                                    <input name='active_teams' type="text"  class="with-border" value="{{$data->active_teams}}" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="submit-field">
                                                    <h5>Funds Rasised</h5>
                                                    <input class="with-border" name="funds_raised" type="text" value="{{$data->funds_raised}}" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="submit-field">
                                                    <h5>Total Valuation</h5>
                                                    <input class="with-border" name="total_valuation" type="text" value="{{$data->total_valuation}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Photo 1</h5>
                                                    <div class="uploadButton ">
                                                        <input name="photo_1" class="uploadButton-input " type="file" accept="image/*"  id="photo_1" required/>
                                                        <label class="uploadButton-button ripple-effect" for="photo_1">Upload Image</label>
                                                        <span id="photo_1_span" class="file-name ">{{$data->photo_1}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Photo 2</h5>
                                                    <div class="uploadButton ">
                                                        <input name="photo_2" class="uploadButton-input " type="file" accept="image/*"  id="photo_2" required/>
                                                        <label class="uploadButton-button ripple-effect" for="photo_2">Upload Image</label>
                                                        <span id="photo_2_span" class="file-name ">{{$data->photo_2}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Photo 3</h5>
                                                    <div class="uploadButton ">
                                                        <input name="photo_3" class="uploadButton-input " type="file" accept="image/*"  id="photo_3" required/>
                                                        <label class="uploadButton-button ripple-effect" for="photo_3">Upload Image</label>
                                                        <span id="photo_3_span" class="file-name ">{{$data->photo_3}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Photo 4</h5>
                                                    <div class="uploadButton ">
                                                        <input name="photo_4" class="uploadButton-input " type="file" accept="image/*"  id="photo_4" required/>
                                                        <label class="uploadButton-button ripple-effect" for="photo_4">Upload Image</label>
                                                        <span id="photo_4_span" class="file-name ">{{$data->photo_4}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Photo 5</h5>
                                                    <div class="uploadButton ">
                                                        <input name="photo_5" class="uploadButton-input" type="file" accept="image/*"  id="photo_5" required/>
                                                        <label class="uploadButton-button ripple-effect" for="photo_5">Upload Image</label>
                                                        <span id="photo_5_span" class="file-name">{{$data->photo_5}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Photo 6</h5>
                                                    <div class="uploadButton">
                                                        <input name="photo_6" class="uploadButton-input" type="file" accept="image/*"  id="photo_6" required/>
                                                        <label class="uploadButton-button ripple-effect" for="photo_6">Upload Image</label>
                                                        <span id="photo_6_span" class="file-name">{{$data->photo_6}}</span>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>

    <!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
    <script>
        $(document).ready(function() {

        function displayFileName(input) {
        var fileName = input.files[0].name;
        var fileLabel = document.querySelector('.uploadButton-file-name');
        fileLabel.textContent = 'File Name: ' + fileName;
        }

    $('#photo_1').change(function() {
        var fileName = $(this).val().split('\\').pop();
        $('#photo_1_span').text(fileName);
    });
    $('#photo_2').change(function() {
        var fileName = $(this).val().split('\\').pop();
        $('#photo_2_span').text(fileName);
    });
    $('#photo_3').change(function() {
        var fileName = $(this).val().split('\\').pop();
        $('#photo_3_span').text(fileName);
    });
    $('#photo_4').change(function() {
        var fileName = $(this).val().split('\\').pop();
        $('#photo_4_span').text(fileName);
    });
    $('#photo_5').change(function() {
        var fileName = $(this).val().split('\\').pop();
        $('#photo_5_span').text(fileName);
    });
    $('#photo_6').change(function() {
        var fileName = $(this).val().split('\\').pop();
        $('#photo_6_span').text(fileName);
    });
        });
        
    </script>

</body>

</html>
