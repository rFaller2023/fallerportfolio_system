@extends('about.layout')
@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>About Table</h2>
            </div>
            <div class="pull-right mb-2">
                @if(Auth::User()->role == 'admin')
               
            @endif
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <div class = "table-responsive">
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Age</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Gender</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($abouts as $about)
        <tr>
            <td>{{ $about->id }}</td>
            <td>{{ $about->name }}</td>
            <td>{{ $about->address }}</td>
            <td>{{ $about->age }}</td>
            <td>{{ $about->phone_number }}</td>
            <td>{{ $about->email }}</td>
            <td>{{ $about->gender }}</td>
            <td>
                <form action="{{ route('abouts.destroy',$about->id) }}" method="Post">
                    @if(Auth::User()->role == 'admin')
                    <a class="btn btn-primary btn-edit" href="{{ route('abouts.edit',$about->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-delete">Delete</button>
                </form>
                @endif
            </td>
        </tr>
        @endforeach
    </table>
</div>
    <div class="pull-right">
        <a class="btn btn-primary btn-back" href="{{ route('home') }}" enctype="multipart/form-data"> Back</a>
    </div>

</div>

</body>
</html>
@endsection