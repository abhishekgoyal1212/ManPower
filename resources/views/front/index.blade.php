<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('front-assets/css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('front-assets/css/Responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('front-assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <script defer src="plugins/OwlCarousel2.3/owl.carousel.min.js"></script>
        <title>@yield('title')</title>
    </head>
<body>
    <div class="Account_Details py-0">
        <div class="container">
            <div class="pusher">
                <div class="panel">
                    <nav class="menu">

                        <ul>
                            <li><a href="#">Jobs</a></li>
                            <li class="course-sale"><a href="#">Courses <span>Sale</span></a></li>
                            <li><a href="#">Career advice</a></li>
                            <li class="post-job-btn"><button>Post a job</button></li>
                        </ul>
                    </nav>
                </div>
                <div class="content">
                    <div class="content-inner">
                            <div class="d-flex align-items-center">
                                <div class="logo">
                                    <a href="{{route('home')}}">
                                        <img src="{{asset('front-assets/images/logo.png')}}" class="img-fluid">
                                    </a>
                                </div>
                                <div class="menu man-power-menu">
                                    <div class="menu-first">
                                        <ul class="list-unstyled pl-0 d-flex mb-0 align-items-center justify-content-end">
                                            <li class="border-active"><a href="#">Jobs</a> </li>
                                            <li>
                                                <a href="#">Courses</a>
                                                <span>Sale</span>
                                            </li>
                                            <li><a href="#">Career advice</a></li>
                                        </ul>
                                    </div>
                                    <div class="menu-Second">
                                        <ul class="list-unstyled pl-0 d-flex mb-0 align-items-center justify-content-between">
                                            <li>
                                                <a href="{{route('Recuriter.Home')}}">
                                                    <span>Recruiting?</span>
                                                Post a job </a>
                                            </li>
                                            
                                            <li class="Register"><button>Register CV</button></li>
                                        </ul>
                                    </div>
                                    <div class="menu-three">
                                        <ul class="list-unstyled pl-0 d-flex mb-0 align-items-center justify-content-between">
                                            <li><a href="{{route('front.Login')}}">Sign In</a></li>


                                            <li class="menu-three-saved-jobs">

                                                <a href="#"><i class="fa fa-heart-o pr-2 font-weight-bold"></i>

                                                    <span>Saved jobs</span></a>
                                            <div class="saved-jobs">
                                                <p>You haven't shortlisted any jobs yet</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </div>

                        <button class="mobile-menu d-xl-none"><i class="fa fa-bars"></i></button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- OneTrust Cookies Consent Notice start -->
        <script src="https://cdn-ukwest.onetrust.com/scripttemplates/otSDKStub.js" type="text/javascript" charset="UTF-8" data-domain-script="188cee29-2336-4bd7-8d57-25bcd588dc31"></script>
    <!-- OneTrust Cookies Consent Notice end -->
  @yield('content');
  <footer>
    <div class="footer-top-sec">
        <div class="container">
        <div class="upper_side contents">
            <ul class="flex list-unstyled">
                <li class="footer-menu first_depth">
                    <p class="title">JOBS</p>
                    <ul class="list-unstyled second_depth">
                        <li><a href="">Contact us</a></li>
                        <li><a href="">Job search</a></li>
                        <li><a href="">Recruiter directory</a></li>
                        <li><a href="">Work from home</a></li>
                        <li><a href="">Browse jobs</a></li>
                        <li><a href="">Browse locations</a></li>
                        <li><a href="">Popular searches</a></li>
                        <li><a href="">Career advice</a></li>
                        <li><a href="">Average salary checker</a></li>
                        <li><a href="">Help</a></li>
                        <li><a href="">Contact a 1IGS Man Power office</a></li>

                    </ul>
                </li>
                <li class="footer-menu first_depth">
                    <p class="title">RECRUITER</p>
                    <ul class="list-unstyled second_depth">
                        <li><a href="">Recruiter site</a></li>
                        <li><a href="">Post a job</a></li>
                        <li><a href="">CV Search</a></li>
                        <li><a href="">Recruitment agencies</a></li>
                        <li><a href="">Recruiter Advice</a></li>
                    </ul>
                </li>
                <li class="footer-menu first_depth">
                    <p class="title">COURSES</p>
                    <ul class="list-unstyled second_depth">
                        <li><a href="">Help</a></li>
                            <li><a href="">Contact us</a></li>
                            <li><a href="">Find a course</a></li>
                            <li><a href="">View all subjects</a></li>
                            <li><a href="">Discount courses</a></li>
                            <li><a href="">Online courses</a></li>
                            <li><a href="">Free courses</a></li>
                            <li><a href="">Awarding body directory</a></li>
                            <li><a href="">Career guides</a></li>
                            <li><a href="">Advertise a course</a></li>
                    </ul>
                </li>
                <li class="footer-menu first_depth">
                    <p class="title">MORE FROM 1IGS MANPOWER.CO.UK</p>
                    <ul class="list-unstyled second_depth">
                        <li><a href="">About us</a></li>
                        <li><a href="">Careers at 1IGS Man Power.co.uk</a></li>
                        <li><a href="">Press office</a></li>
                        <li><a href="">Corporate governance</a></li>
                        <li><a href="">Modern slavery statement</a></li>
                    </ul>
                </li>
                <li class="footer-menu first_depth">
                    <p class="title">1IGS MANPOWER</p>
                    <ul class="list-unstyled second_depth">
                        <li>
                                <ul class="list-unstyled">
                                    <li><a href="#">Tempzone: timesheets & holiday</a></li>
                                    <li><a href="#">Authorise timesheets</a></li>
                                    <li><a href="#">1IGS Man Power Group Services</a></li>
                                    <li><a href="#">1IGS Man Power Global</a></li>
                                    <li><a href="#">1IGS Man Power in Partnership</a></li>
                                    <li><a href="#">Careers with 1IGS Man Power</a></li>
                                    <li><a href="#">James 1IGS Man Power - Official Site</a></li>
                                    <li class="logo-content"><a href="{{route('home')}}"><img src="{{asset('front-assets/images/logo.png')}}" class="footer-logo"></a></li>
                                </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="row explore-site">
            <div class="col-md-7 our-story">
                <!-- <div class="our-book">
                    <div><img src="front-assets/images/our-story'-book.png" alt=""></div>
                    <div class="pl-3">
                        <h4>Nail your next interview</h4>
                        <p>Learn how to answer 101 of the most common questions now.</p>
                        <a href=""><h5>Buy Man Power's best-selling book »</h5></a>
                    </div>
                </div> -->
            </div>
            <div class="col-md-5 connect">
                <div class="connect-logo"><a href="{{route('home')}}"><img src="{{asset('front-assets/images/logo.png')}}" class="footer-logo"></a></div>
                <!-- <div class="footer-icon-box">
                    <div class="footer-icon">
                        <div><a href=""><img src="'front-assets/images/app-store''.png" alt="" class="img-fluid"></a></div>
                    </div>
                    <div class="footer-icon"><div><a href=""><img src="front-assets/images/google-play''.png" alt="" class="img-fluid"></a></div></div>
                    <div class="footer-icon">
                        <div><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
                    </div>
                    <div class="footer-icon">
                        <div><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
                    </div>
                </div> -->
                <div class="footer-icon-box">
                    <div class="footer-icon">
                        <div><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
                    </div>
                    <div class="footer-icon">
                        <div><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
                    </div>
                    <div class="footer-icon">
                        <div><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
                    </div>
                    <div class="footer-icon">
                        <div><a href=""><i class="fa fa-whatsapp" aria-hidden="true"></i></a></div>
                    </div>
                </div>
                <div class="action-list">
                    <ul class="list-unstyled">
                        <li><a href="">Manage Preferences ,</a></li>
                        <li><a href="">Security, Privacy, Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="copyright"><p>COPYRIGHT © Manpower.co.uk 2022</p></div>
            </div>
        </div>
        </div>  
    </div>  
</footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="{{asset('front-assets/js/slim.min.js')}}"></script>
<script src="{{asset('front-assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front-assets/js/popper.min.js')}}"></script>
<script src="{{asset('front-assets/js/script.js')}}"></script>
<!--     <script type="text/javascript" src="js/script.js"></script> -->
</body>
</html>
