jQuery(document).ready(function(){
	
    jQuery('#portfolio').isotope({
	itemSelector : 'li',
	layoutMode : 'fitRows'
    });
	
    // Portfolio Filter
    jQuery('#portfoliofilter a').click(function(){
	    
	var filter = (jQuery(this).attr('href') != 'all')? '.'+jQuery(this).attr('href') : '*';
	jQuery('#portfolio').isotope({ filter: filter });
	    
	jQuery('#portfoliofilter li').removeClass('current');
	jQuery(this).parent().addClass('current');
	    
	return false;
    });
    
    // Tooltip
    if(jQuery('.share').length > 0)
	jQuery('.share a').tooltip();

}); 