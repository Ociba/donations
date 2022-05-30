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
                        <li>Organization Documents</li>
                    </ul>
                    <h2>Read, Download Our Documents</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Courses Categories Area -->
        <section class="courses-categories-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-6 text-center mb-4">
                        <h2>Download Documents</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="single-courses-category mb-30">
                            <a href="proposal.pdf" target="_blank">
                                <i class='bx bxs-file-pdf'></i>
                                Proposal
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="single-courses-category mb-30">
                            <a href="proposal2.docx" target="_blank">
                                <i class='bx bxs-file-doc'></i>
                                Expected Budget 
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="single-courses-category mb-30">
                            <a href="proposal2.docx" target="_blank">
                                <i class='bx bxs-file-plus'></i>
                                Expected Budget Powerpoint
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="particles-js-circle-bubble-2"></div>
        </section>
        <!-- End Courses Categories Area -->

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