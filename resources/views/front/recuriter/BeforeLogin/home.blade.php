@extends('front.recuriter.BeforeLogin.index')
@section('title','Home')
@section('content')
<div class="Recruiter_site_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 d-lg-block d-none"></div>
            <div class="col-lg-11 col-12">
                <div class="Recruiter_site_banner_content">
                    <h2 class="font-weight-bold"> 1IGS <span class="manpower-titlehead"> Manpower </span> </h2>
                    <h4 class="font-weight-bold"> Hiring made simple </h4>
                    <p> Post your first job advert for only £89 today</p>
                    <a href="{{route('Recuriter.PostJobFront')}}"><button class="RecruiterJobButton">Post a Job </button></a>
                    <span class="join-us">Need assistance? <a href="#">Call us on: 0845 241 9293</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="Recruite_coustmber_view">
    <div class="container">
        <div class="review">
            <a href="#">Our customers say</a>
            <p class="mx-3">Great </p>
            <div class="Recruite_star-rateing">
                <i class="fa fa-star star-show" aria-hidden="true"></i>
                <i class="fa fa-star star-show" aria-hidden="true"></i>
                <i class="fa fa-star star-show" aria-hidden="true"></i>
                <i class="fa fa-star star-show" aria-hidden="true"></i>
                <i class="fa fa-star star-show" aria-hidden="true"></i>
            </div>
            <span class="bands_views mx-3">4.1 out of 5 based on <strong> 2,519 reviews</strong></span>
            <div class="star-text">
                <i class="fa fa-star star-text-star" aria-hidden="true"></i>
                <a href="#">Trustpilot</a></div>
        </div>
    </div>
</section>
<section class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="about-content">
                    <div class="about-img"><img src="{{asset('front-assets/images/handshake.png')}}" class=""></div>
                    <h4>We're trusted</h4>
                    <p>Over 38,000 employers trust us to deliver that talent they need</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-content">
                    <div class="about-img"><img src="{{asset('front-assets/images/report.png')}}" class=""></div>
                    <h4>We deliver results</h4>
                    <p>84% of businesses using 1IGS Man Power find their next hire1.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="about-content">
                    <div class="about-img"><img src="{{asset('front-assets/images/result.png')}}" class=""></div>
                    <h4>We're the #1 choise</h4>
                    <p>Over 38,000 employers trust us to deliver that talent they need</p>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="register-candidate org-sec">
    <div class="container">
        <div class="register-box">
            <h4>Discover how many candidates are registered in your sector and location</h4>
            <div class="row align-items-center">

                <div class="col-md-4">
                    <div class="job-select-box">
                        <h5>Choose a sector</h5>
                        <select>
                <option>Accountancy</option>
                <option>Accountancy 1</option>
                <option>Accountancy 2</option>
                </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="job-select-box">
                        <h5>Choose a location</h5>
                        <select>
                <option>London</option>
                <option>Austria</option>
                <option>Canada</option>
                </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="job-select-box">
                        <h5 class="invisible">Where</h5>
                        <div class="job-select-box search-btnbox">
                            <hr class="vertical-line">
                            <div class="odometer-container">
                                <span>127,704</span>
                                <sub>registered candidates</sub>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="learn-more-btn text-center">
                <a href="#">Products &amp; Pricing
                                    </a>
                <a href="#">New Custom Offers</a>
            </div>
        </div>
    </div>
</section>
<section class="Customer-Succes">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 sucess-profile">
                <div class="Customer-Succes-profile">
                    <img src="{{asset('front-assets/images/custum.png')}}" alt="costum" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-12 Success-video">
                <div class="Success-video-content">
                    <h3>SME Customer Success Story</h3>
                    <p>Find out why small and medium businesses <br> love 1IGS Manpower </p>
                    <button class="btn1"> Watch video</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="Recruite_brands">
    <div class="container">
        <h4 class="Recruite_brand_title">More brands we work with</h4>
        <ul class="list-unstyled Recruite_brands_logo">
            <li><img src="{{asset('front-assets/images/nhs.png')}}" alt="nhs" class="img-fluid"></li>
            <li><img src="{{asset('front-assets/images/nhs.png')}}" alt="nhs" class="img-fluid"></li>
            <li><img src="{{asset('front-assets/images/nhs.png')}}" alt="nhs" class="img-fluid"></li>
            <li><img src="{{asset('front-assets/images/nhs.png')}}" alt="nhs" class="img-fluid"></li>
            <li><img src="{{asset('front-assets/images/nhs.png')}}" alt="nhs" class="img-fluid"></li>
            <li><img src="{{asset('front-assets/images/nhs.png')}}" alt="nhs" class="img-fluid"></li>
        </ul>
    </div>
