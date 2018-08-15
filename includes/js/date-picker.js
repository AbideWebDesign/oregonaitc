jQuery(document).ready(function($) {
	jQuery('input').filter('.datepicker').change(function(){
		var return_date = new Date(jQuery(this).val());
		return_date.setDate(return_date.getDate()+21);
		var m = return_date.getMonth()+1;
		var d = m + '/' + return_date.getDate() + '/' + return_date.getFullYear();
		jQuery('#return-date-picker-' + jQuery(this).attr('id')).val(d);
	});
});

jQuery('input').filter('.datepicker').each(function(){
	jQuery(this).datepicker({
		format: 'm/d/yyyy',
		showOtherMonths: true,
		uiLibrary: 'bootstrap4',
		minDate: function() {
			var date = new Date();
	        date.setDate(date.getDate()+14);
	        return new Date(date.getFullYear(), date.getMonth(), date.getDate());
		},
		value: function() {
			var date = new Date();
	        date.setDate(date.getDate()+14);
	        var m = date.getMonth()+1;
			var d = m + '/' + date.getDate() + '/' + date.getFullYear();
	        return (d);
		}
	});
});