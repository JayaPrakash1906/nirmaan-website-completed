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
                    <form action="{{route("update.project")}}" method="post" enctype='multipart/form-data'>
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
                                                    <h5>Project Name</h5>
                                                    <input name='project_name' type="text"  class="with-border" value="{{$project->project_name}}" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Start Up Name</h5>
                                                    <select name="start_up_name" class="selectpicker with-border">
                                                    <option value="pratham" @if ($project->start_up_name == "pratham") selected @endif>Pratham</option>
                                                    <option value="akshar" @if ($project->start_up_name == "akshar") selected @endif>Akshar</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="submit-field">
                                                    <h5>Sector</h5>
                                                    <select name="sector" class="selectpicker with-border">
                                                        <option value="Aerospace" @if ($project->sector == "Aerospace") selected @endif>Aerospace</option>
                                                        <option value="Blockchain" @if ($project->sector == "Blockchain") selected @endif>Blockchain</option>
                                                        <option value="Clean Technology" @if ($project->sector == "Clean Technology") selected @endif>Clean Technology</option>
                                                        <option value="Digital Marketing" @if ($project->sector == "Digital Marketing") selected @endif>Digital Marketing</option>
                                                        <option value="Ed Tech" @if ($project->sector == "Ed Tech") selected @endif>Ed Tech</option>
                                                        <option value="E Commerce" @if ($project->sector == "E Commerce") selected @endif>E Commerce</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="submit-field">
                                                    <h5>Incubation Year</h5>
                                                    <input class="with-border" value="{{$project->incubation_year}}" name="incubation_year" type="text" id="datepicker" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="submit-field">
                                                    <h5>Cohort Month</h5>
                                                    <select name="cohort_month" class="selectpicker with-border">
                                                        <option value="january" @if ($project->cohort_month == "january") selected @endif>January</option>
                                                        <option value="july" @if ($project->cohort_month == "july") selected @endif>July</option>
                                                        <option value="august" @if ($project->cohort_month == "august") selected @endif>August</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="submit-field">
                                                    <h5>Description</h5>
                                                    <textarea name="description" class="with-border" required>{{ $project->description }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Profile Photo</h5>
                                                    <div class="uploadButton ">
                                                        <input name="profile_photo" class="uploadButton-input " type="file" accept="image/*"  id="profile_photo" />
                                                        <label class="uploadButton-button ripple-effect" for="profile_photo">Upload Image</label>
                                                        <span id="profile_photo_span" class="file-name ">{{$project->profile_photo}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Description Photo</h5>
                                                    <div class="uploadButton ">
                                                        <input name="description_photo" class="uploadButton-input " type="file" accept="image/*"  id="description_photo" />
                                                        <label class="uploadButton-button ripple-effect" for="description_photo">Upload Image</label>
                                                        <span id="description_photo_span" class="file-name ">{{$project->description_photo}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Photo 1</h5>
                                                    <div class="uploadButton ">
                                                        <input name="photo_1" class="uploadButton-input " type="file" accept="image/*"  id="photo_1" />
                                                        <label class="uploadButton-button ripple-effect" for="photo_1">Upload Image</label>
                                                        <span id="photo_1_span" class="file-name ">{{$project->photo_1}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Photo 2</h5>
                                                    <div class="uploadButton ">
                                                        <input name="photo_2" class="uploadButton-input " type="file" accept="image/*"  id="photo_2" />
                                                        <label class="uploadButton-button ripple-effect" for="photo_2">Upload Image</label>
                                                        <span id="photo_2_span" class="file-name ">{{$project->photo_2}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Photo 3</h5>
                                                    <div class="uploadButton ">
                                                        <input name="photo_3" class="uploadButton-input " type="file" accept="image/*"  id="photo_3" />
                                                        <label class="uploadButton-button ripple-effect" for="photo_3">Upload Image</label>
                                                        <span id="photo_3_span" class="file-name ">{{$project->photo_3}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Photo 4</h5>
                                                    <div class="uploadButton ">
                                                        <input name="photo_4" class="uploadButton-input " type="file" accept="image/*"  id="photo_4" />
                                                        <label class="uploadButton-button ripple-effect" for="photo_4">Upload Image</label>
                                                        <span id="photo_4_span" class="file-name ">{{$project->photo_4}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Photo 5</h5>
                                                    <div class="uploadButton ">
                                                        <input name="photo_5" class="uploadButton-input" type="file" accept="image/*"  id="photo_5" />
                                                        <label class="uploadButton-button ripple-effect" for="photo_5">Upload Image</label>
                                                        <span id="photo_5_span" class="file-name">{{$project->photo_5}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Photo 6</h5>
                                                    <div class="uploadButton">
                                                        <input name="photo_6" class="uploadButton-input" type="file" accept="image/*"  id="photo_6" />
                                                        <label class="uploadButton-button ripple-effect" for="photo_6">Upload Image</label>
                                                        <span id="photo_6_span" class="file-name">{{$project->photo_6}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clnts-pocs-box">
                                            <div class="col-xl-12">
                                                <div class="submit-field">
                                                    <h5><span>Add Members Of The Project</span> <a href=".client-poc"
                                                        class="popup-with-zoom-anim button dark ripple-effect ico-btn" style="margin-left: 5px;"><i
                                                            class="icon-feather-user-plus" style="padding: 0px"></i></a></h5>
                                                </div>
                                                <div id="clientContainer"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="clientHiddenInput"></div>
                        <div class="col-xl-12">
                            <button type='submit' id="addNewClient" class="button ripple-effect big margin-top-30"><i
                                    class="icon-feather-plus"></i>Update</button>
                        </div>
                        <input type="hidden" name="project_id" value="{{$project->id}}">
                    </form>
                </div>
                    @include('cms.common.footer')
                </div>
            </div>
        </div>
    </div>
    <div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs client-poc">
        <div class="sign-in-form">
            <ul class="popup-tabs-nav">
                <li><a href="#tab">Add Client POC</a></li>
            </ul>
            <div class="popup-tabs-container">
                <div class="popup-tab-content" id="tab">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="submit-field">
                                <h5>Member Name</h5>
                                <input id="memberName" type="text" class="with-border" required>
                            </div>
                            <div class="submit-field">
                                <h5>LinkedIn Profile Link</h5>
                                <input id="memberLinkedIn" type="text" class="with-border" required>
                            </div>
                            <div class="submit-field">
                                <h5>LinkedIn Profile Link</h5>
                                <input id="memberEmail" type="text" class="with-border" required>
                            </div>
                        </div>
                    </div>
                    <!-- Button -->
                    <button id="addClientPocBtn" class=" button full-width button-sliding-icon ripple-effect"
                        type="submit">Add <i class="icon-material-outline-arrow-right-alt"></i></button>

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
        $("#datepicker").datepicker({
            format: "yyyy",
            viewMode: "years", 
            minViewMode: "years"
        });
        $(document).ready(function() {

        var clientListings = [];
        var project = @json($project);
        var length = project['members_email'].split(",").length;
        for (let i=0;i<length;i++){
            clientListings.push({
                'name':project['members_name'].split(",")[i],
                'linkedIn':project['members_linkedin'].split(",")[i],
                'email':project['members_email'].split(",")[i],
            })
        }
        renderClientListings();

        // Event handler for the "Add" button in the popup
        $('#addClientPocBtn').on('click', function() {
            // Get the values from the popup input fields
            var name = $('#memberName').val();
            var linkedIn = $('#memberLinkedIn').val();
            var email = $('#memberEmail').val();

            // Create a new client listing object
            var newClientListing = {
                'name': name,
                'linkedIn': linkedIn,
                'email': email
            };

            // Append the new client listing to the clientListings array
            clientListings.push(newClientListing);

            // Clear input fields and close the popup
            $('#memberName').val('');
            $('#memberLinkedIn').val('');
            $('#memberEmail').val('');

            $.magnificPopup.close();

            // Re-render the client listings
            renderClientListings();
        });

        // Event delegation for the delete button click
        $(document).on('click', '.delete-client-button', function() {
            var listItem = $(this).closest('.add-clnt-dsbrt'); // Find the closest parent <li> element
            var index = listItem.index(); // Get the index of the <li> element
                // console.log(listItem);
                clientListings.splice(index, 1);
            // Remove the client listing from the clientListings array
            

            // Re-render the client listings
            renderClientListings();
        });

        // Function to render the client listings
        function renderClientListings() {
            var clientListingsContainer = $('#clientContainer');
            clientListingsContainer.empty(); // Clear existing listings

            // Loop through the clientListings array and render each listing
            clientListings.forEach(function(clientListing, index) {
                var listingHtml = `
                    <div class="add-clnt-dsbrt">

                        <div class="job-listing-description">
                            <h3 class="job-listing-title"><span>${clientListing.name}</span>
                                <a  class="delete-client-button button gray ripple-effect ico" data-tippy-placement="top" data-tippy="" data-original-title="Remove"><i class="icon-feather-trash-2"></i></a></h3>
                                <!-- Job Listing Footer -->
                                    <div class="job-listing-footer" style="margin-top: 10px">
                                            <ul>
                                                    <li><i class="icon-line-awesome-linkedin-square"></i> ${clientListing.linkedIn}</li>
                                                    <li><i class="icon-line-awesome-email-square"></i> ${clientListing.email}</li>
                                                    <div class="clearfix clear"></div>
                                            </ul>
                                    </div>
                        </div> 
                            

                        </div>
                `;
                clientListingsContainer.append(listingHtml);
            });
        }
        $('#addNewClient').on('click', function() {
            // Change the style of button2
            var client_hidden_input = $('#clientHiddenInput');
            var ebani_hidden_input = $('#ebaniHiddenInput');
            client_hidden_input.empty();
            clientListings.forEach(function(clientListing,index){
                var clienthtml=`
                <input name='member_linkedin_${index}' type="hidden" value='${clientListing.linkedIn}'/>
                <input name='member_name_${index}' type="hidden" value='${clientListing.name}' />
                <input name='member_email_${index}' type="hidden" value='${clientListing.email}' />
                `;
                client_hidden_input.append(clienthtml);
            });
            
        });
        $('#profile_photo').change(function() {
        var fileName = $(this).val().split('\\').pop();
        $('#profile_photo_span').text(fileName);
    });

    // Description Photo
    $('#description_photo').change(function() {
        var fileName = $(this).val().split('\\').pop();
        $('#description_photo_span').text(fileName);
    });

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
