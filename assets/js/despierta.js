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

	// $(function() {
	// $('a[href*="#"]:not([href="#"]):not(a.no-scroll):not(a.icon-wrapper.no-scroll)').click(function() {
	//   if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	//     var target = $(this.hash);
	//     target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	//     if (target.length) {
	//       $('html, body').animate({
	//         scrollTop: target.offset().top-110
	//       }, 1000);
	//       return false;
	//     }
	//   }
	// });
	// });

	//This is a functions that scrolls to #{blah}link
	function goToByScroll(id){
	    // Remove "link" from the ID
	    id = id.replace("link", "");
	    if(history.pushState) {
	        history.pushState(null, null, '#'+id);
	    }
	    else {
	        location.hash = '#'+id;
	    }
	      // Scroll
	    $('html,body').animate({
	        scrollTop: $("#"+id).offset().top-110},
	        'slow');
	}

	$("a.scroll-to").click(function(e) {
	     // Prevent a page reload when a link is pressed
	    e.preventDefault();
	      // Call the scroll function
	  	 goToByScroll(this.id);
	});



/*modal para los videos videos*/

$(".video").click(function () {
  var theModal = $(this).data("target"),
  videoSRC = $(this).attr("data-video"),
  videoSRCauto = videoSRC + "?autoplay=1&color=17376e&title=0&byline=0&portrait=0";
  $(theModal + ' iframe').attr('src', videoSRCauto);
  $(theModal + ' button.close').click(function () {
    $(theModal + ' iframe').attr('src', videoSRC);
  });
  $(theModal).on('hidden.bs.modal', function (e) {
    $(theModal + ' iframe').attr('src', videoSRC);
  });
});



(function($) {

	$('#phone').mask('0 0000 0000');

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
