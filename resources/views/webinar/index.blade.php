<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Webinar</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Webinar Table</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('webinars.create') }}"> Create Webinar</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th> Certificate</th>
            <th> Agenda</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($webinars as $webinar)
        <tr>
            <td>{{ $webinar->id }}</td>
            <td>{{ $webinar->certificate }}</td>
            <td>{{ $webinar->agenda }}</td>
            <td>{{ $webinar->description }}</td>



            <td>
                <form action="{{ route('webinars.destroy',$webinar->id) }}" method="Post">
    
                    <a class="btn btn-primary" href="{{ route('webinars.edit',$webinar->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('home') }}" enctype="multipart/form-data"> Back</a>
    </div>
</body>
</html>