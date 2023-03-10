@extends('front.recuriter.AfterLogin.index')
@section('title', 'Recuriter')
@section('content')
<section class="recruiter">
    <div class="container">
        <div class="recruiter-title">
            <h1 class="mb-0">Buy job ads and CV Search</h1>
        </div>
        <div class="row my-3">
            <div class="col-xs-4 col-sm-5 col-md-7 col-lg-6 col-xl-6 recruiter-rating-box">
                <a href="">
                    <span class="mr-3">Great</span>
                    <div class="recruiter-rating d-inline mr-3">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="recruiter-rating-info">
                        <small class="mr-3">2,538 reviews on</small>
                        <div class="recruiter-rating-logo">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <span>Trustpilot</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-8 col-sm-7 col-md-5 col-lg-6 col-xl-6 contact-title text-right">
                <span>Questions? Call us: </span>
                <a href="tel:08452419293">0584 582 8934</a>             
            </div>
        </div>
    </div>
</section>
<section class="offer">
    <div class="container">
        <div class="offer-container">
            <div class="offer-content">
                
                    <h3>
                    <span class="font-weight-bold">Never posted a job with 1IGS Manpower?</span>
                    Get your first Premium+ job for just
                    <span class="font-weight-bold">£89</span>
                    <span class="font-weight-bold h6">+VAT
                        <span class="old-price">£175</span>
                    </span>

                    </h3>
                    <a href="" class="offer-btn">Get the offer</a>
            </div>
        </div>
    </div>
</section>
<section class="info-credits">
    <div class="container custom-container">
       <ul class="nav" role="tablist">
    <li class="nav-item w-50">
        <a class="nav-link active show" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">Job ads</a>
    </li>
    <li class="nav-item w-50">
        <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab" aria-selected="false">CV Search</a>
    </li>
