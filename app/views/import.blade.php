<html>
    <head>
    </head>
    <body>
        {{ Form::open(array('url' => 'import')) }}
        {{ Form::text('userName', 'freedkr1') }}
        {{ Form::password('passWord') }}
        {{ Form::submit('Click Me!') }}
        {{ Form::close() }}
        @foreach($errors->all() as $error)
        <p class="alert alert-danger">{{$error}}</p>
        @endforeach
    </body>
</html>
