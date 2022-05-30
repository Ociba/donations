<!doctype html>
<html lang="zxx" class="theme-light">
    
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
       @include('frontlayouts.css')
        <style>
            .css-3d-text {
               font-size: 70px;
               color: #ffc107;
               font-family: "Arial Black", Gadget, sans-serif;
               text-shadow: 0px 0px 0 rgb(250,188,2),
                            1px 1px 0 rgb(245,183,0),
                            2px 2px 0 rgb(240,178,0),
                            3px 3px 0 rgb(235,173,0),
                            4px 4px 0 rgb(230,168,0),
                            5px 5px 0 rgb(225,163,0),
                            6px 6px 0 rgb(220,158,0),
                            7px 7px 0 rgb(215,153,0),
                            8px 8px 0 rgb(210,148,0),
                            9px 9px 0 rgb(205,143,0),
                            10px 10px  0 rgb(200,138,0),
                            11px 11px 10px rgba(0,0,0,0.6),
                            11px 11px 1px rgba(0,0,0,0.5),
                            0px 0px 10px rgba(0,0,0,.2);
            }
           
           </style>
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
        <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Profile</li>
                    </ul>
                    <h2>Profile</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Instructor Details Area -->
        <section class="instructor-details-area pt-100 pb-70">
            <div class="container">
                <div class="instructor-details-desc">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="instructor-details-sidebar">
                                <img src="{{ asset('assets/img/partner/11.png')}}" alt="image">

                                <div class="instructor-details-meta">
                                    <ul>
                                        <li>
                                            <i class='bx bxs-group'></i>
                                            <span>Follower</span>
                                            <a href="#">102</a>
                                        </li>
                                        <li>
                                            <i class='bx bx-group'></i>
                                            <span>Following</span>
                                            <a href="#">81</a>
                                        </li>
                                    </ul>
                                </div>

                                <a href="#" class="default-btn"><i class='bx bx-plus-circle icon-arrow before'></i><span class="label">Follow</span><i class="bx bx-plus-circle icon-arrow after"></i></a>

                                <ul class="social-link">
                                    <li><a href="#" class="d-block facebook" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                                    <li><a href="#" class="d-block twitter" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                                    <li><a href="#" class="d-block instagram" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href="#" class="d-block linkedin" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                                    <li><a href="#" class="d-block pinterest" target="_blank"><i class='bx bxl-pinterest-alt'></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-8">
                            <div class="instructor-details">
                                <h3>Ociba James</h3>
                                <span class="sub-title">Primary Teacher</span>
                                <p class="text-justify">I am a Diploma holder in Primary Education in Uganda. I grew up from a poor Family, never had any chance of attending a good standard school in all my Education cycle.However i never gave up with life i had to do all what i could so that i push to a certain level.My parents were not in position to afford taking me to so called good schools. Teaching was not my dream course and i had no money to persue Nursing course, it become my only remaining choice.</p>

                                <p>Life was not easy for me until i struggled to complete the course, after sometime i went for my diploma. In my community i am the only one who have tried to reach to a certain level of Education but most of the children dropout befoe completing even primary Education most especially girls.<em>There is no girl who have studied upto Ordinary level (Senior Four) in the entire community since i was born and we don't have a girl or a boy employed in any Job since i was born.</em>. Most of them become young parents in early ages.</p>
                                 <p><strong>In my diploma i offered Mthematics and Computer which changed my dreams as i always loved computer and practing many skills related to computer, gained alot of skills that is why i am able to create this web application now</strong></p>
                                 <p style="color:#ff1949">With all i went through in the entire life, i wish to assist many others who have the same challenges i had in my experience and change the communities to fit the current world development changes</p>
                                 <p>I WELCOME ALL YOUR IDEAS, CONTRIBUTIONS, DONATIONS AND GRANTS FOR THE SUCCESS OF THIS PROJECT <strong>THE WORLD 10 YEARS FROM NOW</strong> UNDER JOOME SUPPORT ORGANIZATION</p>
                                <div class="instructor-details-info">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <h3>My Personal Contcts</h3>
                                            <ul>
                                                <li>
                                                    <i class='bx bxs-graduation'></i>
                                                    <span>Phone Numbers</span>
                                                     +256 775401793 <br>
                                                     +257 753926367
                                                </li>
                                                <li>
                                                    <i class='bx bxs-graduation'></i>
                                                    <span>Email</span>
                                                    ocibajames@gmail.com
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-lg-6 col-md-12">
                                            <h3>Location</h3>
                                            <ul>
                                                <li>
                                                    <i class='bx bx-briefcase'></i>
                                                    <span>Envato</span>
                                                    <p>Ajesa Parish Kapir Subcounty, <br>Ngora District</p>
                                                    <p>Uganda, East Africa</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Instructor Details Area -->

        <!-- Start Footer Area -->
        @include('frontlayouts.footer')
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
        @include('frontlayouts.javascript')
    </body>
</html>