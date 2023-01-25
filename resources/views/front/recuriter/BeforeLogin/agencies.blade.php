@extends('front.recuriter.BeforeLogin.index')
@section('title','Home')
@section('content')
<section>
    <div class="postjob-banner">
        <div class="container">
            <div class="postjob-banner-title">
                <h2>Solutions for Recruitment Agencies</h2>
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
<section class="claim-products">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-6">
                <div class="claim-products-details">
                    <div class="card">
                        <div class="card-heading">
                            <h3>Claim your free products</h3>
                            <p>
                                We value the work that you do and understand the recruitment challenges you face. That's why we're giving you access to Reed.co.uk's products, for free, with Freecruitment.*
                            </p>
                        </div>
                        <div class="card-contant">
                            <h3>Freecruitment</h3>
                            <p>
                                Whether you're an existing client or are new to our services, Freecruitment is your opportunity to try out Reed.co.uk products for free.
                            </p>
                            <div class="card-contant-images">
                                <div class="image_item">
                                    <img src="images/sound.svg" alt="sound">
                                    <p>
                                        Advertise jobs for free to our 15.7 million active candidates
                                    </p>
                                </div>
                                <div class="image_item">
                                    <img src="images/durben.svg" alt="durben">
                                    <p>
                                        Use CV Search and have 10.4 million high quality candidate CVs at your fingertips
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-claim">
                            <h3>How do you claim?</h3>
                            <p>
                                Call us today on <b> 0845 287 0788 </b> or request a call back and one of the team will be in touch.
                            </p>
                        </div>
                    </div>
                    <div class="card-claim-contant">
                        <p>
                            <b>* Freecruitment: </b>A service whereby
                            <b>new Clients</b> can download 100 CVs and existing Clients can post up to 10 jobs. Freecruitment allowance available once within a 12 month period, only for Recruitment consultancies.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="claim-products-form">
                    <div class="card">
                        <div class="card-heading">
                            <h3>Request a call back</h3>
                            <p>Please note our office hours are Monday - Friday: 8am - 5.30pm. </p>
                            <p class="mb-1"><i>All fields are required</i></p>
                        </div>
                        <div class="recruitment-form">
                            <div>
                                <label class="text-label">First name</label>
                                <input type="text" class="text-box" name=" ">
                            </div>
                            <div>
                                <label class="text-label">Last name</label>
                                <input type="text" class="text-box" name=" ">
                            </div>
                            <div>
                                <label class="text-label">Work email</label>
                                <input type="email" class="text-box" name=" ">
                            </div>
                            <div>
                                <label class="text-label">Phone number</label>
                                <input type="text" class="text-box" name=" ">
                            </div>
                            <div class="Chack-box-contant">
                                <h6 class="text-label">Company type</h6>
                                <div class="Company-check">
                                    <input type="radio" class="form-check-input" name="optradio">Direct employer
                                </div>
                                <div class="Company-check">
                                    <input type="radio" class="form-check-input" name="optradio">Recruitment Consultancy
                                </div>
                                <button class="btn1">Request a call back</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-claim-contant1">
                <p class="mb-0">
                    <b>* Freecruitment: </b>A service whereby <b>new Clients</b> can download 100 CVs and existing Clients can post up to 10 jobs. Freecruitment allowance available once within a 12 month period, only for Recruitment consultancies.
                </p>
            </div>
        </div>
    </div>
</section>
@stop