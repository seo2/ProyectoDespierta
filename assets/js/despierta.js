 			// ===== Scroll to Top ====
              $('#btn-subir').click(function() {      // When arrow is clicked
                  $('body,html').animate({
                      scrollTop : 0                       // Scroll to top of body
                  }, 500);
              });


$('#slider-top').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
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

$('#slider-historias').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: false,
    autoplay: false,
    responsive:{
        0:{
            items:1
        },
        991:{
            items:3
        },
        1024:{
            items:3
        }
    }
})
