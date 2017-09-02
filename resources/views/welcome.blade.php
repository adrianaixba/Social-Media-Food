<!-- extends from the master.blade.php file -->
@extends('layout.master')
<!-- target a section, must match the key of the section -->
<!-- everything btwn section and endsection -->
@section('title')
    Welcome!
@endsection

@section('content')

    @include('includes.message-block')
    <div class="row">
        {{--sign up--}}
        {{--"md" is the size of the column--}}
        <div class="col-md-6">
            <h3>Sign up</h3>
            {{--this will turn into a link--}}
            <form action="{{route('signup')}}" method="post">
                {{--for alignment of form element inputs--}}
                <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                    <label for="email">Enter email</label>
                    {{--Request:: saves the previous values the user puts that were correct, so they don't have to retype that--}}
                    <input class="form-control" type="text" name="email" id="email" value="{{Request::old('email')}}">
                </div>

                {{--sign up information--}}
                <div class="form-group {{$errors->has('first_name') ? 'has-error' : ''}}">
                    <label for="first_name">Enter first name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name" value="{{Request::old('first_name')}}">
                </div>

                {{--last name form--}}
                {{--<div class="form-group {{$errors->has('last_name') ? 'has-error' : ''}}">--}}
                    {{--<label for="last_name">Enter last name</label>--}}
                    {{--<input class="form-control" type="text" name="last_name" id="last_name">--}}
                {{--</div>--}}

                {{--password--}}
                <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                    <label for="password">Enter password</label>
                    <input class="form-control" type="password" name="password" id="password" value="{{Request::old('password')}}">
                </div>

                {{--submit button--}}
                <button type="submit" class="btn btn-primary">Submit</button>
                {{--creates a special token per request to ensure safety--}}
                <input type ="hidden" name="_token" value="{{Session::token()}}">
            </form>
        </div>
        {{--Sign-in--}}
        <div class="col-md-6">
            <h3>Sign in</h3>
            <form action="{{ route('signin') }}" method="post">
                {{--for alignment of form element inputs--}}
                <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                    <label for="email">Enter email</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{Request::old('email')}}">
                </div>
                {{--password--}}
                <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                    <label for="password">Enter password</label>
                    <input class="form-control" type="password" name="password" id="password" value="{{Request::old('password')}}">
                </div>
                {{--submit button--}}
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type ="hidden" name="_token" value="{{Session::token()}}">
            </form>
        </div>
    </div>
@endsection