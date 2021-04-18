$(document).ready(function(){

    //slider section

    $('.owl-carousel').owlCarousel({
        center: true,
        loop: true,
        margin: 10,
        nav: true,
        navSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 1500,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $('.owl-prev').html('<i class="fas fa-chevron-left"></i>');
    $('.owl-next').html('<i class="fas fa-chevron-right"></i>');


    //responsive menu


});