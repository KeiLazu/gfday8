<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    Create new Todolist<br><br>
    {!! Form::open(['route'=>'todolist.store']) !!}
        
        {!! Form::label('title', 'Title:') !!}
        <br>
        {!! Form::text('title', NULL) !!}
        <br><br>
        {!! Form::label('container', 'Container') !!}
        <br>
        {!! Form::textarea('container', NULL) !!}
        <br><br>
        {!! Form::radio('status', 0, true) !!}
        
        {!! Form::label('status', 'Not Complete') !!}
        <br>
        {!! Form::radio('status', 1, false) !!}
        
        {!! Form::label('status', 'On Progress') !!}
        <br> 
        {!! Form::radio('status', 2, false) !!}
        
        {!! Form::label('status', 'Complete') !!}
        <br><br>
        {!! Form::submit('Submit') !!}
    {!! Form::close() !!}
    <br><br>
    <button onclick="location.href='{{route('todolist.index')}}'">Back to Index</button>

</body>
</html>