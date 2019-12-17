@extends('layouts.app')

{{-- <h1>ADMINISTRADOR</h1> --}}

@section('content')
    <div class="logo" id="login-button">
        <img src="{{asset('img/logowhite.png')}}" alt="logo">
    </div>
    <div id="container" class="container">
        <img src="{{asset('img/logowhite.png')}}" alt="logo" height="100px" width="100px">
        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <input id="email" type="email" placeholder="E-mail" class="email
            @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input id="cpf" type="text" placeholder="CPF" class="cpf
            @error('cpf') is-invalid @enderror" name="cpf"
            value="{{ old('cpf') }}" required autocomplete="cpf" autofocus>

            <input id="password" type="password" placeholder="Senha" class="senha
            @error('password') is-invalid @enderror" name="password"
            required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <button class="button-login" type="submit" >
                {{ __('Login') }}
            </button>
        </form>
    </div>
@endsection
