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
            items:5,
            nav:true,
            navText:['<img src="/dfcusa-web/app/webroot/challenges/doorstep/img/arrow-left.png" alt="">', '<img src="/dfcusa-web/app/webroot/challenges/doorstep/img/arrow-right.png" alt="">'],
            dot:true,
            loop:true,
            margin:20,
            autoplay:false,
            autoplayTimeout:3000,
            smartSpeed:1000,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                   
                },
                768:{
                    items:3,
                   
                },
                1000:{
                    items:5,
                   
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