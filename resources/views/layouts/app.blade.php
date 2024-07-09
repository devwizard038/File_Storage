<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blitz Locker</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/logo-v3-fav.png') }}" type="image/png">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    
    <!-- Awesome Fonts Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    
</head>

<body class="page--index bg-menu--dark-blue bg-hero--fullwidth bg-stars--overlay">
            <header id="site-header" class="site-header">
                <div class="container">
                    <nav class="align-items-center">
                        <a class="logo" href="/">
                            <!-- <h4 class="text-white mb-0">Blitz Locker</h4> -->
                            <img src="{{ asset('assets/img/logo-v3-mid.png') }}" alt="Blitz Locker" title="Blitz Locker">
                        </a>
                        <ul class="menu-desktop">
                            <li><a href="/">Home</a></li>
                            <li><a href="about">About Us</a></li>
                            <li><a href="join">Join</a></li>
                            <li><a href="contact">Contact</a></li>
                            <li class="cta-navbar-secondary"><a href="login">Login</a></li>
                            <li class="cta-navbar-primary"><a href="join">Get Started</a></li>
                        </ul>
                        <div id="menu-toggle" class="menu-toggle">
                            <div class="menu-inner"></div>
                        </div>
                    </nav>
                </div>
            </header>
            <div class="nav-mobile-wr">
                <ul class="menu-mobile">
                    <li class="logo">
                        <a href="#">
                            <!-- <h4 class="text-white mb-0">Blitz Locker</h4> -->
                            <img src="assets/img/logo-v3-mid.png" alt="Blitz Locker" title="Blitz Locker">
                        </a>
                    </li>
                    <li><a href="/">Home</a></li>
                    <li><a href="about">About Us</a></li>
                    <li><a href="join">Join</a></li>
                    <li><a href="contact">Contact</a></li>
                    <li class="cta-navbar-secondary"><a href="login">Login</a></li>
                    <li class="cta-navbar-primary"><a href="join">Get Started</a></li>
                </ul>
            </div>
            @yield('content')
            <!-- footer section  -->
            <footer class="footer">
                <div class="footer-top">
                    <div class="container">
                        <img class="footer-il" src="assets/img/content-delivery-network.svg" alt="Blitz Locker">
                        <div class="row row-bottom">
                            <div class="col-lg-12 col-md-12">
                                        <div class="mb-5">
                                            <a href="/">
                                                <img src="assets/img/logo-v3-mid.png" width="165" alt="Blitz Locker">
                                            </a>
                                        </div>
                                        <ul>
                                            <li><a href="about">About Us</a></li>
                                            <li><a href="contact">Contact</a></li>
                                            <li><a href="terms">Terms Of Service</a></li>
                                            <li><a href="privacy">Privacy & Policy</a></li>
                                            <li><a href="cookie">Cookie</a></li>
                                            <li><a href="support">Support</a></li>
                                        </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- copyright section -->
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 cols">
                                <p class="copyright">© 2024 Innovextech, LLC 1019 NW 66th St. Miami, Fl 33150</p>
                            </div>
                            <div class="col-md-5 cols des-jfy-end">
                                <ul>
                                    <li><a href="terms">Terms Of Service</a></li>
                                    <li><a href="privacy">Privacy &amp; Policy</a></li>
                                    <li><a href="cookie">Cookie Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- js code files -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script>
                // mobile menu toggle code js
                const u=document.querySelector(".menu-toggle");u&&u.addEventListener("click",(function(){let e=document.getElementsByTagName("html")[0];e.classList.contains("menu-open")?(e.classList.remove("menu-open"),u.classList.remove("is-open")):(e.classList.add("menu-open"),u.classList.add("is-open"))}),!1);let l=document.querySelectorAll(".menu-mobile > li:not(.has-submenu) a, .menu-mobile .has-submenu ul > li:not(.has-submenu) a");for(let o=0;o<l.length;o++)l[o].addEventListener("click",(function(e){document.getElementsByTagName("html")[0].classList.remove("menu-open");
                const t=document.querySelector(".menu-toggle");t&&t.classList.remove("is-open")}),!1);let p=document.querySelectorAll(".menu-mobile .has-submenu > a");for(let o=0;o<p.length;o++)p[o].addEventListener("click",(function(e){e.preventDefault(),this.closest("li").classList.contains("is-open")?this.closest("li").classList.remove("is-open"):this.closest("li").classList.add("is-open")}),!1);
            
                // sticky header js code
                $(window).scroll(function(){
                    if ($(this).scrollTop() > 50) {
                    $('#site-header').addClass('stickyHeader');
                    } else {
                    $('#site-header').removeClass('stickyHeader');
                    }
                });

                function validateForm(){
                    var dateForm = document.getElementById("p-date");
                    var dateInput = document.getElementById('date').value;

                    var boxInput = document.getElementById('check-accept');
                    var flag = 0;
                    
                    if (!/^\d{2}\/\d{2}$/.test(dateInput)) {
                        dateForm.classList.remove("div-hidden");
                        flag = 1;
                    }
                    else{
                        dateForm.classList.add("div-hidden");
                        flag = 0;
                    }

                    if(boxInput.checked == false){
                        boxInput.classList.add('check-accept');
                        flag = 1;
                    }
                    else{
                        dateForm.classList.remove("check-accept");
                        flag = 0;
                    }

                    if(flag == 1)
                        return false;

                    return true;
                }
            </script>
            <script>
                $(document).ready(function(){
                  // Handle click event on tab titles
                  $(".tab-title").click(function(){
                    var tabId = $(this).data("tab");
                    
                    // Remove 'active' class from all tab titles
                    $(".tab-title").removeClass("is-active");
                    
                    // Add 'active' class to the clicked tab title
                    $(this).addClass("is-active");
              
                    // Remove 'active' class from all tab contents
                    $(".tab-content").removeClass("is-active");
                    
                    // Add 'active' class to the corresponding tab content
                    $(tabId).addClass("is-active");
                  });
                });
            </script>
</body>
</html>