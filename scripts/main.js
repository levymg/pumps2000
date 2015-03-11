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
	
	$('.bxslider').bxSlider({
		mode: 'fade',
		auto: true,
		autoStart:true,
		speed:400,
		pager: false,
		autoHover: true
	});


	// get the action filter option item on page load
	var $filterType = $('#filterOptions li.active a').attr('class');
	
	// get and assign the ourHolder element to the
	// $holder varible for use later
	var $holder = $('ul.ourHolder');
	
	// clone all items within the pre-assigned $holder element
	var $data = $holder.clone();
	var $data2 = $holder2.clone();
	
	if(window.location.hash) {
		$('#filterOptions li').removeClass('active');
       // run code here to filter the quicksand set
       var $filteredData = $data.find('li[data-type=' + window.location.hash.substr(1) + ']');
       $holder.quicksand($filteredData, {
			duration: 0,
			easing: 'easeInOutQuad'
       });
	   var $filteredData2 = $data2.find('li[data-type=' + window.location.hash.substr(1) + ']');
		$holder2.quicksand($filteredData2, {
			duration: 0,
			easing: 'easeInOutQuad'
		});
   		$('#filterOptions a.'+window.location.hash.substr(1)).parent().addClass('active');
   	}else{
	
	var $filteredData = $data.find('li[data-type=firstcat]');
	$holder.quicksand($filteredData, {
			duration: 0,
			easing: 'easeInOutQuad'
		});
	var $filteredData2 = $data2.find('li[data-type=firstcat]');
	$holder2.quicksand($filteredData2, {
			duration: 0,
			easing: 'easeInOutQuad'
		});
   }
	
	

	
});