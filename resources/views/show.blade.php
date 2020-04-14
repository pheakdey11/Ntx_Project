<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" href="C:\Users\PHEAKDEY\Documents\Project Website\bootstrap\font-awesome\css\all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid"><br />
        <a href="create" class="btn btn-success">Add Member</a>
        <div class="row">
            @foreach($member as $members)
            <div class="col-md-3 mt-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <tr>
                                <p><img src="{{asset('img/' . $members->image)}}" width="100px" height="120px"
                                        class="mt-2" alt="image"></p>
                            </tr>
                            <tr>
                                <a class="fa fa-edit ml-3" style="color:blue" href="edit/{{ $members->id }}"></a>
                                <a class="fa fa-minus-circle ml-1" style="color:red" href=""></a>
                            </tr>
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <tr>
                                    <p>{{$members->id}}</p>
                                    <p>Name: {{$members->name}}</p>
                                    <p>ID: {{$members->card}}</p>
                                    <p>Level: {{$members->level}}</p>
                                    <p>Position: {{$members->position}}</p>
                                </tr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</body>

</html>
