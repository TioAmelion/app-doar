<!DOCTYPE html>
<html>

<!-- Mirrored from gambolthemes.net/html/workwise/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Oct 2018 09:39:01 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Sistema de doação - Doar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/line-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/line-awesome-font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/lib/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/lib/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>


<body class="sign-in" oncontextmenu="return false;">
    <div class="wrapper">
        <div class="sign-in-page">
            <div class="signin-popup">
                <div class="signin-pop">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="cmp-info">
                                <div class="cm-logo">
                                    <img src="assets/images/cm-logo.png" alt="">
                                    <p>Doar, Sistema de doaçao online</p>
                                </div><!--cm-logo end-->    
                                <img src="assets/images/cm-main-img.png" alt="">           
                            </div><!--cmp-info end-->
                        </div>
                        <div class="col-lg-6">
                            <div class="login-sec">
                                <ul class="sign-control">
                                    <li data-tab="tab-1" class="current"><a href="#" title="">Login</a></li>   
                                </ul>           
                                <div class="sign_in_sec current" id="tab-1">
                                    
                                    <h3>Login</h3>
                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <x-label for="email" :value="__('Email')" />

                                                    <x-input id="email" class="block mt-1 w-full text-dark" type="email" name="email" :value="old('email')" required autofocus />
                                                    <!-- <input type="text" name="username" placeholder="Username">
                                                    <i class="la la-user"></i> -->
                                                </div><!--sn-field end-->
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <x-label for="password" :value="__('Password')" />

                                                        <x-input id="password" class="block mt-1 w-full text-dark"
                                                        type="password"
                                                        name="password"
                                                        required autocomplete="current-password" />
                                                    <!-- <input type="password" name="password" placeholder="Password">
                                                    <i class="la la-lock"></i> -->
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="checky-sec">
                                                    <div class="fgt-sec">
                                                        <input type="checkbox" name="cc" id="c1">
                                                        <label for="c1">
                                                            <span></span>
                                                        </label>
                                                        <small>{{ __('Lembrar-me') }}</small>
                                                    </div><!--fgt-sec end-->
                                                    @if (Route::has('password.request'))
                                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                    {{ __('Esqueceu a senha?') }}
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <button type="submit" value="submit">{{ __('Login') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="login-resources">
                                        <h4><a class="text-danger h6" href="{{route('register')}}">Se não tem uma conta, cadastra-se</a></h4>
                                        <ul>
                                            <li><a href="#" title="" class="fb"><i class="fa fa-facebook"></i>Login Via Facebook</a></li>
                                            <li><a href="#" title="" class="tw"><i class="fa fa-twitter"></i>Login Via Twitter</a></li>
                                        </ul>
                                    </div><!--login-resources end-->
                                </div><!--sign_in_sec end-->     
                            </div><!--login-sec end-->
                        </div>
                    </div>      
                </div><!--signin-pop end-->
            </div><!--signin-popup end-->
            <div class="footy-sec">
                <div class="container">
                    <ul>
                        <li><a href="#" title="">Help Center</a></li>
                        <li><a href="#" title="">Privacy Policy</a></li>
                        <li><a href="#" title="">Community Guidelines</a></li>
                        <li><a href="#" title="">Cookies Policy</a></li>
                        <li><a href="#" title="">Career</a></li>
                        <li><a href="#" title="">Forum</a></li>
                        <li><a href="#" title="">Language</a></li>
                        <li><a href="#" title="">Copyright Policy</a></li>
                    </ul>
                    <p><img src="assets/images/copy-icon.png" alt="">Copyright 2018</p>
                </div>
            </div><!--footy-sec end-->
        </div><!--sign-in-page end-->


    </div><!--theme-layout end-->



<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/lib/slick/slick.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/disabled.js"></script>
</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0235'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='../../../img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>
<!-- Mirrored from gambolthemes.net/html/workwise/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Oct 2018 09:39:01 GMT -->
</html>
