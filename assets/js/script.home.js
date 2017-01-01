jQuery(document).ready(function(){

    var c = 0
    jQuery('#homepanel .item').each(function(){
        jQuery(this).addClass('animate'+c+' bounceInUp');
        c++;
    });

    // Tooltip
    jQuery('.im-inner a').tooltip();

    // Photo grid hover
    jQuery('#homepanel .item').hover(function(){
        if (Modernizr.csstransitions) {
            jQuery(this).find('.itemcontent').addClass('animate0 fadeInDown').show();
            jQuery(this).find('.itemmeta').addClass('animate0 fadeInUp').show();
        } else {
            jQuery(this).find('.itemcontent').fadeIn();
            jQuery(this).find('.itemmeta').slideDown();
        }
    },function(){
        jQuery(this).find('.itemcontent').removeClass('animate0 fadeInDown').fadeOut();
        jQuery(this).find('.itemmeta').removeClass('animate0 fadeInUp').fadeOut();
    });

    // Item details view
    jQuery('.itemview').click(function() {

        jQuery('<div id="itemdetails" class="itemdetails"></div>').insertAfter('.leftpanel');
        jQuery('#itemdetails').hide().fadeIn();
        var url = jQuery(this).attr('href');
        jQuery.post(url,function(data){
            jQuery('#itemdetails').append(data);
            if(jQuery(window).width() <= 768) {
                jQuery('.mainpanel').hide();
                if(jQuery('.leftpanel').is(':visible'))
                    jQuery('.leftpanel').hide();
            }
        });

        return false;
    });

    jQuery('.itemdetails .close').live('click',function() {
        jQuery('.itemdetails').fadeOut(function(){
            jQuery(this).remove();
            if(jQuery(window).width() <= 768)
                jQuery('.mainpanel').show();
        });
        return false;
    });

    jQuery('.prev').live('click',function(){
        var url = jQuery(this).attr('href');
        jQuery.post(url,function(data){
            jQuery('#itemdetails').html(data);
        });
        return false;
    });

    jQuery('.next').live('click',function(){
        var url = jQuery(this).attr('href');
        jQuery.post(url,function(data){
            jQuery('#itemdetails').html(data);
        });
        return false;
    });

});