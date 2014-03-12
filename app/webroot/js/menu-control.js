var menuControl=(function(){
	var next_click_should_shrink = false;
	var close_x = null;
	var box = null;
	var h1 = null;
	return {
		init:function(options){
			$( window ).resize(function() {
				menuControl.detect();
			});
			menuControl.detect();
		},
		detect:function(){
			if( $('#js-detect-mobile-collapse').css('display') != 'block'){
				$('.menued').on('mouseover', menuControl.handler);
				$('.menued').on('mouseout', menuControl.out_handler);
			}else{
				$('.menued').off('mouseover', menuControl.handler);
				$('.menued').off('mouseout', menuControl.out_handler);
			}
		},
		handler:function(e){
			var the_a = $(e.target);
			var width = $(e.target).width();
			var left = $(e.target).css('left');
			var bar = $(e.target).parent().find('.green-baro');
			// the_a.css('color','#8cc63e');
			the_a.addClass('active');
			bar.css('width',width);
			// bar.css('left',width);
			bar.css('bottom',-10);
			bar.css('display',"block");
			bar.css('left',10);
			bar.css('opacity',0);
			bar.animate({
				bottom: 0,
				opacity: 1
			}, 300)
		},
		out_handler:function(e){
			var the_a = $(e.target);
			var bar = $(e.target).parent().find('.green-baro');
			// the_a.css('color','#45545f');
			the_a.removeClass('active');
			if(!the_a.parent().hasClass('active')){
				bar.css('display', 'none');	
			}
			
		}


	}
}());
menuControl.init();
