@extends('plantilla')

@section('title')
    Registro
@endsection

@section('principal')
<div class="row container-registro">
    <div class="col-lg-6 col-sm-12 registro">
                       
                    <form class="formulario-de-registro" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <h2>REGISTRO</h2>
                        <br>
                            <label for="name">Nombre</label>
                                <input id="name" type="text"  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="surname" >{{ __('Apellido') }}</label>     
                                <input id="surname" type="text"  @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>
                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="email" >{{ __('E-Mail') }}</label>
                                <input id="email" type="email"  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror   
                            <label for="password" >{{ __('Password') }}</label>
                                <input id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="password-confirm" >{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password">
                             <br>
                            <div class="button">
                                <button type="submit" class="btn btn-primary">
                                    ENVIAR
                                </button>
                            </div>
                    </form>
            </div>
    <div class="col-lg-6 d-none d-sm-block imagen-lateral"></div>
</div>
@endsection
