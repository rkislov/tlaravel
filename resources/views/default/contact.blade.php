@extends('default.layouts.layout')

@section('content')
    <div class="col-md-9">
        <pre>
        {{print_r(Session::all())}}
        </pre>
        <div class="">
            <h2>Contact us</h2>
        </div>

        <p>
            this is template for a simple marketing or information website.
        </p>
        <form method="post" action="{{ route('contact',array('name'=>'hello')) }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}" placeholder="John Smith">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}" placeholder="admin@ya.ru">
            </div>
            <div class="form-group">
                <label for="site">Site</label>
                <input type="text" name="site" class="form-control" id="site" value="{{old('site')}}" placeholder="yandex.ru">
            </div>
            <div class="form-group">
                <label for="text">Text</label>
                <textarea name="text" id="text" class="form-control" row=5 placeholder="Some text">{{old('text')}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @endsection
