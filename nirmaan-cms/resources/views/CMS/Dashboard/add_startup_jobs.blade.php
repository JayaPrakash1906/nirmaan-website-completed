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
                    <form action="{{route("post.add.jobs")}}" method="post" enctype='multipart/form-data'>
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="dashboard-box margin-top-0">
                                    <div class="headline">
                                        <h3><i class="icon-feather-user-plus"></i> Add Job</h3>
                                    </div>
                                    <div class="content with-padding padding-bottom-10">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="submit-field">
                                                    <h5>Start Up Name</h5>
                                                    <input type="text" name="start_up_name" class="with-border">
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="submit-field">
                                                    <h5>Start Up Category</h5>
                                                    <select name="start_up_category" class="selectpicker with-border">
                                                    <option value="pratham">Pratham</option>
                                                    <option value="akshar">Akshar</option>
                                                    <option value="nirmaan">Nirmaan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="submit-field">
                                                    <h5>Sector</h5>
                                                    <select name="sector" class="selectpicker with-border">
                                                        <option value="Aerospace">Aerospace</option>
                                                        <option value="Blockchain">Blockchain</option>
                                                        <option value="Clean Technology">Clean Technology</option>
                                                        <option value="Digital Marketing">Digital Marketing</option>
                                                        <option value="Ed Tech">Ed Tech</option>
                                                        <option value="E Commerce">E Commerce</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="submit-field">
                                                    <h5>Duration(in months)</h5>
                                                    <input type="number" name="duration" class="with-border" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="submit-field">
                                                    <h5>Remuneration</h5>
                                                    <input type="number" name="remuneration" class="with-border" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="submit-field">
                                                    <h5>Role</h5>
                                                    <select name="role" class="selectpicker with-border">
                                                        <option value="Front End Dev - Web">Front End Dev - Web</option>
                                                        <option value="Back End Dev - Web">Back End Dev - Web</option>
                                                        <option value="Front End Dev">Front End Dev</option>
                                                        <option value="Designer">Designer</option>
                                                        <option value="Full Stack - App">Full Stack - App</option>
                                                        <option value="Back End Dev">Back End Dev</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="submit-field">
                                                    <h5>Link To Apply</h5>
                                                    <input type="text" name="link" class="with-border" required>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div id="clientHiddenInput"></div>
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
                                <input id="memberName" type="text" class="with-border" >
                            </div>
                            <div class="submit-field">
                                <h5>LinkedIn Profile Link</h5>
                                <input id="memberLinkedIn" type="text" class="with-border" >
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

        // Event handler for the "Add" button in the popup
        $('#addClientPocBtn').on('click', function() {
            // Get the values from the popup input fields
            var name = $('#memberName').val();
            var linkedIn = $('#memberLinkedIn').val();

            // Create a new client listing object
            var newClientListing = {
                'name': name,
                'linkedIn': linkedIn
            };

            // Append the new client listing to the clientListings array
            clientListings.push(newClientListing);

            // Clear input fields and close the popup
            $('#memberName').val('');
            $('#memberLinkedIn').val('');
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
                <input name='member_name_${index}' type="hidden" value=${clientListing.name} />
                `;
                client_hidden_input.append(clienthtml);
            });
            
        });
        });
        
    </script>

</body>

</html>
