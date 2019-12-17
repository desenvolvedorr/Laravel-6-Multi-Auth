@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-1">
            <span>
                <a href="/consultant">
                    <h2>CONSULTORES</h2>
                </a>
            </span>

        </div>
        <div class="card-1">
            <span>
                <a href="/customer">
                    <h2>CLIENTES</h2>
                </a>
            </span>
        </div>
        <div class="card-1">
            <span>
                <h2>TIPOS DE CONSULTORIA</h2>
            </span>
        </div>

        <div class="card-1">
            <span>
                <h2>CONSULTORIAS</h2>
            </span>
        </div>
        <div class="card-1">
            <span>
                <h2>RECEBER</h2>
            </span>
        </div>
        <div class="card-1">
            <span>
                <h2>PAGAR</h2>
            </span>
        </div>
        <div class="card-1">
            <span>
                <h2>CONFIGURAÇÕES</h2>
            </span>
        </div>
    </div>
@endsection
@section('javascript')
        <script src="{{ asset('site/jquery.mask.min.js') }}"></script>
        {{-- <script src="{{ asset('js/registrationajaxscript.js') }}"></script> --}}
@endsection
