@extends('front.recuriter.AfterLogin.index')
@section('title', 'Home')
@section('content')
        <section class="Sing_In_Section recruiterlogin">
            <div class="container form-outer">
                <div class="Sing_In_Form bg-white">
                <div class="tab-pane Seeker-tab recruiter-signinform {{$errors->hasBag('recuriter') ? 'recruiter-hide' : ''}} ">
                           <h2>Sign In</h2>
                               <p class="form-info">Sign in to your recruiter account</p>
                               <form action="{{route('Recuriter.LoginCheck')}}" method="POST" id="demoForm">
                                @csrf
                                <p>
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" id="email" value="{{old('email')}}">
                                    @error('email')
                                    <div class="form-valid-error">{{ $message }}</div>
                                    @enderror
                                    
                                </p>
                                <p>
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" value="{{old('password')}}">
                                    @error('password')
                                    <div class="form-valid-error">{{ $message }}</div>
                                    @enderror
                                    <i class="toggle-password fa fa-fw fa-eye-slash"></i>
                                    <a href="#" class="Forget_Password d-block">Forget Password?</a>
                                </p>
                                <p>
                                    <input type="submit" name="Sign In" class="Sing_In_Btn" value="Sign in">
                                </p>                      
                            </form>
                               <div class="account ">
                                <p class="d-inline-block mb-0">Don't have an account?</p>
                                  <a class="recruiter-register" href="javascript:void(0)">Register</a>
                               </div>
                 </div>
            <div class="tab-pane Seeker-tab recruiter-registerform {{$errors->hasBag('recuriter') ? 'recruiter-show' : ''}}">
                <h2>Register</h2>
                
                    <p class="form-info">New to reed.co.uk? Register with us and start recruiting</p>
                
                    <form method="POST" action="{{route('Recuriter.RegisterSave')}}" id="demoForm">
                    @csrf
                    <p>
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" value="{{old('email')}}">
                        @error('email','recuriter')
                        <div class="form-valid-error">{{ $message }}</div>
                        @enderror
                    </p>
                    <p>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" value="{{old('password')}}">
                        @error('password','recuriter')
                        <div class="form-valid-error">{{ $message }}</div>
                        @enderror
                        <i class="toggle-password fa fa-fw fa-eye-slash"></i>
                    </p>
                    <p>
                        <input type="submit"  class="Sing_In_Btn" value="Next">
                    </p>                      
                </form>
                    <div class="account ">
                    <p class="d-inline-block mb-0">Already have an account?</p>
                        <a class="recruiter-signin" href="javascript:void(0)">Sign in</a>
                    </div>
                
            </div>
                </div>
            </div>
        </section>
@stop