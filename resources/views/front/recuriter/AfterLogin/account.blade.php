@extends('front.recuriter.AfterLogin.index')
@section('title', 'Recuriter')
@section('content')
<div class="Account_Details_Section">
    <div class="container">
        <div class="Account_Details_Ineer">
            <div class="row">
                <div class="col-md-7">
                    <div class="Account-details-left">
                        <h5>Account details</h5>
                        <div class="Account_Details_Col">
                            <div class="testing">
                                <h5>testing01 01</h5>
                                <a href="{{route('Recuriter.AccountEdit')}}">Change settings</a>
                            </div>

                            <ul>
                                <li>Organisation</li>
                                <li>test01</li>
                                <li>Email</li>
                                <li> demo4@gmail.com</li>
                                <li>Password</li>
                                <li>********</li>
                                <li>Phone</li>
                                <li>06548864546</li>
                            </ul>

                        </div>
                    </div>


                    <div class="Account-details-left mt-2">
                        <h5>Account users</h5>
                        <div class="Account_Details_Col">
                            <div class="testing border-bottom-0 mb-1">
                                <p class="mb-2">You have 1 user in your organisation</p>
                                <a href="#">
                    Invite new users
                </a>
                            </div>
                        </div>
                    </div>

                    <div class="Account-details-left mt-2">
                        <h5>Account activity reports</h5>
                        <div class="Account_Details_Col">
                            <div class="testing border-bottom-0 mb-1">
                                <p class="mb-2">View reports on your account's activity and credit spend</p>
                                <a href="#">View your reports</a>
                            </div>
                        </div>
                    </div>


                    <div class="Account-details-left mt-2">
                        <h5>API access</h5>
                        <div class="Account_Details_Col">
                            <div class="testing border-bottom-0 mb-1">
                                <p class="mb-2 border-bottom pb-2">If you use reed.co.uk via a 3rd party who requests a Posting key:</p>
                                <a href="#" class="mt-2">Get my Posting key</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-5  pl-lg-0 ">
                    <div class="Your-company-profile">
                        <h5 class="pl-2">Your company profile</h5>


                        <div class="Upload-logo">
                            <h6>Upload your logo</h6>
                            <p>Your logo will appear on your jobs and the search results.</p>
                            <img src="{{asset('front-assets/images/upload.png')}}">

                            <a href="#" class="mb-3">Upload logo</a>

                            <h6>Create your free company profile</h6>
                            <p>
                                Creating a company profile allows you to showcase your company culture and benefits to job seekers.
                            </p>
                            <a href="#">Create company profile</a>

                        </div>

                        <div class="Account-details-left mt-2">
                            <h5>Account activity reports</h5>
                            <div class="Account_Details_Col">
                                <div class="testing border-bottom-0 mb-1">
                                    <a href="#">View your reports</a>
                                    <p class="mb-2 pt-2 border-bottom pb-2 ">Buy credits to post jobs or search CVs.</p>

                                    <p>Call us: <strong>0845 241 9293</strong> or <a class="request-anchor" href="#">request a call-back</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="reports-account">
            <p>
                View reports on your account's activity, credit spend, and market insights. <a href="#">View your reports.</a>

            </p>
        </div>

    </div>
</div>

@stop