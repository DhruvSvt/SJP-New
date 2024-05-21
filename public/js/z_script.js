$(document).ready(function() {
	$('.carousel').carousel({
        interval: 5000 //changes the speed
    });
	
  $("#owl-demo").owlCarousel({
 
	  autoPlay: 3000, //Set AutoPlay to 3 seconds 
	  items : 4,
	  itemsDesktop : [1199,3],
	  itemsDesktopSmall : [979,3],
	  navigation : true,
      navigationText : ["<",">"],
      pagination : false,
 
  });
 $("#owl-demo1").owlCarousel({
 
	  autoPlay: 3000, //Set AutoPlay to 3 seconds 
	  items : 4,
	  itemsDesktop : [1199,3],
	  itemsDesktopSmall : [979,3],
	  navigation : true,
      navigationText : ["<",">"],
      pagination : false,
 
  });
 $("#owl-demo2").owlCarousel({
 
	  autoPlay: 4000, //Set AutoPlay to 3 seconds 
	  items : 1,
	  itemsDesktop : [1199,1],
	  itemsDesktopSmall : [979,1],
	  itemsTablet : [767,1],
	  navigation : false,
      navigationText : ["<",">"],
      pagination : true,
 
  });
 $("#owl-demo3").owlCarousel({
 
	  autoPlay: 3000, //Set AutoPlay to 3 seconds 
	  items : 4,
	  itemsDesktop : [1199,3],
	  itemsDesktopSmall : [979,3],
	  navigation : true,
      navigationText : ["<",">"],
      pagination : false,
 
  });
  
  $(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
    
  $(".quick-enq").click(function(){
      (".enq-form").show();
  });  
});

