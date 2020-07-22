<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                
	<div class="limiter">
        
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form  method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                    @csrf
					<span class="login100-form-title p-b-49">
						{{ __('Login') }}
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "email is reauired">
						<span class="label-input100">{{ __('E-Mail Address') }}</span>
						<input  id="email"class="input100"  type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Type your email addres">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                        
                        @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    
                   




					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">{{ __('Password') }}</span>
						<input  id="password"  type="password" class="input100" class="form-control @error('password') is-invalid @enderror"   name="password" required autocomplete="current-password" placeholder="Type your password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                        
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    
                    <br/>

					
					<div  class="container-login100-form-btn">
                        <div class="col-md-8 offset-md-4">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn">
                                {{ __('Login') }}
                            </button>
                        </div>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    

                    

					
				</form>
			</div>
		</div>
	</div>
	
            </div>
        </div>
    </body>
</html>
