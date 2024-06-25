@extends('layouts/app')

@section('content')

            <main class="main">
                <!-- Inner Hero Section -->
                <section class="section bg--solid--dark-blue inner-hero-sec">
                    <section class="block block__hero bg-fullwidth text-left has-image">
                        <div class="container">
                            <div class="row">
                                <div class="hero-col col-lg-12 text-center">
                                    <h2>Contact us</h2>
                                </div>
                            </div>
                            <img src="assets/img/carrots-bg-img.svg" alt="bg-img" class="hero-cover-image is-desktop">
                        </div>
                    </section>
                </section>

                <section class="block section pb-medium">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <form action="" class="contact-form-info mb-5">
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input id="name" type="text" class="form-control mt-1">
                                    </div>
                                    <div class="form-group mt-4">
                                        <label for="email">Your Email</label>
                                        <input type="email" class="form-control mt-1">
                                    </div>
                                    <div class="form-group mt-4">
                                        <label for="topic">Topic</label>
                                        <div class="custom-select mt-1">	
                                            <select name="topic" id="topic" class="form-control">
                                                <option value="none">Please select a topic...</option>
                                                <option value="tech">Technical Support</option>
                                                <option value="bill">Subscriptions &amp; Billing</option>
                                                <option value="general">General Inquiries</option>
                                                <option value="legal">Legal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mt-4">
                                        <label for="topic">Message</label>
                                        <textarea name="" id="" cols="30" rows="5" class="form-control mt-1"></textarea>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="cta cta-primary">Send</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-5 pl-md-40px">
                                    <h3 class="h3 mb-4">My Account</h3>
                                    <p class="mb-3 sm-txt">Manage your membership online by logging in to My Account at logging the top of the page.</p>
                                    <p class="mb-5 sm-txt">Additionally, you can contact Customer Support at the following: Toll Free: (786) 671-4095 or use the contact form.</p>
                                    <h3 class="h3 mb-4">Mailing Address</h3>
                                    <p class="mb-3">Innovextech LLC,</p>
                                    <p class="mb-3">Innovextech LLC, 1019 NW 66th St. Miami, Fl 33150</p>
                            </div>
                        </div>
                    </div>
                </section>
@endsection
