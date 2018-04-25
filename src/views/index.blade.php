<!DOCTYPE>
<html>
    <head>

    </head>
    <body>
        <h1>hello from view and controller</h1>
        @foreach($results as $result)
            <li>{{ $result->name }}</li>
            @endforeach
    </body>
</html>