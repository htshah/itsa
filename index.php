<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>ITSA | Information Technology Students' Association</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<!-- CSS  -->
	<link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/owl.carousel.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/owl.theme.green.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/marquee-prefixed.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<!-- <link href="css/hexagon-box.min.css" type="text/css" rel="stylesheet" media="screen,projection"/> -->

	<!-- Google Analytics -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113926609-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-113926609-1');
	</script>

	<style type="text/css">
		.image-rounded{
			border-radius: 10px;
		}

		.list-image{
			width: 100%;
			height: auto;
		}

		.list-title{
			color: #f50b52!important;
		    font-size: 1.5rem!important;
		    margin: 20px 0!important;
		}

		.list-description{
			font-size: 1.1rem!important;
		    font-weight: 400;
		    text-align: justify;
		    color: #959595;
		    line-height: 1.6;
		}

		.list-item-container{
			border-radius: 3px;
			max-height: 300px;
			overflow: auto;
		}
		.list-item-container .list-item{
			width: 100%;
		    font-weight: 300;
		    color: #424242;
		    padding: 10px;
		    background-color: #fff;
			cursor: pointer;
		    transition: all .5s;
		}

		.list-item-container .list-item:not(:last-child){
			border-bottom: 1px solid #f5f5f5;
		}

		.list-item-container .list-item:hover{
			background-color: #ececec;
		}
	</style>
	<style type="text/css">
		.nav-logo{
			width: 3rem;
		    display: inline-block;
		    float: left;
		    margin-top: 25px;
		    margin-right: 12px;
		}
	</style>
	<style type="text/css">
		.owl-theme .owl-nav{
			margin-top: 10px;
		    position: absolute;
		    width: 100%;
		    z-index: 100;
		}


		.owl-theme .owl-nav .owl-prev{
			float: left;
		}
		.owl-theme .owl-nav .owl-next{
			float: right;
		}

		.owl-theme .owl-dots{
			margin-top: 12px;
		}

		.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span{
			background: #FF1744;
		}

		#events .owl-theme .owl-nav{
			width: calc(100% - 24px);
			top: calc(50% - 40px);
		}

		#team .owl-theme .owl-nav{
			top: calc(50% - 48px);
		}
	</style>
	<style type="text/css">
		#events .event-features{
			margin-bottom: 15px;
		}
		#events .event-property{
		    vertical-align: middle;
		    display: flex;
		    float: left;
		    margin-right: 20px;
		    margin-bottom: 5px;
		    color: #4c4c4c;
		}
		#events .event-property i.material-icons{
		    font-size: 1.5rem;
		    margin-right: 5px;
		    color: #4c4c4c;
		}
		#events .event-property.event-persons .event-person:not(:first-of-type):before{
			content:", ";
		}
	</style>
	<style type="text/css">
		/* label color */
		.white-form .input-field label {
			color: #fff !important;
		}
		/* label focus color */
		.white-form .input-field input:focus + label {
			color: #fff !important;
		}
		/* label underline focus color */
		.white-form .input-field input:focus,.white-form .input-field textarea:focus {
			border-bottom: 1px solid #fff !important;
			box-shadow: 0 1px 0 0 #fff !important;
		}
		/* valid color */
		.white-form .input-field input.valid {
			border-bottom: 1px solid #fff !important;
			box-shadow: 0 1px 0 0 #fff !important;
		}
		/* invalid color */
		.white-form .input-field input.invalid {
			border-bottom: 1px solid #fff !important;
			box-shadow: 0 1px 0 0 #fff !important;
		}
		/* icon prefix focus color */
		.white-form .input-field .prefix.active {
			color: #fff !important;
		}
	</style>
	<style type="text/css">
		#home-slider .owl-item{
			height: 30rem;
			max-height: 450px;
			overflow-y: hidden;
		}

		#home-slider .owl-dots{
			position: absolute;
		    bottom: 0;
		    width: 100%;
		}

		#home-slider .item{
		    height: 100%;
		    position: relative;
		    background-size: cover;
		    background-repeat: no-repeat;
		    background-position: center;
		}
		.owl-carousel .text-overlay{
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(0,0,0,0.5);
		}

		.owl-carousel .owl-text{
			position: absolute;
		    color: #fff;
		    font-size: 2rem;
		    font-weight: 300;
		    bottom: 10%;
		    left: 4%;
		    max-width: 400px; 
		    border: 3px solid #fff;
		    padding: 10px 20px;
		}
	</style>
