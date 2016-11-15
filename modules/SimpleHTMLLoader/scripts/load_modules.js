
	$(document).ready($.proxy(function(){
		bindClick();
	}, this));
	
	function bindClick(){
		var jContainer = $('.container');
		
		if (!jContainer.length) {
			console.info('failed to select container.');
		}

		$('.container').on('click', function(){
			$.getJSON('./get_module.php?callback?', "?type=html", function(response){
				alert(response);
			})
		});
	}

