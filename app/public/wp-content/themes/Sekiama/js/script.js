jQuery(document).ready(function($) {

    //Menu responsive

    jQuery('.mobile-btn').click(function () {
        jQuery('.nav__links,.mobile-btn').toggleClass('mobile-active');
        // jQuery('.nav__links li a').click(function () {
        //     jQuery('.nav__links,.mobile-btn').removeClass('mobile-active');
        // });
    });

    jQuery(' .nav__links li.menu-item-has-children > a ').click(function (e) {
      e.preventDefault();
      jQuery(this).parent().toggleClass('open');
    
  });

  
    //Modal

    jQuery('.btn-modal').click(function () {
        jQuery('.modal').css('display', 'block');
        jQuery('.modal .x').click(function () {
            jQuery('.modal').css('display', 'none');
        });
    });
	
	   // slick slide

      (function() {
            jQuery('.slider-arrows-3').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: false,
                dots: false,
                arrows: true,
                autoplaySpeed: 2000,
                responsive: [
                    {	
                       breakpoint: 786,
						settings: {
						  slidesToShow: 1,
						  slidesToScroll: 1,
						  }
			 		},

                  ]
            });
        }
      )();

      (function() {
        jQuery('.slider-arrows-2').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: false,
            dots: false,
            arrows: true,
            autoplaySpeed: 2000,
             responsive: [
                    {	
                       breakpoint: 786,
						settings: {
						  slidesToShow: 1,
						  slidesToScroll: 1,
						  }
			 		},

                  ]
        });
    }
  )();

  (function() {
    jQuery('.slider-dots-1').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        dots: true,
        arrows: false,
        autoplaySpeed: 2000,
        responsive: [
            {
              breakpoint: 1069,
              settings: {
                dots: true,
            arrows: false,
              }
            },
           

          ]
    });
}
)();

      
	   

    //Tabs
    (function() {
        jQuery('.tab [data-group]').each(function() {
            var $allTarget = jQuery(this).find('[data-target]')
              , $allClick = jQuery(this).find('[data-click]')
              , classActive = 'active';
            $allClick.click(function(e) {
                e.preventDefault();
                var idTab = jQuery(this).data('click')
                  , $target = jQuery('[data-target ="' + idTab + '" ]');
                if ($target.hasClass(classActive)) {
                    $target.removeClass(classActive);
                    jQuery(this).removeClass(classActive);
                    return;
                } else {
                    $allTarget.removeClass(classActive);
                    $allClick.removeClass(classActive);
                }
                $target.addClass(classActive);
                jQuery(this).addClass(classActive);
            });
        });
    }
    )();

 


    jQuery('.btn-modal').click(function () {
       var url = Math.floor(Math.random() * 10 + 1);
        return url
    });
    
    // Modal
    jQuery('.modal .x').click(function () {
        jQuery('.modal').fadeOut(100);
    });

    jQuery('.modal .bg').click(function () {
        jQuery('.modal').fadeOut(100);
    });



    //Estados do Brasil
      //Norte
      jQuery("#amazonas").click(function(){
        jQuery("#am").show();
        jQuery("#pa").hide();
        jQuery("#to").hide();
        jQuery("#ac").hide();
        jQuery("#ro").hide();
        jQuery("#rr").hide();
        jQuery("#ap").hide();

        jQuery("#sp").hide();
        jQuery("#mg").hide();
        jQuery("#rj").hide();
        jQuery("#es").hide();

        jQuery("#ma").hide();
        jQuery("#pi").hide();
        jQuery("#ce").hide();
        jQuery("#rn").hide();
        jQuery("#pb").hide();
        jQuery("#pe").hide();
        jQuery("#al").hide();
        jQuery("#se").hide();
        jQuery("#ba").hide();

        jQuery("#mt").hide();
        jQuery("#ms").hide();
        jQuery("#go").hide();
        jQuery("#df").hide();

        jQuery("#pr").hide();
        jQuery("#sc").hide();
        jQuery("#rs").hide();
      });	

      jQuery("#para").click(function(){
        jQuery("#pa").show();
        jQuery("#am").hide();
        jQuery("#to").hide();
        jQuery("#ac").hide();
        jQuery("#ro").hide();
        jQuery("#rr").hide();
        jQuery("#ap").hide();

        jQuery("#sp").hide();
        jQuery("#mg").hide();
        jQuery("#rj").hide();
        jQuery("#es").hide();

        jQuery("#ma").hide();
        jQuery("#pi").hide();
        jQuery("#ce").hide();
        jQuery("#rn").hide();
        jQuery("#pb").hide();
        jQuery("#pe").hide();
        jQuery("#al").hide();
        jQuery("#se").hide();
        jQuery("#ba").hide();

        jQuery("#mt").hide();
        jQuery("#ms").hide();
        jQuery("#go").hide();
        jQuery("#df").hide();

        jQuery("#pr").hide();
        jQuery("#sc").hide();
        jQuery("#rs").hide();
      });	

      jQuery("#tocantins").click(function(){
        jQuery("#to").show();
        jQuery("#pa").hide();
        jQuery("#am").hide();
        jQuery("#ac").hide();
        jQuery("#ro").hide();
        jQuery("#rr").hide();
        jQuery("#ap").hide();

        jQuery("#ma").hide();
        jQuery("#pi").hide();
        jQuery("#ce").hide();
        jQuery("#rn").hide();
        jQuery("#pb").hide();
        jQuery("#pe").hide();
        jQuery("#al").hide();
        jQuery("#se").hide();
        jQuery("#ba").hide();

        jQuery("#sp").hide();
        jQuery("#mg").hide();
        jQuery("#rj").hide();
        jQuery("#es").hide();

        jQuery("#mt").hide();
        jQuery("#ms").hide();
        jQuery("#go").hide();
        jQuery("#df").hide();

        jQuery("#pr").hide();
        jQuery("#sc").hide();
        jQuery("#rs").hide();
      });	

      jQuery("#acre").click(function(){
        jQuery("#ac").show();
        jQuery("#pa").hide();
        jQuery("#to").hide();
        jQuery("#am").hide();
        jQuery("#ro").hide();
        jQuery("#rr").hide();
        jQuery("#ap").hide();

        jQuery("#sp").hide();
        jQuery("#mg").hide();
        jQuery("#rj").hide();
        jQuery("#es").hide();

        jQuery("#ma").hide();
        jQuery("#pi").hide();
        jQuery("#ce").hide();
        jQuery("#rn").hide();
        jQuery("#pb").hide();
        jQuery("#pe").hide();
        jQuery("#al").hide();
        jQuery("#se").hide();
        jQuery("#ba").hide();

        jQuery("#mt").hide();
        jQuery("#ms").hide();
        jQuery("#go").hide();
        jQuery("#df").hide();

        jQuery("#pr").hide();
        jQuery("#sc").hide();
        jQuery("#rs").hide();
      });	

      jQuery("#rondonia").click(function(){
        jQuery("#ro").show();
        jQuery("#pa").hide();
        jQuery("#to").hide();
        jQuery("#ac").hide();
        jQuery("#am").hide();
        jQuery("#rr").hide();
        jQuery("#ap").hide();

        jQuery("#sp").hide();
        jQuery("#mg").hide();
        jQuery("#rj").hide();
        jQuery("#es").hide();

        jQuery("#ma").hide();
        jQuery("#pi").hide();
        jQuery("#ce").hide();
        jQuery("#rn").hide();
        jQuery("#pb").hide();
        jQuery("#pe").hide();
        jQuery("#al").hide();
        jQuery("#se").hide();
        jQuery("#ba").hide();

        jQuery("#mt").hide();
        jQuery("#ms").hide();
        jQuery("#go").hide();
        jQuery("#df").hide();

        jQuery("#pr").hide();
        jQuery("#sc").hide();
        jQuery("#rs").hide();
      });	

      jQuery("#roraima").click(function(){
        jQuery("#rr").show();
        jQuery("#pa").hide();
        jQuery("#to").hide();
        jQuery("#ac").hide();
        jQuery("#ro").hide();
        jQuery("#am").hide();
        jQuery("#ap").hide();

        jQuery("#sp").hide();
        jQuery("#mg").hide();
        jQuery("#rj").hide();
        jQuery("#es").hide();

        jQuery("#ma").hide();
        jQuery("#pi").hide();
        jQuery("#ce").hide();
        jQuery("#rn").hide();
        jQuery("#pb").hide();
        jQuery("#pe").hide();
        jQuery("#al").hide();
        jQuery("#se").hide();
        jQuery("#ba").hide();

        jQuery("#mt").hide();
        jQuery("#ms").hide();
        jQuery("#go").hide();
        jQuery("#df").hide();

        jQuery("#pr").hide();
        jQuery("#sc").hide();
        jQuery("#rs").hide();
      });

      jQuery("#amapa").click(function(){
        jQuery("#ap").show();
        jQuery("#pa").hide();
        jQuery("#to").hide();
        jQuery("#ac").hide();
        jQuery("#ro").hide();
        jQuery("#rr").hide();
        jQuery("#am").hide();

        jQuery("#sp").hide();
        jQuery("#mg").hide();
        jQuery("#rj").hide();
        jQuery("#es").hide();

        jQuery("#ma").hide();
        jQuery("#pi").hide();
        jQuery("#ce").hide();
        jQuery("#rn").hide();
        jQuery("#pb").hide();
        jQuery("#pe").hide();
        jQuery("#al").hide();
        jQuery("#se").hide();
        jQuery("#ba").hide();

        jQuery("#mt").hide();
        jQuery("#ms").hide();
        jQuery("#go").hide();
        jQuery("#df").hide();

        jQuery("#pr").hide();
        jQuery("#sc").hide();
        jQuery("#rs").hide();
      });	

      //Sudeste
        jQuery("#saopaulo").click(function(){
          jQuery("#sp").show();
          jQuery("#mg").hide();
          jQuery("#rj").hide();
          jQuery("#es").hide();

          jQuery("#ap").hide();
          jQuery("#pa").hide();
          jQuery("#to").hide();
          jQuery("#ac").hide();
          jQuery("#ro").hide();
          jQuery("#rr").hide();
          jQuery("#am").hide();

          jQuery("#ma").hide();
          jQuery("#pi").hide();
          jQuery("#ce").hide();
          jQuery("#rn").hide();
          jQuery("#pb").hide();
          jQuery("#pe").hide();
          jQuery("#al").hide();
          jQuery("#se").hide();
          jQuery("#ba").hide();

          jQuery("#mt").hide();
          jQuery("#ms").hide();
          jQuery("#go").hide();
          jQuery("#df").hide();

          jQuery("#pr").hide();
          jQuery("#sc").hide();
          jQuery("#rs").hide();
        });	
        jQuery("#minasgerais").click(function(){
          jQuery("#mg").show();
          jQuery("#sp").hide();
          jQuery("#rj").hide();
          jQuery("#es").hide();

          jQuery("#ap").hide();
          jQuery("#pa").hide();
          jQuery("#to").hide();
          jQuery("#ac").hide();
          jQuery("#ro").hide();
          jQuery("#rr").hide();
          jQuery("#am").hide();

          jQuery("#ma").hide();
          jQuery("#pi").hide();
          jQuery("#ce").hide();
          jQuery("#rn").hide();
          jQuery("#pb").hide();
          jQuery("#pe").hide();
          jQuery("#al").hide();
          jQuery("#se").hide();
          jQuery("#ba").hide();

          jQuery("#mt").hide();
          jQuery("#ms").hide();
          jQuery("#go").hide();
          jQuery("#df").hide();

          jQuery("#pr").hide();
          jQuery("#sc").hide();
          jQuery("#rs").hide();
        });	
        jQuery("#riodejaneiro").click(function(){
          jQuery("#rj").show();
          jQuery("#mg").hide();
          jQuery("#sp").hide();
          jQuery("#es").hide();

          jQuery("#ap").hide();
          jQuery("#pa").hide();
          jQuery("#to").hide();
          jQuery("#ac").hide();
          jQuery("#ro").hide();
          jQuery("#rr").hide();
          jQuery("#am").hide();

          jQuery("#ma").hide();
          jQuery("#pi").hide();
          jQuery("#ce").hide();
          jQuery("#rn").hide();
          jQuery("#pb").hide();
          jQuery("#pe").hide();
          jQuery("#al").hide();
          jQuery("#se").hide();
          jQuery("#ba").hide();

          jQuery("#mt").hide();
          jQuery("#ms").hide();
          jQuery("#go").hide();
          jQuery("#df").hide();

          jQuery("#pr").hide();
          jQuery("#sc").hide();
          jQuery("#rs").hide();
        });	
        jQuery("#espiritosanto").click(function(){
          jQuery("#es").show();
          jQuery("#mg").hide();
          jQuery("#sp").hide();
          jQuery("#rj").hide();

          jQuery("#ap").hide();
          jQuery("#pa").hide();
          jQuery("#to").hide();
          jQuery("#ac").hide();
          jQuery("#ro").hide();
          jQuery("#rr").hide();
          jQuery("#am").hide();

          jQuery("#ma").hide();
          jQuery("#pi").hide();
          jQuery("#ce").hide();
          jQuery("#rn").hide();
          jQuery("#pb").hide();
          jQuery("#pe").hide();
          jQuery("#al").hide();
          jQuery("#se").hide();
          jQuery("#ba").hide();

          jQuery("#mt").hide();
          jQuery("#ms").hide();
          jQuery("#go").hide();
          jQuery("#df").hide();

          jQuery("#pr").hide();
          jQuery("#sc").hide();
          jQuery("#rs").hide();
        });

      //Nordeste
      jQuery("#maranhao").click(function(){
        jQuery("#ma").show();
        jQuery("#pi").hide();
        jQuery("#ce").hide();
        jQuery("#rn").hide();
        jQuery("#pb").hide();
        jQuery("#pe").hide();
        jQuery("#al").hide();
        jQuery("#se").hide();
        jQuery("#ba").hide();

        jQuery("#mt").hide();
        jQuery("#ms").hide();
        jQuery("#go").hide();
        jQuery("#df").hide();

        jQuery("#pr").hide();
        jQuery("#sc").hide();
        jQuery("#rs").hide();

        jQuery("#am").hide();
        jQuery("#pa").hide();
        jQuery("#to").hide();
        jQuery("#ac").hide();
        jQuery("#ro").hide();
        jQuery("#rr").hide();
        jQuery("#ap").hide();

        jQuery("#sp").hide();
        jQuery("#mg").hide();
        jQuery("#rj").hide();
        jQuery("#es").hide();

      });
      jQuery("#piaui").click(function(){
        jQuery("#pi").show();
        jQuery("#ma").hide();
        jQuery("#ce").hide();
        jQuery("#rn").hide();
        jQuery("#pb").hide();
        jQuery("#pe").hide();
        jQuery("#al").hide();
        jQuery("#se").hide();
        jQuery("#ba").hide();

        jQuery("#mt").hide();
        jQuery("#ms").hide();
        jQuery("#go").hide();
        jQuery("#df").hide();

        jQuery("#pr").hide();
        jQuery("#sc").hide();
        jQuery("#rs").hide();

        jQuery("#am").hide();
        jQuery("#pa").hide();
        jQuery("#to").hide();
        jQuery("#ac").hide();
        jQuery("#ro").hide();
        jQuery("#rr").hide();
        jQuery("#ap").hide();

        jQuery("#sp").hide();
        jQuery("#mg").hide();
        jQuery("#rj").hide();
        jQuery("#es").hide();

      });
      jQuery("#ceara").click(function(){
        jQuery("#ce").show();
        jQuery("#pi").hide();
        jQuery("#ma").hide();
        jQuery("#rn").hide();
        jQuery("#pb").hide();
        jQuery("#pe").hide();
        jQuery("#al").hide();
        jQuery("#se").hide();
        jQuery("#ba").hide();

        jQuery("#mt").hide();
        jQuery("#ms").hide();
        jQuery("#go").hide();
        jQuery("#df").hide();

        jQuery("#pr").hide();
        jQuery("#sc").hide();
        jQuery("#rs").hide();

        jQuery("#am").hide();
        jQuery("#pa").hide();
        jQuery("#to").hide();
        jQuery("#ac").hide();
        jQuery("#ro").hide();
        jQuery("#rr").hide();
        jQuery("#ap").hide();

        jQuery("#sp").hide();
        jQuery("#mg").hide();
        jQuery("#rj").hide();
        jQuery("#es").hide();

      });
      jQuery("#riograndedonorte").click(function(){
        jQuery("#rn").show();
        jQuery("#pi").hide();
        jQuery("#ce").hide();
        jQuery("#ma").hide();
        jQuery("#pb").hide();
        jQuery("#pe").hide();
        jQuery("#al").hide();
        jQuery("#se").hide();
        jQuery("#ba").hide();

        jQuery("#mt").hide();
        jQuery("#ms").hide();
        jQuery("#go").hide();
        jQuery("#df").hide();

        jQuery("#pr").hide();
        jQuery("#sc").hide();
        jQuery("#rs").hide();

        jQuery("#am").hide();
        jQuery("#pa").hide();
        jQuery("#to").hide();
        jQuery("#ac").hide();
        jQuery("#ro").hide();
        jQuery("#rr").hide();
        jQuery("#ap").hide();

        jQuery("#sp").hide();
        jQuery("#mg").hide();
        jQuery("#rj").hide();
        jQuery("#es").hide();

      });
      jQuery("#paraiba").click(function(){
        jQuery("#pb").show();
        jQuery("#pi").hide();
        jQuery("#ce").hide();
        jQuery("#rn").hide();
        jQuery("#ma").hide();
        jQuery("#pe").hide();
        jQuery("#al").hide();
        jQuery("#se").hide();
        jQuery("#ba").hide();

        jQuery("#mt").hide();
        jQuery("#ms").hide();
        jQuery("#go").hide();
        jQuery("#df").hide();

        jQuery("#pr").hide();
        jQuery("#sc").hide();
        jQuery("#rs").hide();

        jQuery("#am").hide();
        jQuery("#pa").hide();
        jQuery("#to").hide();
        jQuery("#ac").hide();
        jQuery("#ro").hide();
        jQuery("#rr").hide();
        jQuery("#ap").hide();

        jQuery("#sp").hide();
        jQuery("#mg").hide();
        jQuery("#rj").hide();
        jQuery("#es").hide();

      });
      jQuery("#pernambuco").click(function(){
        jQuery("#pe").show();
        jQuery("#pi").hide();
        jQuery("#ce").hide();
        jQuery("#rn").hide();
        jQuery("#pb").hide();
        jQuery("#ma").hide();
        jQuery("#al").hide();
        jQuery("#se").hide();
        jQuery("#ba").hide();

        jQuery("#mt").hide();
        jQuery("#ms").hide();
        jQuery("#go").hide();
        jQuery("#df").hide();

        jQuery("#pr").hide();
        jQuery("#sc").hide();
        jQuery("#rs").hide();

        jQuery("#am").hide();
        jQuery("#pa").hide();
        jQuery("#to").hide();
        jQuery("#ac").hide();
        jQuery("#ro").hide();
        jQuery("#rr").hide();
        jQuery("#ap").hide();

        jQuery("#sp").hide();
        jQuery("#mg").hide();
        jQuery("#rj").hide();
        jQuery("#es").hide();

      });
      jQuery("#alagoas").click(function(){
        jQuery("#al").show();
        jQuery("#pi").hide();
        jQuery("#ce").hide();
        jQuery("#rn").hide();
        jQuery("#pb").hide();
        jQuery("#pe").hide();
        jQuery("#ma").hide();
        jQuery("#se").hide();
        jQuery("#ba").hide();

        jQuery("#mt").hide();
        jQuery("#ms").hide();
        jQuery("#go").hide();
        jQuery("#df").hide();

        jQuery("#pr").hide();
        jQuery("#sc").hide();
        jQuery("#rs").hide();

        jQuery("#am").hide();
        jQuery("#pa").hide();
        jQuery("#to").hide();
        jQuery("#ac").hide();
        jQuery("#ro").hide();
        jQuery("#rr").hide();
        jQuery("#ap").hide();

        jQuery("#sp").hide();
        jQuery("#mg").hide();
        jQuery("#rj").hide();
        jQuery("#es").hide();

      });
      jQuery("#sergipe").click(function(){
        jQuery("#se").show();
        jQuery("#pi").hide();
        jQuery("#ce").hide();
        jQuery("#rn").hide();
        jQuery("#pb").hide();
        jQuery("#pe").hide();
        jQuery("#al").hide();
        jQuery("#ma").hide();
        jQuery("#ba").hide();

        jQuery("#mt").hide();
        jQuery("#ms").hide();
        jQuery("#go").hide();
        jQuery("#df").hide();

        jQuery("#pr").hide();
        jQuery("#sc").hide();
        jQuery("#rs").hide();

        jQuery("#am").hide();
        jQuery("#pa").hide();
        jQuery("#to").hide();
        jQuery("#ac").hide();
        jQuery("#ro").hide();
        jQuery("#rr").hide();
        jQuery("#ap").hide();

        jQuery("#sp").hide();
        jQuery("#mg").hide();
        jQuery("#rj").hide();
        jQuery("#es").hide();

      });
      jQuery("#bahia").click(function(){
        jQuery("#ba").show();
        jQuery("#pi").hide();
        jQuery("#ce").hide();
        jQuery("#rn").hide();
        jQuery("#pb").hide();
        jQuery("#pe").hide();
        jQuery("#al").hide();
        jQuery("#se").hide();
        jQuery("#ma").hide();

        jQuery("#mt").hide();
        jQuery("#ms").hide();
        jQuery("#go").hide();
        jQuery("#df").hide();

        jQuery("#pr").hide();
        jQuery("#sc").hide();
        jQuery("#rs").hide();

        jQuery("#am").hide();
        jQuery("#pa").hide();
        jQuery("#to").hide();
        jQuery("#ac").hide();
        jQuery("#ro").hide();
        jQuery("#rr").hide();
        jQuery("#ap").hide();

        jQuery("#sp").hide();
        jQuery("#mg").hide();
        jQuery("#rj").hide();
        jQuery("#es").hide();

      });

    //Centro-Oeste
      jQuery("#matogrosso").click(function(){
        jQuery("#mt").show();
        jQuery("#ms").hide();
        jQuery("#go").hide();
        jQuery("#df").hide();

        jQuery("#pr").hide();
        jQuery("#sc").hide();
        jQuery("#rs").hide();

        jQuery("#am").hide();
        jQuery("#pa").hide();
        jQuery("#to").hide();
        jQuery("#ac").hide();
        jQuery("#ro").hide();
        jQuery("#rr").hide();
        jQuery("#ap").hide();

        jQuery("#sp").hide();
        jQuery("#mg").hide();
        jQuery("#rj").hide();
        jQuery("#es").hide();

        jQuery("#ma").hide();
        jQuery("#pi").hide();
        jQuery("#ce").hide();
        jQuery("#rn").hide();
        jQuery("#pb").hide();
        jQuery("#pe").hide();
        jQuery("#al").hide();
        jQuery("#se").hide();
        jQuery("#ba").hide();
      });
      jQuery("#mattogrossodosul").click(function(){
        jQuery("#ms").show();
        jQuery("#mt").hide();
        jQuery("#go").hide();
        jQuery("#df").hide();

        jQuery("#pr").hide();
        jQuery("#sc").hide();
        jQuery("#rs").hide();

        jQuery("#am").hide();
        jQuery("#pa").hide();
        jQuery("#to").hide();
        jQuery("#ac").hide();
        jQuery("#ro").hide();
        jQuery("#rr").hide();
        jQuery("#ap").hide();

        jQuery("#sp").hide();
        jQuery("#mg").hide();
        jQuery("#rj").hide();
        jQuery("#es").hide();

        jQuery("#ma").hide();
        jQuery("#pi").hide();
        jQuery("#ce").hide();
        jQuery("#rn").hide();
        jQuery("#pb").hide();
        jQuery("#pe").hide();
        jQuery("#al").hide();
        jQuery("#se").hide();
        jQuery("#ba").hide();
      });
      jQuery("#goias").click(function(){
        jQuery("#go").show();
        jQuery("#ms").hide();
        jQuery("#mt").hide();
        jQuery("#df").hide();

        jQuery("#pr").hide();
        jQuery("#sc").hide();
        jQuery("#rs").hide();

        jQuery("#am").hide();
        jQuery("#pa").hide();
        jQuery("#to").hide();
        jQuery("#ac").hide();
        jQuery("#ro").hide();
        jQuery("#rr").hide();
        jQuery("#ap").hide();

        jQuery("#sp").hide();
        jQuery("#mg").hide();
        jQuery("#rj").hide();
        jQuery("#es").hide();

        jQuery("#ma").hide();
        jQuery("#pi").hide();
        jQuery("#ce").hide();
        jQuery("#rn").hide();
        jQuery("#pb").hide();
        jQuery("#pe").hide();
        jQuery("#al").hide();
        jQuery("#se").hide();
        jQuery("#ba").hide();
      });
      jQuery("#distritofederal").click(function(){
        jQuery("#df").show();
        jQuery("#ms").hide();
        jQuery("#go").hide();
        jQuery("#mt").hide();

        jQuery("#pr").hide();
        jQuery("#sc").hide();
        jQuery("#rs").hide();

        jQuery("#am").hide();
        jQuery("#pa").hide();
        jQuery("#to").hide();
        jQuery("#ac").hide();
        jQuery("#ro").hide();
        jQuery("#rr").hide();
        jQuery("#ap").hide();

        jQuery("#sp").hide();
        jQuery("#mg").hide();
        jQuery("#rj").hide();
        jQuery("#es").hide();

        jQuery("#ma").hide();
        jQuery("#pi").hide();
        jQuery("#ce").hide();
        jQuery("#rn").hide();
        jQuery("#pb").hide();
        jQuery("#pe").hide();
        jQuery("#al").hide();
        jQuery("#se").hide();
        jQuery("#ba").hide();
      });

    //Sul
      jQuery("#parana").click(function(){
        jQuery("#pr").show();
        jQuery("#sc").hide();
        jQuery("#rs").hide();

        jQuery("#am").hide();
        jQuery("#pa").hide();
        jQuery("#to").hide();
        jQuery("#ac").hide();
        jQuery("#ro").hide();
        jQuery("#rr").hide();
        jQuery("#ap").hide();

        jQuery("#sp").hide();
        jQuery("#mg").hide();
        jQuery("#rj").hide();
        jQuery("#es").hide();

        jQuery("#ma").hide();
        jQuery("#pi").hide();
        jQuery("#ce").hide();
        jQuery("#rn").hide();
        jQuery("#pb").hide();
        jQuery("#pe").hide();
        jQuery("#al").hide();
        jQuery("#se").hide();
        jQuery("#ba").hide();

        jQuery("#mt").hide();
        jQuery("#ms").hide();
        jQuery("#go").hide();
        jQuery("#df").hide();
      });
      jQuery("#santacatarina").click(function(){
        jQuery("#sc").show();
        jQuery("#pr").hide();
        jQuery("#rs").hide();

        jQuery("#am").hide();
        jQuery("#pa").hide();
        jQuery("#to").hide();
        jQuery("#ac").hide();
        jQuery("#ro").hide();
        jQuery("#rr").hide();
        jQuery("#ap").hide();

        jQuery("#sp").hide();
        jQuery("#mg").hide();
        jQuery("#rj").hide();
        jQuery("#es").hide();

        jQuery("#ma").hide();
        jQuery("#pi").hide();
        jQuery("#ce").hide();
        jQuery("#rn").hide();
        jQuery("#pb").hide();
        jQuery("#pe").hide();
        jQuery("#al").hide();
        jQuery("#se").hide();
        jQuery("#ba").hide();

        jQuery("#mt").hide();
        jQuery("#ms").hide();
        jQuery("#go").hide();
        jQuery("#df").hide();
      });
      jQuery("#riograndedosul").click(function(){
        jQuery("#rs").show();
        jQuery("#pr").hide();
        jQuery("#sc").hide();

        jQuery("#am").hide();
        jQuery("#pa").hide();
        jQuery("#to").hide();
        jQuery("#ac").hide();
        jQuery("#ro").hide();
        jQuery("#rr").hide();
        jQuery("#ap").hide();

        jQuery("#sp").hide();
        jQuery("#mg").hide();
        jQuery("#rj").hide();
        jQuery("#es").hide();

        jQuery("#ma").hide();
        jQuery("#pi").hide();
        jQuery("#ce").hide();
        jQuery("#rn").hide();
        jQuery("#pb").hide();
        jQuery("#pe").hide();
        jQuery("#al").hide();
        jQuery("#se").hide();
        jQuery("#ba").hide();

        jQuery("#mt").hide();
        jQuery("#ms").hide();
        jQuery("#go").hide();
        jQuery("#df").hide();
      });
});
