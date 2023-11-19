<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LegalWeb</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    @php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
    @php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )
    @php( $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url',
    'password/reset') )

    @if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? route($password_reset_url) : '' )
    @else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? url($password_reset_url) : '' )
    @endif

    
        <div class="main">


            <!-- Sing in  Form -->
            <section class="sign-in  ">
                <div class="container">
                    <div class="signin-content">
                        <div class="signin-image">
                            <figure><img src="/img/portada2.jpg" alt="sing up image"></figure>
                            <a href="{{ $register_url }}" class="signup-image-link"> {{
                                __('adminlte::adminlte.register_a_new_membership') }}</a>

                        </div>

                        <div class="signin-form">
                            <h2 class="form-title">Ingresar</h2>
                            <form action="{{ $login_url }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="email" name="email" id="email"
                                        class="@error('email') is-invalid @enderror" value="{{ old('email') }}"
                                        placeholder="{{ __('adminlte::adminlte.email') }}" autofocus />
                                </div>


                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <div class="form-group">
                                    <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="password" id="password"
                                        class="@error('password') is-invalid @enderror"
                                        placeholder="{{ __('adminlte::adminlte.password') }}" />
                                </div>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror



                                <div class="form-group">
                                    <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                    <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
                                        me</label>
                                </div>


                                <div class="form-group form-button">

                                    <button type=submit
                                        class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
                                        {{ __('adminlte::adminlte.sign_in') }}
                                    </button>


                                </div>





                            </form>
                            <div class="social-login">
                                <span class="social-label">Or login with</span>
                                <ul class="socials">
                                    <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    

    @section('auth_footer')
    {{-- Password reset link --}}
    @if($password_reset_url)
    <p class="my-0">
        <a href="{{ $password_reset_url }}">
            {{ __('adminlte::adminlte.i_forgot_my_password') }}
        </a>
    </p>
    @endif

    {{-- Register link --}}
    @if($register_url)
    <p class="my-0">
        <a href="{{ $register_url }}">
            {{ __('adminlte::adminlte.register_a_new_membership') }}
        </a>
    </p>
    @endif
    @stop


    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>