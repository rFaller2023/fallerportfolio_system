<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom CSS -->
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

        .btn-primary {
            background-color: #007bff; /* Blue button background */
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
            border-color: #0056b3;
        }

        /* Form styling */
        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
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

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit User Form</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}" enctype="multipart/form-data"> Back</a>
            </div>
        </div>
    </div>
   
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
 
    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="email"><strong>Email Address:</strong></label>
                    <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="Enter Email Address">
                    @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
            
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
          
    </form>
</div>

</body>
</html>
