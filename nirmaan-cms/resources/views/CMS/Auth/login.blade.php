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

<body>
    <div id="wrapper">
        <div class="login_page new-edits-ebani">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 logins-mn-height1 regi-right">
                        <div class="new-rergs regi-right" style="padding-top: 30px; padding-bottom: 30px">
                            <div class="logo-login"><img src="images/nirmaan-logo.png" alt="nirmaan-logo"
                                    style="height:200px"></div>
                            <div class="login-register-page">
                                <div class="welcome-text" style="display: flex;">
                                    <h3>Login</h3>
                                </div>
                                <form method="post" id="login">
                                    @csrf
                                    <span class="inputError error" style="display: none">Incorrect Email or
                                        Password</span>
                                    <div class="input-with-icon-left">
                                        <i class="icon-material-baseline-mail-outline"></i>
                                        <input type="text" class="input-text with-border" name="email"
                                            id="email" placeholder="Email Address" required />
                                    </div>
                                    <div class="input-with-icon-left">
                                        <i class="icon-material-outline-lock"></i>
                                        <input type="password" class="input-text with-border" name="password"
                                            id="password" placeholder="Password" required />
                                    </div>
                                    <div class="fpassword" style="padding-bottom:15px;">
                                        <div class="checkbox">
                                            <input type="checkbox" id="chekcbox2" onclick="myFunction()">
                                            <label for="chekcbox2"><span class="checkbox-icon"></span> Show
                                                Password</label>
                                        </div>
                                    </div>
                                    <a href="{{ route('login') }}"><button
                                            class="button full-width button-sliding-icon ripple-effect margin-top-10"
                                            type="submit">Log In <i
                                                class="icon-material-outline-arrow-right-alt"></i></button></a>
                                </form>
                                <script>
                                    @if (session('login_failed'))
                                        toastr.error("Login with correct credentials")
                                    @endif
                                    @if (session('success'))
                                        toastr.error("Password Updated Successfully")
                                    @endif
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="margin-top-70"></div>

    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>
