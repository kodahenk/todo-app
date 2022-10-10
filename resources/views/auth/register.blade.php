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
                            <a class="link-fx fw-bold" href="">
                                <i class="fa fa-fire"></i>
                                <span class="fs-4 text-body-color">code</span><span class="fs-4">base</span>
                            </a>
                        </div>
                        <!-- END Header -->

                        <!-- Register Form -->
                        <form class="js-validation-signup" method="POST" action="{{ route('register') }}"
                            novalidate="novalidate">
                            @csrf
                            <div class="block block-themed block-rounded block-fx-shadow">
                                <div class="block-header bg-gd-emerald">
                                    <h3 class="block-title">Register</h3>
                                </div>
                                <div class="block-content">
                                    <div class="form-floating mb-4">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus
                                            placeholder="Enter your username">
                                        <label class="form-label" for="signup-username">Username</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{ old('email') }}" required autocomplete="email"
                                            placeholder="Enter your email">
                                        <label class="form-label" for="signup-email">Email</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Enter your password" required autocomplete="new-password">
                                        <label class="form-label" for="signup-password">Password</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="password" class="form-control" id="password-confirm"
                                            name="password_confirmation" placeholder="Confirm password" required
                                            autocomplete="new-password">
                                        <label class="form-label" for="signup-password-confirm">Confirm Password</label>
                                    </div>
                                </div>
                                <div class="block-content block-content-full bg-body-light d-flex justify-content-between">
                                    <button type="submit" class="btn btn-lg btn-alt-success fw-semibold">
                                        Create Account
                                    </button>
                                    <a href="{{ route('login') }}" type="submit"
                                        class="btn btn-lg btn-alt-info fw-semibold">
                                        Login Page
                                    </a>
                                </div>
                            </div>
                        </form>
                        <!-- END Register Form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
@endsection
