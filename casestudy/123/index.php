
<!DOCTYPE HTML>

<html>
	<head>
		<?php 	
		require('server.php');
?>
		<title>DLL DLP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/mainfinal.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper-->
			<div id="wrapper">
				<h1>Welcome <?php echo $_SESSION['username'] ?> </h1>
				<!-- Nav -->
					<nav id="nav">
						<a href="#" class="icon solid fa-home"><span>Home</span></a>
						<a href="#work" class="icon solid fa-folder"><span>Logs</span></a>
						<a href="#contact" class="icon solid fa-envelope"><span>Contact</span></a>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Me -->
							<article id="home" class="panel intro">
								<header>
									<h1>Grade 7</h1>
									<p>Lesson plans and Lesson logs</p>
								</header>
								<a href="#work" class="jumplink pic">
									<span class="arrow icon solid fa-chevron-right"><span>See my work</span></span>
									<img src="images/me.jpg" alt="" />
								</a>
							</article>

<!-- Module -->
							<article id="work" class="panel">
								<header>
									<h2>Lesson plan</h2>
								
									<button class="button button1"><a href="index.php">Grade 7</a></button>
									<button class="button button1"><a href="grade 8.php">Grade 8</a></button>
									<button class="button button1"><a href="grade 9.php">Grade 9</a></button>
									<button class="button button1"><a href="grade 10.php">Grade 10</a></button>
								</header>
								<p>
									Download here:
								</p>
								<section>
									<div class="row">
										<div id="section1" class="col-4 col-6-medium col-12-small">
											<a class="image fit"  href="modules/English 7 Life's Values.pdf" download>
											<img  src="images/grade7english.png" alt="1">
											</a>
										</div>
										<div id="section1" class="col-4 col-6-medium col-12-small">
											<a class="image fit" href="modules/TG_SCIENCE 8.pdf" download>
											<img  src="images/grade7science.png" alt="1">
											</a>
										</div>
										<div id="section1" class="col-4 col-6-medium col-12-small">
											<a class="image fit" href="modules/TG_MATHEMATICS 7.pdf" download>
											<img  src="images/grade7math.png" alt="1">
											</a>
										</div>
									</div>
								</section>
							</article>

						

						<!-- Concern -->
							<article id="contact" class="panel">
								<header>
									<h2>Logs</h2>
								</header>
								<form action="index.php" method="post">
							
									<div>
										<div class="row">
										
											<div class="col-6 col-12-medium">
												<input type="hidden" name="name" value="<?php echo $_SESSION['username']?>" />
											</div>
											<div class="col-12">
												<input type="text" name="subject" placeholder="Subject" />
											</div>
											<div class="col-12">
												<input type="text" name="email" placeholder="Email" />
											</div>
											<div class="col-12">
												<textarea name="message" placeholder="Message" rows="6"></textarea>
											</div>
											<div class="col-12">
											<button type="submit" name="sends" class="btn btn-primary btn-block btn-sm my-1">Send</button>
											</div>
											

  </div>
										</div>
									</div>
								</form>
							</article>
							<a href="logout.php"><input type="button" name="logout" value="logout"></a>
					</div>	
			</div>
			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>