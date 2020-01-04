$(function(){
	// Open/close apartment teaser content
	$('.teaser h4').click(function(){
		var $this = $(this);
		if ($this.parent().hasClass('active')) {
			$this.parent().removeClass('active');
			$this.next().stop().slideUp();
		} else {
			$this.parent().addClass('active');
			$this.next().stop().slideDown();
		}
	});

	// Open 'More Details" of an apartment within an overlay
	$('.show-details').click(function(event){
		if ( $('body').height() < $(document).height()) {
			$('html, body').css('height', '100%');
		}
		var apartmentId = $(this).attr('href').replace('#details-', '');

		//give the apartment id to the apartment detail page
		$.ajax({
			type: "GET",
			url: "apartment-detail.php",
			data: {"id": apartmentId},
			success:function(data){
				$('#o-content').html(data);
			}
		});
		$('.overlay').fadeIn(500);
	});

	// Close the apartment overlay
	$('#o-close').click(function(event){
		$('.overlay').fadeOut(500, function(){$('html, body').css('height', 'auto');});
	});

});