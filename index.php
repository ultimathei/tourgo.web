<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TOURGO LandingPage Prototype</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<link rel="stylesheet" type="text/css" href="./css/Header.css">
	<link rel="stylesheet" type="text/css" href="./css/Home.css">
	<link rel="stylesheet" type="text/css" href="./css/Intro.css">
	<link rel="stylesheet" type="text/css" href="./css/About.css">
	<link rel="stylesheet" type="text/css" href="./css/Quotes.css">
	<link rel="stylesheet" type="text/css" href="./css/Footer.css">

	<script src="libs/jquery-3.5.0.min.js"></script>
	<script src="./app/app.js"></script>
</head>

<body>
	<header class="nav-up">
		<img class="Logo" src="./img/svg/MainLOGO.svg" alt="TOURGO logo (coloured)" />
		<div class="socialLinks">
			<a href="#" target="_blank">
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
			<a href="#" target="_blank">
				<svg id="insta_icon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
					<g id="Ellipse_74" data-name="Ellipse 74" fill="none" stroke="#fff" stroke-width="3">
						<circle cx="25" cy="25" r="25" stroke="none" />
						<circle cx="25" cy="25" r="23.5" fill="none" />
					</g>
					<g id="instagram" transform="translate(11.104 11.293)">
						<path id="Path_992" data-name="Path 992"
							d="M27.1,7.857a9.766,9.766,0,0,0-.621-3.242A6.846,6.846,0,0,0,22.57.7,9.791,9.791,0,0,0,19.328.084C17.9.016,17.443,0,13.815,0S9.732.016,8.307.078A9.768,9.768,0,0,0,5.065.7a6.521,6.521,0,0,0-2.37,1.545A6.58,6.58,0,0,0,1.154,4.61,9.792,9.792,0,0,0,.533,7.852C.465,9.283.449,9.737.449,13.365s.016,4.083.078,5.508a9.765,9.765,0,0,0,.621,3.242,6.845,6.845,0,0,0,3.91,3.91,9.792,9.792,0,0,0,3.242.621c1.425.063,1.88.078,5.508.078s4.083-.015,5.508-.078a9.763,9.763,0,0,0,3.242-.621,6.836,6.836,0,0,0,3.911-3.91,9.8,9.8,0,0,0,.621-3.242c.063-1.425.078-1.88.078-5.508S27.164,9.283,27.1,7.857ZM24.7,18.769a7.325,7.325,0,0,1-.459,2.48A4.433,4.433,0,0,1,21.7,23.786a7.351,7.351,0,0,1-2.48.459c-1.41.063-1.832.078-5.4.078s-3.994-.016-5.4-.078a7.322,7.322,0,0,1-2.48-.459,4.112,4.112,0,0,1-1.535-1,4.155,4.155,0,0,1-1-1.535,7.352,7.352,0,0,1-.459-2.48c-.063-1.41-.078-1.833-.078-5.4s.015-3.994.078-5.4A7.322,7.322,0,0,1,3.409,5.5a4.062,4.062,0,0,1,1-1.535,4.149,4.149,0,0,1,1.535-1,7.356,7.356,0,0,1,2.48-.459c1.41-.063,1.833-.078,5.4-.078s3.994.016,5.4.078a7.325,7.325,0,0,1,2.48.459,4.11,4.11,0,0,1,1.535,1,4.154,4.154,0,0,1,1,1.535,7.355,7.355,0,0,1,.459,2.48c.063,1.41.078,1.832.078,5.4S24.758,17.359,24.7,18.769Zm0,0"
							 />
						<path id="Path_993" data-name="Path 993"
							d="M131.815,124.5a6.865,6.865,0,1,0,6.865,6.865A6.867,6.867,0,0,0,131.815,124.5Zm0,11.319a4.453,4.453,0,1,1,4.453-4.453A4.454,4.454,0,0,1,131.815,135.819Zm0,0"
							transform="translate(-118 -118)"  />
						<path id="Path_994" data-name="Path 994"
							d="M365.655,90.2a1.6,1.6,0,1,1-1.6-1.6A1.6,1.6,0,0,1,365.655,90.2Zm0,0"
							transform="translate(-343.1 -83.976)"/>
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
						<!--
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
					-->
						<p>What is TOURGO?</p>
					</button>
				</div>
				<div id="phone_mockup" class="phone_mockup">
					<div class="featureBubble">Feature one</div>
					<div class="featureBubble">Feature two</div>
					<div class="featureBubble">Feature three</div>
					<img id="iphone_X" src="img/png/iphone_X.png">
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
			<div class="Accordion">
				<div class="titles">
					<a class="active">What is TOURGO?</a>
					<a>Why TOURGO?</a>
					<a>Our story</a>
				</div>
				<div class="texts">
					<p class="active">TOURGO is a mobile app that aims to revolutionise the way we explore
						and enjoy London. It will allow you to pick from various exciting
						challenges to do, ranging from relaxing with friends at a bar to
						uncovering hidden secrets around the city.
						<br /><br />When you complete a challenge, you will be rewarded with points
						according to the difficulty level. The points you collected will determine
						the discounts you can use at our partner eateries.
					</p>

					<p>Because TOURGO brings all the fun you wanted in only one place.
						It’s all-in-one and combines plenty of fun local activities, amazing
						discounts and a blend of gamification.<br /><br />
						Finally, our leisure time will be even more engaging, easier to figure out
						and cheaper!</p>
					<p>
						TOURGO is the story of two London based students trying to make their time away from the library desk more
						captivating and rewarding. After exhausting the conventional ways of seeing the city, they wanted
						something to make exploring London as exciting as like never-before.<br/><br/>
						Supported by their studies and specialist interests while dealing with
						crazy term schedules and gamer raging flatmates, they finally
						envisioned an app destined to change the way we experience London.
						Foolish as it may seem, they imagined a city where people are happier
						and their lives more compelling and fun. That’s how<br/><br/>
						TOURGO WAS BORN, TO BE NOT JUST A REGULAR APP, BUT A NEW
						WAY OF LIFE.<br/><br/>
						Today, a passionate and skilled TOURGO team is turning this vision into
						reality.

					</p>
				</div>
			</div>
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
						<li class="moving testQuote">
							<p>“Let us make our future now, and let us make our dreams tomorrow’s reality”<br />
								<span>(Malala Yousafzai)</span></p>
						</li>
						<li>
							<p>“The future starts today, not tomorrow”<br />
								<span>(Pope John Paul II)</span></p>
						</li>
						<li>
							<p>“Yesterday is not ours to recover, but tomorrow is ours to win or lose”<br />
								<span>(Lyndon B. Johnson)</span></p>
						</li>
						<li>
							<p>“Tomorrow belongs to those who prepare for it today”<br />
								<span>(Malcolm X)</span></p>
						</li>
					</ul>
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
						<a href="#" target="_blank">
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
						<a href="#" target="_blank">
							<svg id="insta_icon" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
								<g id="Ellipse_74" data-name="Ellipse 74" fill="none" stroke="#fff" stroke-width="3">
									<circle cx="25" cy="25" r="25" stroke="none" />
									<circle cx="25" cy="25" r="23.5" fill="none" />
								</g>
								<g id="instagram" transform="translate(11.104 11.293)">
									<path id="Path_992" data-name="Path 992"
										d="M27.1,7.857a9.766,9.766,0,0,0-.621-3.242A6.846,6.846,0,0,0,22.57.7,9.791,9.791,0,0,0,19.328.084C17.9.016,17.443,0,13.815,0S9.732.016,8.307.078A9.768,9.768,0,0,0,5.065.7a6.521,6.521,0,0,0-2.37,1.545A6.58,6.58,0,0,0,1.154,4.61,9.792,9.792,0,0,0,.533,7.852C.465,9.283.449,9.737.449,13.365s.016,4.083.078,5.508a9.765,9.765,0,0,0,.621,3.242,6.845,6.845,0,0,0,3.91,3.91,9.792,9.792,0,0,0,3.242.621c1.425.063,1.88.078,5.508.078s4.083-.015,5.508-.078a9.763,9.763,0,0,0,3.242-.621,6.836,6.836,0,0,0,3.911-3.91,9.8,9.8,0,0,0,.621-3.242c.063-1.425.078-1.88.078-5.508S27.164,9.283,27.1,7.857ZM24.7,18.769a7.325,7.325,0,0,1-.459,2.48A4.433,4.433,0,0,1,21.7,23.786a7.351,7.351,0,0,1-2.48.459c-1.41.063-1.832.078-5.4.078s-3.994-.016-5.4-.078a7.322,7.322,0,0,1-2.48-.459,4.112,4.112,0,0,1-1.535-1,4.155,4.155,0,0,1-1-1.535,7.352,7.352,0,0,1-.459-2.48c-.063-1.41-.078-1.833-.078-5.4s.015-3.994.078-5.4A7.322,7.322,0,0,1,3.409,5.5a4.062,4.062,0,0,1,1-1.535,4.149,4.149,0,0,1,1.535-1,7.356,7.356,0,0,1,2.48-.459c1.41-.063,1.833-.078,5.4-.078s3.994.016,5.4.078a7.325,7.325,0,0,1,2.48.459,4.11,4.11,0,0,1,1.535,1,4.154,4.154,0,0,1,1,1.535,7.355,7.355,0,0,1,.459,2.48c.063,1.41.078,1.832.078,5.4S24.758,17.359,24.7,18.769Zm0,0"
										 />
									<path id="Path_993" data-name="Path 993"
										d="M131.815,124.5a6.865,6.865,0,1,0,6.865,6.865A6.867,6.867,0,0,0,131.815,124.5Zm0,11.319a4.453,4.453,0,1,1,4.453-4.453A4.454,4.454,0,0,1,131.815,135.819Zm0,0"
										transform="translate(-118 -118)"  />
									<path id="Path_994" data-name="Path 994"
										d="M365.655,90.2a1.6,1.6,0,1,1-1.6-1.6A1.6,1.6,0,0,1,365.655,90.2Zm0,0"
										transform="translate(-343.1 -83.976)"/>
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
</body>

</html>