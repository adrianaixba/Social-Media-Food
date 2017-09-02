<!doctype html>
<html>
<!--html lang="{{ config('app.locale') }}"-->
    <head>
    	<!-- yield: something is inserted here(placeholder), "title" is the name; fuse will be able to access this -->
        <title>@yield('title')</title>
        {{--bootstrap link: --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
              crossorigin="anonymous">
        <link rel="stylesheet" href="{{URL::to('src/css/main.css')}}">
    </head>
    <body>
        {{--includes navigtion bar from the includes folder/header file--}}
        @include('includes.header')
        <div class="container">
        	<!-- content will live here -->
        	@yield('content')
        </div>
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="{{ URL::to('src/js/app.js') }}"></script>
    </body>
</html>
