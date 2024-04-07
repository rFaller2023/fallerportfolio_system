@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
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

        .btn-success:hover {
            background-color: #218838; /* Darker green on hover */
            border-color: #218838;
        }
        th {
            background-color: #a34e4e;
            color: #fff;
        }

        .btn-primary {
            background-color: #007bff; /* Blue button background */
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
            border-color: #0056b3;
        }

        .btn-danger {
            background-color: #dc3545; /* Red button background */
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333; /* Darker red on hover */
            border-color: #c82333;
        }

        .table th, .table td {
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
                <h2>Blog Table</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('blogs.create') }}"> Create Blog</a>
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
            <th>Image</th>
            <th>Content</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($blog as $blogs)
        <tr>
            <td>{{ $blogs->id }}</td>
            <td>{{ $blogs->title }}</td>
            <td>
                @if($blogs->image)
                <img src="{{'storage/'. $blogs->image}}" alt="" style="width: 50px; height: 50px">
                @else
                <img src="assets/img/hero-bg.jpg" alt="" style="width: 50px; height: 50px">
                @endif
            </td>
            <td>{{ $blogs->content }}</td>
            <td>
                <form action="{{ route('blogs.destroy',$blogs->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('blogs.edit',$blogs->id) }}">Edit</a>
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