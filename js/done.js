$(document).ready(function() {

		$("input#done").each(function(){
			
			var uuhhhhhyauzheustaldelatetottudulist = 1;
			
			if($(this).is(':checked')){
				
				$(this).parent().parent().toggleClass("success");
				
				uuhhhhhyauzheustaldelatetottudulist = 0;
				
			}
			
			$(this).click(function(){
				
				var id = $(this).data("id");
				
				$.get( "/ci/app/check/" + id + "/" + uuhhhhhyauzheustaldelatetottudulist);
				
				$(this).parent().parent().toggleClass("success");
				
				if(uuhhhhhyauzheustaldelatetottudulist == 1)  { uuhhhhhyauzheustaldelatetottudulist = 0; } else { uuhhhhhyauzheustaldelatetottudulist = 1; }
			
			});
			
		});
	
});