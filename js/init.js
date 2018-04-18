$(document).ready(function(){

	$('select').material_select();
	$('.collapsible').collapsible();
	$('.button-collapse').sideNav();
	$('.parallax').parallax();
	$("html").smoothScroll();

	$("#nav-mobile a").click(function(){
		$(".side-nav-btn").sideNav("hide");
	});

	//$('.carousel.carousel-slider').carousel({dist:100});
	/*setInterval(function() {
		$('.carousel').carousel('next');
	}, 4500); // every 2 seconds
	*/

	$.ajax({
		url:"assets/slider.json",
		type:"GET",
		success:function(data){
			$("#home-slider").html(Mustache.render($("#home-slider-template").html(),{item:data}))
				.owlCarousel({
					loop:true,
				    nav:false,
				    lazyLoad:true,
				    dots:true,
				    items:1,
				    autoplay:true,
				});
		}
	})

	window.eventList = Object.assign({},List);

	$.ajax({
		type:"GET",
		url:'assets/events.json',
		success:function(list){
			eventList.init('#events',_.orderBy(list,['date'],['desc']));
		}
	});
	$('#events .list-image-container').owlCarousel({
	    loop:false,
	    margin:20,
	    nav:true,
	    lazyLoad:true,
	    navText:['&lt;','&gt;'],
	    dots:true,
	    items:1,
	    responsive:{
	        0:{
	            items:1,
	        },
	        600:{
	            items:1,
	        },
	        992:{
	            items:1,
	        }
	    }
	});

	$.ajax({
		url:"assets/team.json",
		type:"GET",
		success:function(data){
			var container = $("#team .owl-carousel");
			$.each(data,function(i,profile){
				var template = $(".templates .profiles-template .item").clone();
				template.find(".profile-title").html(profile['name']);
				template.find(".profile-sub-title").html(profile['title']);
				template.find(".profile .profile-image").css('background-image',"url('"+profile['img']+"')");
				container.append(template);
			});			
			container.owlCarousel({
			    loop:false,
			    margin:15,
			    nav:true,
			    dots:false,
			    navText:['&lt;','&gt;'],
			    responsive:{
			        0:{
			            items:1,
			            slideBy:1
			        },
			        600:{
			            items:2,
			            slideBy:2
			        },
			        992:{
			            items:3,
			            slideBy:3
			        }
			    }
			})
		}
	});

	$("#submit-btn").click(function(){
		$(this).attr("disabled","disabled");

		$.ajax({
			type:"GET",
			url:"email/send-email.php",
			data:$("#contact-form").serializeArray(),
			success:function(data){
				data = $.parseJSON(data);
				if(data.success == 0){
					Materialize.toast(data.message,15000,'red white-text');
				}else{
					Materialize.toast("Your query has been recorded.:)",4000);
				}
				$("#submit-btn").removeAttr("disabled");
				
				$("#contact-form input").val("");
				$("#contact-form textarea").html("");

			},
			error:function(){
				$("#submit-btn").removeAttr("disabled");
			}
		});
	});
});