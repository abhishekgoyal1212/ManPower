<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('front-assets/css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('front-assets/css/Responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('front-assets/css/bootstrap.min.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        {{-- Toster Live --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

        <title>@yield('title')</title>
        
    </head>
    <body>
        <div class="your-basket py-3" style="border-bottom: 1px solid #c8c8c8;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-2 col-4">
                        <div class="Account_Details_Logo w-100 ml-0">
                   <a href="{{route('Recuriter.RecruiterPage')}}"><img src="{{asset('front-assets/images/logo.png')}}" class="img-fluid"></a>

                        </div>
                    </div>
                    <div class="col-8 col-md-10 text-right">
                        <div class="your-basket-modal  d-md-block d-none">
                           <a href="#">Need help?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="checkout-section">
            <div class="container">
        
                <div class="your-basket-modal pb-3 d-md-none text-right">
                           <a href="#">Need help?</a>
                        </div>
        
                <div class="row">
                    <div class="col-lg-8 col-xl-9 px-xl-3 pl-lg-2 px-0">
                        <div class="Checkout_Left">
                            <h2>Checkout</h2>
        
                            <h5>1. Billing details</h5>
        
        
                            <form>
                                <div class="Checkout_Left_Form">
                                    <label>First Name</label>
                                    <input type="" name="" value="testing01">
                                </div>
                                 <div class="Checkout_Left_Form">
                                    <label>Last Name</label>
                                    <input type="" name="" value="testing01">
                                </div>
                                 <div class="Checkout_Left_Form">
                                    <label>Email</label>
                                    <input type="" name="" value="testing01">
                                </div>
                                 <div class="Checkout_Left_Form">
                                    <label>Building number/name</label>
                                    <input type="" name="" value="testing01">
                                </div>
                                <div class="Postcode">
        
                                    <div class="position-relative">
                                    <label>Postcode
                                        <img src="{{asset('front-assets/images/checkout-info')}}.svg" id="show">
                                        <div class="modal-postcode">
                                            <p>
                                              Please enter address manually
                                              if you are purchasing from outside
                                              of the UK.
                                              <i class="fa fa-times" id="hide"></i>
                                            
                                            </p>
                                        </div>
        
                                    </label>
                                    </div>
                                    <input type="" name="">
                                    <button>Find address</button>
                                </div>
                            </form>
        
        
                            <a href="#" class="manually-address"><b>Enter address manually</b></a>
        
                            <div class="card-datails">
                                <h2>2. Card details</h2>
                            </div>
        
                            <div class="row mt-5">
                                <div class="col-lg-8  col-md-8 order-2 order-md-1 text-center text-md-left ">
                                    <div class="Peyment">
                                        <img src="{{asset('front-assets/images/cardtypes.webp')}}">
        
                                        <p>Having problems paying? Call us on <a href="#">020 3510 0107</a></p>
                                    </div>
                                </div>
        
                                <div class="col-lg-4 col-md-4     order-1 order-md-2 text-right">
                                    <div class="Peyment_Right">
                                        <img src="{{asset('front-assets/images/imgpsh_anim.png')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-lg-4 col-xl-3 px-xl-3 pr-lg-2 pl-lg-3 px-0 mt-3 mt-lg-0">
                        <div class="order-summary">
                            <h2>Your order summary</h2>
                            <div class="Premium_Job_Payment">
                                <p class="mb-0">Premium+ Job <span>89NEWCUST</span></p>
                                
                                <p class="mb-0">Qty: <b>1</b></p>
                            </div>
        
        
                             <div class="Premium_Job_Price">
                                <p class="mb-0">Price:</p>
                                <span>£89.00</span>
                                <p class="mb-0 was"><b>(was £175.00)</b></p>
                            </div>
        
                            <div class="order-summary-Total-excluding">
                                <ul>
                                    <li>Total excluding VAT:</li>
                                    <li>£89.00</li>
                                    <li>VAT:</li>
                                    <li>£17.80</li>
                                    <li>Discount:</li>
                                    <li><b>- £86.00</b></li>
                                </ul>
                                 <div class="order-Summary-Total">
                                <ul>
                                    <li>Total:</li>
                                    <li>£106.80</li>
                                </ul>
                            </div>
                            </div>
        
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
         <div class="footer-top-sec Account_Details_Footer">
                <div class="container">
                <div class="upper_side Checkout_Footer contents d-none d-lg-block">
                    <ul class="flex list-unstyled">
                        <li class="footer-menu first_depth">
                            <p class="title">OUR SERVICES</p>
                            <ul class="list-unstyled second_depth">
                                <li><a href="">Post a job</a></li>
                                <li><a href="">CV Search</a></li>
                                <li><a href="">Buy credits</a></li>
                                <li><a href="">For developers</a></li>
                                <li><a href="">Complaints Policy</a></li>
                            </ul>
                        </li>
                       
                        <li class="footer-menu first_depth">
                            <p class="title">ABOUT US</p>
                            <ul class="list-unstyled second_depth">
                                <li><a href="">Security</a></li>
                                <li><a href="">Terms and Conditions</a></li>
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">Cookies Policy</a></li>
                                <li><a href="">Cookie Settings</a></li>
                            </ul>
                        </li>
                         <li class="footer-menu first_depth">
                            <p class="title">OTHER SERVICES</p>
                            <ul class="list-unstyled second_depth">
                                <li><a href="">Help</a></li>
                                <li><a href="">Contact us</a></li>
                                <li><a href="">Reed Screening</a></li>
                                 <li class=" logo-content Account_Details_Footer_Logo "><a href="#"><img src="{{asset('front-assets/images/logo.png')}}" class="footer-logo"></a></li>
                            </ul>
                        </li>
                      <!--   <li class="footer-menu first_depth">
                            <p class="title">HELP AND CONTACT</p>
                            <ul class="list-unstyled second_depth">
                                <li>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Help</a></li>
                                            <li><a href="#">Contact us</a></li>
                                            <li><a href="#">Press office</a></li>
                                        
                                           
                                        </ul>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
                <div class="row explore-site d-none d-lg-block">
                    
                    <div class="col-md-12 connect">
                        <div class="connect-logo"><a href="#"><img  class="footer-logo"></a></div>
                        <div class="footer-icon-box">
                            <div class="footer-icon mr-md-2">
                                <div><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="footer-icon">
                                <div><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
                            </div>
                           
                        </div>
                       
                        <div class="copyright mt-4"><p class="mb-0">COPYRIGHT © 1IGS Manpower.co.uk 2022</p></div>
                    </div>
                </div>
        
        
        
                <!-- Mobile Footer -->
                <div id="accordion" class="d-lg-none">
                  <div class="card">
                    <div class="card-header pointer" data-toggle="collapse" data-target="#collapse-1">
                          <h5>OUR SERVICES </h5>
                    </div>
                    <div id="collapse-1" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                          <ul class="list-unstyled second_depth">
                                <li><a href="">Post a job</a></li>
                                <li><a href="">CV Search</a></li>
                                <li><a href="">Buy credits</a></li>
                                <li><a href="">For developers</a></li>
                                <li><a href="">Complaints Policy</a></li>
                            </ul>
                      </div>
                    </div>
                  </div>
                  
                  <div class="card">
                    <div class="card-header pointer" data-toggle="collapse" data-target="#collapse-2">
                          <h5>ABOUT US </h5>
                    </div>
                    <div id="collapse-2" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                         <ul class="list-unstyled second_depth">
                                <li><a href="">Security</a></li>
                                <li><a href="">Terms and Conditions</a></li>
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">Cookies Policy</a></li>
                                <li><a href="">Cookies Settings</a></li>
                            </ul>
                      </div>
                    </div>
                  </div>
                  
                  <div class="card">
                    <div class="card-header pointer" data-toggle="collapse" data-target="#collapse-3">
                          <h5>OTHER SERVICES </h5>
                    </div>
                    <div id="collapse-3" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        <ul class="list-unstyled">
                                            <li><a href="#">Help</a></li>
                                            <li><a href="#">Contact us</a></li>
                                            <li><a href="#">Reed Screening</a></li>
                                        
                                        </ul>
                      </div>
                    </div>
                  </div>
        
        
                <!--   <div class="card">
                    <div class="card-header pointer" data-toggle="collapse" data-target="#collapse-4">
                          <h5>SERVICES FOR RECRUITERS</h5>
                    </div>
                    <div id="collapse-4" class="collapse" data-parent="#accordion">
                      <div class="card-body">
                        
                            
                            <ul class="list-unstyled second_depth">
                                <li><a href="">Post a job</a></li>
                                <li><a href="">CV Search</a></li>
                                <li><a href="">Recruitment Agencies</a></li>
                                <li><a href="">For developers</a></li>
                            </ul>
                     
                      </div>
                    </div>
                  </div> -->
        
                  <div class="mobile-footer-logo text-center">
                  <img src="{{asset('front-assets/images/logo.png')}}" class="footer-logo">
                  </div>
                  <div class="footer-icon-box justify-content-center mt-3">
                            <div class="footer-icon mr-2">
                                <div><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
                            </div>
                            <div class="footer-icon pr-0">
                                <div><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
                            </div>
                           
                   </div>
                   <div class="copyright mt-4"><p class="text-center">COPYRIGHT © 1IGS Manpower.co.uk 2022</p></div>
                </div>
                </div>
                
            </div>
        
        
        
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script src="{{asset('front-assets/js/slim.min.js')}}"></script>
            <script src="{{asset('front-assets/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('front-assets/js/popper.min.js')}}"></script>
            <script src="{{asset('front-assets/js/script.js')}}"></script>
        
                <script>
                    $(document).ready(function() {
                     $("#hide").click(function() {
                         $(".modal-postcode").hide();
                     });
        
                     $("#show").click(function() {
                         $(".modal-postcode").show();
                     });
                });
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
        </body>
</html>