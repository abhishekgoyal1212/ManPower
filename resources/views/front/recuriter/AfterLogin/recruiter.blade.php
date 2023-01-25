@extends('front.recuriter.AfterLogin.index')
@section('title', 'Recuriter')
@section('content')
<section class="recruiter">
    <div class="container">
        <div class="recruiter-title">
            <h1 class="mb-0">Hi name, <span> welcome to your recruiter account</span></h1>
            <div class="contact-title">
                <span>Questions? Call us: </span>
                <a href="tel:08452419293">0584 582 8934</a>
            </div>
        </div>
    </div>
</section>
<section class="offer">
        <div class="container">
            <div class="offer-container">
                <div class="offer-content">
                    
                        <h3>
                        <span class="font-weight-bold">Never posted a job with reed.co.uk?</span>
                        Get your first Premium+ job for just
                        <span class="font-weight-bold">£89</span>
                        <span class="font-weight-bold h6">+VAT
                            <span class="old-price">£175</span>
                        </span>

                        </h3>
                        <a href="" class="offer-btn">Get the offer</a>
                </div>
            </div>
        </div>
    </section>
<section class="info-prices">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="info-prices-container grey-styles">
                    <div>
                        <h2>Job Adverts</h2>
                        <h3>Advertise your role to 23.4 million active candidates</h3>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p>Reach top talent fast - Buy online and post your jobs instantly</p>
                            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p>Receive expert advice on how to get the most out of your job ad</p>
                            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p>Manage candidates with our Applicant management tool</p>
                            </li> 
                        </ul>
                        <a href="">See Job Adverts info and prices</a>
                    </div>
                    <div class="info-prices-box">
                        <img src="{{asset('front-assets/images/advertiseajob.png')}}" class="img-fluid w-100">
                    </div>
                </div>
            </div>
             <div class="col-md-12">
                <div class="info-prices-container grey-styles">
                    <div>
                        <h2>CV Search</h2>
                        <h3>Headhunt your perfect candidate</h3>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p>Access to 13.4 million CVs</p>
                            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p>Search CVs and filter by job title, skills, location and more</p>
                            </li>
                            <li>
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p>Shortlist and share the best candidates with your colleagues</p>
                            </li> 
                        </ul>
                        <a href="">See CV Search info and prices</a>
                    </div>
                    <div class="info-prices-box">
                        <img src="{{asset('front-assets/images/cvsearch.png')}}" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
        <div class="row info-post">
            <div class="col-lg-3 col-md-6">
                <div class="blue_styles">
                    <h3>Six ways to make the most of your job ads</h3>
                    <div class="info-post-content">
                        <img src="{{asset('front-assets/images/info-post.jpg')}}" class="img-fluid w-100">
                        <p class="mb-0">Six proven ways to improve the effectiveness of your job listing. </p>
                        <a href="" class="d-flex align-items-center">Read more <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="blue_styles">
                    <h3>Six ways to make the most of your job ads</h3>
                    <div class="info-post-content">
                        <img src="{{asset('front-assets/images/info-post.jpg')}}" class="img-fluid w-100">
                        <p class="mb-0">Six proven ways to improve the effectiveness of your job listing. </p>
                        <a href="" class="d-flex align-items-center">Read more <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="blue_styles">
                    <h3>Six ways to make the most of your job ads</h3>
                    <div class="info-post-content">
                        <img src="{{asset('front-assets/images/info-post.jpg')}}" class="img-fluid w-100">
                        <p class="mb-0">Six proven ways to improve the effectiveness of your job listing. </p>
                        <a href="" class="d-flex align-items-center">Read more <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="blue_styles">
                    <h3>Six ways to make the most of your job ads</h3>
                    <div class="info-post-content">
                        <img src="{{asset('front-assets/images/info-post.jpg')}}" class="img-fluid w-100">
                        <p class="mb-0">Six proven ways to improve the effectiveness of your job listing. </p>
                        <a href="" class="d-flex align-items-center">Read more <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7 manpower-offer">
        <a href="">
            <img src="{{asset('front-assets/images/igs-manpower-offer.png')}}" class="img-fluid">
            <img src="{{asset('front-assets/images/igs-manpower-offer-mob.png')}}" class="img-fluid">
        </a>
        </div>
        </div>
    </div>
</section>
@stop