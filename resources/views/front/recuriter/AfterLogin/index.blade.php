<!DOCTYPE html>
<html lang="en">
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

        <title>@yield('title')</title>
        
    </head>

    @if(!empty($current_data->first_name))

    <body class="background-lightgray">
        <div class="Account_Details">
                <div class="container">
                    <div class="pusher">
                        <div class="panel">
                            <nav class="menu">
                                <ul>
                                    <li><a href="#">Jobs applications</a></li>
                                    <li><a href="#">CV Search</a></li>
                                    <li><a href="#">Your candidates</a></li>
                                    <li class="post-job-btn"><button>Post a job</button></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="content">
                            <div class="content-inner">
                                <div class="Account_Details_Menu">
                                    <div class="Account_Details_Logo">
                                        <a href="{{route('Recuriter.RecruiterPage')}}"><img src="{{asset('front-assets/images/logo.png')}}" class="img-fluid"></a>
                                    </div>
        
                                    <div class="Account_Details_Pages_Tab">
                                        <ul>
                                            <li><a href="#">Jobs &amp; applications</a></li>
                                            <li><a href="#">CV Search</a></li>
                                        </ul>
                                    </div>
        
        
        
                                    <div class="Account_Details_Pages">
                                        <ul>
                                            <li><a href="#">Jobs &amp; applications</a></li>
                                            <li><a href="#">CV Search</a></li>
                                            <li><a href="#">Your candidates</a></li>
                                            <a href="{{route('Recuriter.PostJob')}}"><li class="post-job-btn"><button>Post a job</button></li></a>
                                        </ul>
                                    </div>
                                    <div class="Account_Details_Icon d-flex  align-items-center">
                                        <ul class="mb-0 pb-0">
                                            <a href="{{route('Recuriter.Basket')}}"><li><p class="cart-number">
                                                @if($CartData == 1){{$CartData}}@endif
                                                </p><img src="{{asset('front-assets/images/manpower-for-recruiter-basket-icon-new.png')}}"></li></a>
                                        </ul>
                                        <div class="Test">
                                            {{$current_data->first_name}}
                                            <div class="Test_Menu">
                                                <ul>
                                                    <a href="{{route('Recuriter.Account')}}"><li>Account settings</li></a>
                                                    <a href="#"><li>Company profile</li></a>
                                                    <a href="{{route('Recuriter.PostJob')}}"><li>Buy credits</li></a>
                                                    <a href="{{route('Recuriter.Advicer')}}"><li>Recruiter Advice</li></a>
                                                    <a href="#"><li>Contact us</li></a>
                                                    <a href="{{route('Recuriter.Help')}}"><li>Help</li></a>
                                                    <a href="{{route('front.logout')}}"><li>Sign out</li></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="mobile-menu"><i class="fa fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
           @yield('content')
               <div class="footer-top-sec Account_Details_Footer">
                <div class="container">
                    <div class="upper_side contents">
                        <ul class="flex list-unstyled">
                            <li class="footer-menu first_depth">
                                <p class="title font-weight-bold">OUR SERVICES</p>
                                <ul class="list-unstyled second_depth">
                                    <li><a href="{{route('Recuriter.PostJob')}}">Post a job</a></li>
                                    <li><a href="">CV Search</a></li>
                                    <li><a href="">Buy credits</a></li>
                                    <li><a href="">For developers</a></li>
                                    <li><a href="">Complaints Policy</a></li>
                                </ul>
                            </li>
        
                            <li class="footer-menu first_depth">
                                <p class="title font-weight-bold">ABOUT US</p>
                                <ul class="list-unstyled second_depth">
                                    <li><a href="">Security</a></li>
                                    <li><a href="">Terms and Conditions</a></li>
                                    <li><a href="">Privacy Policy</a></li>
                                    <li><a href="">Cookies Policy</a></li>
                                    <li><a href="">Cookies Settings</a></li>
                                </ul>
                            </li>
                            <li class="footer-menu first_depth">
                                <p class="title font-weight-bold">OTHER SERVICES</p>
                                <ul class="list-unstyled second_depth">
                                    <li>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Help</a></li>
                                            <li><a href="#">Contact us</a></li>
                                            <li><a href="#">1IGS Manpower Screening</a></li>
        
                                            <li class=" logo-content Account_Details_Footer_Logo ">
                                                <a href="#"><img src="{{asset('front-assets/images/logo.png')}}" class="footer-logo"></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="row explore-site">
        
                        <div class="col-md-12 connect">
                            <div class="connect-logo">
                                <a href="#"><img src="{{asset('front-assets/images/logo.png')}}" class="footer-logo"></a>
                            </div>
                            <div class="footer-icon-box">
                                <div class="footer-icon mr-md-2">
                                    <div><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
                                </div>
                                <div class="footer-icon">
                                    <div><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
                                </div>
        
                            </div>
        
                            <div class="copyright mt-4">
                                <p class="mb-0">COPYRIGHT © 1IGS Manpower 2022</p>
                            </div>
                        </div>
                    </div>
        
                    <!-- Mobile Footer -->
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header pointer" data-toggle="collapse" data-target="#collapse-1">
                                <h5 class="font-weight-bold">OUR SERVICES </h5>
                            </div>
                            <div id="collapse-1" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <ul class="list-unstyled second_depth">
                                        <li><a href="{{route('Recuriter.PostJob')}}">Post a job</a></li>
                                        <li><a href="">CV Search</a></li>
                                        <li><a href="">Buy credits</a></li>
                                        <li><a href="">For developers</a></li>
                                        <li><a href="">Complaints Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
        
                        <div class="card">
                            <div class="card-header pointer" data-toggle="collapse" data-target="#collapse-2">
                                <h5 class="font-weight-bold">ABOUT US </h5>
                            </div>
                            <div id="collapse-2" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <ul class="list-unstyled second_depth">
                                        <li><a href="">Security</a></li>
                                        <li><a href="">Terms and Conditions</a></li>
                                        <li><a href="">Privacy Policy</a></li>
                                        <li><a href="">Cookies Policy</a></li>
                                        <li><a href="">Cookies Settings</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
        
                        <div class="card">
                            <div class="card-header pointer" data-toggle="collapse" data-target="#collapse-3">
                                <h5 class="font-weight-bold">OTHER SERVICES </h5>
                            </div>
                            <div id="collapse-3" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Help</a></li>
                                        <li><a href="#">Contact us</a></li>
                                        <li><a href="#">1IGS Manpower Screening</a></li>
        
                                    </ul>
                                </div>
                            </div>
                        </div>
        
                        <div class="mobile-footer-logo text-center">
                            <img src="{{asset('front-assets/images/logo.png')}}" class="footer-logo">
                        </div>
                        <div class="footer-icon-box justify-content-center mt-3">
                            <div class="footer-icon mr-2">
                                <div><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="footer-icon pr-0">
                                <div><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
                            </div>
        
                        </div>
                        <div class="copyright mt-4">
                            <p class="text-center">COPYRIGHT © 1IGS Manpower 2022</p>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    @else
    <body class="background-gray">
        <div class="signin-header">
            <div class="container">
                <div class="row">
                
            <div class="logo">
                    <a href="{{route('Recuriter.Home')}}">
                        <img src="{{asset('front-assets/images/logo.png')}}" class="img-fluid">
                    
                </a></div><a href="{{route('Recuriter.Home')}}">
                <h2>Recruiter</h2>
                </a>
                </div>
                </div>
        </div>

        @yield('content');
    </body>
    @endif
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{asset('front-assets/js/slim.min.js')}}"></script>
    <script src="{{asset('front-assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front-assets/js/popper.min.js')}}"></script>
    <script src="{{asset('front-assets/js/script.js')}}"></script>
    {{-- Toster Code --}}
    <script>
        $(document).ready(function() {
            @if (Session::has('flash-error'))
                toastr.error('{{ Session::get('flash-error') }}');
            @elseif(Session::has('flash-success'))
                toastr.success('{{ Session::get('flash-success') }}');
            @endif
        });
    </script>
</html>
