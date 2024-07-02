@extends('layouts/app')

@section('content')

            <main class="main">
                <!-- Inner Hero Section -->
                <section class="section bg--solid--dark-blue inner-hero-sec">
                    <section class="block block__hero bg-fullwidth text-left has-image">
                        <div class="container">
                            <div class="row">
                                <div class="hero-col col-lg-12 text-center">
                                    <h2>Account Created</h2>
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
                                    <div class="form-group">
                                        <label for="email">Username/Email</label>
                                        <div name="email" type="text" class="mt-3">{{ $email }}</div>
                                    </div>
                                    <div class="form-group mt-4">
                                        <label for="password">Password</label>
                                        <div name="email" type="text" class="mt-3">{{ $password }}</div>
                                    </div>
                                    <div class="mt-4">
                                        <a class="cta cta-primary" href="/login">GO TO THE LOGIN</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

@endsection

