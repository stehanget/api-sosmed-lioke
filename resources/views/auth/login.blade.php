@extends('layouts.auth')

@section('title', 'Login - LIOKE')

@section('content')
<div class="card w-75 w-md-50 h-50">
  <div class="card-body">
    <div class="center">
      <h3 align="center">L I O K E</h3>
      <hr>
      <div class="container login">
        <form class="row g-1 login" action="{{ route('login') }}" method="POST">
          @csrf

          <div class="mb-1">
            <input type="text" class="form-control" name="email" placeholder="Email Address">
          </div>
          <div class="mb-1">
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
          <div class="d-grid gap-1">
            <button type="submit" class="btn btn-success mt-3">Login</button>
          </div>
          <div class="d-grid gap-1">
            <a href="{{ route('register') }}" class="btn btn-info">Register</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection