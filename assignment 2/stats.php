<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Generic - Alpha by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="index.html">Web Server Scripting</a> by Owen Ward</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>
								<a href="#" class="icon fa-angle-down">Layouts</a>
								<ul>
                                    <li><a href="screen.html">P2 System Checker</a></li>
									<li><a href="upload.php">P3 Image Uploader</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="elements.html">Elements</a></li>
									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Option One</a></li>
											<li><a href="#">Option Two</a></li>
											<li><a href="#">Option Three</a></li>
											<li><a href="#">Option Four</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="login.php" class="button">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>Generic</h2>
						<p>A generic page for every non-generic situation.</p>
					</header>
					<div class="box">
						<?php
                            $now = date("d-m-Y");
                            $dbsql = "stats";
                            $db = mysql_connect( "mysql.hostinger.co.uk", "u696084782_wstat", "webstats1");

                            mysql_select_db( "u696084782_wstat", $db);

                            echo "<center><h1>Web Statistics</h1></center>";
                            echo "<center><table border=1 width=80%><tr><td colspan=3><b>Web statistics
                            from:</b> ";

                            $sql = "SELECT ondate FROM $dbsql ORDER BY id LIMIT 1";
                            $results = mysql_query($sql);

                            while($myrow = mysql_fetch_array($results))
                            {
                                $temp_date = $myrow["ondate"];
                                $date = substr($temp_date, 8, 4)."-".substr($temp_date, 5, 2)."-
                                ".substr($temp_date, 0, 4);
                                echo $date;
                            }
                            echo " <b>To:</b> $now</td></tr>";

                            $sql = "SELECT COUNT(*) AS Count FROM $dbsql" ;
                            $results = mysql_query ($sql);

                            while ($myrow = mysql_fetch_array($results))
                            {
                                $overall_total = $myrow ["Count"];
                            }

                            echo "<tr><td colspan=3><b>Total number of hits:
                            </b>$overall_total</td></tr>";

                            echo "<tr><td><b>Date</b></td><td><b>IP Address</b></td><td><b>Browser and
                            Operating
                            system</b></td></tr>";

                            $sql = "SELECT * FROM $dbsql";
                            $results = mysql_query($sql);
                            while ($myrow = mysql_fetch_array($results))
                            {
                                $ip = $myrow["ip"];
                                $browser = $myrow["browser"];
                                $ondate = $myrow["ondate"];
                                echo "<tr><td>$ondate</td><td>$ip</td><td>$browser</td></tr>";
                            }
                            $sql = "SELECT COUNT(*) AS Count FROM $dbsql" ;
                            $results = mysql_query ($sql);
                            while ($myrow = mysql_fetch_array($results))
                            {
                                $overall_total = $myrow ["Count"];
                            }
                            echo "</table></center>";
                        ?>
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>