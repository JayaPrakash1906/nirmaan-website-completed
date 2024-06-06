<!doctype html>
<html lang="en">

<head>
    <title>Nirmaan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/colors/green.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Toaster Imports -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body class="gray">
    <div id="wrapper">
        @include('cms.Common.navigation')
        <div class="dashboard-container">
            <div class="full-page-sidebar">
                <div class="full-page-sidebar-inner with-border" data-simplebar>
                    @if(isset($filter_fields))
                    <form action="{{route('filter.projects',['filter_fields'=>urlencode(json_encode($filter_fields))])}}" method="post">
                        @csrf
                        <div class="sidebar-container">
                            <!-- Location -->
                            <div class="sidebar-widget">
                                <h3>Incubation Year</h3>
                                <div class="col-xl-12">
                                    <div class="checkbox">
                                        <input name="incubation_year[]" type="checkbox" id="2021" value="2021" @if(isset($filter_fields["incubation_year"]) && in_array('2021',$filter_fields["incubation_year"])) checked @endif>
                                        <label for="2021"><span class="checkbox-icon"></span> 2021-2022</label>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkbox">
                                        <input name="incubation_year[]" type="checkbox" id="2020" value="2020" @if(isset($filter_fields["incubation_year"]) && in_array('2020',$filter_fields["incubation_year"])) checked @endif>
                                        <label for="2020"><span class="checkbox-icon" ></span> 2020-2021</label>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkbox">
                                        <input name="incubation_year[]" type="checkbox" id="2019" value="2019" @if(isset($filter_fields["incubation_year"]) && in_array('2019',$filter_fields["incubation_year"])) checked @endif>
                                        <label for="2019"><span class="checkbox-icon"></span> 2019-2020</label>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkbox">
                                        <input name="incubation_year[]" type="checkbox" id="2018" value="2018" @if(isset($filter_fields["incubation_year"]) && in_array('2018',$filter_fields["incubation_year"])) checked @endif>
                                        <label for="2018"><span class="checkbox-icon"></span> 2018-2019</label>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkbox">
                                        <input name="incubation_year[]" type="checkbox" id="2017" value="2017" @if(isset($filter_fields["incubation_year"]) && in_array('2017',$filter_fields["incubation_year"])) checked @endif>
                                        <label for="2017"><span class="checkbox-icon"></span> 2017-2018</label>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h3>Cohort Months</h3>
                                <div class="col-xl-12">
                                    <div class="checkbox">
                                        <input name="cohort_month[]" type="checkbox" id="january" value="january" @if(isset($filter_fields["cohort_month"]) && in_array('january',$filter_fields["cohort_month"])) checked @endif>
                                        <label for="january"><span class="checkbox-icon"></span>January</label>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkbox">
                                        <input name="cohort_month[]" type="checkbox" id="july" value="july" @if(isset($filter_fields["cohort_month"]) && in_array('july',$filter_fields["cohort_month"])) checked @endif>
                                        <label for="july"><span class="checkbox-icon"></span>July</label>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkbox">
                                        <input name="cohort_month[]" type="checkbox" id="august" value="august" @if(isset($filter_fields["cohort_month"]) && in_array('august',$filter_fields["cohort_month"])) checked @endif>
                                        <label for="august"><span class="checkbox-icon"></span>August</label>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h3>Sector</h3>
                                <div class="col-xl-12">
                                    <div class="checkbox">
                                        <input name="sector[]" type="checkbox" id="aerospace" value="Aerospace" @if(isset($filter_fields["sector"]) && in_array('Aerospace',$filter_fields["sector"])) checked @endif>
                                        <label for="aerospace"><span class="checkbox-icon"></span>Aerospace</label>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkbox">
                                        <input name="sector[]" type="checkbox" id="blockchain" value="Blockchain" @if(isset($filter_fields["sector"]) && in_array('Blockchain',$filter_fields["sector"])) checked @endif>
                                        <label for="blockchain"><span class="checkbox-icon"></span>Blockchain</label>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkbox">
                                        <input name="sector[]" type="checkbox" id="clean" value="Clean Technology" @if(isset($filter_fields["sector"]) && in_array('Clean Technology',$filter_fields["sector"])) checked @endif>
                                        <label for="clean"><span class="checkbox-icon"></span>Clean Technology</label>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkbox">
                                        <input name="sector[]" type="checkbox" id="digital" value="Digital Marketing" @if(isset($filter_fields["sector"]) && in_array('Digital Marketing',$filter_fields["sector"])) checked @endif>
                                        <label for="digital"><span class="checkbox-icon"></span>Digital Marketing</label>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkbox">
                                        <input name="sector[]" type="checkbox" id="edtech" value="Ed Tech" @if(isset($filter_fields["sector"]) && in_array('Ed Tech',$filter_fields["sector"])) checked @endif>
                                        <label for="edtech"><span class="checkbox-icon"></span>Ed Tech</label>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkbox">
                                        <input name="sector[]" type="checkbox" id="e-commerce" value="E Commerce" @if(isset($filter_fields["sector"]) && in_array('E Commerce',$filter_fields["sector"])) checked @endif>
                                        <label for="e-commerce"><span class="checkbox-icon"></span>E Commerce</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Sidebar Container / End -->

                        <!-- Search Button -->
                        <div class="row">
                            <div class="sidebar-search-button-container">
                                <button class="button ripple-effect" type="submit">Search</button>
                            </div>
                        </div>
                        <!-- Search Button / End-->
                    </form>
                    
                    @else
                        @php
                            $filter_fields=array();
                        @endphp
                        <form action="{{route('filter.projects',['filter_fields'=>urlencode(json_encode($filter_fields))])}}" method="post">
                            @csrf
                            <div class="sidebar-container">
                                <!-- Location -->
                                <div class="sidebar-widget">
                                    <h3>Incubation Year</h3>
                                    <div class="col-xl-12">
                                        <div class="checkbox">
                                            <input name="incubation_year[]" type="checkbox" id="2022" value="2021">
                                            <label for="2022"><span class="checkbox-icon"></span> 2021-2022</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="checkbox">
                                            <input name="incubation_year[]" type="checkbox" id="2021" value="2020">
                                            <label for="2021"><span class="checkbox-icon"></span> 2020-2021</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="checkbox">
                                            <input name="incubation_year[]" type="checkbox" id="2020" value="2019">
                                            <label for="2020"><span class="checkbox-icon"></span> 2019-2020</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="checkbox">
                                            <input name="incubation_year[]" type="checkbox" id="2019" value="2018">
                                            <label for="2019"><span class="checkbox-icon"></span> 2018-2019</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="checkbox">
                                            <input name="incubation_year[]" type="checkbox" id="2018" value="2017">
                                            <label for="2018"><span class="checkbox-icon"></span> 2017-2018</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-widget">
                                    <h3>Cohort Months</h3>
                                    <div class="col-xl-12">
                                        <div class="checkbox">
                                            <input name="cohort_month[]" type="checkbox" id="january" value="january">
                                            <label for="january"><span class="checkbox-icon"></span>January</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="checkbox">
                                            <input name="cohort_month[]" type="checkbox" id="july" value="july">
                                            <label for="july"><span class="checkbox-icon"></span>July</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="checkbox">
                                            <input name="cohort_month[]" type="checkbox" id="august" value="august">
                                            <label for="august"><span class="checkbox-icon"></span>August</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebar-widget">
                                    <h3>Sector</h3>
                                    <div class="col-xl-12">
                                        <div class="checkbox">
                                            <input name="sector[]" type="checkbox" id="aerospace" value="Aerospace" >
                                            <label for="aerospace"><span class="checkbox-icon"></span>Aerospace</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="checkbox">
                                            <input name="sector[]" type="checkbox" id="blockchain" value="Blockchain">
                                            <label for="blockchain"><span class="checkbox-icon"></span>Blockchain</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="checkbox">
                                            <input name="sector[]" type="checkbox" id="clean" value="Clean Technology">
                                            <label for="clean"><span class="checkbox-icon"></span>Clean Technology</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="checkbox">
                                            <input name="sector[]" type="checkbox" id="digital" value="Digital Marketing">
                                            <label for="digital"><span class="checkbox-icon"></span>Digital Marketing</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="checkbox">
                                            <input name="sector[]" type="checkbox" id="edtech" value="Ed Tech">
                                            <label for="edtech"><span class="checkbox-icon"></span>Ed Tech</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="checkbox">
                                            <input name="sector[]" type="checkbox" id="e-commerce" value="E Commerce">
                                            <label for="e-commerce"><span class="checkbox-icon"></span>E Commerce</label>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                            <!-- Sidebar Container / End -->
    
                            <!-- Search Button -->
                            <div class="sidebar-search-button-container">
                                <button class="button ripple-effect" type="submit">Search</button>
                            </div>
                            <!-- Search Button / End-->
                        </form>
                    @endif
                </div>
            </div>
            <div class="dashboard-content-container"  data-simplebar>
                    <div class="dashboard-content-inner">

                        <!-- Dashboard Headline -->
                        <div class="dashboard-headline">
                            <h3>Manage Projects</h3>
                            <!-- Breadcrumbs -->
                            <nav id="breadcrumbs" class="dark">
                                <ul>
                                    <li><a href="{{ route('dashboard') }}">Home</a></li>
                                    <li>Manage Projects</li>
                                </ul>
                            </nav>
                        </div>
                        
                        <!-- Dashboard Box -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="dashboard-box margin-top-0 mang-clnt">
                                    <div class="headline">
                                        <div class="row clearfix">
                                            <div class="col-xl-9 ">
                                                    <h3><i class="icon-feather-folder-plus"></i>Our Projects</h3>
                                            </div>
                                            @if (count($filter_fields)>0)
                                                <div class="col-xl-3">
                                                    <a href="{{route('manage.projects')}}"
                                                        class="button ripple-effect margin-top-0"><i
                                                            class="icon-feather-delete"></i> Clear Filters</a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    @if ($projects)
                                    @foreach ($projects as $project)
                                    <div class="content">
                                        <ul class="dashboard-box-list">
                                            <li>
                                                <div class="job-listing">
                                                    <div class="job-listing-details">
                                                        <div class="job-listing-description">
                                                            <h3 class="job-listing-title"><a
                                                                    href="#">{{ $project->project_name }}</a>
                                                            </h3>

                                                            <!-- Job Listing Footer -->
                                                            <div class="job-listing-footer">
                                                                <ul class="poc-list">
                                                                    <li><b>Incubation Year</b> : {{$project->incubation_year}} - {{intval($project->incubation_year) + 1}}
                                                                    </li>
                                                                    <li><b>Cohort Month</b> : {{$project->cohort_month}}
                                                                    </li>
                                                                    <li><b>Sector</b> : {{$project->sector}}
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Buttons -->
                                                <div class="row">
                                                        {{-- <form action="{{route("delete.project")}}" method="post"> --}}
                                                                <a href="#small-dialog-1"
                                                                    class="popup-with-zoom-anim button ripple-effect"><i
                                                                        class="icon-line-awesome-times-circle-o"></i> Delete Project</a>
                                                        {{-- </form> --}}
                                                        <form action="{{route("edit.project",['id' => $project->id])}}" method="get">
                                                                <button type="submit"
                                                                    class="button ripple-effect" style="margin-left: 20px"> <i
                                                                        class="icon-line-awesome-times-circle-o"></i> Edit Project</button>
                                                        </form>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                    <div id="small-dialog-1" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

                                        <!--Tabs -->
                                        <div class="sign-in-form">
                                    
                                            <ul class="popup-tabs-nav">
                                            </ul>
                                    
                                            <div class="popup-tabs-container">
                                    
                                                <!-- Tab -->
                                                <div class="popup-tab-content" id="tab">
                                                    
                                                    <!-- Welcome Text -->
                                                    <div class="welcome-text">
                                                        <h3>Are You Sure You Want To Delete ?</h3>
                                    
                                                    </div>
                                    
                                                    <!-- Button -->
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <form action="{{route("delete.project")}}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{$project->id}}">
                                                                <button class="button ripple-effect" type="submit" >Yes</i></button>
                                                            </form>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <button class="button ripple-effect" id="no" >No</i></button>
                                                        </div>
                                                    </div>
                                    
                                                </div>
                                    
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                    @else
                                    <div class="content with-padding padding-bottom-10">
        
                                        <div class="l-head">
                                            <h4>No Records Found</h4>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
    
                        </div>
                    {{-- <div class="pagination-container margin-top-20 margin-bottom-20">
                        <nav class="pagination">
                            @if (!isset($filter_fields) or count($filter_fields)===0)
                            <ul>
                                @php
                                    $pages = ceil(count($total_records) / 10);
                                    $count_loop = 0;
                                @endphp
                                @if ($page > 1)
                                    <li class="pagination-arrow"><a
                                           href="{{route("init.attendance.records", ["page" => $page - 1,"filter_fields" =>urlencode(json_encode($filter_fields))])}}"
                                            class="ripple-effect"><i
                                                class="icon-material-outline-keyboard-arrow-left"></i></a></li>
                                @endif
                                @for ($i = 1; $i <= $pages; $i++)
                                    <li><a href="{{route("init.attendance.records", ["page" => $i,"filter_fields" =>urlencode(json_encode($filter_fields))])}}" 
                                   class="ripple-effect @php if($i == $page){  echo "current-page"; } else{ echo "";} @endphp
                                        "
                                        >{{$i}}</a>
                                    </li>

                                    @php $count_loop++;@endphp
                                @endfor
                                @if ($count_loop > $page)
                                    <li class="pagination-arrow"><a href="{{route("init.attendance.records", ["page" => $page + 1,"filter_fields" =>urlencode(json_encode($filter_fields))])}}"
                                                            class="ripple-effect"><i
                                                class="icon-material-outline-keyboard-arrow-right"></i></a></li>
                                @endif
                            </ul>
                            @else
                            <ul>
                                @php
                                    $pages = ceil(count($total_records) / 10);
                                    $count_loop = 0;
                                @endphp
                                @if ($page > 1)
                                    <li class="pagination-arrow"><a
                                            href="{{route("attendance.records.filter.paginate", ["page" => $page - 1,"filter_fields" =>urlencode(json_encode($filter_fields))])}}"
                                            class="ripple-effect"><i
                                                class="icon-material-outline-keyboard-arrow-left"></i></a></li>
                                @endif
                                @for ($i = 1; $i <= $pages; $i++)
                                    <li><a  href="{{route("attendance.records.filter.paginate", ["page" => $i,"filter_fields" =>urlencode(json_encode($filter_fields))])}}" 
                                   class="ripple-effect @php if($i == $page){  echo "current-page"; } else{ echo "";} @endphp
                                        "
                                        >{{$i}}</a>
                                    </li>

                                    @php $count_loop++;@endphp
                                @endfor
                                @if ($count_loop > $page)
                                    <li class="pagination-arrow"><a href="{{route("attendance.records.filter.paginate", ["page" => $page + 1,"filter_fields" =>urlencode(json_encode($filter_fields))])}}" 
                                                            class="ripple-effect"><i
                                                class="icon-material-outline-keyboard-arrow-right"></i></a></li>
                                @endif
                            </ul>
                            @endif
                        </nav>
                    </div> --}}
                    </div>
                    <!-- Row / End -->

                    <!-- Footer -->
                    @include('cms.Common.footer')
                    <!-- Footer / End -->

            </div>
        </div>
    </div>
    

    <!-- Scripts
================================================== -->
<script src={{asset("js/jquery-3.6.0.min.js")}}></script>
<script src={{asset("js/jquery-migrate-3.3.2.min.js")}}></script>
<script src={{asset("js/mmenu.min.js")}}></script>
<script src={{asset("js/tippy.all.min.js")}}></script>
<script src={{asset("js/simplebar.min.js")}}></script>
<script src={{asset("js/bootstrap-slider.min.js")}}></script>
<script src={{asset("js/bootstrap-select.min.js")}}></script>
<script src={{asset("js/snackbar.js")}}></script>
<script src={{asset("js/clipboard.min.js")}}></script>
<script src={{asset("js/counterup.min.js")}}></script>
<script src={{asset("js/magnific-popup.min.js")}}></script>
<script src={{asset("js/slick.min.js")}}></script>
<script src={{asset("js/custom.js")}}></script>

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
        $('#no').on('click', function () {
            $('.mfp-close').trigger("click");
        })
    </script>

</body>

</html>


