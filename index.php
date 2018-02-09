<?php
	/*$eventsFile = file_get_contents(__DIR__.'\\assets\\events.json');*/
	$eventsFile = file_get_contents(__DIR__.'/assets/events.json');
	curl_close($ch);
	$events = json_decode($eventsFile,true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>ITSA | Information Technology Students' Association</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/owl.carousel.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/owl.theme.green.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/timeline-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<style type="text/css">
		
	</style>
	<style type="text/css">
		.splash{
			width: 100%;
			min-height:500px;
			overflow: hidden;

			background: #f44336;
			background: -moz-linear-gradient(-45deg, #f44336 0%, #f50057 99%);
			background: -webkit-linear-gradient(-45deg, #f44336 0%,#f50057 99%);
			background: linear-gradient(135deg, #f44336 0%,#f50057 99%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f44336', endColorstr='#f50057',GradientType=1 );
		}
		.splash .splash-title{
			font-size: 13rem;
			font-weight: 100;
			line-height: 13rem;
			margin-bottom: 20px;
			display: inline-block;
		}
		.splash .splash-text{
			padding: 0 15px;
			line-height: 1.5rem;
		}
		.splash .splash-title,.splash .splash-text{
			color:#fff;
		}
	</style>
	<style type="text/css">
		.cd-horizontal-timeline ol li{
			list-style-type: none;
		}
		.cd-horizontal-timeline .events-content{
			max-width: 800px;
			margin: 2em auto;
		}
		.cd-horizontal-timeline .events-content ol{
			margin-top: 0;
			padding-left: 0;
		}
		.cd-horizontal-timeline .events-content ol li .timeline-title{
			color: #f50b52 !important;
    		font-size: 1.5rem !important;
    		margin: 20px 0 !important;
		}

		.cd-horizontal-timeline .events-content ol li .timeline-text{
			font-size: 1.1rem !important;
		    font-weight: 400;
		    text-align: justify;
		}
		.cd-horizontal-timeline .filling-line{
			background-color: #f50057;
		}
		.cd-horizontal-timeline .events a.older-event::after{
			border-color: #f50057;
		}
		.cd-horizontal-timeline .events a.selected::after{
			background-color: #f50057;
			border-color: #f50057;
		}
		.no-touch .cd-horizontal-timeline .events a:hover::after{
			background-color: #f50057;
			border-color: #f50057;
		}
		.no-touch .cd-timeline-navigation a:hover{
			border-color: #f50057;	
		}
		.cd-horizontal-timeline .events a{
			font-size: 0.8rem;
		}
		.cd-horizontal-timeline .timeline-img{
			border-radius: 10px;
			width: 100%;
			height: auto;
		}
	</style>
	<style type="text/css">
		.diagonal-box{
			height: 300px;
			padding-right: 100px !important;
			position: relative;
		}
		.diagonal-box:before{
			content: '';
			position: absolute;
			top: 0;
			left: -500%;
			height: 100%;
			width:500%;
		}
		.diagonal-box.deep-purple.custom-color:before{
			background: #7c2aee !important;
		}
		.diagonal-box.red.accent-3:before{
			background: #FF1744 !important;
		}
		.diagonal-box:after{
			content: '';
			position: absolute;
			top: 0;
			right: 0;
			border-bottom: 300px solid #fff;
			border-left: 100px solid transparent;
			width: 0;
			height: 100%;
		}
	</style>
	<style type="text/css">
		.objectives-icon{
			text-align: center;
			width: 90px;
		}
		.objectives-text{
			text-align: center;
		}
	</style>
	<style type="text/css">
		.hexagon {
			position: relative;
			width: 200px; 
			height: 115.47px;
			margin: 57.74px auto;
			background-image: url(http://csshexagon.com/img/meow.jpg);
			background-size: auto 212.4649px;
			background-position: center;
			box-shadow: 0 0 15px rgba(0,0,0,0.6);
			border-left: solid 8px #f44336;
			border-right: solid 8px #f44336;
		}

		.hexTop,
		.hexBottom {
			position: absolute;
			z-index: 1;
			width: 141.42px;
			height: 141.42px;
			overflow: hidden;
			-webkit-transform: scaleY(0.5774) rotate(-45deg);
			-ms-transform: scaleY(0.5774) rotate(-45deg);
			transform: scaleY(0.5774) rotate(-45deg);
			background: inherit;
			left: 21.29px;
			box-shadow: 0 0 15px rgba(0,0,0,0.6);
		}

		/*counter transform the bg image on the caps*/
		.hexTop:after,
		.hexBottom:after {
			content: "";
			position: absolute;
			width: 184.0000px;
			height: 106.23244953089116px;
			-webkit-transform:  rotate(45deg) scaleY(1.7321) translateY(-53.1162px);
			-ms-transform:      rotate(45deg) scaleY(1.7321) translateY(-53.1162px);
			transform:          rotate(45deg) scaleY(1.7321) translateY(-53.1162px);
			-webkit-transform-origin: 0 0;
			-ms-transform-origin: 0 0;
			transform-origin: 0 0;
			background: inherit;
		}

		.hexTop {
			top: -70.7107px;
			border-top: solid 11.3137px #f44336;
			border-right: solid 11.3137px #f44336;
		}

		.hexTop:after {
			background-position: center top;
		}

		.hexBottom {
			bottom: -70.7107px;
			border-bottom: solid 11.3137px #f44336;
			border-left: solid 11.3137px #f44336;
		}

		.hexBottom:after {
			background-position: center bottom;
		}

		.hexagon:after {
			content: "";
			position: absolute;
			top: 4.6188px;
			left: 0;
			width: 184.0000px;
			height: 106.2324px;
			z-index: 2;
			background: inherit;
		}
	</style>
	<style type="text/css">
		.profile .profile-title{
		    font-size: 1.3rem;
		    font-weight: bold;
		    width: 100%;
		    display: block;
		    text-align: center;
		    padding: 6px 0 0 0;
		}
		.profile .profile-sub-title{
			text-align: center;
		    display: block;
		    width: 100%;
		}
	</style>
</head>
<body>
	<div id="home" class="navbar-wrapper">
		<nav class="white" role="navigation">
			<div class="nav-wrapper container">
				<a id="logo-container" href="#" class="brand-logo-text">
					ITSA
				</a>
				<ul class="right hide-on-med-and-down">
					<li><a href="#home">Home</a></li>
					<li><a href="#events">Events</a></li>
					<li><a href="#objectives">Objectives</a></li>
					<li><a href="#team">Team</a></li>
					<li><a href="#about">About</a></li>
				</ul>

				<ul id="nav-mobile" class="left side-nav">
					<li><a href="#home">Home</a></li>
					<li><a href="#recent-events">Events</a></li>
					<li><a href="#team">Team</a></li>
					<li><a href="#about">About</a></li>
				</ul>
				<a href="#" data-activates="nav-mobile" class="side-nav-btn button-collapse primary-text"><i class="material-icons">menu</i></a>
			</div>
		</nav>
	</div>

	<div class="splash">
		<div class="container">
			<div class="row">
				<div class="col s12 center-align hide-on-large-only" style="padding-top: 8%;">
					<img src="img/team-2.png">
				</div>
				<div class="col s12 l4" style="padding-top: 8%;">
					<div class="splash-title">Hey!</div>
					<p class="splash-text">Welcome to Information Technology Students' Association.</p>
				</div>
				<div class="col l8 right-align hide-on-med-and-down" style="padding-top: 8%;">
					<img src="img/team-2.png">
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
			<section class="cd-horizontal-timeline">
				<div class="timeline">
					<div class="events-wrapper">
						<div class="events">
							<ol>
								<?php foreach($events as $key => $event){
									$date = str_replace('-', '/', $event['date']);
									$dateStr = date("dS M", strtotime($event['date']));
								?>
									<li><a href="#0" class="<?=$key==0?"selected":"";?>"  data-date="<?=$date;?>"><?=$dateStr;?></a></li>
								<?php }?>
							</ol>

							<span class="filling-line" aria-hidden="true"></span>
						</div> <!-- .events -->
					</div> <!-- .events-wrapper -->

					<ul class="cd-timeline-navigation">
						<li><a href="#0" class="prev inactive">Prev</a></li>
						<li><a href="#0" class="next">Next</a></li>
					</ul> <!-- .cd-timeline-navigation -->
				</div> <!-- .timeline -->

				<div class="events-content">
					<ol>

						<?php foreach($events as $key=>$event){
							$isArray = gettype($event['date']) === 'array';

							$date = str_replace('-', '/', $event['date']);
							//$dateStr;
						?>
							<li class="<?=$key==0?"selected":"";?>" data-date="<?=$date;?>">
								<img class="timeline-img z-depth-3" src="img/material-scenery.jpg">
								<p class="timeline-title"><?=$event['events'][0]['title'];?></p>
								<p class="timeline-text">	
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
								</p>
							</li>
						<?php }?>

						<!-- other descriptions here -->
					</ol>
				</div> <!-- .events-content -->
			</section>
		</div>
	</div>


	<div id="objectives" class="section divider-section small-section white-text deep-purple custom-color">
		<div class="container">
			<div class="row">
				<div class="col s12 l4">
					<span class="title white-text">Objectives</span>
					<span class="sub-title yellow-text text-lighten-4">What we try to achieve?</span>
					<p>Our objective is to help students improve their knowledge &amp; skills.</p>
				</div>
				<div class="col s12 m6 l2 center-align">
					<img class="objectives-icon" src="img/gears.svg">
					<p class="objectives-text">Technical Skills</p>
				</div>
				<div class="col s12 m6 l2 center-align">
					<img class="objectives-icon" src="img/workshop.svg">
					<p class="objectives-text">Workshops</p>
				</div>
				<div class="col s12 m6 l2 center-align">
					<img class="objectives-icon" src="img/megaphone.svg">
					<p class="objectives-text">Seminars</p>
				</div>
				<div class="col s12 m6 l2 center-align">
					<img class="objectives-icon" src="img/paper-presentation.svg">
					<p class="objectives-text">Technical paper</p>
				</div>
			</div>
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

	<div id="committee-logo" class="section" style="padding: 3rem 0;">
		<div class="container">
			<div class="row">
				<div class="col s6 right-align" style="border-right: 1px solid #9e9e9e;">
					<a href="#home"><img class="img-responsive" src="img/logo.jpg"></a>
					<span class="title" style="text-align: right;padding-right: 2.3rem;">ITSA</span>
				</div>
				<div class="col s6 left-align">
					<a href="http://sfitengg.org"><img class="img-responsive" src="img/logo-sfit.jpg"></a>
					<span class="title left-align" style="padding-left: 2.8rem;">SFIT</span>
				</div>
			</div>
		</div>
	</div>

	<footer class="page-footer grey darken-4" style="padding-top: 0;">
		<div class="footer-copyright">
			<div class="container">
				<div class="left">
					Copyright reserved.<br>Information Technology Students' Assocation
				</div>
				<div class="right">
					&lt;/&gt; with <i class="material-icons" style="color:#ef5350;font-size: 14px;">favorite</i> by ITSA.<div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
				</div>
			</div>
		</div>
	</footer>

	<div class="templates hide">
		<div class="profiles-template">
			<div class="item">
				<div class="profile">
					<div class="hexagon">
						<div class="hexTop"></div>
						<div class="hexBottom">
						</div>
					</div>
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
	<script src="js/modernizr.js"></script>
	<script src="js/timeline-horizontal.js"></script>
	<script src="js/init.js"></script>
	<script type="text/javascript">
	</script>
</body>
</html>
