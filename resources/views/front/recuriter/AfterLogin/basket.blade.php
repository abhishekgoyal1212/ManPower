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

        <title>Your Order - {{Request::root()}}/Recruiter </title>
        
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
                <div class="your-basket-modal">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn p-0" data-toggle="modal" data-target="#exampleModalCenter">
                    Need help?
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="  px-4 ">
                                        <h2>Contact us</h2>
                                        <p>
                                            Please complete the form with your enquiry for the Reed.co.uk team
                                        and we will respond to you as soon as possible.</p>
                                        <form>
                                            <div class="basket-modal-form">
                                                <label>Name</label>
                                                <input type="" name="">
                                            </div>
                                            <div class="basket-modal-form">
                                                <label>Email</label>
                                                <input type="" name="" placeholder="recruter@gmail.com">
                                            </div>
                                            <div class="basket-modal-form">
                                                <label>Subject</label>
                                                <select>
                                                    <option>Feedback - comments &amp; suggestions</option>
                                                    <option>Sales - product information</option>
                                                    <option>Help - difficulty using the site</option>
                                                    <option>General enquiry</option>
                                                </select>
                                            </div>
                                            <div class="basket-modal-form">
                                                <label>Message</label>
                                                <input type="" name="" placeholder="recruter@gmail.com">
                                            </div>
                                            <div class="basket-modal-form checkbox">
                                                <input type="checkbox" name="" placeholder="recruter@gmail.com">
                                                <span><a href="#">Request a call back</a></span>
                                            </div>
                                            <div class="basket-modal-form text-center my-4">
                                                <button>Send</button>
                                                <p>Alternatively call us on <b>0845 241 9293</b></p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="reting-great">
    <div class="container">
        <div class="reting-content">
            <span>Great</span>
            <div class="reting_icon">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <div class="reviews">
                <p>
                    <span>2538</span>
                    reviews on
                </p>
            </div>
            <div class="trust">
                <img src="{{asset('front-assets/images/star.png')}}">
            </div>
        </div>
    </div>
</div>
<div class="basket-content">
    <div class="container px-0 px-lg-3">
        <div class="Product-Details">
            <h2>
                Your basket

                <img src="{{asset('front-assets/images/imgpsh_anim.png')}}" class="img-fluid">
            </h2>


            <div class="Products-selected">
                    <div class="row">
                        <div class="col-6">
                            <h4>Products selected</h4>
                        </div>
                        <div class="col-3 text-right Quantity_Heading">
                            <h4>Quantity</h4>
                        </div> 
                        <div class="col-3 text-right">
                            <h4>Price</h4>
                        </div>
                     </div>
            </div>
            <div class="Products_Quantity">
                @foreach($CartData as $item)
                <div class="row border-bottom pb-3">
                    <div class="col-md-6 col-6">
                        <p>{{$item->type}}
                            <img src="{{asset('front-assets/images/Premium.png')}}">
                        </p>
                    </div>
                    <div class="col-4 text-right Quantity_Section_Mobile ">
                        <div class="Quantity_Section">
                            <span>{{$item->quantity}}</span>
                            <i class="fa fa-trash-o" onclick="checkout('{{$item->id}}')"></i>

                        </div>
                    </div>


                     <div class="col-md-2 col-6 text-right">
                        <div class="Price_Section">
                            <p>£{{$item->price}}.00</p>
                            
                        </div>
                    </div>

                    <div class="Quantity_Section d-md-none">
                            <span>1</span>
                            <i class="fa fa-trash-o"></i>

                        </div>

                </div>
                @endforeach


        <div class="Product-Description">
            @if(!empty($item))
            <div class="row justify-content-between">
                <div class="col-md-5  col-md-6 pl-0">
                    <div class="code">
                        <p>
                        Promotional code <b>(89NEWCUST)</b> has been applied
                            <i class="fa fa-trash-o"></i>
                            </p>
                    </div>
                </div>

                <div class="col-md-5 col-md-6 text-right pr-0">
                    <div class="Discount">
                    <ul>
                        <li>Discount:</li>
                        <li>- £{{$item->sum('save')}}</li>
                    </ul>
                    </div>
                </div>
            </div>


             <div class="row justify-content-between">
                <div class="col-5 ">
                    
                </div>


                <div class="col-md-5 pr-0 text-right">
                    <div class="Total-excluding ">
                    <ul>
                        <li>Total excluding VAT:</li>
                        <li>£{{$item->sum('price')}}</li>   
                        <li>VAT:</li>
                        <li>£50.00</li>
                    </ul>
                    </div>
                </div>
            </div>

            <div class="row text-right">
                <div class="col-md-7">
                    
                </div>
                <div class="col-md-5" style="border-bottom: 1px solid #c8c8c8;">
                    <div class="Total-Amount">
                        <ul>
                            <li>Total:  </li>
                            <li>£{{$item->sum('price') + 50.00}} </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-8"></div>
                <div class="col-md-4 text-lg-right">
                    <div class="Checkout_Securely">
                        <h3>Checkout securely</h3>
                        <a href="{{route('Recuriter.Checkout')}}"><button>Checkout securely</button></a>
                     <img src="{{asset('front-assets/images/cardtypes.webp')}}" alt="credits cards" class="img-fluid">
                    </div>
                </div>
            </div>
            @endif


            <div class="Having_problems">
                <a href="{{route('Recuriter.PostJob')}}">
                    <i class="fa fa-angle-left"></i>

                    Back to all products
                </a>
                <p>
                    Having problems? Call us on <a href="#">0845 241 9293</a>
                </p>
            </div>
        </div>
            </div>
        </div>
      
    </div>
</div>
<script>
    function checkout(DeleteId){
        event.preventDefault();
        var DeleteId = DeleteId;
        var thisdata = $(this);
        $.ajax({
                url : "{{route('Recuriter.AddCart')}}",
                type: 'POST',
                data: {
                    "_token" : "{{csrf_token()}}", DeleteId:DeleteId,              
                },
                success: $.proxy(function(response){
                location.reload(true);
                })
            });
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{asset('front-assets/js/slim.min.js')}}"></script>
    <script src="{{asset('front-assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front-assets/js/popper.min.js')}}"></script>
    <script src="{{asset('front-assets/js/script.js')}}"></script>
    {{-- Toster Code --}}
    <script>
        $(document).ready(function() {
            @if (Session::has('flash-error'))
                toastr.error('{{ Session::get('flash-error') }}');
            @elseif(Session::has('flash-success'))
                toastr.success('{{ Session::get('flash-success') }}');
            @endif
        });
    </script>
</html>