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
	<style>
		audio, video {
		    display: block;
		    vertical-align: baseline;
		    margin: 20px auto;
		}
		video{
			width: 100%;
			height:auto;
		}
	</style>
	
	<!-- Animation -->
	<style>
		.animate-div {
			display:block;
			margin:0 auto;
			width: 100px;
			height: 100px;
			font-weight: bolder;
			font-size: 30px;
			background-color: #f44336;
			-webkit-animation-name: example; /* Safari 4.0 - 8.0 */
			-webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
			animation-name: example;
			animation-duration: 4s;
			-webkit-animation-iteration-count: infinite;
			-moz-animation-iteration-count: infinite;
			-o-animation-iteration-count: infinite;
			animation-iteration-count: infinite;
		}

		/* Standard syntax */
		@keyframes example {
		    0%   {background-color: red;}
		    25%  {background-color: orange;
		     -webkit-transform: translate(50px,0); }
		    50%  {background-color: blue;}
		    100% {background-color: green;}
		}
	</style>
	
	<!-- Transformation -->
	<style>
		.original-div {
		    width: 300px;
		    height: 100px;
		    background: #fff;
		    box-shadow: 1px 2px 10px rgba(0,0,0,0.5);
		}

		.translated-div{
		    -ms-transform: translate(50px,100px); /* IE 9 */
		    -webkit-transform: translate(50px,100px); /* Safari */
		    transform: translate(50px,100px); /* Standard syntax */
		}

		.rotated-div{
		    -ms-transform: rotate(20deg); /* IE 9 */
		    -webkit-transform: rotate(20deg); /* Safari */
		    transform: rotate(20deg); /* Standard syntax */
		}
		.matrix-div{
		    -ms-transform: matrix(1, 0, 0.5, 1, 150, 0); /* IE 9 */
		    -webkit-transform: matrix(1, 0, 0.5, 1, 150, 0); /* Safari */
		    transform: matrix(1, 0, 0.5, 1, 150, 0); /* Standard syntax */
		}

		.skew-div{
		    -ms-transform: skew(20deg,10deg); /* IE 9 */
		    -webkit-transform: skew(20deg,10deg); /* Safari */
		    transform: skew(20deg,10deg); /* Standard syntax */
		}
		.scale-div{
		    margin: 150px;
		    -ms-transform: scale(2,3); /* IE 9 */
		    -webkit-transform: scale(2,3); /* Safari */
		    transform: scale(1,3); /* Standard syntax */
		}

		.without-transform-origin {
		    padding: 50px;
		    -ms-transform: rotate(45deg); /* IE 9 */
		    -ms-transform-origin: 20% 40%; /* IE 9 */
		    -webkit-transform: rotate(45deg); /* Safari 3-8 */
		    -webkit-transform-origin: 20% 40%; /* Safari 3-8 */
		    transform: rotate(45deg);

		}

		.with-transform-origin {
		    padding: 50px;
		    -ms-transform: rotate(45deg); /* IE 9 */
		    -ms-transform-origin: 20% 40%; /* IE 9 */
		    -webkit-transform: rotate(45deg); /* Safari 3-8 */
		    -webkit-transform-origin: 20% 40%; /* Safari 3-8 */
		    transform: rotate(45deg);
		    transform-origin: 20% 40%;
		}
	</style>
	<style>
		.transition-link{
			color: white;
			text-decoration: none;
			background-color: transparent;
			transition: all 0.5s;
			border: 2px solid white;
			padding: 10px 15px;
    			border-radius: 3px;
		}
		.transition-link:hover{
			color:#424242;
			background-color:white;
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
						<source src="/assets/audio/audio.mp3" type="audio/mpeg">
						Your browser does not support the audio tag.
					</audio>
				</div>
			</div>
		</div>
	</div>


	<div id="animation" class="section">
		<div class="container">

			<div class="title">CSS3 Animation</div>
			<div class="sub-title">A small demo for animation</div>
			<div class="row">
				<div class="col s12">
					<div class="animate-div"></div>
				</div>
				
			</div>
		</div>
	</div>
	
	<div id="transition" class="section divider-section small-section white-text deep-purple custom-color">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<span class="title white-text">Transition</span>
					<span class="sub-title yellow-text text-lighten-4">CSS3 transition demo</span>
				</div>
				<div class="col s12 center-align">
					<a href="#" class="transition-link">Demo</a>
				</div>
			</div>
		</div>
	</div>

	
	<div id="transformation" class="section">
		<div class="container">
			<span class="title left">Transformation</span>
			<span class="sub-title left ">A demo on CSS3 Transformation</span>
			<div class="row">
				<div class="col s12 l4">
					<div class="original-div">Original</div>
				</div>
				<div class="col s12 l4">
					<div class="original-div translated-div">Translation</div>
				</div>
				<div class="col s12 l4">
					<div class="original-div rotated-div">Rotation</div>
				</div>
				<div class="col s12 l4">
					<div class="original-div matrix-div">Matrix</div>
				</div>
				<div class="col s12 l4">
					<div class="original-div skew-div">Skew</div>
				</div>
				<div class="col s12 l4">
					<div class="original-div scale-div">Scale</div>
				</div>
				<div class="col s12 l4">
					<div class="original-div without-transform-origin">W/O Transform Origin</div>
				</div>
				<div class="col s12 l4">
					<div class="original-div with-transform-origin">Transform Origin</div>
				</div>
			</div>	
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
