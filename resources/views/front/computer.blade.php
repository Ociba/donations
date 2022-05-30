<!doctype html>
<html lang="zxx" class="theme-light">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        @include('frontlayouts.css')
    </head>

    <body>

        <!-- Preloader -->
       @include('frontlayouts.preloader')
        <!-- End Preloader -->

        <!-- Start Header Area -->
        @include('frontlayouts.menu')
        <!-- End Header Area -->

        <!-- Search Box Layout -->
        <div class="search-overlay">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    
                    <div class="search-overlay-close">
                        <span class="search-overlay-close-line"></span>
                        <span class="search-overlay-close-line"></span>
                    </div>

                    <div class="search-overlay-form">
                        <form>
                            <input type="text" class="input-search" placeholder="Search here...">
                            <button type="submit"><i class='bx bx-search-alt'></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Box Layout -->

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Activities</li>
                        <li>Computer</li>
                    </ul>
                    <h2>Computer Education</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start My Account Area -->
        <section class="my-account-area ptb-100">
            <div class="container">
                <div class="myAccount-navigation">
                   @include('frontlayouts.activities-submenu')
                </div>

                <div class="myAccount-content">
                    <div class="col-lg-12">
                        <div class="article-content">
                          <h3>Computer Theory and Practicals:</h3>
                          <p>All pupils and Students have access to Computer resources in all levels of Education cycle right from Nursery upto Tertiary level so that they can compete with the rest of the World in technology.</p>
                         </div>
                     </div>
                </div>
            </div>
        </section>
        <!-- End My Account Area -->

        <!-- Start Footer Area -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget mb-30">
                            <h3>Contact Us</h3>

                            <ul class="contact-us-link">
                                <li>
                                    <i class='bx bx-map'></i>
                                    <a href="#" target="_blank">Ajesa Parish, Kapir Subcounty, <br>Ngora County, Ngora District, <br> Uganda - East Africa</a>
                                </li>
                                <li>
                                    <i class='bx bx-phone-call'></i>
                                    <a href="#">+256 753 926367</a>
                                </li>
                                <li>
                                    <i class='bx bx-envelope'></i>
                                    <!--<a href="#"><span class="__cf_email__" data-cfemail="afc7cac3c3c0efddcededaca81ccc0c2">[email&#160;protected]</span></a>-->
                                    joomesupport@gmail.com
                                </li>
                            </ul>

                            <ul class="social-link">
                                <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                                <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                                <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                                <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                                <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-pinterest-alt'></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget mb-30">
                            <h3>Support</h3>

                            <ul class="support-link">
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">FAQ's</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Condition</a></li>
                                <li><a href="#">Policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget mb-30">
                            <h3>Useful Link</h3>

                            <ul class="useful-link">
                                <li><a href="/activities">Activities</a></li>
                                <li><a href="/target-group">Target Groups</a></li>
                                <li><a href="/projects">Projects</a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/blog">Blog</a></li>
                                <li><a href="/contact">Contacts</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget mb-30">
                            <h3>Newsletter</h3>

                            <div class="newsletter-box">
                                <p>To get the latest news and latest updates from us.</p>

                                <form class="newsletter-form" data-bs-toggle="validator">
                                    <label>Your e-mail address:</label>
                                    <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
                                    <button type="submit">Subscribe</button>
                                    <div id="validator-newsletter" class="form-result"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom-area">
                <div class="container">
                    <div class="logo">
                        <a href="/" class="d-inline-block"><img src="{{ asset('assets/img/partner/11.png')}}" alt="image"></a>
                    </div>
                    <p><i class='bx bx-copyright'></i> <script data-cfasync="false" src="https://templates.envytheme.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script>document.write(new Date().getFullYear())</script> <a href="/" target="_blank">JOOME</a> Designed By <a href="#" target="_blank">JoomeTechltd</a> | All rights reserved.</p>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->
        
        <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

        <!-- Dark version -->
        <div class="dark-version">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label>
        </div>
        <!-- Dark version -->

        <!-- Links of JS files -->
        <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('assets/js/mixitup.min.js')}}"></script>
        <script src="{{ asset('assets/js/parallax.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.appear.min.js')}}"></script>
        <script src="{{ asset('assets/js/odometer.min.js')}}"></script>
        <script src="{{ asset('assets/js/particles.min.js')}}"></script>
        <script src="{{ asset('assets/js/meanmenu.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{ asset('assets/js/viewer.min.js')}}"></script>
        <script src="{{ asset('assets/js/slick.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{ asset('assets/js/form-validator.min.js')}}"></script>
        <script src="{{ asset('assets/js/contact-form-script.js')}}"></script>
        <script src="{{ asset('assets/js/main.js')}}"></script>
    </body>

</html>