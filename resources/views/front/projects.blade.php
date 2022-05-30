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
        <div class="page-title-area item-bg3 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Other Projects</li>
                    </ul>
                    <h2>Other Projects To The Communities</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Blog Area -->
        <section class="blog-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6 text-center mb-3">
                        <p><h2>Apart from Education we are also going to run other projects which will help the communities within and outside school activities as displayed below</h2></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post mb-30">
                            <div class="post-image">
                                <a href="#" class="d-block">
                                    <img src="{{ asset('assets/img/mine/trees.jpg')}}" style="width: 400px; height:180px" alt="image">
                                </a>
                            </div>
    
                            <div class="post-content text-justify">
                                <ul class="post-meta">
                                    <li><a href="#">Tree Planting & Conservation</a></li>
                                </ul>
                                <h3><a href="#" class="d-inline-block">This will be done through sensitization of communities, supply of seedlings and other requirements for the healthy growth of trees. </a></h3>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post mb-30">
                            <div class="post-image">
                                <a href="#" class="d-block">
                                    <img src="{{ asset('assets/img/mine/hens.jpg')}}" style="width: 400px; height:180px" alt="image">
                                </a>
                            </div>

                            <div class="post-content text-justify">
                                <ul class="post-meta">
                                    <li><a href="#">New Farming Methods or techniques</a></li>
                                </ul>
                                <h3><a href="#" class="d-inline-block">These methods include mixed Farming, subsistence farming to curb unnecessary losses due to whether changes.</a></h3>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post mb-30">
                            <div class="post-image">
                                <a href="#" class="d-block">
                                    <img src="{{ asset('assets/img/mine/sacco.jpg')}}"  style="width: 400px; height:180px" alt="image">
                                </a>
                            </div>

                            <div class="post-content text-justify">
                                <ul class="post-meta">
                                    <li><a href="#">Poverty Eradication Projects</a></li>
                                </ul>
                                <h3><a href="#" class="d-inline-block">Projects like Money Saving Sacco, Modern Methods of Food storage, Mini Businesses</a></h3>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post mb-30">
                            <div class="post-image">
                                <a href="#" class="d-block">
                                    <img src="{{ asset('assets/img/mine/cafe.jpg')}}" style="width: 400px; height:180px" alt="image">
                                </a>
                            </div>

                            <div class="post-content text-justify">
                                <ul class="post-meta">
                                    <li><a href="#">Opening Up ICT Firms</a></li>
                                </ul>
                                <h3><a href="#" class="d-inline-block">This will help to provide employment Opportunities for Computer Engineers, Develop applicationsto be used in the world of technology.</a></h3>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post mb-30">
                            <div class="post-image">
                                <a href="#" class="d-block">
                                    <img src="{{ asset('assets/img/mine/studio.jpg')}}" style="width: 400px; height:180px" alt="image">
                                </a>
                            </div>

                            <div class="post-content text-justify">
                                <ul class="post-meta">
                                    <li><a href="#">Music Studios</a></li>
                                </ul>
                                <h3><a href="#" class="d-inline-block">This will be opened up to help in Music Dance & Drama Activities in the Schools as well as the Community at large.</a></h3>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post mb-30">
                            <div class="post-image">
                                <a href="#" class="d-block">
                                    <img src="{{ asset('assets/img/mine/recre.jpg')}}" style="width: 400px; height:180px" alt="image">
                                </a>
                            </div>

                            <div class="post-content text-justify">
                                <ul class="post-meta">
                                    <li><a href="#">Recreation Center</a></li>
                                </ul>
                                <h3><a href="#" class="d-inline-block">This will be a place for physical fitness for all categories of people like gymn,standard fields, sports Equipments.</a></h3>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->

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