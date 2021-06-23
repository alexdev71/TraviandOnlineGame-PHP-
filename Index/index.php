<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Traviancx - the online multiplayer strategy game</title>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta charset="utf-8">
	<link rel="shortcut icon" href="/favicon.ico">
	<link href="css/main.css" media="screen, projection" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="content">
		<div class="appContainer" data-reactroot="">
<?php require("serverlist.php"); ?>
			
			<!-- react-empty: 2 -->
			<div id="journey">
				<div id="fixedBackgrounds"><img class="playerBG background" src="images/643bd664977b3828034ad0dabba95600.jpg" srcset="images/643bd664977b3828034ad0dabba95600.jpg 1x, images/0d6f18bde45da77ba1996ab2f4ef8f10.jpg 2x, images/931b9bb4b6dc1ea94804b15faa892f86.jpg 4x"> <img class="empireBG background" src="images/2479256fa2d26fa0dba0f980a2a76b44.jpg" srcset="images/2479256fa2d26fa0dba0f980a2a76b44.jpg 1x, images/f3f57f6e97a9faaa9a14586ee64aa8a5.jpg 2x, images/2cea512b2d3c95679f053fea97547489.jpg 4x"> <img class="battleBG background" src="images/1c7af002111ad76ab3afda296120ac6c.jpg" srcset="images/1c7af002111ad76ab3afda296120ac6c.jpg 1x, images/3b63b72264f03707114b684cbeb7814a.jpg 2x, images/d12463686f48fe52254cc491099a6a80.jpg 4x"></div>
