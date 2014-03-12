var titleControl=(function(){
	var current_text = null;
	var update_in_future_to = null;
	var content_map = null;
	return {
		init:function(array){
			content_map = array;
			$(document).on("image_swapped", function(e){
				titleControl.swtich_to(content_map[e.detail.image_index]);
			});
		},
		swtich_to:function(i){
			if(current_text != i){
				if(boxControl.is_open()){
					titleControl.hide_all(i);
					$('#tl-'+i).show('slow');
					current_text = i;
				}else{
					update_in_future_to = i;
				}
			}
		},
		hide_all:function(index){
			$('.sackett-caption').each(function(){
				var t_number =   $(this).attr('id').slice(2) ;
				if(t_number!=index){
					$(this).hide('fast');
				}
			})
				
		},
		update_futures:function(){
			if(update_in_future_to){
				titleControl.hide_all(update_in_future_to);
				$('#tl-'+update_in_future_to).show('slow');
				current_text = update_in_future_to;
				update_in_future_to = null;
			}
			
		}
		
	}
}());
