@extends('layouts.auth')

@section('title', 'Login - LIOKE')

@section('content')
    <div class="card w-75 w-md-50 h-50">
        <div class="card-body">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="row">
                                            <div class="col align-center">
                                                <h3 class="card-title text-left">Logo</h3>
                                                <img src="{{ asset('img/undraw_landing.svg') }}"
                                                    class="w-50 d-flex m-auto my-5">
                                                <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure non
                                                    nostrum quos quis accusamus vel ipsum cumque error voluptatibus sint.
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5 bg-turquoise">
                                        <div class="col text-center text-white">
                                            <h3 class="text-bold my-3">Wellcome Back</h3>
                                            <h5 class="mb-5">Sign in your Account</h5>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3 mx-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="email" class="form-control" id="username"
                                                    placeholder="Username">
                                            </div>
                                            <div class="mb-3 mx-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
