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
        Update Todolist<br><br>
        @foreach($todolist as $detailData)
        {!! Form::open(['route'=>['todolist.update', $detailData->id]]) !!}
        {{method_field('PUT')}}
        
        {!! Form::label('title', 'Title:') !!}
        <br>
        {!! Form::text('title', $detailData->title) !!}
        <br><br>
        {!! Form::label('container', 'Container') !!}
        <br>
        {!! Form::textarea('container', $detailData->container) !!}
        <br><br>
        {!! Form::radio('status', 0, $detailData->status == 0 ? true:false) !!}
        
        {!! Form::label('status', 'Not Complete') !!}
        <br>
        {!! Form::radio('status', 1, $detailData->status == 1 ? true:false) !!}
        
        {!! Form::label('status', 'On Progress') !!}
        <br> 
        {!! Form::radio('status', 2, $detailData->status == 2 ? true:false) !!}
        
        {!! Form::label('status', 'Complete') !!}
        <br><br>
        {!! Form::submit('Submit') !!}
        @endforeach

    {!! Form::close() !!}
    <br><br>
    <button onclick="location.href='{{route('todolist.index')}}'">Back to Index</button>

    </body>
</html>