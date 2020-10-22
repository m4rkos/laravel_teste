@extends('layouts.master')

@section('title', "Home marcos' teste")

@section('content')
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="display-4">Hello, avaliador!</h1>
                    <p class="lead">Para conferir o teste, clique no botão iniciar logo abaixo.</p>
                    <hr class="my-4">
                    <p>Teste de <b>Marcos Eduardo</b>.</p>
                    <a class="btn btn-primary btn-lg" href="/users" role="button">Iniciar</a>
                </div>
            </div>
        </div>
    </div>
@stop

@section('style')
    <link rel="stylesheet" href="{{ asset('/css/home.css')}}">
@stop
@section('scripts')

@stop
