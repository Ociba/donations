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
        <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Activities</li>
                    </ul>
                    <h2>Schools</h2>
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
                        <ul class="features-list" style="list-style-type: none;">
                            <li style="font-weight:bold;"><i class='bx bx-check-double'></i> Pre-Primary School</li>
                            <p>This section will be divided into three parts that is to say Baby class, Middle Class and Upper class. Children should be age of 3-6 Years old to complete Nursery studies. This will be inline with the Uganda Government syllabus unless its going to be an international school.</p>
                            <p>The major emphasis will be on Computer literacy, Music,Dance & Drama and Physical Educations in addition to Government syllabus.</p>
                            <li style="font-weight:bold;"><i class='bx bx-check-double'></i> Primary School</li>
                            <p>This consists of primary one to primary seven, a complete 7 years of study. All subjects will be taught but with an aim of equiping learners with computer skills, Music,Dance & Drama, Physical Education.Students are expected learn theory and practicals.</p>
                            <li style="font-weight:bold;"><i class='bx bx-check-double'></i> Secondary School</li>
                            <p>This level involves two sections that is to say Ordinary Level and Advanced Level which is 4 years and 2 Years respectively. Atleast one of the keys areas must be a compulsory subject or subsidiary for all the students.</p>
                            <li style="font-weight:bold;"><i class='bx bx-check-double'></i> Tertiary Institution</li>
                            <p>This is a higher level of education in Uganda either for Diploma or Bachelors where most of the Universities offers Computer courses, Music,Dance & Drama Courses, Sports Science. </p>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End My Account Area -->

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

        @include('frontlayouts.javascript')
    </body>

</html>