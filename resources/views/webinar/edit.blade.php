<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Company Form - Laravel 10 CRUD</title>
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
            color: #007bff; /* Blue heading color */
            margin-bottom: 30px;
        }

        .form-group label {
            color: #495057; /* Label color */
            font-weight: bold; /* Bold label text */
        }

        .form-control {
            border-color: #ced4da; /* Form input border color */
        }

        .btn-primary {
            background-color: #007bff; /* Blue button background */
            border-color: #007bff; /* Blue button border */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
            border-color: #0056b3; /* Darker blue border on hover */
        }

        .btn-danger {
            background-color: #dc3545; /* Red button background */
            border-color: #dc3545; /* Red button border */
        }

        .btn-danger:hover {
            background-color: #c82333; /* Darker red on hover */
            border-color: #c82333; /* Darker red border on hover */
        }

        .btn-back {
            margin-right: 10px; /* Add space between buttons */
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>Edit Webinar Form</h2>
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

    <form action="{{ route('webinars.update', $webinar->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="certificate">Certificate:</label>
                    <input type="text" name="certificate" id="certificate" value="{{$webinar->certificate}}" class="form-control" placeholder="Certificate">
                    @error('grade_level')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="agenda">Agenda:</label>
                    <input type="text" name="agenda" id="agenda" value="{{$webinar->agenda}}" class="form-control" placeholder="Agenda">
                    @error('agenda')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" name="description" id="description" value="{{$webinar->description}}" class="form-control" placeholder="Description">
                    @error('description')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-right">
                <a class="btn btn-danger btn-back" href="{{ route('webinars.index') }}">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
