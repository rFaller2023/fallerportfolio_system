@extends('contact.layout')
@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
</head>
<body>
<div class="card">
  <div class="card-header">Contacts</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">First Name : {{ $contact->first_name }}</h5>
        <p class="card-text">Last Name : {{ $contact->last_name }}</p>
        <p class="card-text">Email Address : {{ $contact->email }}</p>
        <p class="card-text">Messages : {{ $contact->message }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
</body>
</html>
@endsection