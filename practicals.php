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
	
	<style>
		#red-perspective{
			width:100px;
			height:100px;
			margin:0 auto;
			border:1px solid #9e9e9e;
			perspective:300px;
		}
		#red-perspective .box{
			width:100%;
			height:100%;
			background-color:red;
			transform: rotateY(50deg);
		}
		
		#card-flip{
			width: 100px;
  			height: 200px;	
			transition:transform 1s;
			margin:0 auto;
			position:relative;
		}
		#card-flip figure{
			margin: 0;
			display: block;
			position: absolute;
			width: 100%;
			height: 100%;
			backface-visibility: hidden;
		}
		#card-flip .front {
			background: red;
		}
		#card-flip .back {
			background: blue;
			transform: rotateY( 180deg );
		}
		#card-flip:hover {
			transform: rotateY( 180deg );
		}
	</style>
	<style type="text/css">
		.text-shadow{
			text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
		}

		.my-box{
			width:100%;
			height: 100px;
			display: block;
		}
		#linear-grad .my-box{
			
			background: linear-gradient(to right,#fddedc 0,#9700f5 99%)
		}

		#radial-grad .my-box{
			background: radial-gradient(circle,#fddedc 0,#9700f5 99%);
		}

		#multiple-bg .my-box{
			background: url(img/img_flwr.gif), url(img/paper.gif);
			background-repeat: no-repeat,repeat;
			background-position: right bottom,top left;
		}

		#grad-pattern .my-box{
			background: repeating-linear-gradient(135deg,#9e9e9e,#9e9e9e 5px,transparent 5px,transparent 10px);
		}

		@font-face{
			font-family:'Neoteric';
			src:url('fonts/neoteric_regular.ttf');
		}

		.custom-font{
			font-family: 'Neoteric';
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
					<li><a href="practicals.php">Practicals</a></li>
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
			</div>	
			<div class="row">
				<div class="input-field col s12 l4">
					<select id="transformation-select">
						<option value="" selected>Original</option>
						<option value="translated-div">Translation</option>
						<option value="rotated-div">Rotation</option>
						<option value="skew-div">Skew</option>
						<option value="scale-div">Scaling</option>
						<option value="matrix-div">Matrix transformation</option>
					</select>
				</div>
			</div>
		</div>
	</div>
	
	<div id="transformation-3d" class="section">
		<div class="container">
			<span class="title left">3D Transformation - Perspective</span>
			<span class="sub-title left ">A demo on CSS3 3D Transformation</span>
			<div class="row">
				<div class="col s12">
					<div id="red-perspective">
						<div class="box"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="transformation-card-flip" class="section">
		<div class="container">
			<span class="title left">3D Transformation - Card Flip</span>
			<span class="sub-title left ">A demo on CSS3 3D Transformation</span>
			<div class="row">
				<div class="col s12">
					<div id="card-flip">
						<figure class="front"></figure>
						<figure class="back"></figure>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="text-shadow" class="section">
		<div class="container">
			<span class="title left">Text Shadow</span>
			<span class="sub-title left ">A demo on CSS Text Shadow</span>
			<div class="row">
				<div class="col s12 center-align">
					<h4 class="text-shadow">This is text-shadow.</h4>
				</div>
			</div>
		</div>
	</div>
	<div id="linear-grad" class="section">
		<div class="container">
			<span class="title left">Linear Gradient</span>
			<span class="sub-title left ">A demo on Linear gradient</span>
			<div class="row">
                <div class="col s12 my-box"></div>
    		</div>
		</div>
	</div>
	<div id="radial-grad" class="section">
		<div class="container">
			<span class="title left">Radial Gradient</span>
			<span class="sub-title left ">A demo on Linear gradient</span>
			<div class="row">
                <div class="col s12 my-box"></div>
    		</div>
		</div>
	</div>
	<div id="multiple-bg" class="section">
		<div class="container">
			<span class="title left">Multiple Background</span>
			<span class="sub-title left ">A demo on Multiple Background</span>
			<div class="row">
                <div class="col s12 my-box"></div>
    		</div>
		</div>
	</div>

	<div id="grad-pattern" class="section">
		<div class="container">
			<span class="title left">Background Pattern using gradient</span>
			<span class="sub-title left ">A demo on Background Pattern using gradient</span>
			<div class="row">
                <div class="col s12 my-box"></div>
    		</div>
		</div>
	</div>

	<div id="cust-font" class="section">
		<div class="container">
			<span class="title left">@font-face</span>
			<span class="sub-title left ">A demo on @font-face rule</span>
			<div class="row">
                <div class="col s12 center-align">
                	<h4 class="custom-font">Typography</h4>
                </div>
    		</div>
		</div>
	</div>
	
	<div id="cust-font" class="section">
		<div class="container">
			<span class="title left">Form</span>
			<span class="sub-title left ">A demo on all form elements with attributes</span>
			<div class="row">
				<form id="my-form" onsubmit="return false;">
					<div class="row">
						<div class="col s6 input-field">
							<input type="text" name="fname" placeholder="First name" required title="Provide your first name" autofocus/>
						</div>
						<div class="col s6 input-field">
							<input type="text" name="lname" placeholder="Last name" required title="Provide your last name"/>
						</div>
					</div>
					<div class="row">
						<div class="col s4 input-field">
							<input type="number" name="age" placeholder="Age" required title="Provide your age" pattern="[0-9]{2}"/>
						</div>
						<div class="col s8 input-field">
							<input type="date" name="bdate" placeholder="Birthdate" required title="Provide your birthday"/>
						</div>
					</div>
					<div class="row">
						<div class="col s6 input-field">
							<input type="email" name="email" placeholder="Email-id" required title="Provide your email-id" autocomplete="on"/>
						</div>
						<div class="col s6 input-field">
							<input type="tel" name="phone" placeholder="Phone number" required title="Provide your phone number"/>
						</div>
					</div>
					<div class="row">
						<div class="col s12 input-field">
							<input type="url" name="website" placeholder="Website"/>
						</div>
						
					</div>
					<div class="row">
						<div class="col s12">
							<h5>How active are you?</h5>
						</div>
						<div class="col s12 input-field">
							<input type="range" name="range-input" min="1" max="10" value="5"/>
						</div>
					</div>
					<div class="row">
						<div class="col s4">
							<h5>Fav color</h5>
						</div>
						<div class="col s8 input-field">
							<input type="color" name="color"/>
							
						</div>
					</div>
					<div class="row">
						<div class="col s12 input-field">
							<input name="city" list="cities" placeholder="City"/>
							
							<datalist id="cities">
								<option value="Mumbai"/>
								<option value="Delhi"/>
								<option value="Kolkata"/>
								<option value="Surat"/>
								<option value="Jaipur"/>
							</datalist>
						</div>
						<div class="col s12 input-field">
							<input type="search" name="search" >
							<label for="search">Search something</label>
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<input type="button" id="submit-btn" value="Submit"/>
						</div>
					</div>
				</form>
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

	<!--  Scripts-->
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/jquery.mobile.custom.min.js"></script>
	<script src="js/jquery.smoothscroll.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/modernizr.js"></script>
	<script src="js/timeline-horizontal.min.js"></script>
	<script src="js/init.min.js"></script>
	<script>
	$(document).ready(function() {
	    	$('select').material_select();
		$('#transformation-select').change(function(){
			newClass = $('#transformation-select :selected').val();
			newText = $('#transformation-select :selected').attr('data-text');
			$('.original-div').removeClass().addClass('original-div '+newClass).html(newText);
		});


// 		$("#submit-btn").click(function(){
// 			$.ajax({
// 				url:'email.php',
// 				type:'GET',
// 				data:$('#my-form').serializeArray(),
// 				success:function(data){
// 					data = $.parseJSON(data);

// 					if(data['success']==1){
// 						Materialize.toast("Email sent successfully",3000);
// 						return false;
// 					}

// 					Materialize.toast("Error: "+data['message'],3000);
// 				}
// 			});
// 		});
	  });
	</script>
</body>
</html>
