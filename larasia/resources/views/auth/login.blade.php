@extends('auth.layouts.app')

@section('content')

    <center>
      <div id="loginWrapper">
         <div id="loginBox">    
            <div id="loginBox-head">
            <div id="loginBoxhead_img"><img src="{{ URL::asset('auth/images/logo.png') }}" alt="" width="45" height="45" /></div>
                <h1>LaraSIA</h1>
            </div>
            <div id="loginBox-title">
               <h2>Portal Akademik</h2>
               <img src="{{ URL::asset('auth/images/loginBox-title-img-mid.jpeg') }}" alt="">
            </div>
             <div id="loginBox-body">

               <form id="form-login" name="form-login"  action="{{ url('/login') }}" method="post" autocomplete="off">
               {!! csrf_field() !!}
               
                  <label for="aid_username">Username</label>
                  <input type="text" id="username" name="username" value="{{ old('username') }}" onBlur="clearPasswordField();" />
                  
                  @if ($errors->has('username'))
                      <br><span class="help-block">
                          <strong>{{ $errors->first('username') }}</strong>
                      </span>
                  @endif

                  <br />
                  <label for="aid_password">Password</label>
                  <input type="password" id="password" name="password" value="" />
                  @if ($errors->has('password'))
                      <br><span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif 
                  <br />
                  <label> </label>
                    <input class="button" type="submit" value="Login" />

               </form>
            </div>
            <div id="loginBox-foot"></div>
         </div>
        </div>  
   </center>

<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email"  >

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
