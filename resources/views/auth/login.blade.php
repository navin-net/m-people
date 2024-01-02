@extends('layout.app')

@section('content')
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>
                            <form action="{{ route('auth.login') }}" method="post"> 
                        @csrf
                        <div class="form-group">
                        <input type="email" class="form-control form-control-user" id="email" name="email" required  aria-describedby="emailHelp"
                                        placeholder="Enter Email Address...">
                                </div>
                                <div class="form-group">
            <input type="password" class="form-control form-control-user" id="password" name="password" required  placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember
                                            Me</label>
                                    </div>
                                </div>
                                <!-- <a href=""  type="submit"  class="btn btn-primary btn-user btn-block">
                                    Login
                                </a> -->
                                <button type="submit" class="btn btn-primary btn-user btn-block">Sign In</button>
                                </form>
                                <hr>
                                <a href="https://accounts.google.com/v3/signin/identifier?authuser=0&continue=https%3A%2F%2Fmyaccount.google.com%2F%3Futm_source%3Dsign_in_no_continue%26pli%3D1&ec=GAlAwAE&hl=km&service=accountsettings&flowName=GlifWebSignIn&flowEntry=AddSession&dsh=S-1626437345%3A1703271666715273&theme=glif" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Login with Google
                                </a>
                                <a href="https://web.facebook.com/" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="../resetpassword">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a href='../registrar' class="small" href="">Create an Account!</a>
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