
/**/

var totalSteps = $(".stp_job li").length;

$(".submit").on("click", function(){
  return false; 
});

$(".stp_job li:nth-of-type(1)").addClass("active");
$(".myContainer .form-container:nth-of-type(1)").addClass("active");

$(".form-container").on("click", ".nextjob", function() { 
  $(".stp_job li").eq($(this).parents(".form-container ").index() + 1).addClass("active"); 
  $(this).parents(".form-container").removeClass("active").next().addClass("active flipInX");   
});

$(".emp_job li:nth-of-type(1)").addClass("active");
$(".myContainer .form-container:nth-of-type(1)").addClass("active");

$(".form-container").on("click", ".nextemp", function() { 
  $(".emp_job li").eq($(this).parents(".form-container ").index() + 1).addClass("active"); 
  $(this).parents(".form-container").removeClass("active").next().addClass("active flipInX");   
});

// -------Browse Jobs--------

$(document).ready(function(){
    $(".explore-sector").click(function(){
        $(".browse-jobs").toggle();
    });
});
// ------Browse Jobs--------


// ------Blog-slider------

 $(document).ready(function() {

            var owl = $("#owl-demo1");

            owl.owlCarousel({

                items: 4, //10 items above 1000px browser width
                itemsDesktop: [1000, 3], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 2], // 3 items betweem 900px and 601px
                itemsTablet: [600, 1], //2 items between 600 and 0;
                itemsMobile: [360, 1] // itemsMobile disabled - inherit from itemsTablet option

            });

            // Custom Navigation Events
            $(".next").click(function() {
                owl.trigger('owl.next');
            })
            $(".prev").click(function() {
                owl.trigger('owl.prev');
            })
            $(".play").click(function() {
                owl.trigger('owl.play', 1000);
            })
            $(".stop").click(function() {
                owl.trigger('owl.stop');
            })

        });

// -----Blog-slider-------

// ----footer------

(function() {
            var body, bodyClick, button, container;

            button = $('.mobile-menu');

            container = $('.container');

            body = $('body');

            bodyClick = function(event) {
                if (!$(event.target).closest('.menu').length) {
                    body.off('click');
                    return container.toggleClass('menu-open');
                }
            };

            button.on('click', function(event) {
                event.stopPropagation();
                event.preventDefault();
                setTimeout((function() {
                    container.toggleClass('menu-open');
                }), 25);
                return body.on('click', function(event) {
                    if (container.hasClass('menu-open')) {
                        return bodyClick(event);
                    }
                });
            });

        }).call(this);

        // Test
        $(document).ready(function() {
            $(".Test").click(function() {
                $(".Test_Menu").slideToggle("slow", function() {

                });
            });
        });





     $(".Home_Test").click(function() {
        $(".Home_Menu").toggle(3000);
     });
        

// ----footer------

// ----hide/show password------

$(".toggle-password").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    input = $(this).parent().find("input");
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});

// ----hide/show password------

// -------Browse Jobs--------

    $(document).ready(function(){

  $(".password-container").click(function(){
    $(".password-limit").addClass("password-limit-show");
    
  });

});


// ------Browse Jobs--------


// -------toggle-edit-location--------

$(document).ready(function(){
                $(".EditButtonModal").click(function(){
                    $(".toggle-location").toggleClass("toggle-location-show");
                    $(".edit-location h4").toggleClass("edit-location-heading");
                    $(".location-title").toggleClass("location-title-float");
                });
            })


// ------toggle-edit-location--------

// ------toggle-job-panel--------

jQuery(".nav-folderized h3").click(function(){
    jQuery(this).parent(".ftr__list").toggleClass("open"); 
});

// ------toggle-job-panel--------

// -------recruiter-register--------

    $(document).ready(function(){

  $(".recruiter-register").click(function(){
    $(".recruiter-registerform").show(".recruiter-show");
    $(".recruiter-signinform").hide(".recruiter-hide");
  });

  $(".recruiter-signin").click(function(){
    $(".recruiter-signinform").show(".recruiter-show");
    $(".recruiter-registerform").hide(".recruiter-hide");
  });

});

// ------recruiter-register--------

// ------popularjobs-search--------

$(document).ready(function(){
                $(".vacancies-search input").click(function(){
                    $(".vacancies-container.row").addClass(".vacancies-container-show");
                    $(".vacancies-search").css("display" , "none")
                });
            })


// ------popularjobs-search--------

// product-btns

          var buttonPlus  = $(".qty-btn-plus");
var buttonMinus = $(".qty-btn-minus");

var incrementPlus = buttonPlus.click(function() {
  var $n = $(this)
  .parent(".qty-container")
  .find(".input-qty");
  $n.val(Number($n.val())+1);
});

var incrementMinus = buttonMinus.click(function() {
  var $n = $(this)
  .parent(".qty-container")
  .find(".input-qty");
  var amount = Number($n.val());
  if (amount > 1) {
    $n.val(amount-1);
  }
});

