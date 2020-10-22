@extends('layouts.master')

@section('title', 'Olá')

@section('content')
    <div class="container">
        <div class="card border">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('create_users') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Nome</label>
                                        <input type="text" class="form-control" name="name" id="name" aria-describedby="nameid" placeholder="Nome ...">
                                        <small id="nameid" class="form-text text-muted">digite nome</small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-9">
                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailid" placeholder="*****@****.com">
                                        <small id="emailid" class="form-text text-muted">digite o e-mail</small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label for="active">Situação</label>
                                        <select class="form-control" name="active" id="active">
                                            <option value="1">Ativo</option>
                                            <option value="0">Inativo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <button class="btn btn-primary" btn-lg btn-block>
                                        Registrar
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('style')

@stop
@section('scripts')

@stop
