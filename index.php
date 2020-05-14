<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TOURGO LandingPage Prototype</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<link rel="stylesheet" type="text/css" href="./css/VideoPlayer.css">
	<link rel="stylesheet" type="text/css" href="./css/Header.css">
	<link rel="stylesheet" type="text/css" href="./css/Home.css">
	<link rel="stylesheet" type="text/css" href="./css/Intro.css">
	<link rel="stylesheet" type="text/css" href="./css/About.css">
	<link rel="stylesheet" type="text/css" href="./css/Quotes.css">
	<link rel="stylesheet" type="text/css" href="./css/Footer.css">

	<script src="libs/jquery-3.5.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.6.8/lottie.min.js"></script>
	<!--<script src="libs/jquery.touch.min.js"></script>-->
	<script src="./app/app.js"></script>
</head>

<body>
	<header class="nav-up">
		<img class="Logo" src="./img/svg/MainLOGO.svg" alt="TOURGO logo (coloured)" />
		<div class="socialLinks">
			<a href="#">
				<svg class="fb_icon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
					<g id="Ellipse_74" data-name="Ellipse 74" fill="none" stroke="#fff" stroke-width="3">
						<circle cx="25" cy="25" r="25" stroke="none" />
						<circle cx="25" cy="25" r="23.5" fill="none" />
					</g>
					<g id="facebook" transform="translate(-5.923 10.734)">
						<path id="Path_985" data-name="Path 985"
							d="M36.645.006,33.014,0C28.935,0,26.3,2.7,26.3,6.891v3.177H22.648a.571.571,0,0,0-.571.571v4.6a.571.571,0,0,0,.571.571H26.3V27.429A.571.571,0,0,0,26.87,28h4.763a.571.571,0,0,0,.571-.571V15.813h4.269a.571.571,0,0,0,.571-.571l0-4.6a.571.571,0,0,0-.571-.571H32.2V7.375c0-1.295.308-1.952,1.995-1.952h2.446a.571.571,0,0,0,.571-.571V.577A.571.571,0,0,0,36.645.006Z" />
					</g>
				</svg>
			</a>
			<a href="#">
				<svg id="yt_icon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
					<g id="Ellipse_74" data-name="Ellipse 74" fill="none" stroke="#fff" stroke-width="3">
						<circle cx="25" cy="25" r="25" stroke="none" />
						<circle cx="25" cy="25" r="23.5" fill="none" />
					</g>
					<g id="youtube-logotype" transform="translate(4.933 9)">
						<g id="Group_551" data-name="Group 551" transform="translate(7.067)">
							<path id="Path_986" data-name="Path 986"
								d="M31.953,40.165a3.2,3.2,0,0,0-2.738-2.488,85.082,85.082,0,0,0-9.482-.351,85.109,85.109,0,0,0-9.484.351,3.2,3.2,0,0,0-2.736,2.488,27.115,27.115,0,0,0-.447,5.986,27.11,27.11,0,0,0,.441,5.986,3.2,3.2,0,0,0,2.737,2.488,85.087,85.087,0,0,0,9.483.351,85.027,85.027,0,0,0,9.483-.351,3.2,3.2,0,0,0,2.737-2.488,27.131,27.131,0,0,0,.443-5.986A27.15,27.15,0,0,0,31.953,40.165ZM14.29,41.651H12.457v9.739h-1.7V41.651h-1.8v-1.6H14.29Zm4.624,9.74H17.383v-.921a2.453,2.453,0,0,1-1.749,1.038.939.939,0,0,1-.986-.628,4.311,4.311,0,0,1-.135-1.256V42.945h1.53v6.218a4.764,4.764,0,0,0,.014.6c.037.238.153.358.358.358.307,0,.628-.237.967-.717V42.945h1.531v8.446Zm5.814-2.535a6.747,6.747,0,0,1-.155,1.7,1.212,1.212,0,0,1-1.222.949,2.086,2.086,0,0,1-1.582-.934v.819h-1.53V40.056h1.53v3.7a2.073,2.073,0,0,1,1.582-.916,1.211,1.211,0,0,1,1.222.953,6.486,6.486,0,0,1,.155,1.7ZM30.5,47.447H27.443v1.5c0,.782.256,1.172.782,1.172a.658.658,0,0,0,.684-.614,9.629,9.629,0,0,0,.034-1.037H30.5v.223c0,.493-.019.833-.033.986a2.181,2.181,0,0,1-.357.917,2.118,2.118,0,0,1-1.851.916,2.191,2.191,0,0,1-1.852-.865,3.271,3.271,0,0,1-.491-1.986V45.7a3.287,3.287,0,0,1,.473-1.99,2.176,2.176,0,0,1,1.833-.866,2.126,2.126,0,0,1,1.805.866A3.32,3.32,0,0,1,30.5,45.7v1.749Z"
								transform="translate(-7.067 -24.976)" />
							<path id="Path_987" data-name="Path 987"
								d="M69.425,58.163q-.767,0-.768,1.172v.781h1.53v-.781C70.187,58.554,69.931,58.163,69.425,58.163Z"
								transform="translate(-48.28 -38.92)" />
							<path id="Path_988" data-name="Path 988"
								d="M52.268,58.163a1.1,1.1,0,0,0-.763.372v5.148a1.092,1.092,0,0,0,.763.377c.441,0,.666-.377.666-1.14v-3.6C52.934,58.554,52.71,58.163,52.268,58.163Z"
								transform="translate(-36.803 -38.92)" />
							<path id="Path_989" data-name="Path 989"
								d="M54.1,17.473a2.485,2.485,0,0,0,1.767-1.048v.931h1.547V8.82H55.87v6.524c-.343.484-.668.724-.977.724-.207,0-.329-.122-.363-.362a3.587,3.587,0,0,1-.019-.6V8.82H52.97v6.749a4.312,4.312,0,0,0,.137,1.269A.95.95,0,0,0,54.1,17.473Z"
								transform="translate(-37.783 -5.902)" />
							<path id="Path_990" data-name="Path 990"
								d="M19.506,6.815v4.639h1.715V6.815L23.284,0H21.549l-1.17,4.5L19.162,0h-1.8c.362,1.062.738,2.129,1.1,3.191A28.215,28.215,0,0,1,19.506,6.815Z"
								transform="translate(-13.953)" />
							<path id="Path_991" data-name="Path 991"
								d="M37.6,17.264a2.108,2.108,0,0,0,1.8-.874,3.339,3.339,0,0,0,.48-2.007V11.394a3.345,3.345,0,0,0-.48-2.011,2.293,2.293,0,0,0-3.6,0,3.317,3.317,0,0,0-.484,2.011v2.989A3.309,3.309,0,0,0,35.8,16.39,2.108,2.108,0,0,0,37.6,17.264Zm-.738-6.18c0-.79.24-1.183.738-1.183s.737.393.737,1.183v3.59c0,.79-.239,1.185-.737,1.185s-.738-.4-.738-1.185Z"
								transform="translate(-25.968 -5.693)" />
						</g>
					</g>
				</svg>
			</a>
		</div>
	</header>
	<div id="LandingPage___Desktop">
		<div id="Home">
			<div class="pageContent">
				<div id="HomeLeft">
					<img class="Logo" src="./img/svg/MainLOGO.svg" alt="TOURGO logo (coloured)" />
					<div>
						<h1>THE ULTIMATE APP <br />to explore london</h1>
						<h2>Pick from tons of cool things to do
							and reach ever-increasing discounts.</h2>
					</div>
					<button class="watchVideoBtn">
						<svg class="videoIcon" xmlns="http://www.w3.org/2000/svg" width="31.22" height="31.204"
							viewBox="0 0 31.22 31.204">
							<g id="Group_70" data-name="Group 70" transform="translate(10.534 7.216)">
								<g id="Group_69" data-name="Group 69">
									<path id="Path_320" data-name="Path 320"
										d="M138.3,92.856a.589.589,0,0,0-.217-.217l-6.759-3.916-.034-.017-6.725-3.865a.589.589,0,0,0-.882.511v15.6a.589.589,0,0,0,.93.48l6.711-3.855,6.759-3.916A.589.589,0,0,0,138.3,92.856Z"
										transform="translate(-123.68 -84.763)" />
								</g>
							</g>
							<g id="Group_72" data-name="Group 72">
								<g id="Group_71" data-name="Group 71">
									<path id="Path_321" data-name="Path 321"
										d="M15.61,0A15.6,15.6,0,1,0,31.22,15.6,15.606,15.606,0,0,0,15.61,0Zm0,28.307A12.7,12.7,0,1,1,28.321,15.6,12.708,12.708,0,0,1,15.61,28.307Z" />
								</g>
							</g>
						</svg>
						<p>What is TOURGO?</p>
					</button>
				</div>
				<div id="phone_mockup" class="phone_mockup">
					<div class="featureBubble">Feature one</div>
					<div class="featureBubble">Feature two</div>
					<div class="featureBubble">Feature three</div>
					<img id="iphone_X" src="img/png/iphone_X.png" srcset="img/png/iphone_X.png 1x, img/png/iphone_X@2x.png 2x">
				</div>
				<form id="HomeRight" action="process.php">
					<div class="HomeRightTop">
						<div>
							<p>Don’t miss the app launch and <br />
								grab your chance to <span>WIN</span> a total of
							</p>
							<p>
								<span>£500</span> with <span>TOURGO</span>'s
							</p>
							<p>
								LAUNCHING COMPETITION
							</p>
						</div>
						<div class="inputField">
							<input type="text" id="email" name="email" placeholder="Email address..." />
							<button class="goToFormBtn">
								<p>Sign Up</p>
							</button>
						</div>
						<div class="inputCheckbox">
							<label for="likeToCompete">I'd like to get notified about TOURGO<br />
								and take part in the competition</label>
							<input type="checkbox" id="likeToCompete" name="likeToCompete" />
						</div>
					</div>
				</form>
			</div>
			<div class="background">
				<div class="left"></div>
			</div>
		</div>
		<div class="Intro">
			<div id="bm"></div>
		</div>
		<div class="About">
			<h2>How does TOURGO work?</h2>
			<div class="aboutSections">
				<div class="aboutSection">
					<img src="img/png/tourgoers_activities.png"
						srcset="img/png/tourgoers_activities.png 1x, img/png/tourgoers_activities@2x.png 2x">
					<p>Choose from a wide range of TOURGO challenges</p>
				</div>
				<div class="aboutSection">
					<img src="img/png/tourgoers_rewards.png"
						srcset="img/png/tourgoers_rewards.png 1x, img/png/tourgoers_rewards@2x.png 2x">
					<p>Complete the challenge to win points</p>
				</div>
				<div class="aboutSection">
					<img src="img/png/tourgoers_restaurants.png"
						srcset="img/png/tourgoers_restaurants.png 1x, img/png/tourgoers_restaurants@2x.png 2x">
					<p>Collect more points and unlock ever-increasing discounts</p>
				</div>
			</div>
			<div class="aboutCarouselButtons">
				<button class="active"></button>
				<button></button>
				<button></button>
			</div>
		</div>
		<footer>
			<div class="Quotes">
				<h2>Get Inspired</h2>
				<div class="quotesCarousel">
					<ul class="quotesList">
						<li class="moving">
							<p>“Let us make our future now, and let us make our dreams tomorrow’s reality”<br/>
								<span>(Malala Yousafzai)</span></p>
						</li>
						<li>
							<p>“The future starts today, not tomorrow”<br/>
								<span>(Pope John Paul II)</span></p>
						</li>
						<li>
							<p>“Yesterday is not ours to recover, but tomorrow is ours to win or lose”<br/>
								<span>(Lyndon B. Johnson)</span></p>
						</li>
						<li>
							<p>“Tomorrow belongs to those who prepare for it today”<br/>
								<span>(Malcolm X)</span></p>
						</li>
					</ul>
					<div class="quoteCarouselControls">
						<div class="quoteStepperBtns">
							<a class="prevItem">
								<img src="img/png/arrow.png" height="50" width="27"/>
							</a>
							<a class="nextItem">
								<img src="img/png/arrow_rigth.png" height="50" width="27"/>
							</a>
						</div>
						<div class="quoteCarouselButtons">
							<button class="active"></button>
							<button></button>
							<button></button>
							<button></button>
						</div>
					</div>
				</div>
			</div>
			<div class="footerContent">
				<section>
					<h3>ABOUT US</h3>
					<p>TOURGO is a mobile app that aims to revolutionise the way we explore
						and enjoy London. It will allow you to pick from various exciting
						challenges to do, ranging from relaxing with friends at a bar to
						uncovering hidden gems around the city.
					</p>
				</section>
				<section>
					<h3>GET IN TOUCH</h3>
					<div>
						<h4>Address</h4>
						<address>
							66 South Street <br />
							Window 6 Wonderland
						</address>
					</div>
					<div>
						<h4>Phone</h4>
						<a href="tel:01234567">01234567</a>
					</div>
					<div>
						<h4>Email</h4>
						<a href="mailto:tourgo@tourgo.co.uk">tourgo@tourgo.co.uk</a>
					</div>
				</section>
				<section>
					<h3>SOCIAL MEDIA</h3>
					<div class="socialLinks">
						<a href="#">
							<svg id="fb_icon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
								<g id="Ellipse_74" data-name="Ellipse 74" fill="none" stroke="#fff" stroke-width="3">
									<circle cx="25" cy="25" r="25" stroke="none" />
									<circle cx="25" cy="25" r="23.5" fill="none" />
								</g>
								<g id="facebook" transform="translate(-5.923 10.734)">
									<path id="Path_985" data-name="Path 985"
										d="M36.645.006,33.014,0C28.935,0,26.3,2.7,26.3,6.891v3.177H22.648a.571.571,0,0,0-.571.571v4.6a.571.571,0,0,0,.571.571H26.3V27.429A.571.571,0,0,0,26.87,28h4.763a.571.571,0,0,0,.571-.571V15.813h4.269a.571.571,0,0,0,.571-.571l0-4.6a.571.571,0,0,0-.571-.571H32.2V7.375c0-1.295.308-1.952,1.995-1.952h2.446a.571.571,0,0,0,.571-.571V.577A.571.571,0,0,0,36.645.006Z" />
								</g>
							</svg>
						</a>
						<a href="#">
							<svg id="yt_icon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
								<g id="Ellipse_74" data-name="Ellipse 74" fill="none" stroke="#fff" stroke-width="3">
									<circle cx="25" cy="25" r="25" stroke="none" />
									<circle cx="25" cy="25" r="23.5" fill="none" />
								</g>
								<g id="youtube-logotype" transform="translate(4.933 9)">
									<g id="Group_551" data-name="Group 551" transform="translate(7.067)">
										<path id="Path_986" data-name="Path 986"
											d="M31.953,40.165a3.2,3.2,0,0,0-2.738-2.488,85.082,85.082,0,0,0-9.482-.351,85.109,85.109,0,0,0-9.484.351,3.2,3.2,0,0,0-2.736,2.488,27.115,27.115,0,0,0-.447,5.986,27.11,27.11,0,0,0,.441,5.986,3.2,3.2,0,0,0,2.737,2.488,85.087,85.087,0,0,0,9.483.351,85.027,85.027,0,0,0,9.483-.351,3.2,3.2,0,0,0,2.737-2.488,27.131,27.131,0,0,0,.443-5.986A27.15,27.15,0,0,0,31.953,40.165ZM14.29,41.651H12.457v9.739h-1.7V41.651h-1.8v-1.6H14.29Zm4.624,9.74H17.383v-.921a2.453,2.453,0,0,1-1.749,1.038.939.939,0,0,1-.986-.628,4.311,4.311,0,0,1-.135-1.256V42.945h1.53v6.218a4.764,4.764,0,0,0,.014.6c.037.238.153.358.358.358.307,0,.628-.237.967-.717V42.945h1.531v8.446Zm5.814-2.535a6.747,6.747,0,0,1-.155,1.7,1.212,1.212,0,0,1-1.222.949,2.086,2.086,0,0,1-1.582-.934v.819h-1.53V40.056h1.53v3.7a2.073,2.073,0,0,1,1.582-.916,1.211,1.211,0,0,1,1.222.953,6.486,6.486,0,0,1,.155,1.7ZM30.5,47.447H27.443v1.5c0,.782.256,1.172.782,1.172a.658.658,0,0,0,.684-.614,9.629,9.629,0,0,0,.034-1.037H30.5v.223c0,.493-.019.833-.033.986a2.181,2.181,0,0,1-.357.917,2.118,2.118,0,0,1-1.851.916,2.191,2.191,0,0,1-1.852-.865,3.271,3.271,0,0,1-.491-1.986V45.7a3.287,3.287,0,0,1,.473-1.99,2.176,2.176,0,0,1,1.833-.866,2.126,2.126,0,0,1,1.805.866A3.32,3.32,0,0,1,30.5,45.7v1.749Z"
											transform="translate(-7.067 -24.976)" />
										<path id="Path_987" data-name="Path 987"
											d="M69.425,58.163q-.767,0-.768,1.172v.781h1.53v-.781C70.187,58.554,69.931,58.163,69.425,58.163Z"
											transform="translate(-48.28 -38.92)" />
										<path id="Path_988" data-name="Path 988"
											d="M52.268,58.163a1.1,1.1,0,0,0-.763.372v5.148a1.092,1.092,0,0,0,.763.377c.441,0,.666-.377.666-1.14v-3.6C52.934,58.554,52.71,58.163,52.268,58.163Z"
											transform="translate(-36.803 -38.92)" />
										<path id="Path_989" data-name="Path 989"
											d="M54.1,17.473a2.485,2.485,0,0,0,1.767-1.048v.931h1.547V8.82H55.87v6.524c-.343.484-.668.724-.977.724-.207,0-.329-.122-.363-.362a3.587,3.587,0,0,1-.019-.6V8.82H52.97v6.749a4.312,4.312,0,0,0,.137,1.269A.95.95,0,0,0,54.1,17.473Z"
											transform="translate(-37.783 -5.902)" />
										<path id="Path_990" data-name="Path 990"
											d="M19.506,6.815v4.639h1.715V6.815L23.284,0H21.549l-1.17,4.5L19.162,0h-1.8c.362,1.062.738,2.129,1.1,3.191A28.215,28.215,0,0,1,19.506,6.815Z"
											transform="translate(-13.953)" />
										<path id="Path_991" data-name="Path 991"
											d="M37.6,17.264a2.108,2.108,0,0,0,1.8-.874,3.339,3.339,0,0,0,.48-2.007V11.394a3.345,3.345,0,0,0-.48-2.011,2.293,2.293,0,0,0-3.6,0,3.317,3.317,0,0,0-.484,2.011v2.989A3.309,3.309,0,0,0,35.8,16.39,2.108,2.108,0,0,0,37.6,17.264Zm-.738-6.18c0-.79.24-1.183.738-1.183s.737.393.737,1.183v3.59c0,.79-.239,1.185-.737,1.185s-.738-.4-.738-1.185Z"
											transform="translate(-25.968 -5.693)" />
									</g>
								</g>
							</svg>
						</a>
						<a href="#">
							<svg id="twt_icon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
								<path id="twitter"
									d="M9.3,20.409A21.4,21.4,0,0,1,6,20.146,15.51,15.51,0,0,1,1.477,18.5L0,17.693l1.6-.526c1.749-.575,2.812-.932,4.129-1.49A5.493,5.493,0,0,1,2.9,12.406l-.372-1.13.305.047a5.549,5.549,0,0,1-.695-.857A5.261,5.261,0,0,1,1.25,7.338l.07-.986.59.229a5.519,5.519,0,0,1-.535-1.5,5.7,5.7,0,0,1,.608-3.84L2.5.3l.688.826a12.657,12.657,0,0,0,8.2,4.616,4.9,4.9,0,0,1,.3-2.605A4.878,4.878,0,0,1,13.666.861,5.957,5.957,0,0,1,17.123.012a5.522,5.522,0,0,1,3.394,1.4A11.4,11.4,0,0,0,21.76,1c.272-.1.581-.219.968-.352L24.153.154l-.929,2.653c.061-.005.124-.01.19-.012l1.521-.069-.9,1.229c-.052.07-.065.09-.083.118-.072.109-.163.245-1.4,1.893a2.324,2.324,0,0,0-.435,1.514,14.317,14.317,0,0,1-.781,5.758,10.19,10.19,0,0,1-2.735,4.052,12.081,12.081,0,0,1-5.726,2.769A17.629,17.629,0,0,1,9.3,20.409Zm0,0"
									transform="translate(12.938 15.003)" />
								<g id="Ellipse_74" data-name="Ellipse 74" fill="none" stroke="#fff" stroke-width="3">
									<circle cx="25" cy="25" r="25" stroke="none" />
									<circle cx="25" cy="25" r="23.5" fill="none" />
								</g>
							</svg>
						</a>
					</div>
				</section>
			</div>
			<div class="footNote">
				<p>copyright</p>
				<p>TOURGO</p>
				<p>2020</p>
			</div>
		</footer>
	</div>
	</div>
	</div>
	<!--<script src="./app/vid.js"></script>-->
</body>

</html>