<?php require("data/menu.php"); ?>
				<section id="playNow">
					<img class="background" src="images/e9f85679221e1ee0f8c024501d008614.jpg" srcset="images/e9f85679221e1ee0f8c024501d008614.jpg 1x, images/a3fef4b3fcba820c9b3a85a6fe359baf.jpg 2x, images/764182027f48a150eeccc0df0e7e708e.jpg 4x"> <img class="army" src="images/837a65336339937817269d86ec46e657.png" srcset="images/837a65336339937817269d86ec46e657.png 1x, images/fdcb25bee5951cfa8f0ee51803641836.png 2x, images/e16ea619d01c54c4cfc1d1425c9a772c.png 4x"> <img class="soldier" src="images/5297b24bb49449bf60adb2437fe63aae.png" srcset="images/5297b24bb49449bf60adb2437fe63aae.png 1x, images/82a31332d7b8eb1c6218e7f480980b4b.png 2x, images/98a855c75518baccbfa63e3b0ca832a7.png 4x">
					<article>
						<div>
							<h1><span>Join the famous</span><br> <!-- react-text: 79 -->EXPERT STRATEGY GAME <!-- /react-text --></h1>
						</div>
						<h2>The true MMO pioneer with thousands of real players!</h2>
						
						<br>
						
						<button id="playNowButton" style="filter:url(#dropshadow);"></button>
					
					</article>
					<div id="PlayNow_parallax_back"></div>
					<div id="PlayNow_parallax_front"></div>
				</section>
								<section id="player">
					<div id="News_parallax">
						<div id="News_parallax_back"></div>
						<div id="News_parallax_front"></div>
						<div id="News_parallax_left"></div>
						<div id="News_parallax_right"></div>
					</div>
					<section id="playstyle">
						<article>
							<h2>Choose your legend</h2>
							<div class="box default attacker inactive">
								<div class="content">
									<div class="boxHeader">
										<h4>The Hammer</h4>
									</div>
									<div class="boxBody">
										<p><span lang="EN-US"><span><span>
										Feel the sound of the drums as you run towards the gate of your enemies. 
										Laugh at their terrified faces and their tiny defenses. The horns get blown - a wasted effort. 
										You will be gone with the goods before their friends mount their horses. But raids aren't enough. 
										Your army will grow, and so will your hunger for more. You are free. 
										Free to conquer every corner of this world until all kneel in your presence.</span></span></span></p>
									</div>
								</div>
							</div>
							<div class="box default defender inactive">
								<div class="content">
									<div class="boxHeader">
										<h4>Harder than Steel</h4>
									</div>
									<div class="boxBody">
										<p><span lang="EN-US"><span><span>
										Wars aren't won in a day. 
										Let all the fools run around bashing each other while you establish a thriving economy. 
										You will be standing on top of fortified walls, mocking countless armies losing their spirit. 
										Outsmart your opponents on every move they make. Lay traps for their troops, and hold the prisoners ransom. 
										Cooperate with your neighbors, form the backbone of your alliance and become a true protector of the people.</span></span></span></p>
									</div>
								</div>
							</div>
							<div class="box default leader inactive">
								<div class="content">
									<div class="boxHeader">
										<h4>Lead with Greatness</h4>
									</div>
									<div class="boxBody">
										<p><span lang="EN-US"><span><span>Alexander. Caesar. You. Some Leaders shape entire eras of history. 
										Rise up to turn your alliance from a horde of warriors into an uncontested force.
										A true leader doesn't sit in his castle, waiting for the right moment. 
										Use your charisma and diplomatic guile to sustain power, manipulate your rivals and hold your empire together a thousand years. 
										Don't just be part of the story. Drive it. This era is yours.</span></span></span></p>
									</div>
								</div>
							</div>
						</article>
						<div class="playstyle">
							<svg>
							<filter class="filter" id="grayscale">
								<fecolormatrix type="saturate" values="0.85"></fecolormatrix>
								<fecolormatrix type="matrix" values=".14 0 0 0 0 0 .11 0 0 0 0 0 .14 0 0 0 0 0 1 0"></fecolormatrix>
							</filter></svg> <img alt="defender" class="defender inactive" src="images/8b8c3560513710475cae235c784c9f23.png" srcset="images/8b8c3560513710475cae235c784c9f23.png 1x, images/ddf88826ca0091ae8f098b3aea3a01e1.png 2x, images/4a99d7b3c7acd5ced1c5ecd345f60148.png 4x" style="filter:url(#grayscale);"> <img alt="attacker" class="attacker inactive" src="images/6893dd4abd92c347f1f82863785fb2d5.png" srcset="images/6893dd4abd92c347f1f82863785fb2d5.png 1x, images/38680c212e71edb94a8d62e1fe98a988.png 2x, images/e59507a8c7cb206dd047bd263e4dc377.png 4x" style="filter:url(#grayscale);"> <img alt="leader" class="leader inactive" src="images/ace77be8a9421650e1d6a627116be331.png" srcset="images/ace77be8a9421650e1d6a627116be331.png 1x, images/7a9227a1491994378f43535e8a68149f.png 2x, images/05f1cad9066253fad91ed77b730fec0e.png 4x" style="filter:url(#grayscale);"> <svg class="defender inactive" data-type="defender" viewbox="0 0 436 990">
							<path d="M272 2c4 3 20 68 18 79s-7 19-4 31c5 0 8 0 11 2l-8 5c-2 25 4 52 4 82h3c11 7 28-5 42 0s14 24 20 40 24 40 27 52l-2 8 10 14-3 10c3 27 27 35 7 70-5 0-29 6-31 8 11 24 29 42 46 60-28 34 30 78 23 116-3 15-18 31-28 40h-2l-2-18h-3c-10 17-18 38-30 53 7 20 8 54 0 72 4 11 10 23 18 31-8 39-6 93 3 128 3 13-6 12 1 22l-5 7c4 16 11 35 15 51-12 23-52 7-69 3 1 7 3 16-2 19h-10l-9-175-2-33c-5-12-7-1-5-22-18 12-83 35-92 50-10 27-11 71-19 95-5 13 5 28-2 39-21 2-98 33-111 7-2-6 0-10 2-15l18-3v-8l26-17c9-7 14-20 22-28-7-5 3-102-4-119L55 562-1 430l32-59c7-9 65-35 78-38l38 5c1-7 9-39 7-44s-6-10-6-23c15-10 30-22 41-36-29-14-42-96-7-112 8-5 13 1 19 3l19 3c16 7 32 28 34 48 7 0 8 1 11 5l-9 9v3c5 2 13 6 22 4-9-24 0-55-6-78-6 0-6-1-9-3l2-3c8 0 10 0 10-9-10-24-9-70-3-103z" data-type="defender"></path></svg> <svg class="attacker inactive" data-type="attacker" viewbox="0 0 507 846">
							<path d="M184 7c33 6 47 16 61 41l-8-5c2 9 6 14 13 18s6-8 11-14l51-28 9 7c8 23 16 55 53 44-2 25-37 51-63 53 12 16 54 77 45 95 5 16 14 28 18 47 7 34-4 94 1 135l116 25 3 8-8 10-22-9-98-20c-5 11-21 7-34 7 6 47-8 95 0 142 4 19 17 33 20 49s-9 34-6 49 19 35 21 54l-9-3h-1l5 13-22 18c4 8 0 18 3 28 6 21 38 65 1 73-48 11-33-75-37-101-11-4-20-14-32-15v2l4 13c-13 0-16 0-26-4-5-17-6-21-18-28l-7-47h-1c0 24 10 95 2 115l-32 2c-18 5-53 24-74 5 2-6 4-12 7-17 20-4 43-16 49-30s0-11 3-16 6 1 7-8-12-26-16-35l-46-100c2-1-1-71 0-89l-7-5c2-12 2-56-1-58s-18-5-23-16c9-18 21-35 25-57l-6-5c1-8 8-38 15-40s10 2 15 0c2-16 12-61 6-76v2c-9 12-18 25-37 26s-13-9-20-15c-30-23-25-28-34-70-15-1-30 16-39 25s-23-6-21-15l51-24c0-8 0-14 3-18s23-20 35-14l8 8 72-34c-3-12-9-11-13-19-11-20-7-56 8-68s15-6 20-11z" data-type="attacker"></path></svg> <svg class="leader inactive" data-type="leader" viewbox="0 0 424 873">
							<path d="M202 1c63-1 36 60 35 98 12 6 20 8 26 23 7 0 12 0 16 3s3 12 7 19 34 25 31 49c-1 6 5 29 2 35s-7 31-4 41c7 24 29 41 43 59 25 31 57 72 65 117-25 9-1 42-5 62s-18 34-26 49c17 37-2 46-7 84-2 18 12 25 13 42-18 38-65 82-116 84 4 21-7 23-21 34 11 13 38 15 45 26l4 12c-16 7-45 15-68 5l-9-8c-12-5-26-1-35-8s-1-16 1-24c-21-3-46-19-60-33v-28c-4 18-14 36-19 52s0 21-3 30l-5-5c0 18 7 35-2 47s-51 10-61-5c2-19 13-32 24-43l-4 2h-3v-3c16-16 10-49 14-78v-21c3-11 0-39 3-46s6-6 7-10-4-15-2-19 7-5 9-11c-11-19-5-18-1-34l-5-18c-3-14 5-31 4-39l-7-17-16-66c-7-31-1-68-9-101l-11-24c-5-2-9-1-11-4-12-23 1-67 7-86l-3-21c7-23 29-36 41-53s8-22 14-32c17-5 31-13 51-17 2-6 8-18 14-21l11-2c1-5 6-10 3-16s-9-8-11-13 1-46 7-54 20-9 27-13z" data-type="leader"></path></svg>
						</div>
					</section>
					<section id="interaction">
						<article>
							<h2>Play with thousands of others</h2>
							<div class="box default">
								<div class="content">
									<div class="boxHeader">
										<h4>A True MMO experience</h4>
									</div>
									<div class="boxBody">
										<p><span lang="EN-US"><span><span>
										Enter a story entirely told by a complex web of player actions. 
										Travel a world so vast, it takes days for the fastest rider to cross it. 
										Ferocious Teutons, tough Romans and crafty Gauls will be at your sideвЂ¦ or in your way. 
										Trade systems fully run by players enable the right person to make a fortune. 
										Try owning every unique artefact - or build the fastest Wonder of the World in history. 
										In Travian: Legends, you can be whoever you want.</span></span></span></p>
									</div>
								</div>
							</div>
						</article>
						<div id="Interaction_parallax_back"></div>
						<div id="Interaction_parallax_front"></div>
					</section>
				</section>
				<section id="buildEmpire">
					<article>
						<h2>Expert-Strategy Paradise</h2>
						<div class="box default">
							<div class="content">
								<div class="boxHeader">
									<h4>The road to dominion</h4>
								</div>
								<div class="boxBody">
									<p><span lang="EN-US"><span><span>
									The greatest ascendancies all began the same way: by laying the first stone. 
									From then on, it's entirely in your hands. Expand your reach until that first settlement in the shade of a tree becomes an empire on which the sun never sets. 
									Explore the world and find oases of wealth. And ultimately, eliminate all those trying to get in your way. 
									The fruits of your labor will show with each building, each soldier and each advancement that makes your civilization flourish.</span></span></span></p>
								</div>
							</div>
						</div>
					</article>
				</section>
				<section id="battle">
					<article>
						<h2>Epic MMO Warfare</h2>
						<div class="box default">
							<div class="content">
								<div class="boxHeader">
									<h4>Prove yourself</h4>
								</div>
								<div class="boxBody">
									<p><span lang="EN-US"><span><span>
									Flaming debris soaring through the sky, shattering buildings and hopes of defense. 
									The ground shakes from the incoming army, the sky turns dark from the smoke. 
									Welcome to the playground for grown-ups. Prove what you are made of against thousands of other players and earn your place in the world of Travian. 
									Excel with the smartest strategy, or just raid them on the hour, every hour. 
									History isn't made in old town halls, it's decided on the battlefield. Are you the coward - or the conqueror?</span></span></span></p>
								</div>
							</div>
						</div>
					</article>
					<div id="Battle_parallax_back"></div>
					<div id="Battle_parallax_front"></div>
				</section>
				<section id="lateGame">
					<div id="LateGame_parallax_back"></div>
					<div id="LateGame_parallax_front"></div>
					<div id="LateGame_parallax_start"></div>
					<div id="LateGame_parallax_end"></div><img class="background" src="images/28c9503d899e0f0a7d29dea60166fa93.jpg" srcset="images/28c9503d899e0f0a7d29dea60166fa93.jpg 1x, images/32becdc5fc6d817689d80c9cbdffffe7.jpg 2x, images/3674341f8e68d0e5ed8be23128c63486.jpg 4x">
					<article>
						<h2>Monuments of Eternity</h2>
						<div class="box default">
							<div class="content">
								<div class="boxHeader">
									<h4>The Wonder of the World</h4>
								</div>
								<div class="boxBody">
									<p><span lang="EN-US"><span><span>
									You haven`t felt true power until you build something so monumental, the whole world pauses to pay it tribute. 
									Erect a Wonder of the World together with your alliance, and the server is yours. 
									The largest wars will be fought, the strongest confederacies will struggle, and in the end, it might be down to one, single, deciding move. 
									In this moment of truth, friends become bitter enemies, and old rivals form desperate alliances. 
									It`s time for heroes to become legends. Are you ready?</span></span></span></p>
								</div>
							</div>
						</div>
					</article>
				</section>
				<footer class="footer">
					<div class="footerInnerWrapper">
						<h3><span>Join an epic scaled battle with thousands of real players!</span></h3>
					</div>
					<div class="footerInnerWrapper">
						<div class="legal">
							<div class="travianGamesLogo"></div>
							<div class="rightOfLogo">
								<div class="copyright">
									<span> 2020 - <?php echo date("Y"); ?> Traviancx Games</span>
								</div>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
		<div class="scripts">
			<script src="js/lib/greensock/TweenMax.min.js" type="text/javascript">
			</script> 
			<script src="js/lib/jquery.min.js" type="text/javascript">
			</script> 
			<script src="js/lib/highlight.pack.js" type="text/javascript">
			</script> 
			<script src="js/lib/modernizr.custom.min.js" type="text/javascript">
			</script> 
			<script src="js/ScrollMagic.min.js" type="text/javascript">
			</script> 
			<script src="js/plugins/debug.addIndicators.min.js" type="text/javascript">
			</script> 
			<script src="js/plugins/animation.gsap.min.js" type="text/javascript">
			</script> 
			<script src="js/script.min.js" type="text/javascript">
			</script>
			<script src="js/coupons.js" type="text/javascript">
			</script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		</div>
	</div>
</body>
</html>