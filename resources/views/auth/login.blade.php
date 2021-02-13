<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('backend')}}/login/images/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/longin/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/login/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url('backend/login/images/bg-01.jpg');">
					<span class="login100-form-title-1">
						Sign In
					</span>
            </div>

            <form class="login100-form validate-form" method="post" action="{{ route('login') }}">
                @csrf
                @foreach($errors->all() as $error)
                    <h2 style="color: red; text-align: center">{{$error}}</h2>
                @endforeach

                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="text" name="email" value="{{old('email')}}" placeholder="Enter email">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="password" placeholder="Enter password">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <input type="submit" name="btn" value="Submit" class="login100-form-btn">
                </div>
            </form>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="{{asset('backend')}}/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('backend')}}/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('backend')}}/login/vendor/bootstrap/js/popper.js"></script>
<script src="{{asset('backend')}}/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('backend')}}/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('backend')}}/login/vendor/daterangepicker/moment.min.js"></script>
<script src="{{asset('backend')}}/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="{{asset('backend')}}/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="{{asset('backend')}}/login/js/main.js"></script>

</body>
</html>
