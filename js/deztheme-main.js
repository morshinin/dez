jQuery(document).ready(function(){
  jQuery('.akcii-slider').slick({
  	infinite: true,
  	slidesToShow: 3,
  	slidesToScroll: 3,
  	responsive: [
  		{
  		  breakpoint: 480,
  		  settings: {
  		    slidesToShow: 1,
  		    slidesToScroll: 1
  		  }
  		}
  	]
  });
  jQuery('.otzyvy-slider').slick({
  	infinite: true,
  	slidesToShow: 3,
  	slidesToScroll: 3,
  	responsive: [
  		{
  		  breakpoint: 480,
  		  settings: {
  		    slidesToShow: 1,
  		    slidesToScroll: 1
  		  }
  		}
  	]
  });
  jQuery('.klienty-slider').slick({
  	infinite: true,
  	slidesToShow: 6,
  	slidesToScroll: 6,
  	responsive: [
  		{
  		  breakpoint: 480,
  		  settings: {
  		    slidesToShow: 1,
  		    slidesToScroll: 1
  		  }
  		}
  	]
  });
});