// product-btns



// ------job features--------

$(document).ready(function(){
                $("#premium-jobs-one").click(function(){
                    $("#premium-content-one").toggleClass("credit-show");
                    $("#premium-jobs-one i").toggleClass("credit-trans");
                });
            })

$(document).ready(function(){
                $("#premium-jobs-two").click(function(){
                    $("#premium-content-two").toggleClass("credit-show");
                    $("#premium-jobs-two i").toggleClass("credit-trans");
                });
            })

$(document).ready(function(){
                $("#premium-jobs-three").click(function(){
                    $("#premium-content-three").toggleClass("credit-show");
                    $("#premium-jobs-three i").toggleClass("credit-trans");
                });
            })


// ------job features--------///





//--------------- Home_Page Saved_Jobs ----------------//
      $(document).ready(function(){
          $(".menu-three-saved-jobs").click(function(){
            $(".saved-jobs").toggle();
          });
        });


// ---------

  $(document).ready(function(){
          $(".single-post-menu ul li").click(function(){
            $(".subMenuToggle").toggle();
          });
        });


         

        // search-input-box
            $(document).ready(function(){
                $(".search-section i").click(function(){
                    $(".search-input-box").toggle();
                });
        });

// mobile input
         $(".search-input-box_icon").click(function(){
            $(".search-input-box").hide();
        });



// mobile header menu  

         $(function() {
  $('.accordion-content').hide();

  $('.accordion').on('click', '.accordion-trigger', function(e) {
    e.preventDefault();

    $('.accordion-content:visible').slideUp(300);

    $(this)
      .next('.accordion-content')
      .not(':animated')
      .slideToggle(300);
  });
});


      $(document).ready(function(){
  $("#cross").click(function(){
    $(".Stay.up-to-date").hide();
  });
});

// ---------


    $('.Courses_Type').owlCarousel({
              loop: false,
              margin: 10,
              nav: true,
              dots: false,
             autoplay: true,
              autoplayHoverPause: true,
              responsive: {
                0: {
                  items: 1
                },
                600: {
                  items: 3
                },
                1000: {
                  items: 5
                }
              },
            })
    $('.Popular-students-slider').owlCarousel({
              loop: false,
              margin: 10,
              nav: true,
              dots: false,
             autoplay: true,
              autoplayHoverPause: true,
              responsive: {
                0: {
                  items: 1
                },
                600: {
                  items: 3
                },
                1000: {
                  items: 4
                }
              },
            })
 $('.Satisfied-mobile').owlCarousel({
              loop: false,
              margin: 10,
              nav: true,
              dots: false,
             autoplay: true,
              autoplayHoverPause: true,
              responsive: {
                0: {
                  items: 1
                },
                600: {
                  items: 3
                },
                1000: {
                  items: 5
                }
              },
            })
    $('.courses-discount').owlCarousel({
              loop: false,
              margin: 10,
              nav: true,
              dots: false,
             autoplay: true,
              autoplayHoverPause: true,
              responsive: {
                0: {
                  items: 1
                },
                600: {
                  items: 2
                },
                1000: {
                  items: 3
                }
              },
            })

// ---------

// Latest articles
        $('.Latest-articles-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })

//Featured_Articles_slider mobile 

    $('.Featured_Articles_slider .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

    $('.guides-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

// -------

let x = document.getElementById("number_display").innerText

        console.log(x)
// -------

        function handleButtonClickPlus() {
            document.getElementById("number_display").innerHTML = parseInt(document.getElementById("number_display").innerText) + 1;
        }

        function handleButtonClickMinus(x) {
            document.getElementById("number_display").innerHTML = parseInt(document.getElementById("number_display").innerText) - 1;
        }

// --------

       $(document).ready(function () {
        $(".manu-saves").click(function () {
          $(".saved-jobs-subnav").slideToggle("slow", function () {});
        });
      });

       // input
       $(document).ready(function(){
                    $(".mobile-search-content").click(function(){
                    $(".Job_Search_Section").slideDown();
                });
            });
       $(document).ready(function(){
                    $(".mobile-search-content").click(function(){
                    $(".Job_Search_Section").slideDown();
                });
            });



       $('.moreless-button').click(function() {
          $('.moretext').slideToggle();
          if ($('.moreless-button').text() == "Read more") {
            $(this).text("Read less")
          } else {
            $(this).text("Read more")
          }
        });

      
$(document).ready(function(){
  $(".Search-job-btn img").click(function(){
  $(".Search-fillter-mobile").hide();
});
  $(".Search-job-btn button").click(function(){
    $(".Search-fillter-mobile").show();
  });
  $(".Search-fillter-btn-cancel").click(function(){
  $(".Search-fillter-mobile").hide();
});
});

// ------

$(".back-locatin").click(function(){
  $(".Location-section").hide();
  $(".region").show();
});

$(".Change-location-btn").click(function(){
  $(".Location-section").show();
  $(".region").hide();
});
     
