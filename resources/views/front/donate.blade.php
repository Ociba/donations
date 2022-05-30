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
        <div class="page-title-area page-title-style-three item-bg4 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Donations</li>
                    </ul>
                    <h2>Donate Any Amount To Support Children To Easen Their Life In Ten Years From Now</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->
        <!-- Start Courses Categories Area -->
        <section class="courses-categories-area ptb-100">
              @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="container">
                @livewireStyles
                @livewire('donation-form')
                @livewireScripts
            </div>
            <div id="particles-js-circle-bubble-2"></div>
        </section>
        <!-- End Courses Categories Area -->
        <!-- Start Become Instructor & Partner Area -->
        <section class="become-instructor-partner-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="become-instructor-partner-content bg-color">
                            <h2>Become an Instructor</h2>
                            <p>Would you like to be part of us. Are you a teacher or have an experience in one of our key learning areas Learn at your own pace.</p>
                            <a href="{{\URL::signedRoute("Contact",['id' => 2022, 'Contact' => "Contact Us", 'organiztion' => 'joomesupport'])}}" class="default-btn"><i class='bx bx-plus-circle icon-arrow before'></i><span class="label">Apply Now</span><i class="bx bx-plus-circle icon-arrow after"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="become-instructor-partner-image bg-image1 jarallax" data-jarallax='{"speed": 0.3}'>
                            <img src="{{ asset('assets/img/mine/piano3.jpg')}}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="become-instructor-partner-image bg-image2 jarallax" data-jarallax='{"speed": 0.3}'>
                            <img src="{{ asset('assets/img/mine/comp2.jpg')}}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="become-instructor-partner-content">
                            <h2>Become a Partner</h2>
                            <p>Be part of Joome Support Organization as Partner, and we help save the needy and vulnerable children and communities .</p>
                            <a href="{{\URL::signedRoute("Contact",['id' => 2022, 'Contact' => "Contact Us", 'organiztion' => 'joomesupport'])}}" class="default-btn"><i class='bx bx-plus-circle icon-arrow before'></i><span class="label">Contact Us</span><i class="bx bx-plus-circle icon-arrow after"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Become Instructor & Partner Area -->
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