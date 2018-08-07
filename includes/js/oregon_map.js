jQuery(document).ready(function($) {
    $('[data-toggle="popover"]').popover({
	    delay: 100, 
	    container: 'body',
	    html: true,
	    trigger: 'click',
	    placement: 'auto'
    });   

    $('.pop').on('inserted.bs.popover', function () {
	    $('#videoModal' + ' iframe').attr('src', $(this).attr('data-video'));
	});

    jQuery("body").on("click touchstart", '.pop', function() {
	    $(this).popover();
	        $('.pop').not(this).popover("hide"); // hide other popovers
	        return false;
	    });
	    jQuery("body").on("click touchstart", function() {
	        $('.pop').popover("hide"); // hide all popovers when clicked on body
    	});
		$('#videoModal').on('show.bs.modal', function(e) {
			var link = $(e.relatedTarget);
			var linkClass = link.attr('class');
			if (linkClass == 'pop-legend') {
				var url = link.data('video');
				$('#videoModal' + ' iframe').attr('src', url);
			}		
		});

	$('#videoModal').on('hide.bs.modal', function () {
		$('#videoModal' + ' iframe').attr('src', '');
	});

	$('#collapseOne').on('show.bs.collapse', function () {
		$('body').find('#caret-' + this.id).removeClass('fa-caret-right');
		$('body').find('#caret-' + this.id).addClass('fa-caret-down');
	});
	
	$('#collapseOne').on('hide.bs.collapse', function () {
		$('body').find('#caret-' + this.id).removeClass('fa-caret-down');
		$('body').find('#caret-' + this.id).addClass('fa-caret-right');
	});
});
