{{--
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Sign Up :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="{{URL::asset('admin/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="{{URL::asset('admin/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{URL::asset('admin/css/morris.css')}}" type="text/css"/>
    <!-- Graph CSS -->
    <link href="{{URL::asset('admin/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('admin/css/jquery-ui.css')}}">
    <!-- jQuery -->
    <script src="{{URL::asset('admin/js/jquery-2.1.4.min.js')}}"></script>
    <!-- //jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="{{URL::asset('admin/css/icon-font.min.css')}}" type='text/css' />
    <!-- //lined-icons -->
</head>
<body>
<div class="main-wthree">
    <div class="container">
        <div class="sin-w3-agile">
            <h2>Sign Up</h2>
            <form method="POST" action="{{ route('register') }}">

                <div class="username">
                    <span class="username">Username:</span>
                    <input type="text" name="name" class="name" placeholder="" required="">
                    <div class="clearfix"></div>
                </div>
                <div class="username">
                    <span class="username">Designation:</span>
                    <input type="text" name="designation" class="name" placeholder="" required="">
                    <div class="clearfix"></div>
                </div>
                <div class="username">
                    <span class="username">Email:</span>
                    <input type="text" name="email" class="name" placeholder="" required="">
                    <div class="clearfix"></div>
                </div>

                <div class="password-agileits">
                    <span class="username">Password:</span>
                    <input type="password" name="password" class="password" placeholder="" required="">
                    <div class="clearfix"></div>
                </div>
                <div class="password-agileits">
                    <span class="username">Confirm Password:</span>
                    <input type="password" name="password" class="password" placeholder="" required="">
                    <div class="clearfix"></div>
                </div>
                <div class="login-w3">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
