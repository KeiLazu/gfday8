<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To Do List Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" 
    integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" 
    crossorigin="anonymous">
</head>
<body>
    <?php
        // welcome to the jungle
    ?>

    <h1>To Do List</h1>
    <div class="container">
        <div class="row">
            <div class="col"><button onclick="location.href='{{route('todolist.create')}}'">Create</button><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-3">Title</div>
            <div class="col-7">Container</div>
            <div class="col-2"></div>
        </div>
        <div class="row">
            @foreach($todolistdata as $data)
                <div class="col-3">
                    {{$data->title}}
                </div>
                <div class="col-7">
                    {{$data->container}}
                </div>
                <div class="col-2">
                    
                    {!! link_to_route('todolist.show', 'Detail', $data->id, ['class' => 'btn btn-default']) !!}
                    
                </div>
            @endforeach
        </div>
    </div>
    <button onclick="location.href='/'">Back</button>

</body>
</html>