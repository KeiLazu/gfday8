<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Detail</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" 
        integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" 
        crossorigin="anonymous">
    </head>
    <body>
    {{--  @foreach($todolist as $detailData)  --}}
        {!! Form::open(['method'=>'GET', 'route'=>['todolist.edit', $todolist->id]]) !!}

        Title: 
        {{$todolist->title}}
        <br><br>
        Container: 
        {{$todolist->container}}
        <br><br>
        Status:

        @php
        switch ($todolist->status) {
        case 0:
            echo "Not Complete";
            break;
        case 1:
            echo "On Progress";
            break;
        case 2:
            echo "Completed";
            break;
        }
        @endphp <br><br>

        {!! Form::submit('Edit') !!}
        
        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'route'=>['todolist.destroy', $todolist->id]]) !!}
        {{method_field('DELETE')}}
        
        {!! Form::submit('Delete') !!}
        
        {!! Form::close() !!}

        {{--  @endforeach  --}}
    
    <br><br>
    <button onclick="location.href='{{route('todolist.index')}}'">Back to Index</button>

    </body>
</html>