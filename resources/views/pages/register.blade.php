<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ url('resources/login/images/icons/favicon.ico') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('resources/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ url('resources/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ url('resources/login/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('resources/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('resources/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('resources/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('resources/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('resources/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('resources/login/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('resources/login/css/main.css') }}">
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{ url('resources/login/images/bg-01.jpg') }}');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" action={{ url('submit_register') }} method="POST" enctype="multipart/form-data">
                    @csrf
                    <span class="login100-form-title p-b-49">
                        Register
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <span class="label-input100">Full Name</span>
                        <input class="input100" type="text" name="name" placeholder="Type your email">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Email is required">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="email" name="email" placeholder="Type your email">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Type your password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Conrifmation Password</span>
                        <input class="input100" type="password" name="password_confirmation"
                            placeholder="Type your password">
                        <span class="focus-input100" data-symbol=""></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Birthdate is required">
                        <span class="label-input100">Birthdate</span>
                        <input class="input100" type="date" name="birthdate" placeholder="Input your birthdate">
                        <span class="focus-input100" data-symbol=""></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Phonenumber is required">
                        <span class="label-input100">Phonenumber</span>
                        <input class="input100" type="text" name="phone_number" placeholder="Type your phonenumber">
                        <span class="focus-input100" data-symbol=""></span>
                    </div>

                    <div class="wrap-input100 ">
                        <span class="label-input100">Profile Picture</span>
                        <input class="input100" type="file" name="link_photo">
                        <span class="focus-input100" data-symbol=""></span>
                    </div>

                    <div class="text-right p-t-8 p-b-31">
                        <!-- <a href="#">
							Forgot password?
						</a> -->
                        <p>
                            @if ($errors->any())
                            	@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
                            @endif
                            {{ Session::has('register_failed_message') ? Session::get('register_failed_message') : '' }}
                        </p>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Register
                            </button>
                        </div>
                    </div>

                    <div class="txt1 text-center p-t-54 p-b-20">
                        <a href="{{ url('login') }}">
                            Already have an account?
                        </a>
                    </div>

                    {{-- <div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="#" class="txt2">
							Sign Up
						</a>
					</div> --}}
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="{{ url('resources/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ url('resources/vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ url('resources/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ url('resources/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ url('resources/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ url('resources/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ url('resources/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ url('resources/vendor/countdowntime/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ url('resources/login/js/main.js') }}"></script>

</body>

</html>
