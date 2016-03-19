@extends('administrator.adminapp_no_sidebar')

@section('content')

        <section class="body-sign">
            <div class="center-sign">
                <a href="/" class="logo pull-left">

                    {!! Html::image('assets/admin/mages/logo.png','Admin Logo',array('height'=>'54' ))!!}
                </a>

                <div class="panel panel-sign">
                    <div class="panel-title-sign mt-xl text-right">
                        <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {!! csrf_field() !!}

                            <div class="form-group mb-lg{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label>Username</label>
                                <div class="input-group input-group-icon">
                                    <input type="email" class="form-control input-lg" name="email" value="{{ old('email') }}">
                                    <span class="input-group-addon">
                                        <span class="icon icon-lg">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </span>
                                </div>
                                @if ($errors->has('email'))
                                    <p class="text-danger"><strong>{{ $errors->first('email') }}</strong></p>
                                @endif
                            </div>

                            <div class="form-group mb-lg{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="clearfix">
                                    <label class="pull-left">Password</label>
                                    <a class="pull-right" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                                </div>
                                <div class="input-group input-group-icon">
                                    <input type="password" class="form-control input-lg" name="password">
                                    <span class="input-group-addon">
                                        <span class="icon icon-lg">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                    </span>
                                    
                                </div>
                                @if ($errors->has('password'))
                                    <p class="text-danger"><strong>{{ $errors->first('password') }}</strong></p>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="checkbox-custom checkbox-default">
                                        <input type="checkbox" name="remember"> 
                                        <label for="RememberMe">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <button type="submit" class="btn btn-primary hidden-xs">Sign In</button>
                                    <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
                                </div>
                            </div>
                            <!-- 
                            <span class="mt-lg mb-lg line-thru text-center text-uppercase">
                                <span>or</span>
                            </span>

                            <div class="mb-xs text-center">
                                <a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>
                                <a class="btn btn-twitter mb-md ml-xs mr-xs">Connect with <i class="fa fa-twitter"></i></a>
                            </div> 
                            -->

                            <p class="text-center">Don't have an account yet? <a href="{{ url('/register') }}">Sign Up!</a>

                        </form>
                    </div>
                </div>

                <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2016 <strong>Farmersmarket</strong>. All Rights Reserved.</p>
            </div>
        </section>



@endsection
