@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Educational Attainment Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

        .btn-success {
            background-color: #28a745; /* Green button background */
            border-color: #28a745;
        }

        .btn-primary,
        .btn-primary:hover {
            background-color: #007bff; /* Blue button background */
            border-color: #007bff;
        }

        .btn-danger,
        .btn-danger:hover {
            background-color: #dc3545; /* Red button background */
            border-color: #dc3545;
        }

        .table {
            background-color: #ffffff; /* White table background */
        }

        .table th,
        .table td {
            vertical-align: middle;
        }
        th {
            background-color: #a34e4e;
            color: #000000;
        }
    </style>
</head>
<body>

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Educational Attainment Table</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('educationals.create') }}"> Create Educational Attainment</a>
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
            <th>Grade Level</th>
            <th>School Name</th>
            <th>School Year</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($educationals as $educational)
        <tr>
            <td>{{ $educational->id }}</td>
            <td>{{ $educational->grade_level }}</td>
            <td>{{ $educational->school_name }}</td>
            <td>{{ $educational->school_year }}</td>
            <td>{{ $educational->description }}</td>
            <td>
                <form action="{{ route('educationals.destroy',$educational->id) }}" method="Post">
                    <a class="btn btn-primary" href="{{ route('educationals.edit',$educational->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('home') }}">Back</a>
    </div>
</div>

</body>
</html>
@endsection