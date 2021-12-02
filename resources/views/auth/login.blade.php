<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Admin Login | CDC Membership Portal </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for " name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
       <!--  <link href="{!! asset('css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css" /> -->
     <!--    <link href="{!! asset('css/simple-line-icons.min.css') !!}" rel="stylesheet" type="text/css" /> -->
        <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('css/bootstrap-switch.min.css') !!}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
       <!--  <link href="{!! asset('css/select2.min.css') !!}" rel="stylesheet" type="text/css" /> -->
        <!-- <link href="{!! asset('css/select2-bootstrap.min.css') !!}" rel="stylesheet" type="text/css" /> -->
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{!! asset('css/components.min.css') !!}" rel="stylesheet" id="style_components" type="text/css" />
       <!--  <link href="{!! asset('css/plugins.min.css') !!}" rel="stylesheet" type="text/css" /> -->
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{!! asset('css/login-5.min.css') !!}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
    <!-- END HEAD -->
    <style type="text/css">
        .btn.green:not(.btn-outline) {
    color: #FFF;
    background-color: #033bad !important;
    border-color: #033bad !important;
    border-radius: 7px !important;
}
.user-login-5 .login-logo {
    position: absolute;
    top: 2.5em;
    left: 57.5em !important;
}
    </style>
</head>
    <body class=" login">
        <!-- BEGIN : LOGIN PAGE 5-1 -->
        <div class="user-login-5">
            <div class="row bs-reset">
                <div class="col-md-6 bs-reset mt-login-5-bsfix">
                    <div class="login-bg" style="background-image:url('{{ asset('images/bg2.jpg') }}');">
                        <img class="login-logo" width="200px" height="150px" src="{{ asset('images/cdc.png') }}" /> </div>
                </div>
                <div class="col-md-6 login-container bs-reset mt-login-5-bsfix">
                    <div class="login-content">
                        <img width="100%" height="45px" src="{{ asset('images/logo.png')}}">
                        <form class="login-form" method="POST" action="{{ route('login') }}">{{ csrf_field() }}
                            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                   @if ($errors->has('email'))
                                    <span class="help-block alert alert-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" placeholder="email" name="email" value="{{ old('email') }}" required autofocus/>
                                    </div>
                                  
                                <div class="col-xs-6{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Password" name="password" value="{{ old('email') }}" required autofocus/>
                                     @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif </div>
                                   
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="rem-password">
                                        <label class="rememberme mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" name="remember" value="1" /> Remember me
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-8 text-right">
                                    <div class="forgot-password">
                                        <a href="{{ route('password.request') }}" id="forget-password" class="forget-password">Forgot Password?</a>
                                    </div>
                                    <button class="btn green" type="submit">Login</button>
                                </div><br><br>
                                <div class="col-sm-8 text-right">
                                    <a class="btn " href="{{ route('register') }}" style="
    float: left;
    margin-top: 41px;
    position: relative;
    background: #4CAF50;
    color: #fff;
    border-radius: 7px !important;
">Create An Account</a>
                                </div>
                            </div>
                        </form>
                        <!-- BEGIN FORGOT PASSWORD FORM -->
                       <!--  <form class="forget-form" action="javascript:;" method="post">
                            <h3 class="font-green">Forgot Password ?</h3>
                            <p> Enter your e-mail address below to reset your password. </p>
                            <div class="form-group">
                                <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                            <div class="form-actions">
                                <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                                <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                            </div>
                        </form> -->
                        <!-- END FORGOT PASSWORD FORM -->
                    </div>
                    <!-- <div class="login-footer">
                        <div class="row bs-reset">
                            <div class="col-xs-5 bs-reset">
                                <ul class="login-social">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-7 bs-reset">
                                <div class="login-copyright text-right">
                                    <p>Copyright &copy; Keenthemes 2015</p>
                                </div>
                            </div>
                        </div> 
                    </div> -->
                </div>
            </div>
        </div>
        <!-- END : LOGIN PAGE 5-1 -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
       <!--  <script src="{!! asset('js/jquery.min.js') !!}" type="text/javascript"></script> -->
        <script src="{!! asset('js/bootstrap.min.js') !!}" type="text/javascript"></script>
        <!-- <script src="{!! asset('js/js.cookie.min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('js/jquery.slimscroll.min.js') !!}" type="text/javascript"></script> -->
    <!--     <script src="{!! asset('js/jquery.blockui.min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('js/bootstrap-switch.min.js') !!}" type="text/javascript"></script> -->
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{!! asset('js/jquery.validate.min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('js/additional-methods.min.js') !!}" type="text/javascript"></script>
       <!--  <script src="{!! asset('js/select2.full.min.js') !!}" type="text/javascript"></script> -->
       <!--  <script src="{!! asset('js/jquery.backstretch.min.js') !!}" type="text/javascript"></script> -->
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{!! asset('js/app.min.js') !!}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('js/login-5.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>