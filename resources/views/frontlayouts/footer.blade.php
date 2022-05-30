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
                        <li><a href="{{\URL::signedRoute("Activities",['id' => 2022, 'activities' => 10000, 'organiztion' => 'joomesupport'])}}">Activities</a></li>
                        <li><a href="{{\URL::signedRoute("Target Groups",['id' => 2022, 'target groups' => 10000, 'organiztion' => 'joomesupport'])}}">Target Groups</a></li>
                        <li><a href="{{\URL::signedRoute("Projects",['id' => 2022, 'projects' => "To be done", 'organiztion' => 'joomesupport'])}}">Projects</a></li>
                        <li><a href="{{\URL::signedRoute("About",['id' => 2022, 'about' => 'about joome support organization', 'organiztion' => 'joomesupport'])}}">About</a></li>
                        <li><a href="{{\URL::signedRoute("Blog",['id' => 2022, 'blog' => "Our Blog", 'organiztion' => 'joomesupport'])}}">Blog</a></li>
                        <li><a href="{{\URL::signedRoute("Contact",['id' => 2022, 'Contact' => "Contact Us", 'organiztion' => 'joomesupport'])}}">Contacts</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget mb-30">
                    <h3>Newsletter</h3>

                    <div class="newsletter-box">
                        <p>To get the latest news and latest updates from us.</p>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @livewireStyles
                        @livewire('subscription')
                        @livewireScripts
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