</section>
<section class="customerstories">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 ">
                <div class="profile">
                    <figure><img src="{{asset('front-assets/images/delia1.png')}}" alt="delia1" class="delia1"></figure>
                    <h4>Delia Roberts</h4>
                    <p>Associate Director at Mullucks Wells</p>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="profile_contend">
                    <a href="#" class="mb-3 d-inline-block"><img src="{{asset('front-assets/images/wells-logo.png')}}" alt="wells-logo" class="wells-logo"></a>
                    <h6 class="mb-3"><b>Mulluck Wells is an independent estate agent operating in the South East of
                                England</b></h6>
                    <p>“The service agreement was very easy to complete and 1IGS Manpower kindly helped formulate the advert, which was then posted very quickly. Our advert received CVs from 10 candidates, we interviewed three, and offered the job to
                        one of them. It was extremely good value for money and I will definitely be recommending the site to my colleagues.”</p>
                    <a href="#">See more customer success stories</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="Recruiter-Advertising">
    <div class="container">
        <div class=" Advertising_heading">
            <h4>Advertising with 1IGS Manpower </h4>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <figure class="Advertising-right-space"><img src="{{asset('front-assets/images/device-macbook-pro.webp')}}" alt="device-macbook-pro.webp" class="Advertising_img"></figure>
            </div>
            <div class="col-sm-6">
                <div class="Advertising_contand Advertising-left-space">
                    <h5>1. Choose</h5>
                    <p>Choose the job advert to suit your needs. Save with multiple ads</p>
                </div>
            </div>
        </div>
        <div class="row reverse-advertising">
            <div class="col-sm-6">
                <div class="Advertising_contand Advertising-right-space">
                    <h5>2. Post</h5>
                    <p>Post your job instantly - we'll advise you on how to get the most out of your advert.</p>
                </div>
            </div>
            <div class="col-sm-6">
                <figure class="Advertising-left-space"><img src="{{asset('front-assets/images/device-macbook-pro.webp')}}" alt="device-macbook-pro.webp" class="Advertising_img"></figure>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <figure class="Advertising-right-space"><img src="{{asset('front-assets/images/device-macbook-pro.webp')}}" alt="device-macbook-pro.webp" class="Advertising_img"></figure>
            </div>
            <div class="col-sm-6">
                <div class="Advertising_contand Advertising-left-space">
                    <h5>3. Manage</h5>
                    <p>Applications delivered direct to your inbox. Applicant management tools help you screen and rate candidates.</p>
                </div>
            </div>
        </div>
        <div class="row reverse-advertising">
            <div class="col-sm-6">
                <div class="Advertising_contand Advertising-right-space">
                    <h5>4. Start sharing</h5>
                    <p>Manage your recruitment on-the-go with out dedicated mobile site.</p>
                </div>
            </div>
            <div class="col-sm-6">
                <figure class="Advertising-left-space"><img src="{{asset('front-assets/images/device-macbook-pro.webp')}}" alt="device-macbook-pro.webp" class="Advertising_img"></figure>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="Advertising_btn"><a href="#">Post a job</a>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="Recruiter-referencer">
    <div class="container">
        <div class="Recruiter-reference-banner-container">
            <p class="Recruiter-reference-text">¹ Source: Market Measures jobseeker audience survey, December 2017</p>
            <p class="Recruiter-reference-text">² Source: YouGov, Brand Tracker, 2017</p>
        </div>
    </div>
</section>
@stop