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



