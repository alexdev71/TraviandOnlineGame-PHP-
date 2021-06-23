<div class="Modal playNowModal overlay" id="overlay" role="none" style="display:none">
				<div class="mobileCloseButton" role="none">
					<svg class="modalClose" viewbox="-6 -6 20 20">
					<path d="M2,18.4c6-12.3,14.4-18,14.4-18" transform="scale(.5)"></path>
					<path d="M0.2,2.2C8.8,7,16.1,16.7,16.1,16.7" transform="scale(.5)"></path></svg>
				</div>
				<div id="Login" class="popupBox">
					<div class="box default">
						<div class="boxTitle">
							<svg>
							<defs>
								<filter class="filter" id="blurMe">
									<fegaussianblur in="SourceGraphic" stddeviation="2"></fegaussianblur>
								</filter>
								<lineargradient id="gradient" x1="0" x2="0" y1="0" y2="1">
									<stop offset="0%" style="stop-color: rgb(73, 34, 8);"></stop>
									<stop offset="90%" style="stop-color: rgb(182, 131, 99);"></stop>
									<stop offset="100%" style="stop-color: rgb(182, 131, 99);"></stop>
								</lineargradient>
								<path class="shape" d="M.5 27.6s15.7-6.3 25.7-9c11-3 17-3.5 26.1-3.7 16.2.7 16.9.8 24.7 1 6.1 0 6.6-.6 16.7-.6h13.7s12.8-.8 21.9-2c16.6-2.1 23.8-1 35.3.4 26.2 3.5 39.4 6.5 42.9 7.8.3-3.3.6-5.3.7-7.6.2-3.9.1-4.7.3-13.9C205.5 0 0 .8 0 .8s.3 8.7.3 11.7c0 2.3.4 6.8.5 9.6 0 3.5-.3 5.5-.3 5.5z" fill="inherit" id="shape" style="fill: url(&quot;#gradient&quot;) none;"></path>
								<path class="shapes" d="M.5 27.6s15.7-6.3 25.7-9c11-3 17-3.5 26.1-3.7 16.2.7 16.9.8 24.7 1 6.1 0 6.6-.6 16.7-.6h13.7s12.8-.8 21.9-2c16.6-2.1 23.8-1 35.3.4 26.2 3.5 39.4 6.5 42.9 7.8.3-3.3.6-5.3.7-7.6.2-3.9.1-4.7.3-13.9C205.5 0 0 .8 0 .8s.3 8.7.3 11.7c0 2.3.4 6.8.5 9.6 0 3.5-.3 5.5-.3 5.5z" fill="inherit" id="shape" style="fill: url(&quot;#gradient&quot;) none;"></path>
							</defs><svg>
							<g>
								<svg>
								<use xlink:href="#shape"></use></svg>
								<pattern height="28" id="pattern" patternunits="userSpaceOnUse" preserveaspectratio="xMidYMin slice" viewbox="0 0 209 28" width="28" x="86" y="0">
									<use xlink:href="#shape"></use>
								</pattern>
								<rect height="28" style="fill: url(&quot;#pattern&quot;) none;" width="100%"></rect><svg><svg>
								<use xlink:href="#shape"></use></svg></svg>
							</g></svg></svg>
							<h1><span>Choose server to PLAY!</span></h1>
						</div>
						<div class="content">
							<div class="boxBody">
								<div class="worldSelection shown">
									<div class="transformWrapper">
										<div class="worldGroup">
<?php
$db = mysqli_connect("localhost", "travianc_egyiptomi", "19790316aAq", "travianc_egyiptomi1");
$count_users = mysqli_num_rows($db->query("SELECT * FROM `users` WHERE `id` > 4"));
$count_online = mysqli_num_rows($db->query("SELECT * FROM `users` WHERE " . time() . "-`timestamp` < (60*60) AND tribe!=5 AND tribe!=0"));
$t = strtotime('12.09.2020 00:00:00');
if($t > time()){$count_online = 0;}
$timeserver = round((time() - $t) / 86400);
$da = mysqli_fetch_array($db->query("SELECT * FROM `config` WHERE 1"));
$winn = $da['winmoment'];
?>
											<div class="world default" role="none" data-url="https://traviancx.hu/login.php">
												<h2>Server &times;X1,000</h2>
												<p>Total Players: <strong><font color=#00FF00><?php echo $count_users; ?></font></strong> Online Players: <strong><font color=#00FF00><?php echo $count_online; ?></font></strong></p>
												<p class="spacer"></p>
												<div class="serverTime" title="Server age">
													<svg class="clock" viewBox="0 0 74 74"><circle cx="37" cy="37" r="33"></circle><path d="M33.67 13v27.33h26"></path></svg>
													<span><?php if($t <= time()){if($winn == 0){echo $timeserver.' days ago';}else{echo 'Server finished';}}else{echo 'Start '.date("d.m.Y G:i:s", $t);} ?></span>
												</div>
											</div>
											
