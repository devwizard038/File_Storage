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