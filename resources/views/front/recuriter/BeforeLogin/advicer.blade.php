@extends('front.recuriter.BeforeLogin.index')
@section('title', 'Home')
@section('content')
<div class="single-post-header">
    <div class="container">
        <div class="single-post-menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#" class="Finding-candidate">Finding a candidate<i class="fa fa-chevron-down"></i></a>
                        <div class="subMenuToggle">
                            <div class="Sub-Menu-First-Ineer ">
                                    <ul>
                                        <li><a href="#">CV search</a></li>
                                        <li><a href="#">How to search CVs</a></li>
                                        <li><a href="#">CV search tips</a></li>
                                    </ul>
                                    <ul class="Sub-Menu-First-Ineer-One">
                                        <li><a href="#">CV search</a></li>
                                        <li><a href="#">How to search CVs</a></li>
                                        <li><a href="#">CV search tips</a></li>
                                    </ul>
                                    <ul class="Sub-Menu-First-Ineer-To">
                                        <li><a href="#">CV search</a></li>
                                        <li><a href="#">How to search CVs</a></li>
                                        <li><a href="#">CV search tips</a></li>
                                    </ul>
                            </div>
                       </div>
                </li>
                <li><a href="#">Interviews<i class="fa fa-chevron-down"></i></a></li>
                <li><a href="#">Management<i class="fa fa-chevron-down"></i></a>
                </li>
                <li><a href="#">Why 1IGS Manpower<i class="fa fa-chevron-down"></i></a>
                     

                </li>
                <li><a href="#">News &amp; research<i class="fa fa-chevron-down"></i></a>
                     

                </li>
            </ul>
            <div class="search-section">
                <i class="fa fa-search"></i>

                <div class="search-input-box">
                    <input type="" name="" placeholder="keywords e.g. Interviews">
                    <button>Search</button>
                </div>
            </div>
        </div>

        <div class="single-post-menu-mobile">
            <div class="categories">
               <details>
                    <summary>Categories</summary>
                    
                    <ul class="accordion mt-4">
                        <li>Home</li>
                      <li>
                        <h5 class="accordion-trigger">Finding a candidate</h5>
                        <div class="accordion-content" style="display: none;">
                         <ul class="pt-3">
                             <li><a href="#">CV search</a></li>
                             <li><a href="#">How to search CVs</a></li>
                             <li><a href="#">CV search tips</a></li>
                         </ul>

                          <ul class="pt-3">
                             <li><a href="#">Job adverts</a></li>
                             <li><a href="#">How to post a job ad</a></li>
                             <li><a href="#">Job description tips</a></li>
                         </ul>


                          <ul class="pt-3">
                             <li><a href="#">Hiring tips</a></li>
                             
                         </ul>
                        </div>
                      </li>
                      <li>
                        <h5 class="accordion-trigger">Interviews</h5>
                        <div class="accordion-content" style="display: none;">
                           <ul class="pt-3">
                             <li><a href="#">Hiring tips</a></li>
                             
                         </ul>
                        </div>
                      </li>
                      <li>
                        <h5 class="accordion-trigger">Management</h5>
                        <div class="accordion-content" style="display: none;">
                          <ul class="pt-3">
                             <li><a href="#">Hiring tips</a></li>
                             
                         </ul>
                        </div>
                      </li>
                      <li>
                        <h5 class="accordion-trigger">Why</h5>
                        <div class="accordion-content" style="display: none;">
                           <ul class="pt-3">
                             <li><a href="#">Hiring tips</a></li>
                             
                         </ul>
                        </div>
                      </li>
                       <li>
                        <h5 class="accordion-trigger">News &amp; research</h5>
                        <div class="accordion-content" style="display: none;">
                          <ul class="pt-3">
                             <li><a href="#">Hiring tips</a></li>
                             
                         </ul>
                        </div>
                      </li>
                    </ul>
                </details>
            </div>

        <div class="search-section">
                <i class="fa fa-search"></i>

                <div class="search-input-box">
                    <img src="{{asset('front-assets/images/close.svg')}}" class="search-input-box_icon">
                    <h3>Search advice</h3>
                    <input type="" name="" placeholder="keywords e.g. Interviews">
                    <button>Search</button>
                </div>
            </div>
        </div>


       
    </div>