<?php
// Server SV1
$db1 = mysqli_connect("localhost", "travianc_egyptom", "19790316aAq", "travianc_egyopot");
$count_users1 = mysqli_num_rows($db1->query("SELECT * FROM `users` WHERE `id` > 4"));
$count_online1 = mysqli_num_rows($db1->query("SELECT * FROM `users` WHERE " . time() . "-`timestamp` < (60*60) AND tribe!=5 AND tribe!=0"));
$t1 = strtotime('21.05.2020 12:00:00');
if($t1 > time()){$count_online1 = 0;}
$timeserver1 = round((time() - $t1) / 86400);
$da1 = mysqli_fetch_array($db1->query("SELECT * FROM `config` WHERE 1"));
$winn1 = $da1['winmoment'];

?>
											
											<div class="world default" role="none" data-url="https://hu.traviancx.hu/login.php">
												<h2>Server &times;x1,00</h2>
												<p>Total Players: <strong><font color=#00FF00><?php echo $count_users1; ?></font></strong> Online Players: <strong><font color=#00FF00><?php echo $count_online1; ?></font></strong></p>
												<p class="spacer"></p>
												<div class="serverTime" title="Server age">
													<svg class="clock" viewBox="0 0 74 74"><circle cx="37" cy="37" r="33"></circle><path d="M33.67 13v27.33h26"></path></svg>
													<span><?php if($t1 <= time()){if($winn1 == 0){echo $timeserver1.' days ago';}else{echo 'Server finished';}}else{echo 'Start '.date("d.m.Y G:i:s", $t1);} ?></span>
												</div>
											</div>
											
											
<?php
// Server SV2
$db2 = mysqli_connect("localhost", "travianc_ravit", "19790316aAq", "travianc_ravit1");
$count_users2 = mysqli_num_rows($db2->query("SELECT * FROM `users` WHERE `id` > 4"));
$count_online2 = mysqli_num_rows($db2->query("SELECT * FROM `users` WHERE " . time() . "-`timestamp` < (60*60) AND tribe!=5 AND tribe!=0"));
$t2 = strtotime('1.06.2020 12:00:00');
if($t2 > time()){$count_online2 = 0;}
$timeserver2 = round((time() - $t2) / 86400);
$da2 = mysqli_fetch_array($db2->query("SELECT * FROM `config` WHERE 1"));
$winn2 = $da2['winmoment'];

?>
											
											<div class="world tournament" role="none" data-url="https://ravit.traviancx.hu/login.php">
												<h2>Server &times;100</h2>
												<p>Total Players: <strong><font color=#00FF00><?php echo $count_users2; ?></font></strong> Online Players: <strong><font color=#00FF00><?php echo $count_online2; ?></font></strong></p>
												<p class="spacer"></p>
												<div class="serverTime" title="Server age">
													<svg class="clock" viewBox="0 0 74 74"><circle cx="37" cy="37" r="33"></circle><path d="M33.67 13v27.33h26"></path></svg>
													<span><?php if($t2 <= time()){if($winn2 == 0){echo $timeserver2.' days ago';}else{echo 'Server finished';}}else{echo 'Start '.date("d.m.Y G:i:s", $t2);} ?></span>
												</div>
											</div>

<?php
// Server SV3
$db3 = mysqli_connect("localhost", "travianc_natix", "19790316aAq", "travianc_nati");
$count_users3 = mysqli_num_rows($db3->query("SELECT * FROM `users` WHERE `id` > 4"));
$count_online3 = mysqli_num_rows($db3->query("SELECT * FROM `users` WHERE " . time() . "-`timestamp` < (60*60) AND tribe!=5 AND tribe!=0"));
$t3 = strtotime('1.06.2020 12:00:00');
if($t3 > time()){$count_online3 = 0;}
$timeserver3 = round((time() - $t3) / 86400);
$da3 = mysqli_fetch_array($db3->query("SELECT * FROM `config` WHERE 1"));
$winn3 = $da3['winmoment'];

?>
											
											<div class="world tournament" role="none" data-url="https://nati.traviancx.hu/login.php">
												<h2>Server &times;100</h2>
												<p>Total Players: <strong><font color=#00FF00><?php echo $count_users3; ?></font></strong> Online Players: <strong><font color=#00FF00><?php echo $count_online3; ?></font></strong></p>
												<p class="spacer"></p>
												<div class="serverTime" title="Server age">
													<svg class="clock" viewBox="0 0 74 74"><circle cx="37" cy="37" r="33"></circle><path d="M33.67 13v27.33h26"></path></svg>
													<span><?php if($t3 <= time()){if($winn3 == 0){echo $timeserver3.' days ago';}else{echo 'Server finished';}}else{echo 'Start '.date("d.m.Y G:i:s", $t3);} ?></span>
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>