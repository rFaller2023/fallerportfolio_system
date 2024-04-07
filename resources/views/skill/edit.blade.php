<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Company Form - Laravel 10 CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>Edit Skills Form</h2>
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

    <form action="{{ route('skills.update', $skill->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="skill_name">Skill Name:</label>
                    <input type="text" name="skill_name" id="skill_name" value="{{$skill->skill_name}}"  class="form-control" placeholder="Skill_Name">
                    @error('skill_name')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="percentage">Percentage:</label>
                    <input type="text" name="percentage" id="percentage" value="{{$skill->percentage}}"  class="form-control" placeholder="Percentage">
                    @error('percentage')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-right">
                <a class="btn btn-danger btn-back" href="{{ route('skills.index') }}">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

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

   

    .alert {
        margin-top: 10px;
    }
</style>

</body>
</html>
