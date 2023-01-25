@extends('front.login.index')
@section('title', 'Home')
@section('content')

<div class="Sing_In_Section">
         <div class="container form-outer">
            <div class="Sing_In_Form bg-white">
               <ul class="nav nav-tabs border-0" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link {{$errors->hasBag('jobseeker') ? '' : 'active'}}" data-toggle="tab" href="#tabs-1" role="tab">Sign in</a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link gre_tab {{$errors->hasBag('jobseeker') ? 'active' : ''}}" data-toggle="tab" href="#tabs-2" role="tab">Register</a>
                  </li>
               </ul>
               
                  <div class="tab-content">
                     <div class="tab-pane Seeker-tab {{$errors->hasBag('jobseeker') ? '' : 'active'}}" id="tabs-1" role="tabpanel">
                       <h2>Sign In</h2>
                        
                           <p class="form-info">Continue with email</p>
                            <form method="POST" action="{{route('front.loginUser')}}" id="demoForm">
                            @csrf
                            <p>
                                <label for="email">E-mail</label>
                                <input type="text" name="email" id="email" value="{{old('email')}}">
                            @error('email')
                            <div class="form-valid-error">{{ $message }}</div>
                            @enderror
                            </p>
                            <p>
                                <label for="password">Password</label>
                                <input type="Password" name="password" id="password" class="form-control">
                                <i class="toggle-password fa fa-fw fa-eye-slash"></i>
                            @error('password')
                            <div class="form-valid-error">{{ $message }}</div>
                            @enderror
                                <a href="#" class="Forget_Password d-block">Forget Password?</a>
                            </p>
                            <p>
                                <input type="submit" class="Sing_In_Btn" value="Continue">
                            </p>                      
                        </form>
                        <h6 class="mb-0 text-center">or</h6>
                        <button class="media-btn google-btn">Continue with Google</button>
                        <button class="media-btn apple-btn">Continue with Apple</button>
                        <button>Sign in without a password</button>
                           <div class="account ">
                            <p class="d-inline-block mb-0">Don't have an account?</p>
                              <a href="#">Register</a>
                           </div>
                        
                    </div>
                     <div class="tab-pane Seeker-tab {{$errors->hasBag('jobseeker') ? 'active show' : ''}}" id="tabs-2" role="tabpanel">
                       <h2>Register</h2>
                        
                           <p class="form-info">Register with email</p>
                        
                           <form method="POST" action="{{route('front.signupUser')}}" id="demoForm1">
                            @csrf
                            <p>
                                <label for="email">E-mail</label>
                                <input type="email" name="email" id="email" value="{{old('email')}}" />
                                @error('email','jobseeker')
                                <div class="form-valid-error">{{ $message }}</div>
                                @enderror
                            </p>
                            <p>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control password-container" value="{{old('password')}}" />
                                <i class="toggle-password fa fa-fw fa-eye-slash"></i>
                                @error('password','jobseeker')
                            <div class="form-valid-error">{{ $message }}</div>
                            @enderror
                                <div class="password-limit">
                                    <ul>
                                        <li>At least 8 characters in length</li>
                                        <li>and should contain:</li>
                                        <li>Lower-case letters (a-z)</li>
                                        <li>Upper-case letters (A-Z)</li>
                                        <li>Numbers (0-9)</li>
                                    </ul>
                                </div>
                            </p>
                            <p>
                                <input type="submit" name="Sign In" class="Sing_In_Btn" value="Next">
                            </p>                      
                        </form>
                        <h6 class="mb-0 text-center">or</h6>
                        <button class="media-btn google-btn">Continue with Google</button>
                        <button class="media-btn apple-btn">Continue with Apple</button>

                        <div class="account text-left">
                            <p class="d-inline-block mb-0">By clicking next, you agree to 1IGS Manpower’s
                              <a href="#">Terms and Conditions</a>
                              and you acknowledge that you have read 1IGS Manpower’s
                              <a href="#">Privacy Notice</a>
                              which will apply to the processing of your personal data in the provision of our services.</p>
                           </div>
                        
                        <div class="account ">
                            <p class="d-inline-block mb-0">Already here?</p>
                              <a href="#">Sign in</a>
                           </div>
                          

                     </div>
                  </div>
            </div>
         </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
 <script src="{{asset('front-assets/js/slim.min.js')}}"></script> 
<script src="{{asset('front-assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front-assets/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front-assets/js/script.js')}}"></script>


<!--     <script type="text/javascript" src="js/script.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
      <script>
          (function(namespace){
    "use strict";
    function FocusLabel(parentForm) {
        var labels = parentForm.querySelectorAll('label');
        for (var i in labels) {
            if (labels.hasOwnProperty(i)) {
                this.bindFunctionality(labels[i]);
            }
        }
    }

    FocusLabel.prototype.bindFunctionality = function(label)
    {
        var parentNode = label.parentNode;
        var inputElement = parentNode.querySelector('input');
        if (inputElement) {
            inputElement.addEventListener('focus', this.checkLabel.bind(this, parentNode));
            inputElement.addEventListener('blur', this.checkLabel.bind(this, parentNode));
            this.checkLabel(parentNode);
        }
    };

    FocusLabel.prototype.checkLabel = function(parentNode, event)
    {
        var inputElement = parentNode.querySelector('input');
        parentNode.classList.remove('activevv');
        if (inputElement.value !== '' || (event && event.type === 'focus')) {
            parentNode.classList.add('activevv');
        }
    };

    namespace.FocusLabel = FocusLabel;
})(window);

new window.FocusLabel(document.getElementById('demoForm'));
new window.FocusLabel(document.getElementById('demoForm1'));
      </script>
<script>
    $(document).ready(function() {
        @if (Session::has('flash-error'))
            toastr.error('{{ Session::get('flash-error') }}');
        @elseif(Session::has('flash-success'))
            toastr.success('{{ Session::get('flash-success') }}');
        @endif
    });
</script>
@stop

