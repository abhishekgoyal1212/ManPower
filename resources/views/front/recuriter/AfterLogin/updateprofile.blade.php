@extends('front.recuriter.AfterLogin.index')
@section('title', 'Recuriter')
@section('content')
<div class="edit-account_details">
    <div class="container">
        <div class="edit-account_details_Ineer">
            <div class="edit-account_details-btn1">
                <i class="fa fa-caret-left" aria-hidden="true"></i><a href="{{route('Recuriter.Account')}}">Account settings</a>
            </div>
            <div class="edit-account_details-heading">
                <h1>Edit account details</h1>
            </div>
            <fieldset class="edit-sign-contant">
                <h2>Sign in details</h2>
                <div class="edit-lable-section edit-details-show1">
                    <label for="#">Email address</label>
                    <span class="value mr-2">{{$current_data->email}}</span>
                    <a href="#" id="edit-details-show" class="refer-a">Edit</a>
                </div>
                <div id="edit-details-contant-show" class="msg">
                    <div class="edit-lable-section">
                        <label for="#">New email address</label>
                        <span class="value"><input type="text"> </span>
                    </div>
                    <div class="edit-lable-section">
                        <label for="#">Confirm email address</label>
                        <span class="value"><input type="text" value=" "> </span>
                    </div>
                    <div class="edit-lable-section">
                        <label for="#">Password</label>
                        <span class="value"><input type="password"> </span>
                    </div>
                    <div>
                        <input type="submit" value="Cancel" id="edit-details-hide" class="edit-User-details-btn">
                        <input type="submit" value="Save" class="edit-User-details-btn">
                    </div>
                </div>
            </fieldset>

            <fieldset class="edit-sign-contant">
                <div class="edit-lable-section edit-sign-show1  ">
                    <label for="#">password</label>
                    <span class="value mr-2">**************</span>
                    <a href="#" id="edit-password-show" class="refer-a">Edit</a>
                </div>
                <div id="edit-password-contant-show" class="msg">
                    <div class="edit-lable-section">
                        <label for="#">Current Password</label>
                        <span class="value"><input type="text"> </span>
                    </div>
                    <div class="edit-lable-section">
                        <label for="#">New Password</label>
                        <span class="value"><input type="text" value=" "> </span>
                    </div>
                    <div class="edit-lable-section">
                        <label for="#">Confirm Password</label>
                        <span class="value"><input type="text"> </span>
                    </div>
                    <div class="edit-lable-section">
                        <input type="submit" value="Cancel" id="edit-password-hide" class="edit-sign-contant-btn">
                        <input type="submit" value="Save" class="edit-sign-contant-btn">
                    </div>
                </div>
            </fieldset>
            <hr>
            <fieldset class="edit-User-details ">
                <h2>User details</h2>
                <div class="edit-lable-section1">
                    <div class="edit-lable-section">
                        <label for="#">First name</label>
                        <span class="value">{{$current_data->first_name}} </span>
                    </div>
                    <div class="edit-lable-section">
                        <label for="#">last name</label>
                        <span class="value">{{$current_data->last_name}}</span>
                    </div>
                    <div class="edit-lable-section">
                        <label for="#">Phone</label>
                        <span class="value">{{$current_data->mobile}}</span>
                    </div>
                    <div class="edit-lable-section">
                        <label for="#">Recruitment area</label>
                        <span class="value">Accountancy</span>
                    </div>
                    <div class="edit-lable-section">
                        <label for="#">Number of employees</label>
                        <span class="value">{{$current_data->company_size}}</span>
                    </div>
                    <div class="edit-lable-section">
                        <label for="#">Company name</label>
                        <span class="value">{{$current_data->company_name}} </span>
                    </div>
                    <div class="edit-lable-section">
                        <input type="submit" value="Edit" id="edit-password1-show" class="edit-User-details-btn">
                    </div>
                </div>                   
            </fieldset>
            <hr>
            <fieldset id="edit-password-contant1-show" class="msg">
                <div class="edit-lable-section">
                    <label for="#">First name</label>
                    <span class="value"><input type="text" value="{{$current_data->first_name}}"> </span>
                </div>
                <div class="edit-lable-section">
                    <label for="#">last name</label>
                    <span class="value"><input type="text" value="{{$current_data->last_name}}"> </span>
                </div>
                <div class="edit-lable-section">
                    <label for="#">Phone</label> <span class="value"><input type="text" value="{{$current_data->mobile}}"> </span>
                </div>
                <div class="edit-lable-section">
                    <label for="#">Recruitment area</label>
                    <span class="value">
                        <select class="w-100" name="company_type" value="">
                            <option value="2">Accountancy</option>
                                <option value="100">Accountancy (Qualified)</option>
                                <option value="3">Admin, Secretarial &amp; PA</option>
                                <option value="1964">Apprenticeships</option>
                                <option value="5">Banking</option>
                                <option value="500">Charity &amp; Voluntary</option>
                                <option value="146">Construction &amp; Property</option>
                                <option value="66">Customer Service</option>
                                <option value="68">Education</option>
                                <option value="1961">Energy</option>
                                <option value="12">Engineering</option>
                                <option value="1962">Estate Agency</option>
                                <option value="117">Financial Services</option>
                                <option value="1722">FMCG</option>
                                <option value="16">General Insurance</option>
                                <option value="169">Graduate Training &amp; Internships</option>
                                <option value="36">Health &amp; Medicine</option>
                                <option value="6">Hospitality &amp; Catering</option>
                                <option value="24">Human Resources</option>
                                <option value="52">IT &amp; Telecoms</option>
                                <option value="101">Legal</option>
                                <option value="92">Leisure &amp; Tourism</option>
                                <option value="168">Manufacturing</option>
                                <option value="18">Marketing &amp; PR</option>
                                <option value="71">Media, Digital &amp; Creative</option>
                                <option value="1700">Motoring &amp; Automotive</option>
                                <option value="501">Public Sector</option>
                                <option value="27">Purchasing</option>
                                <option value="338">Recruitment Consultancy</option>
                                <option value="90">Retail</option>
                                <option value="30">Sales</option>
                                <option value="89">Scientific</option>
                                <option value="1963">Security &amp; Safety</option>
                                <option value="34">Social Care</option>
                                <option value="1755">Strategy &amp; Consultancy</option>
                                <option value="1909">Training</option>
                                <option value="11">Transport &amp; Logistics</option>
                                <option value="21">Other</option>
                          </select> 
                    </span>
                </div>
                <div class="edit-lable-section">
                    <label for="#">Number of employees</label>
                    <span class="value">
                        <select class="w-100" name="company_size" value="{{old('company_size')}}">
                            <option value="" disabled="" selected="">- Select company size -</option>
                            <option value="Not Known">Not known</option>
                            <option value="1-10">1-10</option>
                            <option value="11-50">11-50</option>
                            <option value="51-200">51-200</option>
                            <option value="201-500">201-500</option>
                            <option value="501-1000">501-1000</option>
                            <option value="1001-5000">1001-5000</option>
                            <option value="5001-10000">5001-10000</option>
                            <option value="10001+">10001+</option>
                          </select> 
                    </span>
                </div>
                <div class="edit-lable-section">
                    <label for="#">Company name</label>
                    <span class="value"><input type="text" value="{{$current_data->company_name}}"> </span>
                </div>
                <div class="edit-lable-section">
                    <input type="submit" value="Cancel" id="edit-password1-hide" class="edit-sign-contant-btn">
                    <input type="submit" value="Save" class="edit-sign-contant-btn">
                </div>
                <hr>
            </fieldset>
        
            <fieldset class="Preferences-contant">
                <h2>Preferences</h2>
                <p>Tell us what you’d like to hear about. Remember, you can update your preferences at any time.</p>
                <div id="edit-Preferences-contant-show" class="msg  edit-success-contant ">
                    <span class="sucess-text"><img src="images/success .webp" alt="success" class="img-success">Preferences have been updated</span>
                    <span><a href="javascript:void(0)" id="edit-Preferences-hide" class="edit-close">close</a></span>
                </div>
                <div class="Preferences-email-contact">
                    <h3>Email contact preferences</h3>
                    <div class="preferences-check"><input type="checkbox"><label for="#">Receive information about upcoming events, webinars and
                            industry news</label></div>
                    <div class="preferences-check"><input type="checkbox"><label for="#">Receive promotional offers about reed.co.uk products and
                            services</label></div>
                    <div class="preferences-check"><input type="checkbox"><label for="#">Receive emails from 3rd party organisations</label></div>
                    <div class="preferences-check"><input type="checkbox"><label for="#">Remind me when my jobs are about to expire</label></div>
                </div>
            <div class="Preferences-application-contact">
                <h3>Application email preferences</h3>
                <div class="preferences-check"><input type="checkbox"><label for="#">Attach CVs to application emails</label></div>
                <div>
                    <input type="submit" value=" Save preferences" id="edit-Preferences-show" class="edit-preferences-details-btn">
                </div>
            </div>
            </fieldset>
        </div>
        <div class="reports-account">
            <p>
                View reports on your account's activity, credit spend, and market insights. <a href="#">View your reports.</a>

            </p>
        </div>
    </div>
</div>
@stop