<!DOCTYPE html>
<html>

<!-- Mirrored from askbootstrap.com/preview/miver/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Oct 2020 08:14:33 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gurdeep singh osahan">
    <meta name="author" content="Gurdeep singh osahan">
    <title>jobs website</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/fav.svg">

    <link href="{{asset('public_theme/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('public_theme/vendor/fontawesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <link href="{{asset('public_theme/vendor/icons/css/materialdesignicons.min.css')}}" media="all" rel="stylesheet" type="text/css">

    <link href="{{asset('public_theme/vendor/slick-master/slick/slick.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('public_theme/vendor/lightgallery-master/dist/css/lightgallery.min.css')}}" rel="stylesheet">

    <link href="{{asset('public_theme/vendor/select2/css/select2-bootstrap.css')}}" />
    <link href="{{asset('public_theme/vendor/select2/css/select2.min.css')}}" rel="stylesheet">

    <link href="{{asset('public_theme/css/style.css')}}" rel="stylesheet">
</head>
<body>

<div class="bg-white">
    <div class="container">
        <div class="row justify-content-center align-items-center d-flex vh-100">
            <div class="col-lg-4 mx-auto">
                <div class="osahan-login py-4">
                    <div class="text-center mb-4">
                         <a href="index-2.html"><img src="{{asset('public_theme/images/logo.png')}}"  ></a>
               
                        
                        <h5 class="font-weight-bold mt-3">Join itpath</h5>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="mb-1">{{ __('Name') }}</label>
                                    <div class="position-relative icon-form-control">
                                        <i class="mdi mdi-account position-absolute"></i>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="mb-1">{{ __('E-Mail Address') }}</label>
                            <div class="position-relative icon-form-control">
                                <i class="mdi mdi-email-outline position-absolute"></i>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mb-1">{{ __('Password') }}</label>
                            <div class="position-relative icon-form-control">
                                <i class="mdi mdi-key-variant position-absolute"></i>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mb-1">{{ __('Confirm Password') }}</label>
                            <div class="position-relative icon-form-control">
                                <i class="mdi mdi-key-variant position-absolute"></i>
                                <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mb-1">You agree to the Miver <a href="#">User Agreement</a>, <a href="#">Privacy Policy</a>, and <a href="#">Cookie Policy</a>.</label>
                        </div>
                        <button class="btn btn-success btn-block text-uppercase" type="submit">{{ __('Register') }}</button>

                        <div class="py-3 d-flex align-item-center">
                            <a href="forgot-password.html">Forgot password?</a>
                            <span class="ml-auto"> Already on Miver? <a href="http://127.0.0.1:8000/login">Sign in</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/jquery/jquery.min.js" type="ecb7038e94e4af7c30850274-text/javascript"></script>
<script src="{{asset('public_theme/vendor/bootstrap/js/bootstrap.bundle.min.js')}}" type="ecb7038e94e4af7c30850274-text/javascript"></script>


<script src="https://askbootstrap.com/" type="ecb7038e94e4af7c30850274-text/javascript"></script>
<script src="https://askbootstrap.com/" type="ecb7038e94e4af7c30850274-text/javascript"></script>

<script src="{{asset('public_theme/vendor/slick-master/slick/slick.js')}}" type="ecb7038e94e4af7c30850274-text/javascript" charset="utf-8"></script>

<script src="{{asset('public_theme/vendor/lightgallery-master/dist/js/lightgallery-all.min.js')}}" type="ecb7038e94e4af7c30850274-text/javascript"></script>

<script src="{{asset('public_theme/vendor/select2/js/select2.min.js')}}" type="ecb7038e94e4af7c30850274-text/javascript"></script>

<script src="{{asset('public_theme/js/custom.js')}}" type="ecb7038e94e4af7c30850274-text/javascript"></script>
<script src="{{asset('public_theme/../../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="ecb7038e94e4af7c30850274-|49" defer=""></script></body>

<!-- Mirrored from askbootstrap.com/preview/miver/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Oct 2020 08:14:55 GMT -->
</html>
