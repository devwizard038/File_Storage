@extends('layouts/app')

@section('content')
<main class="main">
                <!-- Inner Hero Section -->
                <section class="section bg--solid--dark-blue inner-hero-sec">
                    <section class="block block__hero bg-fullwidth text-left has-image">
                        <div class="container">
                            <div class="row">
                                <div class="hero-col col-lg-12 text-center">
                                    <h2>Dedicated customer support</h2>
                                    <p class="pb-5">Our expert agents are here 24/7 to help, ensuring quick and effective solutions for you.</p>
                                </div>
                            </div>
                            <img src="assets/img/carrots-bg-img.svg" alt="bg-img" class="hero-cover-image is-desktop">
                        </div>
                    </section>
                </section>

                <section class="support-section block section pb-medium">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-one card card--has-shadow">
                                    <div class="card--body p-5 d-flex flex-column justify-content-end align-items-center">
                                        <div class="text-center"> 
                                            <h3 class="h3 mb-3">Call Us</h3>
                                            <p class="mb-5">Prefer to hear a friendly voice? Our Phone Support team is ready to assist you around the clock. Dial <a href="tel:7866714095
">(786) 671-4095</a> anytime to get personalized help with any inquiries or issues you're facing. Your peace of mind is our top priority, 24/7.</p>
                                            <div class="cta-wr">
                                                <a class="cta cta-primary" href="tel:7866714095">Call us now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-second card card--has-shadow">
                                    <div class="card--body p-5 d-flex flex-column justify-content-end align-items-center">
                                        <div class="text-center">
                                            <h3 class="h3 mb-3">Self Help</h3>
                                            <p class="x-small d-block text-color-4 mb-5">Enter <strong>any two</strong> of the four fields to retrieve your purchase information</p>
                                        </div>
                                        <form action="" class="form">
                                            <div>
                                                <div class="form-group mb-3">
                                                    <label for="email">Email</label>
                                                    <input id="email" name="email" type="email" autocomplete="email" value="" class="form-control mt-1">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="username">Subscription ID</label>
                                                    <input id="username" name="subscription" type="text" pattern="[a-zA-Z0-9_]{5,}" autocomplete="off" maxlength="28" class="form-control mt-1">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="lname">Last Name</label>
                                                    <input id="lname" name="name" type="text" autocomplete="family-name" value=""  class="form-control mt-1">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="card_number">Credit Card Number</label>
                                                    <input id="card_number" name="card_number" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" class="form-control mt-1">
                                                </div>
                                                <div class="mb-5">
                                                    <p class="x-small d-block text-color-4 mb-3">
                                                    This site is protected by reCAPTCHA and the Google
                                                    <a href="privacy">Privacy Policy</a> and
                                                    <a href="terms">Terms of Service</a> apply.
                                                    </p>
                                                </div>
                                                <div class="cta-wr text-center">
                                                    <button type="submit" class="cta cta-primary align-items-center justify-content-center d-inline-flex mb-3">
                                                        <span>Find My Account</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
@endsection