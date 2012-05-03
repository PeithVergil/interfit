(function($) {
	$(function() {
		var $items = $('div#navigation ul li');
		var $views = $('div.interfit');
		
		$('div.interfit:not(#weight)').hide();
		
		$('div#navigation ul li a').click(function(e) {
			$items.removeClass('selected');
			$views.hide();
			
			var $ln = $(this).attr('href');
			$($ln).fadeIn('slow');
			
			var $li = $(this).parent();
			$li.addClass('selected');
			
			return false;
		});
	});
})(jQuery);