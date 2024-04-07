<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Company Form - Laravel 10 CRUD</title>
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

        .form-group label {
            font-weight: bold;
        }

        .alert {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>Experiences</h2>
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

    <form action="{{ route('experiences.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Title">
                    @error('title')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="year">Year:</label>
                    <input type="text" name="year" id="year" class="form-control" placeholder="Year">
                    @error('year')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="details">Details:</label>
                    <input type="text" name="details" id="details" class="form-control" placeholder="Details">
                    @error('details')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
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
            <div class="col-md-12 text-right">
                <a class="btn btn-danger btn-back" href="{{ route('experiences.index') }}">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
