@extends('layouts.app')

@section('content')

<section class="login_section layout_padding">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-6 col-lg-5">

                <div class="heading_container heading_center mb-4">
                    <h2>
                        Sign In
                    </h2>
                    <p>
                        Welcome back to Miyami Restaurant
                    </p>
                </div>

                <div class="login-box">

                    <!-- Validation Errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">
                                Email Address
                            </label>

                            <input
                                id="email"
                                type="email"
                                name="email"
                                class="form-control"
                                value="{{ old('email') }}"
                                placeholder="Enter your email"
                                required
                                autofocus
                                autocomplete="username"
                            >
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label for="password">
                                Password
                            </label>

                            <input
                                id="password"
                                type="password"
                                name="password"
                                class="form-control"
                                placeholder="Enter your password"
                                required
                                autocomplete="current-password"
                            >
                        </div>

                        <!-- Remember Me -->
                        <div class="form-group d-flex justify-content-between align-items-center">

                            <div class="form-check">
                                <input
                                    id="remember_me"
                                    type="checkbox"
                                    name="remember"
                                    class="form-check-input"
                                >

                                <label
                                    class="form-check-label"
                                    for="remember_me">
                                    Remember me
                                </label>
                            </div>

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}"
                                   class="forgot-password">
                                    Forgot Password?
                                </a>
                            @endif

                        </div>

                        <!-- Login Button -->
                        <div class="btn-box">
                            <button type="submit"
                                    class="login-btn">
                                Sign In
                            </button>
                        </div>

                        <!-- Register -->
                        <div class="text-center mt-4">
                            <p>
                                Don't have an account?

                                <a href="{{ route('register') }}">
                                    Sign Up
                                </a>
                            </p>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>
</section>

@endsection