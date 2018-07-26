jQuery(document).ready(function( $ ) {
      $('.slides').slick({
        dots: true,
        nextArrow: '<button type="button" class="slick-next">&#x203a;</button>',
        prevArrow: '<button type="button" class="slick-prev">&#x2039;</button>',

      });


      $('.main-navigation').click(function() {
      	if($(this).hasClass('toggled-on')) {
      		$("html").addClass("menu-open");
      		$(".menu-toggle").html('<svg class="icon icon-bars" aria-hidden="true" role="img"> <use href="#icon-bars" xlink:href="#icon-bars"></use> </svg><svg class="icon icon-close" aria-hidden="true" role="img"> <use href="#icon-close" xlink:href="#icon-close"></use> </svg> Close');
      	} else {
      		$("html").removeClass("menu-open");
      		$(".menu-toggle").html('<svg class="icon icon-bars" aria-hidden="true" role="img"> <use href="#icon-bars" xlink:href="#icon-bars"></use> </svg><svg class="icon icon-close" aria-hidden="true" role="img"> <use href="#icon-close" xlink:href="#icon-close"></use> </svg> Menu');
      	}
      });

    });