@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Contact Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $contact->name }}</h5>
        <p class="card-text">Email : {{ $contact->email }}</p>
        <p class="card-text">Phone : {{ $contact->phone }}</p>
  </div>
       
    {{-- </hr> --}}
  
  </div>
</div>