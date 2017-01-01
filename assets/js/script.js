jQuery(document).ready(function(){

  jQuery('pre code').each(function(i, block) {
    hljs.highlightBlock(block);
  });




    jQuery("#btnShowHideAllArticles").click(function(){
		var articleVisibility = jQuery(this).data("articleVisibility");
		if('off'==articleVisibility){
			jQuery(this).data("articleVisibility", 'on');
			jQuery(this).removeClass('iconfa-plus-sign');
			jQuery(this).addClass('iconfa-minus-sign');
        	jQuery('.wiki-article-body').removeClass('invisible');
			jQuery('.wiki-article-body').addClass('visible');
			jQuery(this).closest('.wiki-article-title').addClass('wiki-article-title-background-' + jQuery(this).closest('section').index());
		}else{
			jQuery(this).data("articleVisibility", 'off');
			jQuery(this).removeClass('iconfa-minus-sign');
			jQuery(this).addClass('iconfa-plus-sign');
        	jQuery('.wiki-article-body').removeClass('visible');
			jQuery('.wiki-article-body').addClass('invisible');
			jQuery(this).closest('.wiki-article-title').removeClass('wiki-article-title-background-' + jQuery(this).closest('section').index());
		}

    });


    jQuery(".btnShowHideArticleBody").click(function(){
		var articleVisibility = jQuery(this).data("articleVisibility");
		if('off'==articleVisibility){
			jQuery(this).data("article-visibility", 'on');
        	jQuery(this).closest('section').find('.wiki-article-body').removeClass('invisible');
			jQuery(this).closest('section').find('.wiki-article-body').addClass('visible');
			jQuery(this).closest('.wiki-article-title').addClass('wiki-article-title-background-' + jQuery(this).closest('section').index());



			jQuery("#btnShowHideAllArticles").data("articleVisibility", 'on');
			jQuery("#btnShowHideAllArticles").removeClass('iconfa-plus-sign');
			jQuery("#btnShowHideAllArticles").addClass('iconfa-minus-sign');
		}else{
			jQuery(this).data("article-visibility", 'off');
        	jQuery(this).closest('section').find('.wiki-article-body').removeClass('visible');
			jQuery(this).closest('section').find('.wiki-article-body').addClass('invisible');
			jQuery(this).closest('.wiki-article-title').removeClass('wiki-article-title-background-' + jQuery(this).closest('section').index());
			jQuery("#btnShowHideAllArticles").data("articleVisibility", 'on');

			
		}

    });
    
    //Tips and trics <h2> accordiation
    jQuery(".accordion > ul").hide();
    jQuery(".accordion > h2").click(function(){
    	var content = jQuery(this).parent().find("ul");
    	content.toggle();
    	console.log("end");
			//jQuery(this).closest('.wiki-article-title').addClass('wiki-article-title-background-' + jQuery(this).closest('section').index());
    });    


});