@extends('front.recuriter.AfterLogin.index')
@section('title', 'Home')
@section('content')
<section class="Sing_In_Section recruiterlogin account-register mt-0">
    <div class="container form-outer">
        <div class="Sing_In_Form bg-white">
                        <div class="tab-pane Seeker-tab recruiter-signinform">
                   <h2>New to 1IGS Manpower?<br>
Register with us and start recruiting</h2>
                    
                    
                       <form action="{{route('Recuriter.RegisterFrom')}}" method="POST" id="demoForm">
                        @csrf
                        <p>
                            <label for="first_name">First name</label>
                            <input type="text" name="first_name" value="{{old('first_name')}}">
                            @error('first_name')
                            <div class="form-valid-error">{{ $message }}</div>
                            @enderror
                        </p>
                         <p>
                            <label for="last_name">Last name</label>
                            <input type="text" name="last_name" value="{{old('last_name')}}">
                            @error('last_name')
                            <div class="form-valid-error">{{ $message }}</div>
                            @enderror
                        </p>
                        <p>
                            <label class="mb-0">Company name</label>
                            <span class="d-inline-block mb-2">This is the company name that'll appear on your job advert</span>
                            <input type="text" id="phone" name="company_name" value="{{old('company_name')}}">
                            @error('company_name')
                            <div class="form-valid-error">{{ $message }}</div>
                            @enderror
                        </p>
                         <p>
                            <label class="mb-0">Phone number</label>
                            <span class="d-inline-block mb-2">We may need to call you in order to verify your company details</span>
                            <input type="text" name="contact" value="{{old('mobile')}}">
                            @error('contact')
                            <div class="form-valid-error">{{ $message }}</div>
                            @enderror
                        </p>
                        <div class="row">
                            <div class="col-md-6 mb-md-0 mb-3">
                              <label>Company type</label>
                              <select class="w-100" name="company_type" value="{{old('company_type')}}">
                                <option value="" disabled="" selected="">- Select company type -</option>
                                <option value="1">Direct employer</option>
                                <option value="2">Charity / not for profit</option>
                                <option value="3">Recruitment consultancy</option>
                              </select> 
                              @error('company_type')
                              <div class="form-valid-error">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="col-md-6">
                              <label>Company size</label>
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
                              @error('company_size')
                                    <div class="form-valid-error">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                        <p class="alert-note">We'll use this to personalise your experience and deliver offers that match your needs</p>
                        <p>
                            <input type="submit" name="Sign In" class="Sing_In_Btn" value="Register">
                        </p>                     
                    </form>
                       <div class="account text-left">
                        <p class="d-inline-block mb-0">By creating an account you agree to the
                          <a href="#">terms and conditions</a>
                          applicable to our service and acknowledge that your personal data will be used in accordance with our
                          <a href="#"> privacy policy</a>
                          and you will receive emails and communications about jobs, industry news, new products and related topics.</p>
                       </div>
                </div>
        </div>
    </div>
</section>
@stop