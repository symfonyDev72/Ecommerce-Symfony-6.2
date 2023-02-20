// owlcaroussel
$(document).ready(function() {

    $('#owl-banners').owlCarousel({
        animateIn: 'fadeIn',
        animateOut: 'fadeOut', 
        loop:true,
        nav:false,
        dots:false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
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
      })
    
    
    $('#owl-brands').owlCarousel({
        loop:true,
        nav:false,
        dots:false,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
      })
    
    })
    