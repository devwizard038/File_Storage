@extends('layouts/app')

@section('content')

            <main class="main">
                <!-- Hero Section -->
                <section class="section bg--solid--dark-blue">
                    <section class="block block__hero bg-fullwidth text-left has-image">
                        <div class="container">
                            <div class="row">
                                <div class="hero-col col-lg-8">
                                    <h1 class="is-desktop">Store your files online and access them from anywhere!</h1>
                                    <h1 class="is-mobile">Store your files online and access them from anywhere!</h1>
                                    <p class="intro">Blitzlocker cloud storage is convenient for storing all types of files - finance sheets, important documents, media files, and more - just like your computer. With Blitzlocker, you can work on your files from anywhere. Enjoy all these benefits without the hassle of managing hard drive space.</p>
                                    <div class="cta-wr">
                                        <div class="cta-wr">
                                            <a class="cta cta-primary" href="join">Join Now</a>
                                        </div>
                                        <p class="cta-subtext">Set-up in 5 minutes. Credit Card required.</p>
                                    </div>
                                </div>
                            </div>
                            <img src="assets/img/delivery-network.jpg" alt="Blitz Locker Content Delivery Network Blitz Locker" class="hero-cover-image is-desktop">
                        </div>
                    </section>
                </section>
                <section class="section bg--gradient--light-blue reverse-gradient">
                    <!-- edge and never section -->
                    <section class="block is-all block__text text-center">
                        <div class="container">
                            <div class="title-wr">
                                <h2>Store With Us and Never Look Back</h2>
                            </div>
                            <div class="text-formatted text-normal">
                                <p>Experience unparalleled performance without compromise.</p>
                            </div>
                        </div>
                    </section>
                    <section class="block block__products_bunny list-large">
                        <div class="container">
                            <div class="products">
                                <div class="product">
                                    <div class="product-wr has-link product--right-bottom">
                                        <div class="image">
                                            <img src="assets/img/icon-modern1.svg" alt="CDN">
                                        </div>
                                        <div class="product-content">
                                            <h4>CDN</h4>
                                            <div class="text-formatted">
                                                <p>Supercharge your content on a truly global scale.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-wr has-link product--left-bottom">
                                        <div class="image">
                                            <img src="assets/img/icon-modern4.svg" alt="Optimizer">
                                        </div>
                                        <div class="product-content">
                                            <h4>Optimizer</h4>
                                            <div class="text-formatted">
                                                <p>Optimize your website with a click of a button.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-wr has-link product--right-top">
                                        <div class="image"><img src="assets/img/icon-modern2.svg" alt="Storage"></div>
                                        <div class="product-content">
                                            <h4>Storage</h4>
                                            <div class="text-formatted">
                                                <p>Experience hot object storage, replicated around the world.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-wr has-link product--left-top">
                                        <div class="image">
                                            <img src="assets/img/icon-modern5.svg" alt="DNS">
                                        </div>
                                        <div class="product-content">
                                            <h4>DNS</h4>
                                            <div class="text-formatted">
                                                <p>Unlock the true power of DNS across your infrastructure.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-wr has-link product--right-top">
                                        <div class="image">
                                            <img src="assets/img/icon-modern3.svg" alt="Stream">
                                        </div>
                                        <div class="product-content">
                                            <h4>Stream</h4>
                                            <div class="text-formatted">
                                                <p>Take your video delivery to the next level.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-wr has-link product--left-top">
                                        <div class="image">
                                            <img src="assets/img/icon-modern6.svg" alt="Load Balancer">
                                        </div>
                                        <div class="product-content">
                                            <h4>Load Balancer <span class="blue">Coming Soon</span></h4>
                                            <div class="text-formatted">Maximize application performance and scalability.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img class="card-image" src="assets/img/icon-modern-mid.svg" alt="Blitz Locker products">
                        </div>
                    </section>

                    <!-- counter number section  -->
                    <section class="block block__numbers">
                        <div class="container">
                            <ul>
                                <li>
                                    <div class="numbers-wr">
                                        <div class="value">123</div>
                                        <div class="text">Edge Locations</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="numbers-wr">
                                        <div class="value">650.000+</div>
                                        <div class="text">Requests Per Second</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="numbers-wr">
                                        <div class="value">150 Tbps+</div>
                                        <div class="text">Network Capacity</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="numbers-wr">
                                        <div class="value">24 ms</div>
                                        <div class="text">Avg. Worldwide Latency</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>

                    <!-- join start section -->
                    <section class="block block__start_free_trial pos-left">
                        <div class="container">
                            <div class="freetrial-wr">
                                <img src="assets/img/free-trial.svg" alt="speed of light" class="parallax">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-6">
                                        <div class="content-wr">
                                            <h2>Join Now And Have Access To One of The Most Secure Storage Backups Ever</h2>
                                            <div class="cta-wr">
                                                <a class="cta cta-primary" href="join">Join Now</a>
                                            </div>
                                            <p class="cta-subtext">Credit Card Required – Get started in just a few clicks</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- amazing performance section  -->
                    <section class="block block__four_square pos-right">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 text">
                                    <h3>Amazing performance. Every single time.</h3>
                                    <div class="text-formatted">
                                        <p>We have some of the most secure storage networks in the world. Secure your data and access it with lightening fast speeds while you recieve Enterprise-grade performance at the most affordable price on the market!</p>
                                        <ul>
                                            <li>
                                                <p>From $1/month</p>
                                            </li>
                                            <li>
                                                <p>Perma-Caching</p>
                                            </li>
                                            <li>
                                                <p>DDoS Protection</p>
                                            </li>
                                            <li>
                                                <p>No Hidden Fees</p>
                                            </li>
                                            <li>
                                                <p>Real-Time Monitoring</p>
                                            </li>
                                            <li>
                                                <p>Free SSL Certificate</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="squares col-lg-6 col-md-12 squares--single">
                                    <div class="row">
                                        <div class="square col-md-6">
                                            <div class="card">
                                                <div class="hover">
                                                    <span class="circle blue"></span>
                                                    <span class="circle orange"></span>
                                                </div>
                                                <div class="content-wr">
                                                    <img src="assets/img/scalable_by_design.svg" alt="Scalable By Design">
                                                    <h4>Scalable By Design</h4>
                                                    <p>Maximize your growth and expansion without care with a 150 Tbps+ network.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="square col-md-6">
                                            <div class="card">
                                                <div class="hover">
                                                    <span class="circle blue"></span>
                                                    <span class="circle orange"></span>
                                                </div>
                                                <div class="content-wr">
                                                    <img src="assets/img/icon-global_network.svg" alt="Tier 1 Global Network">
                                                    <h4>Tier 1 Global Network</h4>
                                                    <p>Connect directly to your users with over 3000 ISPs and 14 Tier 1 transit providers. Anywhere.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="square col-md-6">
                                            <div class="card">
                                                <div class="hover">
                                                    <span class="circle blue"></span>
                                                    <span class="circle orange"></span>
                                                </div>
                                                <div class="content-wr">
                                                    <img src="assets/img/icon-ssd_servers.svg" alt="NVMe+ SSD Servers">
                                                    <h4>NVMe+ SSD Servers</h4>
                                                    <p>Optimize delivery and reduce latency with top of the line AMD and NVMe hardware.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="square col-md-6">
                                            <div class="card">
                                                <div class="hover">
                                                    <span class="circle blue"></span>
                                                    <span class="circle orange"></span>
                                                </div>
                                                <div class="content-wr">
                                                    <img src="assets/img/icon-stay_protected.svg" alt="Stay Protected">
                                                    <h4>Stay Protected</h4>
                                                    <p>Stay safe and focused with a built-in next-generation DDoS protection that just works.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- happy customers reviews section -->
                    <section class="block block__happy_customers">
                        <div class="container">
                            <div class="stars-wr">
                                <h2>See what Some of Our Customers Say</h2>
                            </div>
                        </div>
                    </section>
                    <section class="block block__reviews">
                        <div class="reviews-row-wr" style="height: 289px;">
                            <div class="reviews-row">
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Alex</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Blitz Locker is truly exceptional</h4>
                                    <div class="text-formatted">
                                        <p>Blitz Locker is truly exceptional. It outperforms famous CDN providers in speed, and it's cheaper.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Laurent Bertin</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>If you hesitate, don't.</h4>
                                    <div class="text-formatted">
                                        <p>Great price. Great service. Great support. Migrated all my videos from vimeo
                                            and it works better, and like 240 audios from AWS and it costs less and
                                            works faster.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Brian Jinwright</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Edge Rules, Blitz Locker, Volume Pricing, and Scalable Storage</h4>
                                    <div class="text-formatted">
                                        <p>Edge Rules, Blitz Locker, Volume Pricing, and Scalable Storage. I think
                                            Blitz Locker is the best-kept secret in the CDN and cloud marketplace.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Ronei de Sousa Almeida</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Great CDN Service</h4>
                                    <div class="text-formatted">
                                        <p>I did the test, I liked it a lot and I'm using it. It has easy configuration,
                                            great features and affordable price. Very good!</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Vin AI</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Blitz Locker is a savior</h4>
                                    <div class="text-formatted">
                                        <p>Blitz Locker is a savior. I found this one the best of all. I've used many other CDN
                                            services but stopped at Blitz Locker. I strongly recommend using Blitz Locker for all type
                                            of web applications.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Inu Anwardani</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>This is the best solution for my Online Course</h4>
                                    <div class="text-formatted">
                                        <p>This is the best solution for my Online Course traffic that covered all
                                            Indonesian Prakerja Users that have so many access to my website. Thank you
                                            Blitz Locker</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Julio</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Affordable CDN</h4>
                                    <div class="text-formatted">
                                        <p>The pricing, the CDN, the features, the panel, is perfect. I don't know what
                                            else I can say. It gets the job done.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Ben M</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Absolutely love these guys</h4>
                                    <div class="text-formatted">
                                        <p>Absolutely love these guys! They are amazing with updates, giving the best
                                            performance of CDN at the most affordable price! They are innovative and
                                            solving more problems then I'd ever imagined! On-the-fly image compression:
                                            Minify files caching, you name it!</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Alex</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Blitz Locker is truly exceptional</h4>
                                    <div class="text-formatted">
                                        <p>Blitz Locker is truly exceptional. It outperforms famous CDN providers in speed,
                                            and it's cheaper.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Laurent Bertin</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>If you hesitate, don't.</h4>
                                    <div class="text-formatted">
                                        <p>Great price. Great service. Great support. Migrated all my videos from vimeo
                                            and it works better, and like 240 audios from AWS and it costs less and
                                            works faster.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Brian Jinwright</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Edge Rules, Blitz Locker, Volume Pricing, and Scalable Storage</h4>
                                    <div class="text-formatted">
                                        <p>Edge Rules, Blitz Locker, Volume Pricing, and Scalable Storage. I think
                                            Blitz Locker is the best-kept secret in the CDN and cloud marketplace.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Ronei de Sousa Almeida</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Great CDN Service</h4>
                                    <div class="text-formatted">
                                        <p>I did the test, I liked it a lot and I'm using it. It has easy configuration,
                                            great features and affordable price. Very good!</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Vin AI</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Blitz Locker is a savior</h4>
                                    <div class="text-formatted">
                                        <p>Blitz Locker is a savior. I found this one the best of all. I've used many other CDN
                                            services but stopped at Blitz Locker. I strongly recommend using Blitz Locker for all type
                                            of web applications.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Inu Anwardani</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>This is the best solution for my Online Course</h4>
                                    <div class="text-formatted">
                                        <p>This is the best solution for my Online Course traffic that covered all
                                            Indonesian Prakerja Users that have so many access to my website. Thank you
                                            Blitz Locker</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name"> Julio</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Affordable CDN</h4>
                                    <div class="text-formatted">
                                        <p>The pricing, the CDN, the features, the panel, is perfect. I don't know what
                                            else I can say. It gets the job done.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Ben M</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Absolutely love these guys</h4>
                                    <div class="text-formatted">
                                        <p>Absolutely love these guys! They are amazing with updates, giving the best
                                            performance of CDN at the most affordable price! They are innovative and
                                            solving more problems then I'd ever imagined! On-the-fly image compression:
                                            Minify files caching, you name it!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reviews-row-wr" style="height: 331px;">
                            <div class="reviews-row">
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Garry</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Absolutely Amazing</h4>
                                    <div class="text-formatted">
                                        <p>Absolutely Amazing! Easy to set up with just a few clicks... Great overall
                                            performance and super cheap. What I like most is easy to Install SSL
                                            certificate for the custom hostname which takes like 2 clicks. Using it for
                                            more than a year and have nothing negative to say.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Afonso</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Best CDN in terms of price/quality</h4>
                                    <div class="text-formatted">
                                        <p>Best cdn in terms of price/quality. Excellent support. I've been using it on
                                            my sites for over 1 year and it has evolved a lot.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Edwin Pardo</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>After having tried multiple platforms Blitz Locker is undoubtedly the fastest but
                                        also the best priced</h4>
                                    <div class="text-formatted">
                                        <p>After having tried multiple platforms, Blitz Locker is undoubtedly not only the
                                            fastest but also the best priced. They also have a support service that
                                            handles requests very quickly, 100% recommended.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Shane Bishop</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Great range of features</h4>
                                    <div class="text-formatted">
                                        <p>Great range of features, fantastic pricing, and even better support. They are
                                            very responsive to suggestions and improvements for the platform, and are
                                            constantly working to make it better.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name"> Jean Didier</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Such an easy Cloudfront alternative</h4>
                                    <div class="text-formatted">
                                        <p>Such a great, cost effective, complete and easy alternative for AWS
                                            Cloudfront. The DRM feature is such a huge service 🙏</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Narwastu Nagoro</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Blitz Locker has the best support ever</h4>
                                    <div class="text-formatted">
                                        <p>Blitz Locker has the best support ever. They will reply to you in just a minute.
                                            It also has so many features that you can use. Best Alternative CDN that you
                                            can try to.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Alberto Baudacci</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Getting better and better</h4>
                                    <div class="text-formatted">
                                        <p>Getting better and better! Fast, reliable and best prices on the market, very
                                            nice and friendly UI. Keep up the good job guys!</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Emmanuelhiggins</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Would highly recommend</h4>
                                    <div class="text-formatted">
                                        <p>Would highly recommend. Couldn't ask for anything more. Chose because it was
                                            one of the fastest CDNs for my part of the world (Australia). Thanks,
                                            Bunnies!</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Garry</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Absolutely Amazing</h4>
                                    <div class="text-formatted">
                                        <p>Absolutely Amazing! Easy to set up with just a few clicks... Great overall
                                            performance and super cheap. What I like most is easy to Install SSL
                                            certificate for the custom hostname which takes like 2 clicks. Using it for
                                            more than a year and have nothing negative to say.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Afonso</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Best CDN in terms of price/quality</h4>
                                    <div class="text-formatted">
                                        <p>Best cdn in terms of price/quality. Excellent support. I've been using it on
                                            my sites for over 1 year and it has evolved a lot.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Edwin Pardo</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>After having tried multiple platforms Blitz Locker is undoubtedly the fastest but
                                        also the best priced</h4>
                                    <div class="text-formatted">
                                        <p>After having tried multiple platforms, Blitz Locker is undoubtedly not only the
                                            fastest but also the best priced. They also have a support service that
                                            handles requests very quickly, 100% recommended.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Shane Bishop</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Great range of features</h4>
                                    <div class="text-formatted">
                                        <p>Great range of features, fantastic pricing, and even better support. They are
                                            very responsive to suggestions and improvements for the platform, and are
                                            constantly working to make it better.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name"> Jean Didier</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Such an easy Cloudfront alternative</h4>
                                    <div class="text-formatted">
                                        <p>Such a great, cost effective, complete and easy alternative for AWS
                                            Cloudfront. The DRM feature is such a huge service 🙏</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Narwastu Nagoro</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Blitz Locker has the best support ever</h4>
                                    <div class="text-formatted">
                                        <p>Blitz Locker has the best support ever. They will reply to you in just a minute.
                                            It also has so many features that you can use. Best Alternative CDN that you
                                            can try to.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Alberto Baudacci</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Getting better and better</h4>
                                    <div class="text-formatted">
                                        <p>Getting better and better! Fast, reliable and best prices on the market, very
                                            nice and friendly UI. Keep up the good job guys!</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="left"></div>
                                        <div class="right">
                                            <div class="name">Emmanuelhiggins</div>
                                            <div class="date"></div>
                                        </div>
                                    </div>
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Would highly recommend</h4>
                                    <div class="text-formatted">
                                        <p>Would highly recommend. Couldn't ask for anything more. Chose because it was
                                            one of the fastest CDNs for my part of the world (Australia). Thanks,
                                            Blitz Locker!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Secure Your Files In The Cloud section -->
                    <section class="block is-all block__text text-center">
                        <div class="container">
                            <div class="title-wr">
                                <h2>Secure Your Files In The Cloud</h2>
                            </div>
                            <div class="text-formatted text-normal">
                                <p>Next-Generation Storage Solutions. Next-Level Performance.</p>
                            </div>
                        </div>
                    </section>
                    <section class="block block__tabs pos-top">
                        <div class="container">
                            <ul class="tabs-header">
                                <li class="tab-title is-active" data-tab="#tab1">
                                    <img src="assets/img/rocket.svg" alt="Website Acceleration">Website Acceleration
                                </li>
                                <li class="tab-title" data-tab="#tab2">
                                    <img src="assets/img/play.svg" alt="Video Delivery">Video Delivery
                                </li>
                                <li class="tab-title" data-tab="#tab3">
                                    <img src="assets/img/server-1.svg" alt="Software Distribution">Software Distribution
                                </li>
                                <li class="tab-title" data-tab="#tab4">
                                    <img src="assets/img/compression.svg" alt="Dynamic Image Processing">Dynamic Image Processing
                                </li>
                            </ul>
                            <div class="tabs-wr">
                                <div id="tab1" class="tab-content is-active">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-12 offset-lg-1 text is-desktop">
                                            <h4>Make your website<br> hop like a Blitz Locker</h4>
                                            <div class="text-formatted">
                                                <p>All your files and folders will be synced in real time across all the devices that you link using IDrive. Sync storage does not impact your backup storage, and matches your backup storage limit.</p>
                                            </div>
                                            <div class="cta-wr">
                                                <a class="cta cta-secondary is-desktop" href="#">Supercharge Your Website</a>
                                                <a class="cta cta-secondary is-mobile" href="#">Supercharge Website</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 offset-lg-1 image is-desktop">
                                            <img src="assets/img/fastest-delivery-network.svg" alt="Website Acceleration">
                                        </div>
                                        <div class="col-md-12 is-mobile">
                                            <h3>Website Acceleration</h3>
                                            <h4>Make your website<br> hop like a Blitz Locker</h4>
                                            <img src="assets/img/fastest-delivery-network.svg" alt="Website Acceleration">
                                            <div class="text-formatted">
                                                <p>Turn your website from a snail into a Blitz Locker. Deliver the best
                                                    possible experience to your users with our global CDN and optimizer
                                                    service. Speed up your website and hop ahead of the competition.</p>
                                            </div>
                                            <div class="cta-wr">
                                                <a class="cta cta-secondary is-desktop" href="#">Supercharge Your Website</a>
                                                <a class="cta cta-secondary is-mobile" href="#">Supercharge Website</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab2" class="tab-content">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-12 offset-lg-1 text is-desktop">
                                            <h4>Reliable video CDN<br> that truly hops</h4>
                                            <div class="text-formatted">
                                                <p>Solve the hassle of video delivery by packing transcoding, storage,
                                                    security, and video player into a powerful but straightforward
                                                    package. Stream anywhere. Without buffering!</p>
                                            </div>
                                            <div class="cta-wr">
                                                <a class="cta cta-secondary is-desktop" href="#">Unforgettable Video Experience</a>
                                                <a class="cta cta-secondary is-mobile" href="#">No more Buffering</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 offset-lg-1 image is-desktop">
                                            <img src="assets/img/stream-video-delivery.svg" alt="Video Delivery">
                                        </div>
                                        <div class="col-md-12 is-mobile">
                                            <h3>Video Delivery</h3>
                                            <h4>Reliable video CDN<br> that truly hops</h4>
                                            <img src="assets/img/stream-video-delivery.svg" alt="Video Delivery">
                                            <div class="text-formatted">
                                                <p>Solve the hassle of video delivery by packing transcoding, storage,
                                                    security, and video player into a powerful but straightforward
                                                    package. Stream anywhere. Without buffering!</p>
                                            </div>
                                            <div class="cta-wr">
                                                <a class="cta cta-secondary is-desktop" href="#">Unforgettable Video Experience</a>
                                                <a class="cta cta-secondary is-mobile" href="#">No more Buffering</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab3" class="tab-content">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-12 offset-lg-1 text is-desktop">
                                            <h4>Deliver lightning fast downloads</h4>
                                            <div class="text-formatted">
                                                <p>Supercharge your software downloads worldwide with one of the fastest
                                                    global networks. Experience high throughput by bringing your content
                                                    closer to your users anywhere.</p>
                                            </div>
                                            <div class="cta-wr">
                                                <a class="cta cta-secondary is-desktop" href="#">Deliver Faster Downloads</a>
                                                <a class="cta cta-secondary is-mobile" href="#">Faster Downloads</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 offset-lg-1 image is-desktop">
                                            <img src="assets/img/deliver-lightning-fast.svg" alt="Software Distribution">
                                        </div>
                                        <div class="col-md-12 is-mobile">
                                            <h3>Software Distribution</h3>
                                            <h4>Deliver lightning fast downloads</h4>
                                            <img  src="assets/img/deliver-lightning-fast.svg" alt="Software Distribution">
                                            <div class="text-formatted">
                                                <p>Supercharge your software downloads worldwide with one of the fastest
                                                    global networks. Experience high throughput by bringing your content
                                                    closer to your users anywhere.</p>
                                            </div>
                                            <div class="cta-wr">
                                                <a class="cta cta-secondary is-desktop" href="#">Deliver Faster Downloads</a>
                                                <a class="cta cta-secondary is-mobile" href="#">Faster Downloads</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab4" class="tab-content">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-12 offset-lg-1 text is-desktop">
                                            <h4>Transform your images.<br> On the fly.</h4>
                                            <div class="text-formatted">
                                                <p>Resize, crop, sharpen, and transform images on the fly with an
                                                    ultra-fast processing engine running on 123 datacenters worldwide.
                                                    Simplify development &amp; optimize SEO by reducing image size by up
                                                    to 80%.</p>
                                            </div>
                                            <div class="cta-wr">
                                                <a class="cta cta-secondary" href="#">Optimize Your Images</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 offset-lg-1 image is-desktop">
                                            <img src="assets/img/image-delivery.svg" alt="Dynamic Image Processing">
                                        </div>
                                        <div class="col-md-12 is-mobile">
                                            <h3>Dynamic Image Processing</h3>
                                            <h4>Transform your images.<br> On the fly.</h4>
                                            <img src="assets/img/image-delivery.svg" alt="Dynamic Image Processing">
                                            <div class="text-formatted">
                                                <p>Resize, crop, sharpen, and transform images on the fly with an
                                                    ultra-fast processing engine running on 123 datacenters worldwide.
                                                    Simplify development &amp; optimize SEO by reducing image size by up
                                                    to 80%.</p>
                                            </div>
                                            <div class="cta-wr">
                                                <a class="cta cta-secondary" href="#">Optimize Your Images</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section> 
            </main>
            
@endsection
