@extends('layouts/app')

@section('content')

            <main class="main">
                <!-- Inner Hero Section -->
                <section class="section bg--solid--dark-blue inner-hero-sec">
                    <section class="block block__hero bg-fullwidth text-left has-image">
                        <div class="container">
                            <div class="row">
                                <div class="hero-col col-lg-12 text-center">
                                    <h2>Log In</h2>
                                </div>
                            </div>
                            <img src="assets/img/carrots-bg-img.svg" alt="bg-img" class="hero-cover-image is-desktop">
                        </div>
                    </section>
                </section>

                <section class="block section pb-medium">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="login-form p-5">
                                    <form action="/login/post.json" class="form js-login">
                                        <div class="form-group">
                                            <label for="username">Username/Email</label>
                                            <input name="username" type="text" class="form-control mt-1">
                                        </div>
                                        <div class="form-group mt-4">
                                            <label for="password">Password</label>
                                            <input name="password" type="password" class="form-control mt-1">
                                        </div>
                                        <div class="mt-4">
                                            <button type="submit" class="cta cta-primary">LOG IN</button>
                                        </div>
                                        <div class="mt-5">
                                            <p class="d-block mb-4">
                                                <a class="underline" href="#t">Email login link?</a>
                                            </p>
                                            <p class="d-block mt-4 mb-4">	
                                                <a class="underline" href="#t">Forgot password?</a><span class="mx-4">|</span>
                                                <a class="underline" href="#t">Need Help?</a>
                                            </p>
                                            <p class="d-block mt-4 mb-4">	
                                                <span class="mr-3" href="#t">Email login link? </span><a class="underline">Get Innovextech™</a>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                                <div class="layout-section--bg-gray p-5 d-none">
                                    <h3 class="h3 mt-0 mb-4">Password Reset</h3>
                                    <form action="/login/forgot.json" class="form js-forgot">
                                        <div class="form-group mt-4">
                                            <label for="username">Username/Email</label>
                                            <input name="username" type="text">
                                        </div>
                                        <div class="form-group mt-4">
                                            <button type="submit" class="cta cta-primary">RESET PASSWORD</button>
                                        </div>
                                        <div class="mt-3">
                                            <a href="#t">Log in?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

@endsection

