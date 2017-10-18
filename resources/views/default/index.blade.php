@extends('default.layouts.layout')

@section('navbar')
    @parent
@endsection

@section('header')
    @parent
@endsection

@section('sidebar')
    @parent
    <div class="sidebar-module">
        <h4>About</h4>
        <p4>Etim porta<em>sem malesuada magna</em>molis eusidos</p4>
    </div>
@endsection

@section('content')
    @include('default.content')
@endsection