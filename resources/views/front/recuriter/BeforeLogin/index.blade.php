<?php 
$current_route =  Route::currentRouteName(); 
?> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('front-assets/css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('front-assets/css/Responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('front-assets/css/bootstrap.min.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        {{-- Toster Live --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
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
                     <a href="{{route('Recuriter.PostJobFront')}}"><li class="post-job-btn"><button>Post a job</button></li></a>
                    </ul>
                </nav>
            </div>
            <div class="content postjob-nav">
                <div class="content-inner">
                        <div class="d-flex align-items-center">
                            <div class="logo">
                                <a href="{{route('Recuriter.Home')}}">
                                    <img src="{{asset('front-assets/images/logo.png')}}" class="img-fluid">
                                </a>
                               
                            </div>
                            <div class="menu man-power-menu">
                                <div class="menu-first">
                                    <ul class="list-unstyled pl-0 d-flex mb-0 align-items-center justify-content-end">
                                        <li class="border-active"><a href="{{route('Recuriter.PostJobFront')}}">Post a job</a> </li>
                                        <li>
                                            <a href="{{route('Recuriter.CvSearch')}}">CV Search</a>
                                            <!-- <span>Sale</span> -->
                                        </li>
                                        <li class=""><a href="{{route('Recuriter.Advicer')}}">Recruiter Advice</a></li>
                                        <li class="dropdown-toggle lookjobs" id="lookmore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <a href="">More</a>
                                        <ul class="dropdown-menu" aria-labelledby="lookmore" x-placement="bottom-start" style="position: absolute; transform: translate3d(397px, 66px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <li><a href="#">Customer success</a></li>
                                        <li><a href="{{route('Recuriter.Agencies')}}">Recruitment Agencies</a></li>
                                        <li><a href="#">Integrate with us</a></li>
                                        <li><a href="#">Our Audience</a></li>
                                        </ul>
                                        </li>


                                    </ul>
                                </div>
                                
                                <div class="menu-three">
                                    <ul class="list-unstyled pl-0 d-flex mb-0 align-items-center justify-content-between">
                                        @if(empty($current_route == 'Recuriter.Advicer'))
                                        <li><a href="{{route('Recuriter.Login')}}">Sign in / Register</a></li>
                                        <li class="d-lg-inline-block d-none"><a href="#">Contact us</a></li>
                                        @endif
                                        <li class="d-xl-inline-block d-none"><a href="#">Find a job <i class="fa fa-chevron-right"></i></a></li>
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
@yield('content')
<footer>
    <div class="footer-top-sec Account_Details_Footer">
        <div class="container">
        <div class="upper_side Checkout_Footer contents Home_Footer">
            <ul class="flex list-unstyled w-100">
                <li class="footer-menu first_depth">
                    <p class="title">OUR SERVICES</p>
                    <ul class="list-unstyled second_depth">
                        <li><a href="">Why 1IGS Manpower?</a></li>
                        <li><a href="">Recruiter Advice</a></li>
                        <li><a href="">Customer success</a></li>
                        <li><a href="">Our audience</a></li>
                        <li><a href="">Work for us</a></li>
                        <li><a href="">Terms and Conditions</a></li>
                        <li><a href="">Cookies Policy</a></li>
                        <li><a href="">Complaints Policy</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        

                    </ul>
                </li>
                <li class="footer-menu first_depth">
                    <p class="title">SERVICES FOR RECRUITERS</p>
                    <ul class="list-unstyled second_depth">
                        <li><a href="">Post a job</a></li>
                        <li><a href="">CV Search</a></li>
                        <li><a href="">Recruitment agencies</a></li>
                        <li><a href="">For developers</a></li>
                    </ul>
                </li>
                <li class="footer-menu first_depth">
                    <p class="title">OTHER SERVICES</p>
                    <ul class="list-unstyled second_depth">
                        <li><a href="">Find a job</a></li>
                            <li><a href="">Find a course</a></li>
                            <li><a href="">Advertise a course</a></li>
                            <li><a href="">1IGS Manpower Global</a></li>
                            <li><a href="">1IGS Manpower Screening</a></li>

                    </ul>
                </li>
               
                <li class="footer-menu first_depth">
                    <p class="title">HELP AND CONTACT</p>
                    <ul class="list-unstyled second_depth">
                        <li>
                                <ul class="list-unstyled">
                                    
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Press office</a></li>
                                 
                                    <li class="logo-content"><a href="{{route('Recuriter.Home')}}"><img src="{{asset('front-assets/images/logo.png')}}" class="footer-logo"></a></li>
                                </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="row explore-site">
            <div class="col-md-7 our-story">
            </div>
            <div class="col-md-5 connect mobile-footer-icons post-footer-mobile">
                <div class="connect-logo"><a href="{{route('Recuriter.Home')}}"><img src="{{asset('front-assets/images/logo.png')}}" class="footer-logo"></a></div>
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
                <!-- <div class="action-list">
                    <ul class="list-unstyled">
                        <li><a href="">Manage Preferences ,</a></li>
                        <li><a href="">Security, Privacy, Terms & Conditions</a></li>
                    </ul>
                </div> -->
                <div class="copyright mt-3"><p>COPYRIGHT © 1IGS Manpower 2022</p></div>
            </div>
        </div>




        <!-- Mobile Footer -->
        <div id="accordion">
          <div class="card">
            <div class="card-header pointer" data-toggle="collapse" data-target="#collapse-1">
                  <h5>OUR SERVICES</h5>
            </div>
            <div id="collapse-1" class="collapse" data-parent="#accordion">
              <div class="card-body">
                   <ul class="list-unstyled second_depth">
                       <li><a href="">Why 1IGS Manpower?</a></li>
                        <li><a href="">Recruiter Advice</a></li>
                        <li><a href="">Customer success</a></li>
                        <li><a href="">Our audience</a></li>
                        <li><a href="">Work for us</a></li>
                        <li><a href="">Terms and Conditions</a></li>
                        <li><a href="">Cookies Policy</a></li>
                        <li><a href="">Complaints Policy</a></li>
                        <li><a href="">Privacy Policy</a></li>

                    </ul>
              </div>
            </div>
          </div>
          
          <div class="card">
            <div class="card-header pointer" data-toggle="collapse" data-target="#collapse-2">
                  <h5>SERVICES FOR RECRUITERS</h5>
            </div>
            <div id="collapse-2" class="collapse" data-parent="#accordion">
              <div class="card-body">
                  <ul class="list-unstyled second_depth">
                        <li><a href="">Post a job</a></li>
                        <li><a href="">CV Search</a></li>
                        <li><a href="">Recruitment agencies</a></li>
                        <li><a href="">For developers</a></li>
                    </ul>
              </div>
            </div>
          </div>
          
          <div class="card">
            <div class="card-header pointer" data-toggle="collapse" data-target="#collapse-3">
                  <h5>OTHER SERVICES</h5>
            </div>
            <div id="collapse-3" class="collapse" data-parent="#accordion">
              <div class="card-body">
               <ul class="list-unstyled second_depth">
                        <li><a href="">Find a job</a></li>
                            <li><a href="">Find a course</a></li>
                            <li><a href="">Advertise a course</a></li>
                            <li><a href="">1IGS Manpower Global</a></li>
                            <li><a href="">1IGS Manpower Screening</a></li>
                    </ul>
              </div>
            </div>
          </div>


            <div class="card">
            <div class="card-header pointer" data-toggle="collapse" data-target="#collapse-4">
                  <h5>HELP AND CONTACT</h5>
            </div>
            <div id="collapse-4" class="collapse" data-parent="#accordion">
              <div class="card-body">
                <ul class="list-unstyled second_depth">
                        
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Press office</a></li>
                    </ul>
              </div>
            </div>
          </div>

        <div class="mobile-footer-logo text-center">
            <a href="{{route('Recuriter.Home')}}">
          <img src="{{asset('front-assets/images/logo.png')}}" class="footer-logo">
        </a>
          </div>
          <div class="footer-icon-box justify-content-center mt-3">
                    <div class="footer-icon mr-2">
                        <div><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
                    </div>
                    <div class="footer-icon pr-0">
                        <div><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
                    </div>
                   
           </div>
           <div class="copyright mt-4"><p class="text-center">COPYRIGHT © 1IGS Manpower 2022</p></div>
        </div>
        </div>
        
    </div>
    
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="{{asset('front-assets/js/slim.min.js')}}"></script>
<script src="{{asset('front-assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front-assets/js/popper.min.js')}}"></script>
<script src="{{asset('front-assets/js/script.js')}}"></script>
{{-- Toster Code --}}
<script>
        $(".dropdown-toggle").click(function(event) {
        $(".dropdown-menu").slideToggle("slow",function(){
        });
    });
    $(document).ready(function() {
        @if (Session::has('flash-error'))
            toastr.error('{{ Session::get('flash-error') }}');
        @elseif(Session::has('flash-success'))
            toastr.success('{{ Session::get('flash-success') }}');
        @endif
    });
</script>
</body>
</html>
