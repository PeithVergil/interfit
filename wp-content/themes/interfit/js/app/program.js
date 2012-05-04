(function($) {
	$(function() {
		var $tabs = $('#tabs a');
		var $cont = $('.interfit');
		
		$('#weight').show();
		
		$tabs.click(function() {
			$tabs.removeClass('selected');
			$(this).addClass('selected');
			
			$cont.hide();
			
			var val = $(this).attr('href');
			$(val).fadeIn('slow');
			
			return false;
		});
	});
})(jQuery);