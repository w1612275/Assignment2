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
						<h2>Image Uploaded</h2>
						<p>Your image has been succefully uploaded</p>
					</header>
					<div class="box">
						<span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
                        <?php
                            if ($_FILES["file"]["type"] == "image/png" || "image/jpeg" || "image/jpg" && $_FILES["file"]["size"] < 65536)
                            {
                                if ($_FILES["file"]["error"] > 0)
                                {
                                    echo "Error: " . $_FILES["file"]["error"] . "<br>";
                                }
                                else
                                {
                                    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
                                    echo "Type: " . $_FILES["file"]["type"] . "<br>";
                                    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br>";
                                    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
                                        if (file_exists("images/" . $_FILES["file"]["name"]))
                                        {
                                            echo $_FILES["file"]["name"] . " already exists. ";
                                        }
                                        else
                                        {
                                            move_uploaded_file($_FILES["file"]["tmp_name"],
                                            "images/" . $_FILES["file"]["name"]);
                                            echo "Saved as: " . "images/" . $_FILES["file"]["name"];
                                        }
                                }
                            }
                            else
                            {
                                if ($_FILES["file"]["type"] != "image/png" || "image/jpeg" || "image/jpg")
                                echo "File is not of the permitted type.";

                                else if ($_FILES["file"]["size"] < 65536)
                                echo "File exceeds permitted size.";
                            }
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