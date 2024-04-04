@extends('about.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">About</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">ABOUT</h5>
        <p class="card-text">Name : {{ $abouts->name }}</p>
        <p class="card-text">Adress: {{ $abouts->email }}</p>
        <p class="card-text">Birthdate: {{ $abouts->phone }}</p>
        <p class="card-text">Email: {{ $abouts->address}}</p>
        <p class="card-text">Age: {{ $abouts->email }}</p>
      
  </div>
       
    </hr>
  
  </div>
</div>