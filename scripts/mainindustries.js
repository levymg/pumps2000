$(document).ready(function() {

	$("ul#main-navigation li a").hoverIntent(function() { 
		$(this).parent().find("ul.subnav").stop(true,true).slideDown('fast').show(); //Drop down the subnav on hover

		$(this).parent().hover(function() {
		}, function(){	
			$(this).parent().find("ul.subnav").stop(true,true).slideUp('slow'); //When the mouse hovers out of the subnav, move it back up
		});

		//Following events are applied to the trigger (Hover events for the trigger)
		}).hover(function() { 
			$(this).addClass("subhover"); //On hover over, add class "subhover"
		}, function(){	//On Hover Out
			$(this).removeClass("subhover"); //On hover out, remove class "subhover"
	});
	
	// get the action filter option item on page load
		var $filterType = $('#filterOptions li.active a').attr('class');
		
		// get and assign the ourHolder element to the
		// $holder varible for use later
		var $holder = $('ul.ourHolder');
		
		// clone all items within the pre-assigned $holder element
		var $data = $holder.clone();
		
		var $filteredData = $data.find('li[data-type~=allproducts]');
		$holder.quicksand($filteredData, {
				duration: 800,
				easing: 'easeInOutQuad'
			});
		
		// attempt to call Quicksand when a filter option
		// item is clicked
		$('#filterOptions li a').click(function(e) {
			// reset the active class on all the buttons
			$('#filterOptions li').removeClass('active');
			
			// assign the class of the clicked filter option
			// element to our $filterType variable
			var $filterType = $(this).attr('class');
			$(this).parent().addClass('active');
			
			if ($filterType == 'all') {
				// assign all li items to the $filteredData var when
				// the 'All' filter option is clicked
				var $filteredData = $data.find('li');
			} 
			else {
				// find all li elements that have our required $filterType
				// values for the data-type element
				var $filteredData = $data.find('li[data-type~=' + $filterType + ']');
			}
			
			// call quicksand and assign transition parameters
			$holder.quicksand($filteredData, {
				duration: 800,
				easing: 'easeInOutQuad'
			});
			return false;
		});

});