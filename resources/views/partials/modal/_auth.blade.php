<div class="modal fade" id="auth" tabindex="-1" aria-labelledby="authLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content bg-turquoise animate__animated animate__fadeIn">
            <div class="modal-body p-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-7 d-none d-md-block p-3 text-white">
                            <div class="row">
                                <div class="col align-center">
                                    <h3 class="card-title text-left">Logo</h3>
                                    <img src="{{ asset('img/undraw_landing.svg') }}" class="w-50 d-flex m-auto my-5">
                                    <h5 class="fs-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure non
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
                            <div class="col">
                                <div class="mb-2">
                                    <input type="email" class="form-control" id="input-email" placeholder="E-mail"
                                        required>
                                </div>
                                <div>
                                    <input type="password" class="form-control" id="input-password"
                                        placeholder="Password" required>
                                </div>
                                <i class="small">Don't you have an account ? <a class="register-link" href="#">Register
                                        Here</a></i>
                            </div>
                            <div class="col my-3">
                                <button id="btn-login" class="btn btn-get-started w-100">LOGIN</button>
                            </div>
                        </div>
                        <div class="col-12 col-md-5 box-register d-none animate__animated animate__fadeIn">
                            <div class="col text-center">
                                <h3 class="text-bold my-3">Wellcome Back</h3>
                                <h5 class="mb-4">Sign Up</h5>
                            </div>
                            <div class="col">
                                <div class="mb-2 d-flex gap-2">
                                    <input type="text" class="form-control" id="input-name" placeholder="Name"
                                        required>
                                    <input type="text" class="form-control" id="input-nickname" placeholder="Nickname"
                                    required>
                                </div>
                                <div class="mb-2">
                                    <input type="email" class="form-control" id="input-email"
                                        placeholder="E-mail" required>
                                </div>
                                <div class="mb-2">
                                    <input type="number" class="form-control" id="input-phone"
                                        placeholder="Phone Number" required>
                                </div>
                                <div class="mb-2 d-flex gap-2">
                                    <input type="password" class="form-control col" id="input-password"
                                        placeholder="Password" required>
                                    <input type="password" class="form-control col" id="input-password_confirmation"
                                        placeholder="Password Confirmation" required>
                                </div>
                                <i class="small">Do you have an account ? <a class="login-link" href="#">Login
                                        Here</a></i>
                            </div>
                            <div class="col my-3">
                                <button id="btn-register" class="btn btn-get-started w-100">REGISTER</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
