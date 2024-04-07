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
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Shadow for container */
            padding: 20px;
            margin-top: 50px;
        }
        h2 {
            color: #007bff; /* Blue heading color */
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        .form-control {
            border-color: #ced4da; /* Gray border for form controls */
        }
        .btn-primary {
            background-color: #007bff; /* Blue button background color */
            border-color: #007bff; /* Blue button border color */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
            border-color: #0056b3; /* Darker blue border on hover */
        }
        .btn-danger {
            background-color: #dc3545; /* Red button background color */
            border-color: #dc3545; /* Red button border color */
        }
        .btn-danger:hover {
            background-color: #c82333; /* Darker red on hover */
            border-color: #bd2130; /* Darker red border on hover */
        }
        .alert {
            margin-top: 10px;
        }
        .alert-danger {
            color: #721c24; /* Dark red for danger alerts */
            background-color: #f8d7da; /* Light red background for danger alerts */
            border-color: #f5c6cb; /* Lighter red border for danger alerts */
        }
        .btn-back {
            margin-right: 10px;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>About</h2>
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

    <form action="{{ route('abouts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                    @error('name')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" name="address" id="address" class="form-control" placeholder="Address">
                    @error('address')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="text" name="age" id="age" class="form-control" placeholder="Age">
                    @error('age')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone_number">Phone Number:</label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Phone_Number">
                    @error('city')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    @error('email')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <input type="text" name="gender" id="gender" class="form-control" placeholder="Gender">
                    @error('gender')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-12 text-right">
                <a class="btn btn-danger btn-back" href="{{ route('abouts.index') }}">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
