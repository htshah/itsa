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
	<!-- <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/owl.carousel.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/owl.theme.green.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/timeline-horizontal.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/hexagon-box.min.css" type="text/css" rel="stylesheet" media="screen,projection"/> -->
	<link rel="stylesheet" type="text/css" href="css/bundle.css">

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
					<li><a href="/practicals.php">Practicals</a></li>
					<li><a href="#about">About</a></li>
				</ul>

				<ul id="nav-mobile" class="left side-nav">
					<li><a href="#home">Home</a></li>
					<li><a href="#recent-events">Events</a></li>
					<li><a href="#team">Team</a></li>
					<li><a href="/practicals.php">Practicals</a></li>
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

	<div id="video" class="section">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<span class="title">Video</span>
					<span class="sub-title">This video is displayed using &lt;video&gt; tag</span>
				</div>
				
				<div class="col s12">
					<video controls>
						<source src="/assets/video/teamwork.mp4" type="video/mp4">
						Video is not supported in your browser
					</video>
				</div>
			</div>
		</div>
	</div>


	<div id="audio" class="section divider-section small-section white-text deep-purple custom-color">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<span class="title white-text">Audio</span>
					<span class="sub-title yellow-text text-lighten-4">Listen to some classics</span>
				</div>
				<div class="col s12 center-align">
					<audio controls>
						<source src="audio.mp3" type="audio/mpeg">
						Your browser does not support the audio tag.
					</audio>
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
