@extends('layouts.master')

@section('title', "Home marcos' teste")

@section('content')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Usuarios</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usrs as $urs)
                        <tr>
                            <td>{{$usr->id}}</td>
                            <td>{{$usr->name}}</td>
                            <td>{{$usr->email}}</td>
                            <td>{{$usr->active}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('style')
    <link rel="stylesheet" href="{{ asset('/css/home.css')}}">
@stop
@section('scripts')

@stop
