@extends('blog.layout')
@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>
<body>

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Blog Table</h2>
            </div>
            <div class="pull-right mb-2">
                @if(Auth::User()->role == 'admin')
                <a class="btn btn-success" href="{{ route('blogs.create') }}"> Create Blog</a>
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
                    @if(Auth::User()->role == 'admin')
                    <a class="btn btn-primary" href="{{ route('blogs.edit',$blogs->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                @endif
            </td>
        </tr>
        @endforeach
    </table>
   </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('home') }}">Back</a>
    </div>
</div>

</body>
</html>
@endsection