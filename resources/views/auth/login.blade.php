
@extends('layouts.empty')

@section('main-container')
    <main id="main-container">
        <!-- Page Content -->
        <div class="bg-body-dark">
            <div class="row mx-0 justify-content-center">
                <div class="hero-static col-lg-6 col-xl-4">
                    <div class="content content-full overflow-hidden">
                        <!-- Header -->
                        <div class="py-4 text-center">
                            <a class="link-fx fw-bold" href="index.html">
                                <i class="fa fa-fire"></i>
                                <span class="fs-4 text-body-color">code</span><span class="fs-4">base</span>
                            </a>
                        </div>
                        <!-- END Header -->

                        <!-- Login Form -->
                        <form class="js-validation-signin" action="{{ route('login') }}" method="POST"
                            novalidate="novalidate">
                            @csrf
                            <div class="block block-themed block-rounded block-fx-shadow">
                                <div class="block-header bg-gd-dusk">
                                    <h3 class="block-title">Login</h3>
                                </div>
                                <div class="block-content">
                                    <div class="form-floating mb-4">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter your email" value="{{ old('email') }}" required
                                            autocomplete="email" autofocus>
                                        <label class="form-label" for="email">Email</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input id="password" type="password" class="form-control" name="password"
                                            placeholder="Enter your password">
                                        <label class="form-label" for="password">Password</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 d-sm-flex align-items-center push">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-sm-end push">
                                            <button type="submit" class="btn btn-lg btn-alt-primary fw-medium">
                                                Sign In
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="block-content block-content-full bg-body-light text-center d-flex justify-content-between">
                                    <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block"
                                        href="{{ route('register') }}">
                                        <i class="fa fa-plus opacity-50 me-1"></i> Create Account
                                    </a>
                                    <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="">
                                        Forgot Password
                                    </a>
                                </div>
                            </div>
                        </form>
                        <!-- END Login Form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
@endsection
