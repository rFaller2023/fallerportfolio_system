<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Blog Form - Laravel 10 CRUD</title>
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

        .form-group {
            margin-bottom: 20px;
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

        .alert {
            margin-top: 10px;
        }

        .alert-danger {
            color: #721c24; /* Red alert text color */
            background-color: #f8d7da; /* Red alert background color */
            border-color: #f5c6cb; /* Red alert border color */
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>Edit Blog Form</h2>
        </div>
    </div>

    @if(session('status'))
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        </div>
    </div>
    @endif

    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" value="{{$blog->title}}" class="form-control" placeholder="Title">
                    @error('title')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" id="image" class="form-control" placeholder="Image">
                    @error('image')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="content">Content:</label>
                    <textarea name="content" id="content" class="form-control" placeholder="Content" rows="5">{{$blog->content}}</textarea>
                    @error('content')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-right">
                <a class="btn btn-danger btn-back" href="{{ route('blogs.index') }}">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
