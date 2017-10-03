(function ($) {
  Drupal.behaviors.nisaSortActive = {
    attach: function () {
      $('.related-information .bef-select-as-links .form-type-bef-link:has(.active)').addClass('highlight');
    }
  };
  /*Drupal.behaviors.nisaGray = {
  	attach: function() {
  		$('.pane-menus .views-row a').hover(
  			function() {
  				$(this).find('.menu-image').toggleClass('grayscale');
  			}, function() {
  				$(this).find('.menu-image').toggleClass('grayscale');
  			}
  		);
  	}
  };*/
})(jQuery);
