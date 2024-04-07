@extends('user.layout')
@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>
<body>

<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Users</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{route('users.create')}}">Add User</a>
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
            <th>Role</th>
            <th>User Name</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        
        @foreach($user as $users)
        <tr>
            <td>{{$users->id}}</td>
            <td>{{$users->role}}</td>
            <td>{{$users->user_name}}</td>
            <td>{{$users->email}}</td>
            <td>
                <form action="{{route('users.destroy', $users->id)}}" method="POST">
                    <a class="btn btn-primary" href="{{route('users.edit', $users->id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('home') }}" enctype="multipart/form-data"> Back</a>
    </div>
</div>

</body>
</html>
@endsection