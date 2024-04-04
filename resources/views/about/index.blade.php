<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>About Table</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('abouts.create') }}"> Create About Yourself</a>
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
    
                    <a class="btn btn-primary" href="{{ route('abouts.edit',$about->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('home') }}" enctype="multipart/form-data"> Back</a>
    </div>

</body>
</html>