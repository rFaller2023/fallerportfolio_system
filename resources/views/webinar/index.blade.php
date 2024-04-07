@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Webinar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Light grey background */
            padding-top: 50px;
        }

        .container {
            background-color: #fff; /* White container background */
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            padding: 30px;
            margin-top: 20px;
        }

        h2 {
            color: #000000; /* Blue heading color */
            margin-bottom: 20px;
        }

        .btn-create {
            margin-bottom: 20px;
        }

        th {
            background-color: #a34e4e;
            color: #000000;
        }

        .btn-primary,
        .btn-primary:hover {
            background-color: #007bff; /* Blue button background and hover color */
            border-color: #007bff; /* Blue button border color */
        }

        .btn-danger,
        .btn-danger:hover {
            background-color: #dc3545; /* Red button background and hover color */
            border-color: #dc3545; /* Red button border color */
        }

        .btn-back {
            margin-top: 20px;
            margin-right: 10px;
        }
    </style>
</head>
<body>

<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Webinar Table</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success btn-create" href="{{ route('webinars.create') }}"> Create Webinar</a>
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
            <th>Certificate</th>
            <th>Agenda</th>
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
        <a class="btn btn-primary btn-back" href="{{ route('home') }}" enctype="multipart/form-data"> Back</a>
    </div>
</div>

</body>
</html>
@endsection