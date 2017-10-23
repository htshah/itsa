$(document).ready(function(){
	$('.button-collapse').sideNav();
	$('.parallax').parallax();
	$("html").smoothScroll();

	//$('.carousel.carousel-slider').carousel({dist:100});
	/*setInterval(function() {
		$('.carousel').carousel('next');
	}, 4500); // every 2 seconds
	*/

	$.ajax({
		url:"assets/recent-events.json",
		type:"GET",
		success:function(data){
			var container = $("#recent-events .owl-carousel");
			$.each(data,function(i,event){
				var template = $(".templates .owl-carousel .item").clone();
				template.find(".card-title").html(event['title']);
				template.find("img").attr('src',event['img']);
				container.append(template);
			});			
			container.owlCarousel({
			    loop:false,
			    margin:20,
			    nav:true,
			    navText:['&lt;','&gt;'],
			    dots:false,
			    responsive:{
			        0:{
			            items:1
			        },
			        600:{
			            items:2
			        },
			        992:{
			            items:3
			        }
			    }
			})
		}
	});

	$.ajax({
		url:'assets/team.json',
		type:'GET',
		success:function(data){
			var container = $("#team .team-container");

			$.each(data,function(i,profile){
				if(i%4==0){
					container.append($("<div class='row'>"));
				}
				var template = $(".templates .profile-card").clone();
				
				template.find(".card-title").html(profile['name']);
				template.find("p").html(profile['title']);
				template.find(".card-image img").attr("src",profile['img']);

				container.find(".row").last().append(template);
			});
		}
	});
});