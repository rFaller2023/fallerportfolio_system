@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Educational</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
        }

        .container {
            background-color: #ffffff; /* White container background */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Shadow effect */
            padding: 30px;
            margin-top: 50px;
        }

        h2 {
            margin-bottom: 20px;
        }

        .btn-success,
        .btn-success:hover {
            background-color: #28a745; /* Green button background */
            border-color: #28a745;
        }

        .btn-primary,
        .btn-primary:hover {
            background-color: #007bff; /* Blue button background */
            border-color: #007bff;
        }
        th {
            background-color: #a34e4e;
            color: #000000;
        }
        .btn-danger,
        .btn-danger:hover {
            background-color: #dc3545; /* Red button background */
            border-color: #dc3545;
        }

        .alert {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Experience Table</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('experiences.create') }}"> Create Experiences</a>
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
            <th>Title</th>
            <th>Year</th>
            <th>Details</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($experiences as $experience)
        <tr>
            <td>{{ $experience->id }}</td>
            <td>{{ $experience->title }}</td>
            <td>{{ $experience->year }}</td>
            <td>{{ $experience->details }}</td>
            <td>
                @if($experience->image)
                <img src="{{'storage/'. $experience->image}}" alt="" style="width: 50px; height: 50px">
                @else
                <img src="assets/img/hero-bg.jpg" alt="" style="width: 50px; height: 50px">
                @endif
            </td>
            <td>
                <form action="{{ route('experiences.destroy',$experience->id) }}" method="Post">
                    <a class="btn btn-primary" href="{{ route('experiences.edit',$experience->id) }}">Edit</a>
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
</div>
</body>
</html>
@endsection