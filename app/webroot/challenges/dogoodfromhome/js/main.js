(function ($) {
	"use strict";

    jQuery(document).ready(function($){


        $(".embed-responsive iframe").addClass("embed-responsive-item");
        $(".carousel-inner .item:first-child").addClass("active");
        
        $('[data-toggle="tooltip"]').tooltip();

        
            $('#mobile-menu-active').meanmenu({
                meanScreenWidth: "767",
                meanMenuContainer: '.menu-prepent',
             });



        $('.menu-open').click( function (){
                  
                $('.body-left-bar').toggleClass('activee');  
                $('.menu-open').toggleClass('toggle');  
                  
        });

        function random(owlSelector){
            owlSelector.children().sort(function(){
              return Math.round(Math.random()) - 0.5;
            }).each(function(){
              $(this).appendTo(owlSelector);
            });
          }
       
        var owl = $(".help-slider");
        owl.owlCarousel({
            items:7,
            nav:true,
            navText:['<img src="img/arrow-left.png" alt="">', '<img src="img/arrow-right.png" alt="">'],
            dot:true,
            loop:true,
            margin:10,
            autoplay:false,
            autoplayTimeout:3000,
            smartSpeed:1000,
            responsiveClass:true,
            responsive:{
                0:{
                    items:2,
                   
                },
                768:{
                    items:5,
                   
                },
                1000:{
                    items:7,
                   
                }
            },
            onInitialize : function(elem){
                owl.children().sort(function(){
                    return Math.round(Math.random()) - 0.5;
                }).each(function(){
                    $(this).appendTo(owl);
                });
            }          
        });




    });


    jQuery(window).load(function(){


    });


}(jQuery));	

