@extends('layouts.dashboard')

@section('title', 'Login - LIOKE')

@section('content')
    <!-- Modal -->
    <div class="modal fade" id="auth" tabindex="-1" aria-labelledby="authLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-turquoise animate__animated animate__fadeIn">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-md-7">
                                <div class="row">
                                    <div class="col align-center">
                                        <h3 class="card-title text-left">Logo</h3>
                                        <img src="{{ asset('img/undraw_landing.svg') }}" class="w-50 d-flex m-auto my-5">
                                        <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure non
                                            nostrum quos quis accusamus vel ipsum cumque error voluptatibus sint.
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 box-login d-grid animate__animated animate__fadeIn">
                                <div class="col text-center">
                                    <h3 class="text-bold my-3">Wellcome Back</h3>
                                    <h5 class="mb-4">Sign In</h5>
                                </div>
                                <div class="col mx-3">
                                    <div class="mb-2">
                                        <input type="email" class="form-control" id="login-email" placeholder="Your E-mail"
                                            required>
                                    </div>
                                    <div>
                                        <input type="password" class="form-control" id="login-password"
                                            placeholder="Your Password" required>
                                    </div>
                                    <i class="small">Don't you have an account ? <a class="register-link" href="#">Register
                                            Here</a></i>
                                </div>
                                <div class="col m-3">
                                    <button class="btn btn-info w-100">LOGIN</button>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 box-register d-none animate__animated animate__fadeIn">
                                <div class="col text-center">
                                    <h3 class="text-bold my-3">Wellcome Back</h3>
                                    <h5 class="mb-4">Sign Up</h5>
                                </div>
                                <div class="col mx-3">
                                    <div class="mb-2">
                                        <input type="name" class="form-control" id="register-name" placeholder="Your Name"
                                            required>
                                    </div>
                                    <div class="mb-2">
                                        <input type="email" class="form-control" id="register-email"
                                            placeholder="Your E-mail" required>
                                    </div>
                                    <div class="mb-2">
                                        <input type="password" class="form-control" id="register-password"
                                            placeholder="Your Password" required>
                                    </div>
                                    <div>
                                        <input type="password" class="form-control" id="register-confirm-password"
                                            placeholder="Confirm Your Password" required>
                                    </div>
                                    <i class="small">Do you have an account ? <a class="login-link" href="#">Login
                                            Here</a></i>
                                </div>
                                <div class="col m-3">
                                    <button class="btn btn-info w-100">REGISTER</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-js')
    <script src="{{ asset('js/auth.js') }}"></script>
@endpush
