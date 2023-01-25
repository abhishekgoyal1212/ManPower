@extends('front.recuriter.BeforeLogin.index')
@section('title', 'Home')
@section('content')
<section>
    <div class="postjob-banner">
        <div class="container">
            <div class="postjob-banner-title">
                <h2>Advertise a Job</h2>
            </div>
            <div class="postjobbanner_contand">
                <div class="postjob-left">
                    <a href="#" class="Great">Great</a>
                    <a href="#" class="mx-2"><i class="fa fa-star star-show" aria-hidden="true"></i><i class="fa fa-star star-show" aria-hidden="true"></i><i class="fa fa-star star-show" aria-hidden="true"></i><i class="fa fa-star star-show" aria-hidden="true"></i><i class="fa fa-star star-hide" aria-hidden="true"></i> </a>
                    <a href="#">2,548 reviews on </a>
                    <a href="#" class="mx-2"><i class="fa fa-star star-color" aria-hidden="true"></i><b>Trustpilot</b></a>
                </div>
                <div class="postjob-right">
                    <p class="mr-2 mb-0">Questions ?</p>
                    <p class="mb-0">Call Us:<a href="#"><strong> 0203 510 9293</strong></a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="postjob_offer">
    <div class="container">
        <div class="spacal-offer">
            <p class="mb-0"><b>Never posted a job with 1IGS Manpower?</b> Get your first advert for <b>£89+VAT</b></p>
            <a href="#" class="btn1">Get the offer</a>
        </div>
    </div>
</section>
<section class="product">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-heading">
                        <h3>1. Start with a premium job advert</h3>
                    </div>
                    <div class="card-content">
                        <div class=" advert">
                            <h4>Premium job advert</h4>
                            <h3><span>£150</span>+VAT</h3>
                            <p class="prev"><a href="#">Preview Premium job advert</a></p>
                            <ul class="list-unstyled">
                                <li>Use anytime within 12 months
                                </li>
                                <li>Your advert is live for up to six weeks</li>
                                <li>Applications sent straight to your inbox</li>
                                <li>Your advert included in job alert emails to candidates</li>
                                <li>Customised company profile
                                </li>
                                <li>Use screening questions to filter applications faster</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-heading">
                        <h3>2. Select an add-on</h3>
                    </div>
                    <div class="card-content">
                        <div class="add-on">
                            <div>
                                <h4>Continue without an add-on </h4>
                            </div>
                            <div><input type="radio" name="radio" value=" "></div>
                        </div>
                        <div class="Premium">
                            <div class="add-on1">
                                <h4>Premium+ Job</h4>
                                <input type="radio" name="radio" value=" ">
                            </div>
                            <ul class="list-unstyled">
                                <li>Email job to up to <b>100</b> of the best-matching candidates</li>
                            </ul>
                            <h6><span>+ £25</span>+VAT</h6>
                        </div>
                        <div class="Featured">
                            <div class="add-on1">
                                <h4>Featured Job</h4>
                                <input type="radio" name="radio" value=" ">
                            </div>
                            <ul class="list-unstyled">
                                <li class="best-matching">Email job to up to <b>250</b>of the best-matching candidates</li>
                                <li>Add branding to your job advert
                                    <p class="text-left"><a href="#">Preview Premium job advert</a></p>
                                </li>

                                <li>Applications sent straight to your inbox</li>
                                <li>Promote job advert in rotation at the top of search results</li>
                            </ul>
                            <h6><span>+ £100</span>+VAT</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-heading">
                        <h3>3. See how much you could save</h3>
                    </div>
                    <div class="card-content">
                        <div class="Quantity">
                            <div>
                                <h4>Quantity</h4>
                            </div>
                            <div class="count">
                                <button id="plus" onclick="handleButtonClickPlus()"> + </button>
                                <span id="number_display" class="text">0</span>
                                <button id="minus" onclick="handleButtonClickMinus()">-</button>
                            </div>
                        </div>
                        <div class="could_contend">
                            <p>Save with multiple adverts</p>
                            <div class="total-count">
                                <h4> Total </h4>
                                <h3><span>£150</span>+VAT</h3>
                            </div>
                            <button class="btn3">Buy now</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="could_contend could_contend1">
                        <h4>Never posted a job with 1IGS Manpower</h4>
                        <p>Get your first job plus the <b>Premium+ </b>add-on for</p>
                        <h6>£89 <span> +VAT<del>(£175 +VAT)</del></span></h6>
                        <button class="btn2">Get the offer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="main-btn4"> <button class="btn4">See new customer offers</button></div>
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
                <figure class="Advertising-right-space"><img src="{{asset('front-assets/images/device-macbook')}}-pro.webp" alt="device-macbook-pro.webp" class="Advertising_img"></figure>
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
                <figure class="Advertising-left-space"><img src="{{asset('front-assets/images/device-macbook')}}-pro.webp" alt="device-macbook-pro.webp" class="Advertising_img"></figure>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <figure class="Advertising-right-space"><img src="{{asset('front-assets/images/device-macbook')}}-pro.webp" alt="device-macbook-pro.webp" class="Advertising_img"></figure>
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
                <figure class="Advertising-left-space"><img src="{{asset('front-assets/images/device-macbook')}}-pro.webp" alt="device-macbook-pro.webp" class="Advertising_img"></figure>
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
<section class="Recruite_brands bg-white">
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

@stop