</head>
<body>
	<div id="home" class="navbar-wrapper">
		<nav class="white" role="navigation">
			<div class="nav-wrapper container">
				<a href="#" data-activates="nav-mobile" class="side-nav-btn button-collapse primary-text" style="margin-left: 0;"><i class="material-icons">menu</i></a>
				<a id="logo-container" href="#" class="brand-logo-text">
					<img class="nav-logo" src="img/logo.jpg"/> ITSA
				</a>
				<ul class="right hide-on-med-and-down">
					<li><a href="#home">Home</a></li>
					<li><a href="#events">Events</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#team">Team</a></li>
					<li><a href="#contact">Contact</a></li>
					<!-- <li><a href="#faq">FAQ</a></li> -->
				</ul>

				<ul id="nav-mobile" class="left side-nav">
					<li><a href="#home">Home</a></li>
					<li><a href="#recent-events">Events</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#team">Team</a></li>
					<li><a href="#contact">Contact</a></li>
					<!-- <li><a href="#faq">FAQ</a></li>  -->
				</ul>
			</div>
		</nav>
	</div>

	<div id="home-slider" class="splash owl-carousel owl-theme">
		<script id="home-slider-template" type="text/template">
			{{#item}}
			<div class="item" style="position: relative;background-image: url('{{image}}')">
				{{#text}}
					<div class="text-overlay"></div>
					<span class="owl-text">{{.}}</span>
				{{/text}}
			</div>
			{{/item}}
		</script>
	</div>

	<div id="notice" class="no-margin section divider-section deep-purple custom-color white-text" >
		<div class="container">
			<div class="row no-margin">
				<div class="col s12 m2 l1">
					<span class="small-title white-text">Updates</span>
				</div>
				<div class="col s12 m10 l11">
					<div class="marquee" data-marquee="This is a notice"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="events" class="section">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<span class="title">Events</span>
					<span class="sub-title">Our Events for this year.</span>
				</div>
			</div>
			<div class="row">
				<div class="col s12 l8">
					<div class="row">
						<div class="col s12 list-image-container owl-carousel owl-theme" style="position: relative;">
							<script class="list-image-template" type="text/template">									
									<img src="{{.}}" class="list-image image-rounded z-depth-1">
							</script>
						</div>
						<div class="col s12 list-description-container">
							<script class="list-description-template" type="text/template">
								<p class="list-title">
									{{name}}
								</p>
								<div class="col s12 no-padding event-features">

									<div class="event-property event-persons">
										<i class="material-icons">account_circle</i>
										{{#person}}
											<span class="event-person">
												{{#link}}
													<a href="{{.}}" target="_blank" title="View biodata">
												{{/link}}
												{{name}}
												{{#link}}</a>{{/link}}
											</span>
										{{/person}}
									</div>
									<div class="event-property">
										<i class="material-icons">event</i>{{date}}
									</div>
									<div class="event-property">
										<i class="material-icons">place</i>{{place}}
									</div>
									{{#feedback_link}}
									<div class="event-property">
										<i class="material-icons">comment</i><a href="{{.}}" target="_blank">Give feedback</a>
									</div>
									{{/feedback_link}}
									{{#report_link}}
									<div class="event-property">
										<i class="material-icons">library_books</i><a href="{{.}}" target="_blank">View Report</a>
									</div>
									{{/report_link}}
								</div>
								<p style="text-align: justify;">
									{{{description}}}
								</p>
							</script>
						</div>
					</div>
				</div> <!-- .events-content -->
				<div class="col s12 l4 events-list">
					<div class="col s12 input-field">
						<select class="list-category-filter">
							<option value="all">All</option>
							<option value="workshop">Workshops</option>
							<option value="seminar">Seminars</option>
							<option value="competition">Competitions</option><option value="iv">Industrial Visits</option>
						</select>
						<label>Category</label>
					</div>
					<div class="col s12">
						<ul class="list-item-container z-depth-1">
							<script class="list-item-template" type="text/template">
								{{#list}}
								<li class="list-item">{{name}}</li>
								{{/list}}
							</script>
						</ul>
					</div>
				</div>
			</div>
			
		</div>
	</div>

	<div id="about" class="section divider-section red accent-3">
		<div class="container">
			<span class="title left white-text">About Us</span>
			<span class="sub-title left yellow-text text-lighten-3">Overview about this committee.</span>
			<p class="content text-justify white-text" style="line-height: 1.8rem;">
				Information Technology Students Association (ITSA) committee is formed by Mr. Pramod Shanbhag for the students. It comprises of members from the IT department.
				We emphasize on providing students with an out-of-syllabus experience as well as making them aware of the latest technology by organizing various events.
				We organize atleast 6 technical events and 2 Industrial Visits per academic year. We also organize hands-on workshops so that students can understand the concepts better and implement it as well.
			</p>
				
		</div>
	</div>

	<div id="team" class="section">
		<div class="container">

			<div class="title">Team</div>
			<div class="sub-title">Meet people behind this committee.</div>
			<div class="row team-container">
				<div class="col s12">
					<div class="owl-carousel owl-theme">
						
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<div id="contact" class="section divider-section small-section white-text deep-purple custom-color" style="margin-bottom: 0;">
		<div class="container">
			<div class="row">
				<div class="col s12 l4">
					<span class="title white-text">Contact Us</span>
					<span class="sub-title yellow-text text-lighten-4">Have some queries?</span>
					<p>Tell us the questions you have for us.</p>
				</div>
				<div class="col s12 l8 center-align">
					<form action="javascript:void(0)" id="contact-form" class="white-form">
						<div class="row no-margin">
							<div class="col s12 m6 input-field">
								<input type="text" name="name" required>
								<label for="name">Name</label>
							</div>
							<div class="col s12 m6 input-field">
								<input type="email" name="email">
								<label for="email">Email</label>
							</div>
						</div>
						<div class="row no-margin">
							<div class="col s12 input-field">
								<textarea class="materialize-textarea" name="message" required></textarea>
								<label for="message">Message</label>
							</div>
						</div>
						<div class="row no-margin">
							<div class="col s12 right-align">
								<button id="submit-btn" type="submit" class="btn waves-effect waves-grey white grey-text text-darken-3">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- <div id="faq" class="section">
		<div class="container">

			<div class="title">FAQ's</div>
			<div class="sub-title">Frequently Asked Questions</div>
			<div class="row">
				<div class="col s12">
					<ul class="collapsible popout" data-collapsible="accordion">
						<li>
							<div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
							<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
						</li>
						<li>
							<div class="collapsible-header"><i class="material-icons">place</i>Second</div>
							<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
						</li>
						<li>
							<div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
							<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
						</li>
					</ul>
				</div>
				
			</div>
		</div>
	</div> -->

	<footer class="page-footer grey darken-4" style="padding-top: 0;">
		<div class="footer-copyright">
			<div class="container">
				<div class="left">
					Copyrights reserved.<br>Information Technology Students' Assocation
				</div>
				<div class="right">
					&lt;/&gt; with <i class="material-icons" style="color:#ef5350;font-size: 14px;">favorite</i> by <a href="https://www.instagram.com/htshah/">Het Shah</a>.<div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
				</div>
			</div>
		</div>
	</footer>

	<div class="templates hide">
		<div class="profiles-template">
			<div class="item">
				<div class="profile">
					<div class="profile-image z-depth-1"></div>
					<span class="profile-title"></span>
					<span class="profile-sub-title"></span>
				</div>
			</div>
		</div>
	</div>

	<!--  Scripts-->
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/jquery.mobile.custom.min.js"></script>
	<script src="js/jquery.smoothscroll.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.5/lodash.min.js" type="text/javascript"></script>
	<script src="js/dateFormat.min.js"></script>
	<script src="js/mustache.min.js"></script>
	<script src="js/modernizr.js"></script>
	
	<!-- Custom list.js lib -->
	<script src="js/list.js"></script>
	
	<script src="js/init.js"></script>
	
</body>
</html>