</div>

  <section class="requir-banner">
        <div class="container">
            <div class="ban-cont text-center">
                <h3 class="mb-4 text-white font-weight-bold">Recruiter Advice</h3>
                <p class="text-white mb-0">Get expert hiring advice and tips on recruitment. It’s time to love Mondays again.
                </p>
            </div>
        </div>
    </section>

    <section class="featured-sec">
        <div class="container min-container">
            <h5>Featured Articles</h5>
            <div class="row mt-3">
                <div class="col-lg-6">
                    <div class="featured-card d-flex flex-column">
                        <img src="{{asset('front-assets/images/featured1.jpg')}}" alt="">
                        <div class="card-cont">
                            <h5>The impact of salary negotiations on pay inequality </h5>
                            <p>We explore how asking a candidate’s salary history can perpetuate systemic inequality,
                                which groups of people feel less confident negotiating their salary, and how
                                it can have an impact on what they take home.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="featured-card d-flex flex-column mb-0">
                        <img src="{{asset('front-assets/images/featured2.jpg')}}" alt="">
                        <div class="card-cont">
                            <h5>Why you should always state salary in your job ads </h5>
                            <p>1IGS Manpower data found a 27% increase in the number of applications for jobs that
                                disclosed
                                a salary. We explore seven reasons why you should include salary on your job ads and
                                how candidates are influenced by salary transparency.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="post-section hiring-sec">
        <div class="container">
            <div class="post-content">
                <div class="Hire-talent py-0">
                    <h6>Hire the talent to transform your business</h6>
                    <p>Reach 14.6 million active candidates by signing up to post a job today</p>
                    <a href="#" class="cta">Start hiring</a>
                </div>
            </div>
        </div>
    </div>

    <section class="featured-sec Articles">
        <div class="container">
            <h5>Latest Articles</h5>
            <div class="row mt-3">
                <div class="col-lg-4">
                    <div class="featured-card d-flex flex-column">
                        <img src="{{asset('front-assets/images/article1.jpg')}}" alt="">
                        <div class="card-cont">
                            <h5>Job Market Review: November 2022</h5>
                            <p>1IGS Manpower’s November 2022 job market review – including candidate insights and regional
                                and sector labour market performance. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="featured-card d-flex flex-column">
                        <img src="{{asset('front-assets/images/article2.jpg')}}" alt="">
                        <div class="card-cont">
                            <h5>How to make your benefits package more inclusive and attractive</h5>
                            <p>Discover which employee benefits businesses should offer current and prospective
                                employees to be more inclusive and attractive. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="featured-card d-flex flex-column mb-0">
                        <img src="{{asset('front-assets/images/article3.jpg')}}" alt="">
                        <div class="card-cont">
                            <h5>Job Market Review: October 2022</h5>
                            <p>Our Job Market Review for October 2022 – including candidate insights and regional and
                                sector labour market performance.</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>

         
            <div class="stay-form">
                <div class="container min-container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                         <h5>Stay up-to-date with <br> Recruiter Advice straight<br> to your inbox</h5>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <label>Email</label>
                            <div class="stay-input-box">
                            <input type="email" aria-describedby="emailHelp" placeholder="example@email.com" class="form-control">
                            <input type="button" name="" value="Sign up" class="border-0">
                            </div>
                            <p class="mt-2">By selecting sign up, you accept our <a href="">Terms &amp; Conditions</a> See our <a href="">Privacy Policy</a> for details</p>
                          </div>
                    </div>
                </div>
            </div>
            </div>

         <div class="container">
            <div class="row mt-3">
                <div class="col-lg-4">
                    <div class="featured-card d-flex flex-column">
                        <img src="{{asset('front-assets/images/article1.jpg')}}" alt="">
                        <div class="card-cont">
                            <h5>Job Market Review: November 2022</h5>
                            <p>1IGS Manpower’s November 2022 job market review – including candidate insights and regional
                                and sector labour market performance. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="featured-card d-flex flex-column">
                        <img src="{{asset('front-assets/images/article2.jpg')}}" alt="">
                        <div class="card-cont">
                            <h5>How to make your benefits package more inclusive and attractive</h5>
                            <p>Discover which employee benefits businesses should offer current and prospective
                                employees to be more inclusive and attractive. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="featured-card d-flex flex-column">
                        <img src="{{asset('front-assets/images/article3.jpg')}}" alt="">
                        <div class="card-cont">
                            <h5>Job Market Review: October 2022</h5>
                            <p>Our Job Market Review for October 2022 – including candidate insights and regional and
                                sector labour market performance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="featured-card d-flex flex-column">
                        <img src="{{asset('front-assets/images/article1.jpg')}}" alt="">
                        <div class="card-cont">
                            <h5>Job Market Review: November 2022</h5>
                            <p>1IGS Manpower’s November 2022 job market review – including candidate insights and regional
                                and sector labour market performance. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="featured-card d-flex flex-column">
                        <img src="{{asset('front-assets/images/article2.jpg')}}" alt="">
                        <div class="card-cont">
                            <h5>How to make your benefits package more inclusive and attractive</h5>
                            <p>Discover which employee benefits businesses should offer current and prospective
                                employees to be more inclusive and attractive. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="featured-card d-flex flex-column mb-0">
                        <img src="{{asset('front-assets/images/article3.jpg')}}" alt="">
                        <div class="card-cont">
                            <h5>Job Market Review: October 2022</h5>
                            <p>Our Job Market Review for October 2022 – including candidate insights and regional and
                                sector labour market performance.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-3">
                <button class="d-inline mx-auto">View Full Articles</button>
            </div>
            </div>
    </section>
@stop