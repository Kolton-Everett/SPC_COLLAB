<!DOCTYPE html>
<html>
	<head>
		<title>
			Projects | CO-DEV
		</title>
		<link rel="icon" href="Logo.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="CSS/main.css">
	</head>
	
	<body>
	
		<header class="webpage-title">
			<div class="row" id="header-title">
				<h1><font color="#27B3A6" size="6">CO</font><font color="#B0B4BE" size="5">llaborative</font> <font color="#27B3A6" size="6">DEV</font><font color="#B0B4BE" size="5">elopment</font></h1>
				<img class="logo" src="Logo.png" height="40px" width="40px">
			</div>
		</header>
		
		<header class="menu-bar">
			<div>
				<nav class="menu-bar-nav">
					<ul class="menu-bar-ul">
						<li class="menu-bar-li"><a href="index.php"><button class="menu-bar-btn" type="button">Home</button></a></li>
						<!--<li class="menu-bar-li"><a href="about.html"><button class="menu-bar-btn" type="button">About</button></a></li>-->
						<li class="menu-bar-li"><a href="about.html"><button class="menu-bar-btn" type="button">Community</button></a></li>
						<li class="menu-bar-li"><a href="projects.php"><button class="menu-bar-btn" type="button">Projects</button></a></li>
						<a href="login.html"><button class="menu-bar-btn" align="right" style="float: right;">Login</button></a>
					</ul>
				</nav>
			</div>
		</header>
			
		<div id="wrapper">
			
			<!-- Sidebar -->
			<div class="sidebar-wrapper">
				<nav>
					<ul>
						<li class="menu-bar-li"><button class="sidebar-btn" type="button" onclick="location.hrerf='forum.html'">Forum</button></li>
						<li class="menu-bar-li"><button class="sidebar-btn" type="button" onclick="location.hrerf='help.html'">Help</button></li>
						<li class="menu-bar-li"><button class="sidebar-btn" type="button" onclick="location.hrerf='#'">Contact</button></li>
						<li class="menu-bar-li"><button class="sidebar-btn" type="button" onclick="location.hrerf='findOthers.html'">Find Others</button></li>
					</ul>
				</nav>
			</div>
			
			<!-- Page Content -->
			
			<div class="page-content-wrapper">
				
				<section class="jumbotron" id="project_banner">
					<div class="row text-center">
						<h2>Projects</h2>
					</div>
				</section>
				
				<section class="start-project">
					<p class="p-text" id="p-text-blu" align="center"> 
					Start your own project, and invite other developers to join your team! <br>You can also submit code for review by other developers.
					</p>
					<div class="row text-center">
						<button class="get-started-btn" type="button" onclick="location.hrerf='index.html'">Get Started</button>
					</div>	
				</section>
				
				<section class="about-home">
					<h1 align="center">About CO-DEV</h1>
					<p class="p-text"align="center"> This platform is designed to allow developers from various backgrounds to collaborate. Users can submit code for review by other developers, and beginners can receive quick feedback. Ultimately, this platform was created to allow developers to contact one another, and participate in a group  development environment. Furthermore, it is a good place to find a developer that can assist you in making your ideas come to life.</p>	
				</section>
				
				<section class="find-developers-home">
					<h1 align="center">
					Find Other Developers
					</h1>
					<p class="p-text" align="center">Find someone who specializes in a specific field. You can invite them to work on your project, or simply request assistance.</p>
				</section>
			</div>
			
		</div>
		
		<footer>
			<div>
				<div class="foot-block">
					<h1 class="footer-label">CO-DEV</h1>
					<ul>
						<li class="footer-lst-item">About</li>
						<li class="footer-lst-item">Help</li>
						<li class="footer-lst-item">Community</li>
						<li class="footer-lst-item">Contact Us</li>
					</ul>
				</div>
				
				<div class="foot-block">
					<h1 class="footer-label">Find Developers</h1>
					<ul>
						<li class="footer-lst-item">Python</li>
						<li class="footer-lst-item">Java</li>
						<li class="footer-lst-item">HTML</li>
						<li class="footer-lst-item">CSS</li>
						<li class="footer-lst-item">Javascript</li>
					</ul>
				</div>
				
				<div class="foot-block">
					<h1 class="footer-label">Forum</h1>
					<ul>
						<li class="footer-lst-item">Ask Questions</li>
						<li class="footer-lst-item">FAQ</li>
					</ul>
				</div>
			
			
			<h4 class="copyright">&copy; CO-DEV 2018</h4>
			
		</footer>
	
	</body>
</html>
