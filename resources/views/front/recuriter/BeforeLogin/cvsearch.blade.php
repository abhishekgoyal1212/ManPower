@extends('front.recuriter.BeforeLogin.index')
@section('title', 'Home')
@section('content')
<section class="recruiter">
    <div class="container">
        <div class="recruiter-title">
            <h1 class="mb-0">Buy job ads and CV Search</h1>
        </div>
        <div class="row my-3">
            <div class="col-xs-4 col-sm-5 col-md-7 col-lg-6 col-xl-6 recruiter-rating-box">
                <a href="">
                    <span class="mr-3">Great</span>
                    <div class="recruiter-rating d-inline mr-3">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="recruiter-rating-info">
                        <small class="mr-3">2,538 reviews on</small>
                        <div class="recruiter-rating-logo">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <span>Trustpilot</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-8 col-sm-7 col-md-5 col-lg-6 col-xl-6 contact-title text-right">
                <span>Questions? Call us: </span>
                <a href="tel:08452419293">0584 582 8934</a>             
            </div>
        </div>
    </div>
</section>
<section class="offer">
    <div class="container">
        <div class="offer-container">
            <div class="offer-content cv-offer">
                
                    <h3>
                    <span class="font-weight-bold">Never posted a job with 1IGS Manpower?</span>
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
<section class="info-credits">
    <div class="container custom-container">

       <div class="credit-tab-two">
        <div class="row">
            <div class="col-12 info-credits-content ">
                <ul class="credit-features list-unstyled">
                    <h3 class="font-weight-bold">CV Search</h3>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="ml-1">Use anytime within 12 months</p>
                    </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="ml-1">Job live for up to six weeks</p>
                    </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="ml-1">Applications straight to your inbox</p>
                    </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="ml-1">Included in job alert emails to candidates</p>
                    </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="ml-1">Branded company profile and applicant management tools</p>
                    </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="ml-1">Use screening questions to filter applications faster</p>
                    </li>
                </ul>
                <div class="info-credits-content-top">
                    <div class="inner-info-tab-box">
                        <h2 class="credit-cv font-weight-bold d-lg-none d-block mb-4">CV Search</h2>
                    <h4 class="mb-3 text-left">Choose your CV Search access for</h4>
                    <ul class="nav inner-info-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#innertabs-1" role="tab">1 Day</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#innertabs-2" role="tab">1 Week</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#innertabs-3" role="tab">1 Month</a>
                        </li>
                    </ul>
                </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="innertabs-1" role="tabpanel">
                            <p class="font-weight-bold">$555 <span> + VAT</span></p>
            <button>Add to basket</button>
                            </div>
                            <div class="tab-pane" id="innertabs-2" role="tabpanel">
                                <p class="info-credits-para">You already have<span>1 Week's CV Search</span>in your basket.</p>
                <button>Add to basket</button>
                            </div>
                            <div class="tab-pane" id="innertabs-3" role="tabpanel">
                                <p class="font-weight-bold">$56 <span> + VAT</span></p>
                <button>Add to basket</button>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
   </section>
   <section class="customerstories bg-white">
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
            <h4>How to use CV Search </h4>
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
        <!-- <div class="row">
            <div class="col-lg-12">
                <div class="Advertising_btn"><a href="#">Post a job</a>
                </div>
            </div>
        </div> -->

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
        </ul>
    </div>
</section>
@stop