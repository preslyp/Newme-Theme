(function($) {
	
	$(document).on('click', '.open-search > a', function(event) {
		event.preventDefault();
		//console.log('CLICKED ON THE OPEN SEARCH');

		$('.search-form-container').slideToggle(300);
	});
	
})( jQuery ); //https://digwp.com/2011/09/using-instead-of-jquery-in-wordpress/