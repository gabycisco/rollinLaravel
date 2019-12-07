@extends('plantilla')

@section('title','Login')

@section('principal')
<div class="row container-registro">
        <div class="col-lg-6 d-none d-sm-block imagen-lateral-inicio"></div>
    
        <div class="col-lg-6 col-sm-12 registro">
           

                <div class="">
                    <form class="formulario-de-registro" method="POST" action="{{ route('login') }}">
                        @csrf
                        <h2>INICIAR SESIÓN</h2>
                        <br>
                        <div class="">
                            <label for="email">{{ __('E-Mail Address') }}</label>

                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                       

                        <div class="">
                            <label for="password" >{{ __('Password') }}</label>

                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>

                       
                            
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <br>
                            
                        

                       
                           
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            
                       
                    </form>
                </div>
            </div>
</div>
@endsection
