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
        <div class="page-title-area page-title-style-three item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Target Groups</li>
                    </ul>
                    <h2>Group of Children To Support</h2>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Blog Area -->
        <section class="blog-area ptb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-blog-post mb-30">
                            <div class="post-image">
                                <a href="#" class="d-block">
                                    <img src="{{ asset('assets/img/mine/tg7.webp')}}" alt="image">
                                </a>
    
                                <div class="tag">
                                    <a href="#">Orphans</a>
                                </div>
                            </div>
    
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li class="post-author">
                                        By: <a href="#" class="d-inline-block">joome support</a>
                                    </li>
                                    <li><a href="#">August 30, 2022</a></li>
                                </ul>
                                <h3><a href="#" class="d-inline-block text-justify">The organization is aiming at providing basic needs to all Orphans preferably good standard of Education.</a></h3>
                                <!--<a href="#" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>-->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-blog-post mb-30">
                            <div class="post-image">
                                <a href="#" class="d-block">
                                    <img src="{{ asset('assets/img/mine/tg19.jfif')}}" style="height:210px;" alt="image">
                                </a>

                                <div class="tag">
                                    <a href="#">Living with HIV/AIDS</a>
                                </div>
                            </div>

                            <div class="post-content">
                                <ul class="post-meta">
                                    <li class="post-author">
                                        By: <a href="#" class="d-inline-block">joome support</a>
                                    </li>
                                    <li><a href="#">August 29, 2022</a></li>
                                </ul>
                                <h3><a href="#" class="d-inline-block">Joome is also considering providing Education to those children who are positively living with HIV or AIDS.</a></h3>
                                <!--<a href="#" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>-->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-blog-post mb-30">
                            <div class="post-image">
                                <a href="#" class="d-block">
                                    <img src="{{ asset('assets/img/mine/tg15.jpg')}}" style="height:210px;" alt="image">
                                </a>

                                <div class="tag">
                                    <a href="#">Poor Living Status</a>
                                </div>
                            </div>

                            <div class="post-content">
                                <ul class="post-meta">
                                    <li class="post-author">
                                        By: <a href="#" class="d-inline-block">joome support</a>
                                    </li>
                                    <li><a href="#">August 28, 2022</a></li>
                                </ul>
                                <h3><a href="#" class="d-inline-block">We are also ready to provide chiildren who are in poor state of living with  quality Education system</a></h3>
                                <!--<a href="#" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>-->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-blog-post mb-30">
                            <div class="post-image">
                                <a href="#" class="d-block">
                                    <img src="{{ asset('assets/img/mine/tg18.jfif')}}" style="height:210px;" alt="image">
                                </a>

                                <div class="tag">
                                    <a href="#">Dropouts</a>
                                </div>
                            </div>

                            <div class="post-content">
                                <ul class="post-meta">
                                    <li class="post-author">
                                        By: <a href="#" class="d-inline-block">jooome support</a>
                                    </li>
                                    <li><a href="#">August 27, 2022</a></li>
                                </ul>
                                <h3><a href="#" class="d-inline-block">We are also going to bring back the children who dropped out of school due to un avoidable situations back to school. </a></h3>
                                <!--<a href="#" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>-->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-blog-post mb-30">
                            <div class="post-image">
                                <a href="#" class="d-block">
                                    <img src="{{ asset('assets/img/mine/tg14.jpg')}}" style="height:210px;" alt="image">
                                </a>

                                <div class="tag">
                                    <a href="#">Talented Children</a>
                                </div>
                            </div>

                            <div class="post-content">
                                <ul class="post-meta">
                                    <li class="post-author">
                                        By: <a href="#" class="d-inline-block">joome support</a>
                                    </li>
                                    <li><a href="#">August 26, 2022</a></li>
                                </ul>
                                <h3><a href="#" class="d-inline-block">This talents involve singing,athletics,football and others ones they are identified in any community.</a></h3>
                                <!--<a href="#" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>-->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-blog-post mb-30">
                            <div class="post-image">
                                <a href="#" class="d-block">
                                    <img src="{{ asset('assets/img/mine/tg13.jpg')}}" style="height:210px;" alt="image">
                                </a>

                                <div class="tag">
                                    <a href="#">Polygamous Families</a>
                                </div>
                            </div>

                            <div class="post-content">
                                <ul class="post-meta">
                                    <li class="post-author">
                                        By: <a href="#" class="d-inline-block">joome support</a>
                                    </li>
                                    <li><a href="#">August 29, 2022</a></li>
                                </ul>
                                <h3><a href="#" class="d-inline-block">This group involves those children who don't receive equal distribution of basic needs like Education.</a></h3>
                                <!--<a href="#" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>-->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-blog-post mb-30">
                            <div class="post-image">
                                <a href="#" class="d-block">
                                    <img src="{{ asset('assets/img/mine/tg9.jpg')}}" style="height:210px;" alt="image">
                                </a>
    
                                <div class="tag">
                                    <a href="#">Tramautized Children</a>
                                </div>
                            </div>
    
                            <div class="post-content">
                                <ul class="post-meta">
                                    <li class="post-author">
                                        By: <a href="#" class="d-inline-block">Joome support</a>
                                    </li>
                                    <li><a href="#">August 30, 2022</a></li>
                                </ul>
                                <h3><a href="#" class="d-inline-block">This children traumatized due to wars, Rape and Family negative factors like divorce, peers-to-peer Effect. </a></h3>
                                <!--<a href="#" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>-->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-blog-post mb-30">
                            <div class="post-image">
                                <a href="#" class="d-block">
                                    <img src="{{ asset('assets/img/mine/disabled.jpg')}}" style="height:210px;" alt="image">
                                </a>

                                <div class="tag">
                                    <a href="#">Children with Disability</a>
                                </div>
                            </div>

                            <div class="post-content">
                                <ul class="post-meta">
                                    <li class="post-author">
                                        By: <a href="#" class="d-inline-block">joome support</a>
                                    </li>
                                    <li><a href="#">August 29, 2022</a></li>
                                </ul>
                                <h3><a href="#" class="d-inline-block">This involve children with disabilty or impairements of any type when facilities are available to cater this group.</a></h3>
                                <!--<a href="#" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>-->
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