<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('front-assets/css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('front-assets/css/Responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('front-assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
          <!-- select2 -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
      <!-- select2-bootstrap4-theme -->
      <link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css" rel="stylesheet"> <!-- for live demo page -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <title>@yield('title')</title>
    </head>
<body>

@if(!empty($current_data))
<div class="Account_Details py-0">
        <div class="container px-0 px-md-3">
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
                                <div class="menu-Second menu-Second-course">
                                    <ul class="list-unstyled pl-0 d-flex mb-0 align-items-center justify-content-between">
                                        <li>
                                            <a href="{{route('Recuriter.Home')}}"> <span>Recruiting?</span> Post a job </a>
                                        </li>
                                      <!--   <li class="manu-saves"><a href="#"><i class="fa fa-heart-o pr-2 font-weight-bold"></i>Saved jobs</a>
                                        
                                        
                                        <div class="saved-jobs-subnav">
                                            You haven't shortlisted any jobs yet
                                        </div>
                                        
                                    </li> -->
                                </ul>
                            </div>
                            
                            <div class="menu-three menu-three-course jobs-mobile">
                                <img src="https://img.icons8.com/external-tanah-basah-basic-outline-tanah-basah/20/f26232/external-user-user-tanah-basah-basic-outline-tanah-basah-7.png " class="mr-2">
                                <ul class="list-unstyled pl-0  mb-0 dropdwon-menu">
                                    <button class=" togel">@if(!empty($current_data)) {{$current_data->first_name}}@else Demo @endif</button>
                                    <div class="Demo_Jobs show_togel">
                                        <ul>
                                            <li><a href="{{route('CandidateProfile')}}">Profile and CV</a></li>
                                            <li><a href="#">Draft applications</a></li>
                                            <li><a href="#">Saved jobs</a></li>
                                            <li><a href="#">Jobs applied for</a></li>
                                            <li><a href="#">Your searches and alerts</a></li>
                                            <li><a href="#">Get the Job Search app</a></li>
                                            <li><a href="#">Course purchase history</a></li>
                                            <li><a href="#">Account</a></li>
                                            <a href="{{route('front.logout')}}"><li>Sign out</li></a>
                                        </ul>
                                    </div>
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
<section class="candidate-profile">
        <div class="container">
           <form>
              <div class="row">
                 <div class="vacancies col-md-5 col-lg-4">
                    <label class="mr-2 mb-1">What</label>
                    <div class="mb-1 mr-2 w-100"><input type="text" name="keywords" placeholder="e.g. marketing manager"></div>
                 </div>
                 <div class="vacancies col-md-5 col-lg-4">
                    <label class="mr-2 mb-1">Where</label>
                    <div class="mb-1 mr-2 w-100"><input type="text" name="keywords" placeholder="town or postcode"></div>
                 </div>
                 <div class="col-md-5 col-md-2 col-lg-2">
                    <button type="submit">Search jobs</button>
                 </div>
                 <div class="browse-vacancies col-sm-12 col-md-2 col-lg-2">
                    <a href="">Browse jobs <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                 </div>
              </div>
           </form>
        </div>
</section>
@else
<div class="signin-header sign-up-header">
<div class="container">
        <div class="row">
            <div class="logo">
        <a href="{{route('home')}}">
                <img src="{{asset('front-assets/images/logo.png')}}" class="img-fluid">
            </a>
        </div>
    </div>
</div>
</div>
@endif
@yield('content')
@if(!empty($current_data)))
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
                <div class="connect-logo"><a href="#"><img src="{{asset('front-assets/images/logo.png')}}" class="footer-logo"></a></div>
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
<!-- Select 2 js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<!--     <script type="text/javascript" src="js/script.js"></script> -->
<script>
$(document).ready(function() {
    $(".select2").select2({
    tags:true,
    placeholder: "Enter Your Skills",
    allowClear: true

});
$(".select_sector").select2({
    placeholder: "Select Sectors",
    allowClear: true
});



    $(".togel").click(function(event) {
        $(".show_togel").slideToggle("slow",function(){
        });
    });
});
 </script>
 @endif
</body>
</html>
