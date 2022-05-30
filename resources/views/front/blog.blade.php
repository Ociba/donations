<!doctype html>
<html lang="zxx" class="theme-light">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
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
        <div class="page-title-area item-bg4 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Blog,Events & News updates</li>
                    </ul>
                    <h2>Joome Support Updates</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Events Area -->
        <section class="events-area pt-100 pb-70">
            <div class="container">
                <div class="single-events-box mb-30">
                    <div class="events-box">
                        <div class="events-image">
                            <div class="image bg1">
                                <img src="{{ asset('assets/img/mine/code.jpg')}}" alt="image">
                            </div>
                        </div>

                        <div class="events-content">
                            <div class="content">
                                <h3><a href="{{\URL::signedRoute("Donate",['id' => 2022, 'Donations' => "Donate and Support us", 'organiztion' => 'joomesupport'])}}">Research On Tens Years From  Nows</a></h3>
                                <p>We started carrying out research on how the world will be in the Years to come interms of Technology, Performing Arts (MDD),Jobs and Sports.</p>
                                <!--<span class="location"><i class='bx bx-map'></i> 120 G-35 Spinsovila Sc, USA</span>-->
                                <div class="text-center">
                                    <a href="{{\URL::signedRoute("Donate",['id' => 2022, 'Donations' => "Donate and Support us", 'organiztion' => 'joomesupport'])}}" class="join-now-btn text-center">Join Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="events-date">
                            <div class="date">
                                <div class="d-table">
                                    <div class="d-table-cell">
                                        <span>01</span>
                                        <h3>October 2021</h3>
                                        <i class='bx bx-calendar'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-events-box mb-30">
                    <div class="events-box">
                        <div class="events-image">
                            <div class="image bg2">
                                <img src="{{ asset('assets/img/mine/code.jpg')}}" alt="image">
                            </div>
                        </div>

                        <div class="events-content">
                            <div class="content">
                                <h3><a href="{{\URL::signedRoute("Donate",['id' => 2022, 'Donations' => "Donate and Support us", 'organiztion' => 'joomesupport'])}}">Compiling & Identify Key Factors</a></h3>
                                <p>This was a level where key elements were identified as the major center of interest in Ten Years Time which included Computer Technology will dominate, Music and Sports.</p>
                                <div class="text-center">
                                    <a href="{{\URL::signedRoute("Donate",['id' => 2022, 'Donations' => "Donate and Support us", 'organiztion' => 'joomesupport'])}}" class="join-now-btn text-center">Join Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="events-date">
                            <div class="date">
                                <div class="d-table">
                                    <div class="d-table-cell">
                                        <span>02</span>
                                        <h3>December 2021</h3>
                                        <i class='bx bx-calendar'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-events-box mb-30">
                    <div class="events-box">
                        <div class="events-image">
                            <div class="image bg3">
                                <img src="{{ asset('assets/img/mine/code.jpg')}}" alt="image">
                            </div>
                        </div>

                        <div class="events-content">
                            <div class="content">
                                <h3><a href="{{\URL::signedRoute("Donate",['id' => 2022, 'Donations' => "Donate and Support us", 'organiztion' => 'joomesupport'])}}">Creating Website Donations Platform & Partnership</a></h3>
                                <p>This calls attention for all well wishers and those focusing changing life to fit 10 Years world Development in Aspect of Computer Technology, Music and Sports.</p>
                                <div class="text-center">
                                    <a href="{{\URL::signedRoute("Donate",['id' => 2022, 'Donations' => "Donate and Support us", 'organiztion' => 'joomesupport'])}}" class="join-now-btn text-center">Join Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="events-date">
                            <div class="date">
                                <div class="d-table">
                                    <div class="d-table-cell">
                                        <span>03</span>
                                        <h3>Febrary 2022</h3>
                                        <p>11:30 PM</p>
                                        <i class='bx bx-calendar'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-events-box mb-30">
                    <div class="events-box">
                        <div class="events-image">
                            <div class="image bg4">
                                <img src="{{ asset('assets/img/mine/host.jpg')}}" alt="image">
                            </div>
                        </div>

                        <div class="events-content">
                            <div class="content">
                                <h3><a href="{{\URL::signedRoute("Donate",['id' => 2022, 'Donations' => "Donate and Support us", 'organiztion' => 'joomesupport'])}}">Hosting Web application</a></h3>
                                <p>This application was hostedon 4<sup>th</sup> June 2022 for the public to view online. The content has been digested and reviewed before it was made for public Viewing. </sub>.</p>
                                <div class="text-center">
                                    <a href="{{\URL::signedRoute("Donate",['id' => 2022, 'Donations' => "Donate and Support us", 'organiztion' => 'joomesupport'])}}" class="join-now-btn text-center">Join Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="events-date">
                            <div class="date">
                                <div class="d-table">
                                    <div class="d-table-cell">
                                        <span>04</span>
                                        <h3>June 2022</h3>
                                        <i class='bx bx-calendar'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Events Area -->

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