</ul>
<div class="tab-content">
    <div class="tab-pane active show" id="tabs-1" role="tabpanel">
        <div class="row">
            <div class="col-lg-4 col-12 info-credits-content">
            <form id="cart_section">
                <div class="info-credits-content-top">
                    <h3 class="font-weight-bold">Premium job</h3>
                    <h4 class="mb-0 font-weight-bold">£150 <span> + VAT</span></h4>
                    <div class="qty-container">
                <button class="qty-btn-minus" type="button"><i class="bi bi-dash-lg"></i></button>
                <input type="text" name="qty" value="1" class="input-qty">
                <button class="qty-btn-plus" type="button"><i class="bi bi-plus-lg"></i></button>
            </div>
            <input type="hideen" name="price" id="" value="150" hidden>
            <input type="hideen" name="save" id="" value="0" hidden>
            <input type="hideen" name="type" id="" value="Premium job" hidden>
            
             <p class="font-weight-bold mb-2">Total Price £150 <span> + VAT</span></p>
            
            <h6 class="font-weight-bold mb-2">Save £</h6>
            <button class="my-cart-btn">Add to basket</button>
        </form>


            <span class="premium-jobs" id="premium-jobs-one">Premium job features <i class="fa fa-chevron-down px-1" aria-hidden="true"></i></span>
                </div>
                <ul class="credit-features list-unstyled" id="premium-content-one">
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="ml-1">Use anytime within 12 months</p>
                    </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="ml-1">Job live for up to six weeks</p>
                    </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="ml-1">Applications straight to your inbox</p>
                    </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="ml-1">Included in job alert emails to candidates</p>
                    </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="ml-1">Branded company profile and applicant management tools</p>
                    </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="ml-1">Use screening questions to filter applications faster</p>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-12 info-credits-content">
                <form id="cart_section_secend">
                <div class="info-credits-content-top">
                    <h3 class="font-weight-bold">Premium+ job</h3>
                    <h4 class="mb-0 font-weight-bold">£175<span> + VAT</span></h4>
                    <div class="qty-container">
                <button class="qty-btn-minus" type="button"><i class="bi bi-dash-lg"></i></button>
                <input type="text" name="qty" value="1" class="input-qty">
                <button class="qty-btn-plus" type="button"><i class="bi bi-plus-lg"></i></button>
            </div>
            <input type="hideen" name="price" id="" value="175" hidden>
            <input type="hideen" name="save" id="" value="0" hidden>
            <input type="hideen" name="type" id="" value="Premium plus job" hidden>
            <p class="font-weight-bold mb-2">Total Price £175 <span> + VAT</span></p>
            
            <h6 class="font-weight-bold mb-2">Save £</h6>
            <button class="my-cart-btn-sec">Add to basket</button>
        </form>

            <span class="premium-jobs" id="premium-jobs-one">Premium job features <i class="fa fa-chevron-down px-1" aria-hidden="true"></i></span>
                </div>
                
                <ul class="credit-features list-unstyled" id="premium-content-two">
                 <li>
                      <i class="fa fa-check" aria-hidden="true"></i>
                      <p class="text-center font-weight-bold">Includes everything you get with a Premium job and...</p>
                   </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="ml-1">Your job emailed to up to 100 best matching candidates</p>
                    </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="ml-1">Link to your own application form from your ad</p>
                    </li>
                </ul>
            </div>


            <div class="col-lg-4 col-12 info-credits-content">
                <form id="cart_section_third">
                <div class="info-credits-content-top">
                    <h3 class="font-weight-bold">Featured job</h3>
                    <h4 class="mb-0 font-weight-bold">£250<span> + VAT</span></h4>
                    <div class="qty-container">
                <button class="qty-btn-minus" type="button"><i class="bi bi-dash-lg"></i></button>
                <input type="text" name="qty" value="1" class="input-qty">
                <button class="qty-btn-plus" type="button"><i class="bi bi-plus-lg"></i></button>
            </div>
            <input type="hideen" name="price" id="" value="250" hidden>
            <input type="hideen" name="save" id="" value="0" hidden>
            <input type="hideen" name="type" id="" value="Featured job" hidden>
            <p class="font-weight-bold mb-2">Total Price £250 <span> + VAT</span></p>
            
            <h6 class="font-weight-bold mb-2">Save £</h6>
            <button class="my-cart-btn-third">Add to basket</button>
        </form>

            <span class="premium-jobs" id="premium-jobs-one">Premium job features <i class="fa fa-chevron-down px-1" aria-hidden="true"></i></span>
                </div>
                
                <ul class="credit-features list-unstyled" id="premium-content-two">
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="text-center font-weight-bold">Includes everything you get with a Premium job and...</p>
                     </li>
                 <li>
                      <i class="fa fa-check" aria-hidden="true"></i>
                      <p class="text-center font-weight-bold">Your job promoted on rotation at the top of the search results</p>
                   </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="ml-1">Showcase your company by adding pictures and videos to your job ad</p>
                    </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="ml-1">Your job emailed up to 250 best matching candidates</p>
                    </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="ml-1">Link to your own application form from your ad</p>
                    </li>
                </ul>
            </div>



        </div>
    </div>
    
    <div class="tab-pane credit-tab-two" id="tabs-2" role="tabpanel">
        <div class="row">
            <div class="col-12 info-credits-content ">
                <ul class="credit-features list-unstyled">
                    <h3 class="font-weight-bold">CV Search</h3>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="ml-1">Use anytime within 12 months</p>
                    </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="ml-1">Job live for up to six weeks</p>
                    </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="ml-1">Applications straight to your inbox</p>
                    </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="ml-1">Included in job alert emails to candidates</p>
                    </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="ml-1">Branded company profile and applicant management tools</p>
                    </li>
                    <li>
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <p class="ml-1">Use screening questions to filter applications faster</p>
                    </li>
                </ul>
                <div class="info-credits-content-top">
                    <div class="inner-info-tab-box">
                        <h2 class="credit-cv font-weight-bold d-lg-none d-block mb-4">CV Search</h2>
                    <h4 class="mb-3 text-left">Choose your CV Search access for</h4>
                    <ul class="nav inner-info-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#innertabs-1" role="tab">1 Day</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#innertabs-2" role="tab">1 Week</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#innertabs-3" role="tab">1 Month</a>
                        </li>
                    </ul>
                </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="innertabs-1" role="tabpanel">
                            <p class="font-weight-bold">$250 <span> + VAT</span></p>
            <button>Add to basket</button>
                            </div>
                            <div class="tab-pane" id="innertabs-2" role="tabpanel">
                                <p class="info-credits-para">You already have<span>1 Week's CV Search</span>in your basket.</p>
                <button>Add to basket</button>
                            </div>
                            <div class="tab-pane" id="innertabs-3" role="tabpanel">
                                <p class="font-weight-bold">$56 <span> + VAT</span></p>
                <button>Add to basket</button>
                                </div>
                            </div>
            
            
                </div>
            </div>
        </div>
    </div>
</div>
</div>
   </section>

   <script>
    $(function(){
        $(".my-cart-btn").click(function(event){
            event.preventDefault();
            var cart_data =   $("#cart_section").serialize();
        $.ajax({
                url : "{{route('Recuriter.AddCart')}}",
                type: 'POST',
                data: {
                    "_token" : "{{csrf_token()}}", cart_data:cart_data,              
                },
                success: $.proxy(function(response){
                    //  var count_cart_value =  Object.keys(response).length;
                    //  $('.cart-number').text(count_cart_value);
                     $('.cart-number').text(response.success);
                })
            });
    });
    $(".my-cart-btn-sec").click(function(event){
            event.preventDefault();
            var cart_data =   $("#cart_section_secend").serialize();
        $.ajax({
                url : "{{route('Recuriter.AddCart')}}",
                type: 'POST',
                data: {
                    "_token" : "{{csrf_token()}}", cart_data:cart_data,                
                },
                success: $.proxy(function(response){
                    //  var count_cart_value =  Object.keys(response).length;
                    //  console.log(count_cart_value);
                     $('.cart-number').text(response.success);
                })
            });
    });
    $(".my-cart-btn-third").click(function(event){
            event.preventDefault();
            var cart_data =   $("#cart_section_third").serialize();
        $.ajax({
                url : "{{route('Recuriter.AddCart')}}",
                type: 'POST',
                data: {
                    "_token" : "{{csrf_token()}}", cart_data:cart_data,                
                },
                success: $.proxy(function(response){
                    //  var count_cart_value =  Object.keys(response).length;
                    //  console.log(count_cart_value);
                     $('.cart-number').text(response.success);
                })
            });
    });
});

</script>
@stop