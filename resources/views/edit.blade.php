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
    <form action="updateimg/{{ $members->id }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="modal-body" id="dynamic-content">
            <input type="hidden" name="id" id="id" value="{{ $members->id }}"> 
            <div class="form-group row">
                <label for="exampleFormControlFile1" class="col-md-4 col-form-label text-md-right">File Images:</label>
                <div class="col-md-6">
                <input type="file" class="form-control-file col-form-label" id="image" name="image" value="{{ $members->image }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="Name" class="col-md-4 col-form-label text-md-right">Name:</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="name" name="name" value="{{ $members->name }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="id" class="col-md-4 col-form-label text-md-right">ID:</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="card" name="card" value="{{ $members->card }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="level" class="col-md-4 col-form-label text-md-right">Level:</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="level" name="level" value="{{ $members->level }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="position" class="col-md-4 col-form-label text-md-right">Position:</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="position" name="position" value="{{ $members->position }}">
                </div>
            </div>
            <div class="col-md-6 offset-md-1">
                <button type="submit" class="btn btn-primary col-form-label">Save Member</button>
            </div>
        </form>
</body>
</html>