<header class="header-area">

    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <ul class="top-header-contact-info">
                        <li>
                            <i class='bx bx-phone-call'></i>
                            <span>Contact support</span>
                            <a href="tel:+256 753 926 367">+256 753 926 367</a>
                        </li>
                        <li>
                            <i class='bx bx-map'></i>
                            <span>Our location</span>
                            <a href="#">Ngora, Uganda</a>
                        </li>
                        <li>
                            <i class='bx bx-envelope'></i>
                            <span>Contact email</span>
                            <!--<a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#b4dcd1d8d8dbf4c6d5c5c1d19ad7dbd9"><span class="__cf_email__" data-cfemail="cfa7aaa3a3a08fbdaebebaaae1aca0a2">[email&#160;protected]</span></a>-->
                            ocibajames@gmail.com
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <div class="top-header-btn">
                        <a href="#" class="default-btn2" style="text-align:left;">Donations-&nbsp; $768</a>
                        <a href="/login" class="default-btn"><i class='bx bx-log-in icon-arrow before'></i><span class="label">Log In</span><i class="bx bx-log-in icon-arrow after"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="raque-responsive-nav">
            <div class="container">
                <div class="raque-responsive-menu">
                    <div class="logo">
                        <a href="/">
                            <img src="{{ asset('assets/img/partner/11.png')}}" class="black-logo" alt="logo">
                            <img src="{{ asset('assets/img/partner/11.png')}}" class="white-logo" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="raque-nav bg-transparent">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('assets/img/partner/11.png')}}" class="black-logo" alt="logo">
                        <img src="{{ asset('assets/img/partner/11.png')}}" class="white-logo" alt="logo">
                        <a class="navbar-brand" href="/">JOOME</a>
                    </a>

                    <div class="collapse navbar-collapse mean-menu">
                        @php 
                            if(request()->routeIs('About')){
                                $about = 'color:#020ab9';
                            }else{
                                $about = 'color:black';
                            }
                            if(request()->routeIs('Activities')){
                                $activities = 'color:#020ab9';
                            }else{
                                $activities = 'color:black';
                            }
                            if(request()->routeIs('Target Groups')){
                                $groups = 'color:#020ab9';
                            }else{
                                $groups = 'color:black';
                            }
                            if(request()->routeIs('Blog')){
                                $blog = 'color:#020ab9';
                            }else{
                                $blog = 'color:black';
                            }
                            if(request()->routeIs('Projects')){
                                $projects = 'color:#020ab9';
                            }else{
                                $projects = 'color:black';
                            }
                            if(request()->routeIs('Contact')){
                                $contact = 'color:#020ab9';
                            }else{
                                $contact = 'color:black';
                            }
                            if(request()->routeIs('Resources')){
                                $resource = 'color:#020ab9';
                            }else{
                                $resource = 'color:black';
                            }
                            if(request()->routeIs('Donate')){
                                $don = 'color:white; background-color:#020ab9;border:#020ab9';
                            }else{
                                $don = 'color:#ffffff';
                            }
                        @endphp
                        <ul class="navbar-nav">
                            <li class="nav-item"><a  href="/" @if(\Request::route()->getName() == "Home") class="nav-link active" @else class="nav-link" @endif>Home </a>
                            </li>

                            <li class="nav-item"><a style={{$about}} href="{{\URL::signedRoute("About",['id' => 2022, 'about' => "about joome support organization", 'organiztion' => 'joomesupport'])}}" class="nav-link">About </a>
                            </li>

                            <li class="nav-item"><a style={{$activities}} href="{{\URL::signedRoute("Activities",['id' => 2022, 'activities' => 10000, 'organiztion' => 'joomesupport'])}}" class="nav-link">Activities </a>
                            </li>

                            <li class="nav-item"><a style="{{$groups}}" href="{{\URL::signedRoute("Target Groups",['id' => 2022, 'target groups' => 10000, 'organiztion' => 'joomesupport'])}}" class="nav-link">Target Group </a>
                            </li>
                            
                            <li class="nav-item"><a style="{{$projects}}" href="{{\URL::signedRoute("Projects",['id' => 2022, 'projects' => "To be done", 'organiztion' => 'joomesupport'])}}" class="nav-link">Projects </a>
                            </li>
                            
                            <li class="nav-item"><a style="{{$blog}}" href="{{\URL::signedRoute("Blog",['id' => 2022, 'blog' => "Our Blog", 'organiztion' => 'joomesupport'])}}" class="nav-link">Blog </a>
                            </li>

                            <li class="nav-item"><a style="{{$contact}}" href="{{\URL::signedRoute("Contact",['id' => 2022, 'Contact' => "Contact Us", 'organiztion' => 'joomesupport'])}}" class="nav-link">Contact</a></li>

                            <li class="nav-item"><a style="{{$resource}}"  href="{{\URL::signedRoute("Resources",['id' => 2022, 'Resources' => "Check Our Resources", 'organiztion' => 'joomesupport'])}}" class="nav-link">Resources</a></li>
                        </ul>

                        <div class="others-option">
                            <div class="dropdown language-switcher d-inline-block">
                                <a href="{{\URL::signedRoute("Donate",['id' => 2022, 'Donations' => "Donate and Support us", 'organiztion' => 'joomesupport'])}}" class="dropdown-toggle">
                                    <span class="donate" style="{{$don}}" >Donate </span>
                                </a>
                            </div>

                            <!--<a href="cart.html" class="cart-wrapper-btn d-inline-block">
                                <i class='bx bx-cart-alt'></i>
                                <span>01</span>
                            </a>

                            <div class="search-box d-inline-block">
                                <i class='bx bx-search'></i>
                            </div>-->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

    <!-- Start Sticky Navbar Area -->
    <div class="navbar-area header-sticky">
        <div class="raque-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('assets/img/partner/11.png')}}" class="black-logo" alt="logo">
                        <img src="{{ asset('assets/img/partner/11.png')}}" class="white-logo" alt="logo">
                        <a class="navbar-brand" href="/">JOOME</a>
                    </a>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="/" @if(\Request::route()->getName() == "Home") class="nav-link active" @else class="nav-link" @endif>Home </a>
                            </li>

                            <li class="nav-item"><a style={{$about}} href="{{\URL::signedRoute("About",['id' => 2022, 'about' => 'about joome support organization', 'organiztion' => 'joomesupport'])}}" class="nav-link">About </a>
                            </li>

                            <li class="nav-item"><a style={{$activities}} href="{{\URL::signedRoute("Activities",['id' => 2022, 'activities' => 10000, 'organiztion' => 'joomesupport'])}}" class="nav-link">Activities </a>
                            </li>

                            <li class="nav-item"><a  style="{{$groups}}" href="{{\URL::signedRoute("Target Groups",['id' => 2022, 'target groups' => 10000, 'organiztion' => 'joomesupport'])}}" class="nav-link">Target Group </a>
                            </li>
                            
                            <li class="nav-item"><a style="{{$projects}}" href="{{\URL::signedRoute("Projects",['id' => 2022, 'projects' => "To be done", 'organiztion' => 'joomesupport'])}}" class="nav-link">Projects </a>
                            </li>

                            <li class="nav-item"><a style="{{$blog}}" href="{{\URL::signedRoute("Blog",['id' => 2022, 'blog' => "Our Blog", 'organiztion' => 'joomesupport'])}}" class="nav-link">Blog </a>
                            </li>

                            <li class="nav-item"><a style="{{$contact}}" href="{{\URL::signedRoute("Contact",['id' => 2022, 'Contact' => "Contact Us", 'organiztion' => 'joomesupport'])}}" class="nav-link">Contact</a></li>

                            <li class="nav-item"><a style="{{$resource}}" href="{{\URL::signedRoute("Resources",['id' => 2022, 'Resource' => "Check Our Resources", 'organiztion' => 'joomesupport'])}}" class="nav-link">Resources</a></li>
                        </ul>

                        <div class="others-option">
                            <div class="dropdown language-switcher d-inline-block">
                                    <a href="{{\URL::signedRoute("Donate",['id' => 2022, 'Donations' => "Donate and Support us", 'organiztion' => 'joomesupport'])}}" class="dropdown-toggle">
                                        <span class="donate" style="{{$don}}">Donate </span>
                                    </a>
                                </div>

                                <!--<a href="cart.html" class="cart-wrapper-btn d-inline-block">
                                    <i class='bx bx-cart-alt'></i>
                                    <span>01</span>
                                </a>

                                <div class="search-box d-inline-block">
                                    <i class='bx bx-search'></i>
                                </div>-->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Sticky Navbar Area -->
    
</header>