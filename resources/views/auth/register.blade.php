@extends('layouts.auth')

@section('title', 'Register - LIOKE')

@section('content')
<div class="card w-75 w-md-50 h-75">
  <div class="card-body">
    <div class="center">
      <h3 align="center">L I O K E</h3>
      <hr>
      <div class="container login">
        <form class="row g-1 login" action="{{ route('register') }}" method="POST">
          @csrf

          <div class="form-group input-group">
            <input name="name" class="form-control" placeholder="Full name" type="text">
          </div>
          <div class="form-group input-group">
            <input name="email" class="form-control" placeholder="Email address" type="email">
          </div>
          <div class="form-group input-group">
            <input name="phone" class="form-control" placeholder="Phone number" type="text">
          </div>
          <div class="form-group input-group">
            <select class="form-control" name="job">
              <option> Select job type</option>
              <option value="designer">Designer</option>
              <option value="manager">Manager</option>
              <option value="accaunting">Accaunting</option>
            </select>
          </div>
          <div class="form-group input-group">
            <input name="password" class="form-control" placeholder="Create password" type="password">
          </div>
          <div class="form-group input-group">
            <input name="password_confirmation" class="form-control" placeholder="Repeat password" type="password">
          </div>
          <div class="d-grid gap-1 mt-3">
            <button type="submit" class="btn btn-info">Register</button>
          </div>
          <p class="text-center">Have an account? <a href="{{ route('login') }}">Log In</a></p>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection