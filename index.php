<?php
	/*$eventsFile = file_get_contents(__DIR__.'\\assets\\events.json');*/
	$eventsFile = file_get_contents(__DIR__.'/assets/events.min.json');
	$events = json_decode($eventsFile,true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>ITSA | Information Technology Students' Association</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/owl.carousel.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/owl.theme.green.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/timeline-horizontal.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/hexagon-box.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	

	<!-- Google Analytics -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113926609-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-113926609-1');
	</script>

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
				<div class="col s6 l2 center-align">
					<img class="objectives-icon" src="img/gears.svg">
					<p class="objectives-text">Technical Skills</p>
				</div>
				<div class="col s6 l2 center-align">
					<img class="objectives-icon" src="img/workshop.svg">
					<p class="objectives-text">Workshops</p>
				</div>
				<div class="col s6 l2 center-align">
					<img class="objectives-icon" src="img/megaphone.svg">
					<p class="objectives-text">Seminars</p>
				</div>
				<div class="col s6 l2 center-align">
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
					&lt;/&gt; with <i class="material-icons" style="color:#ef5350;font-size: 14px;">favorite</i> by <a href="https://www.instagram.com/htshah/">Het Shah</a>.<div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
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
	<script src="js/timeline-horizontal.min.js"></script>
	<script src="js/init.min.js"></script>
	
</body>
</html>
