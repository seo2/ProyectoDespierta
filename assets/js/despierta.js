/*text area counter*/
function textCounter( field, countfield, maxlimit ) {
 if ( field.value.length > maxlimit ) {
  field.value = field.value.substring( 0, maxlimit );
  field.blur();
  field.focus();
  return false;
 } else {
  countfield.value = maxlimit - field.value.length;
 }
}



 			// ===== Scroll to Top ====
              $('#btn-subir').click(function() {      // When arrow is clicked
                  $('body,html').animate({
                      scrollTop : 0                       // Scroll to top of body
                  }, 500);
              });


$('.slider-desktop').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay: true,
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

$('.slider-galeria').owlCarousel({
    loop: $(this).find('.owl-carousel .item').size() > 1,
    margin:10,
    nav:true,
    autoplay: true,
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


// $('#slider-principal-xs').owlCarousel({
//     loop:false,
//     margin:10,
//     nav:false,
//     responsive:{
//         0:{
//             items:1
//         },
//         600:{
//             items:1
//         },
//         1000:{
//             items:1
//         }
//     }
// })



$('#slider-historias').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    dots: false,
    autoplay: false,
    responsive:{
        0:{
            items:1
        },
        991:{
            items:2
        },
        1024:{
            items:2
        }
    }
})

// ===== smooth scroll to section====

              $(function() {
                $('a[href*="#"]:not([href="#"])').click(function() {
                  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                      $('html, body').animate({
                        scrollTop: target.offset().top-110
                      }, 1000);
                      return false;
                    }
                  }
                });
              });

              // Highlight current page menu item as user scrolls
var lastId,
    pageMenu = $(".nav"),
    pageMenuHeight = pageMenu.outerHeight() + 126,
    // All list items
    menuItems = pageMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+pageMenuHeight;

   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";

   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#"+id+"]").parent().addClass("active");
   }
});


/*modal para los videos videos*/

$(".video").click(function () {
  var theModal = $(this).data("target"),
  videoSRC = $(this).attr("data-video"),
  videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=1&showinfo=0&html5=1&autoplay=1";
  $(theModal + ' iframe').attr('src', videoSRCauto);
  $(theModal + ' button.close').click(function () {
    $(theModal + ' iframe').attr('src', videoSRC);
  });
  $(theModal).on('hidden.bs.modal', function (e) {
    $(theModal + ' iframe').attr('src', videoSRC);
  });
});



(function($) {

	var v = $("#formParticipa").validate({
			rules: {
            'agree': {
                required: true
                }
	        },
	        messages: {
	            'agree': {
	                required: "Para poder enviar tu historia, debes aceptar los Términos y Condiciones"
	            }
	        },
			submitHandler: function(form) {
				$(form).ajaxSubmit({
					beforeSubmit: function() {
						$(".loading").fadeIn();
					},
					 success:    function(data) {

					 	$(".loading").fadeOut();
				        console.log(data);
				        if(data == "error"){
				        	$("#success").html('<div class="alert alert-danger">Ha ocurrido un error. Vuelve a intentarlo más tarde.</div>');
				        }else if(data == "ok"){
				        	$("#success").html('<div class="alert alert-success">Gracias, los datos han sido enviados con éxito.</div>');
				        	v.resetForm();

				        	setTimeout(function(){ $('.alert-success').fadeOut() }, 3000);
				        }else if(data == "existe"){
				        	$("#success").html('<div class="alert alert-warning">Registro ya existe.</div>');
				        }
				    }
				});
			}
	});

	jQuery.validator.addMethod("rut", function(value, element) {
	  return this.optional(element) || $.Rut.validar(value);
	}, "Debe ser un rut valido.");

	$('.rut').Rut({validation: false});

		$("#reset").click(function() {
			v.resetForm();
		});



})(jQuery); // End of use strict
