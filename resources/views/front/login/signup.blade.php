<?php $email = session()->get('email'); ?>
@extends('front.login.index')
@section('title', 'Home')
@section('content')
<section class="sign-up">
    <div class="container">
        <div class="form-container Seeker-tab">
            <form method="POST" action="{{route('front.signupUserSaveForm')}}">
                @csrf
                <h1>Join 1IGS Manpower</h1>
                         <div class="steps stp_job">
                            <ul class="list-unstyled">
                                <li class="active">
                                    <span>Account</span>
                                </li>
                                <li>
                                    <span>CV Upload</span>
                                </li>
                                <li>
                                    <span>About You</span>
                                </li>
                            </ul>
                        </div>
                        <div class="account-details">
                            <h2>Your account</h2>
                            <div class="basic-details">
                                <input type="text" name="email" value="{{$email}}" hidden>
                                <label>First name</label>
                                <input type="text" name="first_name" required="">
                                @error('email')
                                <div class="form-valid-error">{{ $message }}</div>
                                @enderror
                                <div class="invalid-details">
                                    Please enter your first name.
                                </div>
                            </div>
                            <div class="basic-details mb-0">
                                <label>Last name</label>
                                <input type="text" name="last_name" required="">
                                @error('last_name')
                                <div class="form-valid-error">{{ $message }}</div>
                                @enderror
                                <div class="invalid-details">
                                    Please enter your last name.
                                </div>
                            </div>
                        </div>

                           <div class="account-details">
                            <div class="email-accept">
                                <span>We'd occasionally like to send you emails for job news, career advice, courses, as well as other products and services.</span>
                                <label><input type="checkbox" name=""> I'd prefer not to receive these emails</label>
                            </div>
                        </div>
                        <div class="sign-up-btn">
                                        <input type="submit" value="Next" class="nextjob">
                                    </div>
                    </form></div>
            
        </div>
    
</section>
@stop