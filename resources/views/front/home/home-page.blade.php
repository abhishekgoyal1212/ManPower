@extends('front.index')
@section('title', 'Home')
@section('content')

    <section class="homepage-banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item homepage-content-first active"
                    style="background-image: url('{{ asset('front-assets/images/homepage-banner-one.jpg') }}');">
                    <div class="container">
                        <div class="row">

                            <div class="col-12">
                                <div class="side-box">
                                    <h1>{{ $all_data[0]['heading'] }}</h1>
                                    <p>{{ $all_data[0]['content'] }}</p>
                                    <div class="learn-more-btn">
                                        <a href="{{ url($json_data[0]['link']) }}">{{ $json_data[0]['text'] }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="ban-bottom-links">
                                    <div class="banner-btn">
                                        <div class="">
                                            <a href="">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <span>{{ $json_data[0]['link1'] }}</span>

                                            </a>
                                        </div>
                                        <div>
                                            <a href="">
                                                <i class="fa fa-user about-link-user" aria-hidden="true"></i>
                                                <span>{{ $json_data[0]['link2'] }}</span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="">
                                                <i class="fa fa-envelope-open register-link" aria-hidden="true"></i>
                                                <span>{{ $json_data[0]['link3'] }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="carousel-item homepage-content-second"
                    style="background-image: url('{{ asset('front-assets/images/homepage-banner-two.jpg') }}');">
                    <div class="container">

                        <div class="row">
                            <div class="col-12">
                                <div class="side-box">
                                    <h1>{{ $all_data[1]['heading'] }}</h1>
                                    <p>
                                        {{ $json_data_content[1][1] }}
                                    </p>
                                    <div class="learn-more-btn">
                                        <a href="{{ $json_data[1]['link'] }}">{{ $json_data[1]['text'] }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="ban-bottom-links">
                                    <div class="banner-btn">
                                        <div class="find-job">
                                            <p>{{ $json_data_content[1][2] }}</p>
                                        </div>
                                        <div>
                                            <a href="">
                                                <i class="fa fa-user user-links" aria-hidden="true"></i>
                                                <span>{{ $json_data[1]['link2'] }}</span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="">
                                                <i class="fa fa-twitter user-links" aria-hidden="true"></i>
                                                <span>{{ $json_data[1]['link3'] }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="register-candidate latest-search section-padding">
        <div class="container">
            <div class="register-box">
                <h4>{{$json_data_heading[6]['main']}}</h4>
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="job-select-box">
                            <h5>{{$json_data_heading[6]['first']}}</h5>
                            <select>
                                @foreach ($json_sector[6] as $item)
                                <option value="{{$item}}" >{{$item}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="job-select-box">
                            <h5>{{$json_data_heading[6]['secend']}}</h5>
                            <select>
                                @foreach($countries as $value)
                                <option value="{{$value->name}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="job-select-box">
                            <h5 class="invisible">Where</h5>
                            <div class="job-select-box search-btnbox">
                                <div class="learn-more-btn">
                                    <a href="{{$json_data[6]['link']}}">{{$json_data[6]['text']}}</a>
                                </div>
                                <hr class="vertical-line">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="learn-more-btn text-center">
                    <a href="{{$json_data[6]['link1']}}">{{$json_data[6]['text1']}}</a>
                </div>
            </div>
        </div>
    </section>
    <section class="job-trend">
        <div class="container">
            <h2 class="index-heading">{{ $all_data[2]['heading'] }}</h2>
            <div class="trend">
                @if(!empty($json_sector[2]))
                @foreach ($json_sector[2] as $item)
                <a href="">{{$item}}</a>
                @endforeach
                @endif
            </div>
        </div>
    </section>
    <section class="search-box">
        <div class="container">
            <div class="search-box-content">
                <ul class="nav nav-tabs border-0" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Search by sector</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link gre_tab" data-toggle="tab" href="#tabs-2" role="tab">Search by location</a>
                    </li>
                </ul>

                <div class="tab-content">

                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                        <div class="row search-by">

                            <div class="col-lg-3 col-6">
                                <div class="sector"><img src="{{ asset('front-assets/images/technology.jpg') }}"></div>
                                <p>Technology</p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="sector"><img src="{{ asset('front-assets/images/graduates.jpg') }}"></div>
                                <p>Graduates</p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="sector"><img src="{{ asset('front-assets/images/engineering.jpg') }}"></div>
                                <p>Engineering</p>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="sector"><img src="{{ asset('front-assets/images/health.jpg') }}"></div>
                                <p>Health</p>
                            </div>
                        </div>


                    </div>
                    <div class="tab-pane" id="tabs-2" role="tabpanel">
                        <div class="row search-by">
                            <div class="col-lg-3 col-6">
                                <div class="location"><img src="{{ asset('front-assets/images/washington.jpg') }}"></div>
                                <p>Washington DC</p>
                            </div>

                            <div class="col-lg-3 col-6">
                                <div class="location"><img src="{{ asset('front-assets/images/newyork.jpg') }}"></div>
                                <p>New York</p>
                            </div>

                            <div class="col-lg-3 col-6">
                                <div class="location"><img src="{{ asset('front-assets/images/texas.jpg') }}"></div>
                                <p>Austin Texas</p>
                            </div>

                            <div class="col-lg-3 col-6">
                                <div class="location"><img src="{{ asset('front-assets/images/chicago.jpg') }}"></div>
                                <p>Chicago</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="text-center explore-box"><button class="explore-sector">See more sectors</button>
                        </div>
                        <div class="list-jobs">

                            <div class="browse-jobs">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6 col-12">
                                        <ul>
                                            <li>
                                                <a href="">Accountancy jobs</a>
                                                <small>12,265</small>
                                            </li>
                                            <li>
                                                <a href="">Accountancy (Qualified) jobs</a>
                                                <small>9,558</small>
                                            </li>
                                            <li>
                                                <a href="">Actuarial jobs</a>
                                                <small>419</small>
                                            </li>
                                            <li>
                                                <a href="">Admin, Secretarial &amp; PA jobs</a>
                                                <small>12,808</small>
                                            </li>
                                            <li>
                                                <a href="">Apprenticeships jobs</a>
                                                <small>431</small>
                                            </li>
                                            <li>
                                                <a href="">Banking jobs</a>
                                                <small>2,147</small>
                                            </li>
                                            <li>
                                                <a href="">Charity &amp; Voluntary jobs</a>
                                                <small>788</small>
                                            </li>
                                            <li>
                                                <a href="">Construction &amp; Property jobs</a>
                                                <small>11,038</small>
                                            </li>
                                            <li>
                                                <a href="">Customer Service jobs</a>
                                                <small>7,605</small>
                                            </li>
                                            <li>
                                                <a href="">Education jobs</a>
                                                <small>27,625</small>
                                            </li>
                                            <li>
                                                <a href="">Energy jobs</a>
                                                <small>1,036</small>
                                            </li>


                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-12">
                                        <ul>
                                            <li>
                                                <a href="">Engineering jobs</a>
                                                <small>14,865</small>
                                            </li>
                                            <li>
                                                <a href="">Estate Agency jobs</a>
                                                <small>2,636</small>
                                            </li>
                                            <li>
                                                <a href="">Financial Services jobs</a>
                                                <small>5,976</small>
                                            </li>
                                            <li>
                                                <a href="">FMCG jobs</a>
                                                <small>1,185</small>
                                            </li>
                                            <li>
                                                <a href="">General Insurance jobs</a>
                                                <small>2,961</small>
                                            </li>
                                            <li>
                                                <a href="">Graduate jobs</a>
                                                <small>11,827</small>
                                            </li>
                                            <li>
                                                <a href="">Health &amp; Medicine jobs</a>
                                                <small>7,397</small>
                                            </li>
                                            <li>
                                                <a href="">Hospitality &amp; Catering jobs</a>
                                                <small>5,913</small>
                                            </li>
                                            <li>
                                                <a href="">Human Resources jobs</a>
                                                <small>4,256</small>
                                            </li>
                                            <li>
                                                <a href="">IT &amp; Telecoms jobs</a>
                                                <small>19,075</small>
                                            </li>
                                            <li>
                                                <a href="">IT Contractor jobs</a>
                                                <small>3,006</small>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-12">
                                        <ul>
                                            <li>
                                                <a href="">Legal jobs</a>
                                                <small>8,097</small>
                                            </li>
                                            <li>
                                                <a href="">Leisure &amp; Tourism jobs</a>
                                                <small>852</small>
                                            </li>
                                            <li>
                                                <a href="">Manufacturing jobs</a>
                                                <small>4,560</small>
                                            </li>
                                            <li>
                                                <a href="">Marketing &amp; PR jobs</a>
                                                <small>5,327</small>
                                            </li>
                                            <li>
                                                <a href="">Media, Digital &amp; Creative jobs</a>
                                                <small>1,922</small>
                                            </li>
                                            <li>
                                                <a href="">Motoring &amp; Automotive jobs</a>
                                                <small>5,066</small>
                                            </li>
                                            <li>
                                                <a href="">Multilingual jobs</a>
                                                <small>9,026</small>
                                            </li>
                                            <li>
                                                <a href="">Public Sector jobs</a>
                                                <small>36,820</small>
                                            </li>
                                            <li>
                                                <a href="">Purchasing jobs</a>
                                                <small>1,464</small>
                                            </li>
                                            <li>
                                                <a href="">Recruitment Consultancy jobs</a>
                                                <small>6,395</small>
                                            </li>
                                            <li>
                                                <a href="">Retail jobs</a>
                                                <small>10,536</small>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-12">
                                        <ul>
                                            <li>
                                                <a href="">Sales jobs</a>
                                                <small>7,712</small>
                                            </li>
                                            <li>
                                                <a href="">Scientific jobs</a>
                                                <small>1,331</small>
                                            </li>
                                            <li>
                                                <a href="">Security &amp; Safety jobs</a>
                                                <small>2,074</small>
                                            </li>
                                            <li>
                                                <a href="">Social Care jobs</a>
                                                <small>16,254</small>
                                            </li>
                                            <li>
                                                <a href="">Strategy &amp; Consultancy jobs</a>
                                                <small>2,338</small>
                                            </li>
                                            <li>
                                                <a href="">Temporary jobs</a>
                                                <small>35,011</small>
                                            </li>
                                            <li>
                                                <a href="">Training jobs</a>
                                                <small>808</small>
                                            </li>
                                            <li>
                                                <a href="">Transport &amp; Logistics jobs</a>
                                                <small>8,907</small>
                                            </li>
                                            <li>
                                                <a href="">£50k+ jobs</a>
                                                <small>34,936</small>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="user-blog">
        <h2 class="index-heading">Popular Courses</h2>
        <div class="container">
            <div id="demo1">
                <div class="span12">
                    <div id="owl-demo1" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                        <div class="owl-wrapper-outer">
                            <div class="owl-wrapper" style="width: 4308px; left: 0px; display: block;">
                                <div class="owl-item" style="width: 359px;">
                                    <div class="item">
                                        <div class="blog-grid">
                                            <div class="img-date">
                                            </div>
                                            <div class="discretion-blog">
                                                <a class="btn" href="#">IT User Skills Level2</a>
                                                <p>vision2learn</p>
                                                <h3>Free</h3>
                                                <div class="discretion-example">
                                                    <ul>
                                                        <li>
                                                            <i class="bi bi-book"></i>
                                                            Online
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-clock"></i>
                                                            14 weeks, Self-paced
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a class="btn read-blog" href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 359px;">
                                    <div class="item">
                                        <div class="blog-grid">
                                            <div class="img-date">
                                            </div>
                                            <div class="discretion-blog">
                                                <a class="btn" href="#">IT User Skills Level2</a>
                                                <p>vision2learn</p>
                                                <h3>Free</h3>
                                                <div class="discretion-example">
                                                    <ul>
                                                        <li>
                                                            <i class="bi bi-book"></i>
                                                            Online
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-clock"></i>
                                                            14 weeks, Self-paced
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a class="btn read-blog" href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 359px;">
                                    <div class="item">
                                        <div class="blog-grid">
                                            <div class="img-date">
                                            </div>
                                            <div class="discretion-blog">
                                                <a class="btn" href="#">IT User Skills Level2</a>
                                                <p>vision2learn</p>
                                                <h3>Free</h3>
                                                <div class="discretion-example">
                                                    <ul>
                                                        <li>
                                                            <i class="bi bi-book"></i>
                                                            Online
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-clock"></i>
                                                            14 weeks, Self-paced
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a class="btn read-blog" href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 359px;">
                                    <div class="item">
                                        <div class="blog-grid">
                                            <div class="img-date">
                                            </div>
                                            <div class="discretion-blog">
                                                <a class="btn" href="#">IT User Skills Level2</a>
                                                <p>vision2learn</p>
                                                <h3>Free</h3>
                                                <div class="discretion-example">
                                                    <ul>
                                                        <li>
                                                            <i class="bi bi-book"></i>
                                                            Online
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-clock"></i>
                                                            14 weeks, Self-paced
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a class="btn read-blog" href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 359px;">
                                    <div class="item">
                                        <div class="blog-grid">
                                            <div class="img-date">
                                            </div>
                                            <div class="discretion-blog">
                                                <a class="btn" href="#">IT User Skills Level2</a>
                                                <p>vision2learn</p>
                                                <h3>Free</h3>
                                                <div class="discretion-example">
                                                    <ul>
                                                        <li>
                                                            <i class="bi bi-book"></i>
                                                            Online
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-clock"></i>
                                                            14 weeks, Self-paced
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a class="btn read-blog" href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 359px;">
                                    <div class="item">
                                        <div class="blog-grid">
                                            <div class="img-date">
                                            </div>
                                            <div class="discretion-blog">
                                                <a class="btn" href="#">IT User Skills Level2</a>
                                                <p>vision2learn</p>
                                                <h3>Free</h3>
                                                <div class="discretion-example">
                                                    <ul>
                                                        <li>
                                                            <i class="bi bi-book"></i>
                                                            Online
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-clock"></i>
                                                            14 weeks, Self-paced
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a class="btn read-blog" href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="owl-controls clickable">
                            <div class="owl-pagination">
                                <div class="owl-page active"><span class=""></span></div>
                                <div class="owl-page"><span class=""></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="customNavigation">
                        <a class="btn prev"><img src="{{ asset('front-assets/images/arrow.png') }}"></a>
                        <a class="btn next"><img src="{{ asset('front-assets/images/arrow.png') }}"></a>
                    </div>
                </div>
            </div>
            <div class="learn-more-btn text-center">
                <a href="#">View more courses</a>
            </div>
        </div>

    </section>
    <section class="job-recruiter">
        <div class="container">
            <h2 class="index-heading">{{ $json_data_heading[3]['heading'] }}</h2>
            <div class="row">
                <div class="col-lg-6 mob-order-two">
                    <div class="tab-content" id="jobTabContent">
                        <div class="tab-pane recruiter-tabs show active" id="step1" role="tabpanel"
                            aria-labelledby="create-tab">
                            <img src="{{ asset('front-assets/images/step1.jpg') }}" alt="">
                        </div>

                        <div class="tab-pane recruiter-tabs" id="step2" role="tabpanel" aria-labelledby="reach-tab">
                            <img src="{{ asset('front-assets/images/step2.jpg') }}" alt="">
                        </div>
                        <div class="tab-pane recruiter-tabs" id="step3" role="tabpanel"
                            aria-labelledby="review-tab">
                            <img src="{{ asset('front-assets/images/step3.jpg') }}" alt="">
                        </div>
                    </div>

                    <!--tab content end-->
                </div>
                <div class="col-lg-6 mob-order-one">
                    <div class="job-post-tabs">
                        <ul class="nav recruiter-nav flex-column" id="job-steps" role="tablist">
                            <li class="nav-item recruiter-items">
                                <a class="nav-link active" id="create-tab" data-toggle="tab" href="#step1"
                                    role="tab" aria-controls="create" aria-selected="true">
                                    <h3 class="tab-heading">{{ $json_data_heading[3]['heading1'] }}</h3>
                                    <p class="tab-text">
                                        {{ $json_data_content[3]['content1'] }}
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item recruiter-items">
                                <a class="nav-link" id="reach-tab" data-toggle="tab" href="#step2" role="tab"
                                    aria-controls="reach" aria-selected="false">
                                    <h3 class="tab-heading">{{ $json_data_heading[3]['heading2'] }}</h3>
                                    <p class="tab-text">
                                        {{ $json_data_content[3]['content2'] }}
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item recruiter-items">
                                <a class="nav-link" id="review-tab" data-toggle="tab" href="#step3" role="tab"
                                    aria-controls="review" aria-selected="false">
                                    <h3 class="tab-heading">
                                        {{ $json_data_heading[3]['heading3'] }}
                                    </h3>
                                    <p class="tab-text">
                                        {{ $json_data_content[3]['content3'] }}
                                    </p>
                                </a>
                            </li>
                        </ul>

                        <div class="learn-more-btn mb-3">
                            <a href="{{ $json_data[3]['link'] }}">{{ $json_data[3]['text'] }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="manpower-support">
        <h2 class="index-heading">{{$json_data_heading[5]['heading']}}</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 support-screen-right">
                    <div class="support-leftsec">
                        <h2 class="index-heading">{{$json_data_heading[5]['heading1']}}</h2>
                        <div class="support-bg" style="background-image:url('{{$all_data[5]['json_image'][0]}}')">
                            <div class="blog-grid courses">
                                <div class="img-date">
                                </div>
                                <div class="discretion-blog">
                                    <a class="btn" href="#">IT User Skills Level2</a>
                                    <p>1IGS Man Power Courses</p>
                                    <h3>Free</h3>
                                    <div class="discretion-example">
                                        <ul>
                                            <li>
                                                <i class="bi bi-book"></i>
                                                Online
                                            </li>
                                            <li>
                                                <i class="bi bi-clock"></i>
                                                14 weeks, Self-paced
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="btn read-blog" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="browse-courses-one">
                            <p>{{$json_data_content[5]['content']}}</p>
                            <div class="learn-more-btn text-center">
                                <a href="{{$json_data[5]['button_link']}}">{{$json_data[5]['button_text']}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 support-screen-left">
                    <div class="support-rightsec">
                        <h2 class="index-heading">{{$json_data_heading[5]['heading2']}}</h2>
                        <div class="rightsec-box">
                            <div class="rightsec-content"   >
                                <img src="{{$all_data[5]['json_image'][1]}}">
                                <h4>{{$json_data_content[5]['content1']}}</h4>
                                <div class="learn-more-btn">
                                    <a href="{{$json_data[5]['button_link1']}}">{{$json_data[5]['button_text1']}}</a>
                                </div>
                            </div>
                            <div class="rightsec-content hide-rightsec">
                                <img src="{{$all_data[5]['json_image'][2]}}">
                                <h4>{{$json_data_content[5]['content2']}}</h4>
                                <div class="learn-more-btn">
                                    <a href="{{$json_data[5]['button_link2']}}">{{$json_data[5]['button_text2']}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="browse-courses-two">
                            <p>{{$json_data_content[5]['content3']}}.</p>
                            <div class="learn-more-btn text-center">
                                <a href="$json_data[5]['button_link3']">{{$json_data[5]['button_text3']}}</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="power-today">
        <div class="container">
            <h2 class="index-heading">{{ $all_data[4]['heading'] }}</h2>
            <div class="power-btns">
                <div class="power-button-one">
                    <a href="{{ $json_data[4]['link'] }}">{{ $json_data[4]['text'] }}</a>
                </div>
                <div class="power-button-two">
                    <a href="{{ $json_data[4]['link1'] }}">{{ $json_data[4]['text1'] }}</a>
                </div>
            </div>
        </div>
    </section>
@stop
