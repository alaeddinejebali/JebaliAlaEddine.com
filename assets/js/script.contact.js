jQuery(document).ready(function(){
    // google map
    if(jQuery('#map_canvas').length > 0) {
        jQuery('#map_canvas').gmap({'center': '35.8333333333, 10.6333333333', 'zoom': 12, 'disableDefaultUI':true, 'callback': function() {
            var self = this;
            self.addMarker({'position': this.get('map').getCenter() }).click(function() {
                self.openInfoWindow({ 'content': 'Sousse Corniche' }, this);
            });
        }});
    }

    // form validation
    var validFields = {
        name: false,
        email: false,
        subject: false,
        message: false
    };
    function isEmpty(element){
        console.log( 'value = ' + jQuery(element).val() );
        if( '' ===  jQuery(element).val()  ) return true;
        return false;
    }
    function isValidEmailAddress(email){
        var pattern = new RegExp(/^((([a-z]|\d|[!#\jQuery%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\jQuery%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?jQuery/i);
        return pattern.test(email);
    }
    function checkValidity(field) {
        var dataName = jQuery(field).data('name');
        if (isEmpty(field)) {
            console.log(dataName + '---> empty');
            validFields[dataName] = false;
            //jQuery( jQuery(field).attr('id') ).closest('.one_half').find('.formFieldError').html(jQuery(field).data('typeMsgRequired'));
            jQuery('.formFieldError').html(jQuery(field).data('typeMsgRequired'));
        }else{
            validFields[dataName] = true;
            jQuery( jQuery(field).attr('id') ).closest('.one_half').find('.formFieldError').html('');
        }
    }
    jQuery("#contactForm input, #contactForm textarea").on('keyup', function(){
        console.log('Need check');
        checkValidity(this);
    });
    jQuery('#contactForm').click(function(){
        checkValidity( jQuery('#contactName') );
        checkValidity( jQuery('#contactEmail') );
        checkValidity( jQuery('#contactSubject') );
        checkValidity( jQuery('#contactMessage') );
        if( validFields.name && validFields.email && validFields.subject && validFields.message ){
            if( 'contactSubmit' === jQuery(this).attr('id') ){
                alert('Thank you for your message');
            }
        }
    });

});