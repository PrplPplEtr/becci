(function ($) {

Drupal.behaviors.fusionHasJS = {
  attach: function (context, settings) {
    $('html').removeClass('no-js');
  }
};

Drupal.behaviors.fusionEqualheights = {
  attach: function (context, settings) {
    if (jQuery().equalHeights) {
      $("#header-top-wrapper div.equal-heights div.content").equalHeights();
      $("#header-group-wrapper div.equal-heights div.content").equalHeights();
      $("#preface-top-wrapper div.equal-heights div.content").equalHeights();
      $("#preface-bottom div.equal-heights div.content").equalHeights();
      $("#sidebar-first div.equal-heights div.content").equalHeights();
      $("#content-region div.equal-heights div.content").equalHeights();
      $("#node-top div.equal-heights div.content").equalHeights();
      $("#node-bottom div.equal-heights div.content").equalHeights();
      $("#sidebar-second div.equal-heights div.content").equalHeights();
      $("#postscript-top div.equal-heights div.content").equalHeights();
      $("#postscript-bottom-wrapper div.equal-heights div.content").equalHeights();
      $("#footer-wrapper div.equal-heights div.content").equalHeights();
    }
  }
};

Drupal.behaviors.fusionIE6fixes = {
  attach: function (context, settings) {
    // IE6 & less-specific functions
    // Add hover class to main menu li elements on hover
    if ($.browser.msie && ($.browser.version < 7)) {
      $('form input.form-submit').hover(function() {
        $(this).addClass('hover');
        }, function() {
          $(this).removeClass('hover');
      });
      $('#search input#search_header').hover(function() {
        $(this).addClass('hover');
        }, function() {
          $(this).removeClass('hover');
      });
    };
  }
};

Drupal.behaviors.fusionOverlabel = {
  attach: function (context, settings) {
    if (jQuery().overlabel) {
      $("div.fusion-horiz-login label").overlabel();
    }
  }
};

Drupal.behaviors.listingActions={
	attach:function(context,settings){
	$( "#block-webform-client-block-21" ).hide( ).addClass('hidden');
	$(".tell_btn,#block-webform-client-block-21 .webform-component--cancel-button input").click(function(event) {
		event.preventDefault();
		$( "#block-webform-client-block-21" ).toggle('blind');
		$( "#block-webform-client-block-22" ).hide('blind');
	});
	
	$( "#block-webform-client-block-22" ).hide( ).addClass('hidden');
	$(".info_btn,#block-webform-client-block-22 .webform-component--cancel-button input").click(function(event) {
		event.preventDefault();
		$( "#block-webform-client-block-22" ).toggle('blind');
		$( "#block-webform-client-block-21" ).hide('blind');
	});
	}
};

})(jQuery);