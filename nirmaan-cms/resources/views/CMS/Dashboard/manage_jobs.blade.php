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
                    <form action="{{route('filter.jobs',['filter_fields'=>urlencode(json_encode($filter_fields))])}}" method="post">
                        @csrf
                        <div class="sidebar-container">
                            <!-- Location -->
                            <div class="sidebar-widget">
                                <h3>Role</h3>
                                <div class="col-xl-12">
                                    <div class="checkbox">
                                        <input name="role[]" type="checkbox" id="Front End Dev - Web" value="Front End Dev - Web" @if(isset($filter_fields["role"]) && in_array('Front End Dev - Web',$filter_fields["role"])) checked @endif>
                                        <label for="Front End Dev - Web"><span class="checkbox-icon"></span> Front End Dev - Web</label>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkbox">
                                        <input name="role[]" type="checkbox" id="Back End Dev - Web" value="Back End Dev - Web" @if(isset($filter_fields["role"]) && in_array('Back End Dev - Web',$filter_fields["role"])) checked @endif>
                                        <label for="Back End Dev - Web"><span class="checkbox-icon" ></span> Back End Dev - Web</label>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkbox">
                                        <input name="role[]" type="checkbox" id="Front End Dev" value="Front End Dev" @if(isset($filter_fields["role"]) && in_array('Front End Dev',$filter_fields["role"])) checked @endif>
                                        <label for="Front End Dev"><span class="checkbox-icon"></span> Front End Dev</label>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkbox">
                                        <input name="role[]" type="checkbox" id="Designer" value="Designer" @if(isset($filter_fields["role"]) && in_array('Designer',$filter_fields["role"])) checked @endif>
                                        <label for="Designer"><span class="checkbox-icon"></span>Designer</label>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkbox">
                                        <input name="role[]" type="checkbox" id="Full Stack - App" value="Full Stack - App" @if(isset($filter_fields["role"]) && in_array('Full Stack - App',$filter_fields["role"])) checked @endif>
                                        <label for="Full Stack - App"><span class="checkbox-icon"></span> Full Stack - App</label>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkbox">
                                        <input name="role[]" type="checkbox" id="Back End Dev" value="Back End Dev" @if(isset($filter_fields["role"]) && in_array('Back End Dev',$filter_fields["role"])) checked @endif>
                                        <label for="Back End Dev"><span class="checkbox-icon"></span> Back End Dev</label>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h3>Remuneration</h3>
                                <div class="col-xl-12">
                                    <div class="checkbox">
                                        <input name="remuneration[]" type="checkbox" id="paid" value="paid" @if(isset($filter_fields["remuneration"]) && in_array('paid',$filter_fields["remuneration"])) checked @endif>
                                        <label for="paid"><span class="checkbox-icon"></span>Paid</label>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkbox">
                                        <input name="remuneration[]" type="checkbox" id="unpaid" value="unpaid" @if(isset($filter_fields["remuneration"]) && in_array('unpaid',$filter_fields["remuneration"])) checked @endif>
                                        <label for="unpaid"><span class="checkbox-icon"></span>Unpaid</label>
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
                        <form action="{{route('filter.jobs',['filter_fields'=>urlencode(json_encode($filter_fields))])}}" method="post">
                            @csrf
                            <div class="sidebar-container">
                                <!-- Location -->
                                <div class="sidebar-widget">
                                    <h3>Role</h3>
                                    <div class="col-xl-12">
                                        <div class="checkbox">
                                            <input name="role[]" type="checkbox" id="Front End Dev - Web" value="Front End Dev - Web">
                                            <label for="Front End Dev - Web"><span class="checkbox-icon"></span>Front End Dev - Web</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="checkbox">
                                            <input name="role[]" type="checkbox" id="Back End Dev - Web" value="Back End Dev - Web">
                                            <label for="Back End Dev - Web"><span class="checkbox-icon"></span> Back End Dev - Web</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="checkbox">
                                            <input name="role[]" type="checkbox" id="Front End Dev" value="Front End Dev">
                                            <label for="Front End Dev"><span class="checkbox-icon"></span>Front End Dev</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="checkbox">
                                            <input name="role[]" type="checkbox" id="Designer" value="Designer">
                                            <label for="Designer"><span class="checkbox-icon"></span>Designer</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="checkbox">
                                            <input name="role[]" type="checkbox" id="Full Stack - App" value="Full Stack - App">
                                            <label for="Full Stack - App"><span class="checkbox-icon"></span>Full Stack - App</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="checkbox">
                                            <input name="role[]" type="checkbox" id="Back End Dev" value="Back End Dev">
                                            <label for="Back End Dev"><span class="checkbox-icon"></span>Back End Dev</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-widget">
                                    <h3>Remuneration</h3>
                                    <div class="col-xl-12">
                                        <div class="checkbox">
                                            <input name="remuneration[]" type="checkbox" id="paid" value="paid">
                                            <label for="paid"><span class="checkbox-icon"></span>Paid</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="checkbox">
                                            <input name="remuneration[]" type="checkbox" id="unpaid" value="unpaid">
                                            <label for="unpaid"><span class="checkbox-icon"></span>Unpaid</label>
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
                                    @if ($jobs)
                                    @foreach ($jobs as $job)
                                    <div class="content">
                                        <ul class="dashboard-box-list">
                                            <li>
                                                <div class="job-listing">
                                                    <div class="job-listing-details">
                                                        <div class="job-listing-description">
                                                            <h3 class="job-listing-title"><a
                                                                    href="#">{{ $job->role }}</a>
                                                            </h3>

                                                            <!-- Job Listing Footer -->
                                                            <div class="job-listing-footer">
                                                                <ul class="poc-list">
                                                                    <li><b>StartUp Name</b> : {{$job->startup_name}}
                                                                    </li>
                                                                    <li><b>Remuneration</b> : {{$job->remuneration}}
                                                                    </li>
                                                                    <li><b>Sector</b> : {{$job->sector}}
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Buttons -->
                                                <form action="{{route("delete.project")}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$job->id}}"/>
                                                        <button type="submit"
                                                            class="button ripple-effect"><i
                                                                class="icon-line-awesome-times-circle-o"></i> Delete Job</button>
                                                </form>

                                            </li>
                                        </ul>
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
    </script>

</body>

</html>


