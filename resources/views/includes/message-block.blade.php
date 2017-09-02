@if(count($errors) > 0)
    <div class="row">
        <div class="col-md-4 col-md-offset-4 error">
            {{--goes through all the errors--}}
            <ul>
                {{--all function outputs array of errors--}}
                @foreach($errors->all() as $error)
                    {{--list holds the errors--}}
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

@if(Session::has('message'))
    <div class="row">
        <div class="col-md-4 col-md-offset-4 success">
           {{Session::get('message')}}
        </div>
    </div>
@endif