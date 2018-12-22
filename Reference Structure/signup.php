<!DOCTYPE html>

<html style="background-color: #858891;">
	<head>
		<title>
			Sign Up | CO-DEV 
		</title>
		<link rel="icon" href="Logo.png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="main.css">
		
	</head>

	<body style="background:linear-gradient(to bottom right, #858891 , white);">
		<!-- Head and Webpage Title -->
		<header class="webpage-title">
			<div class="row" id="header-title">
				<h1><font color="#27B3A6" size="6">CO</font><font color="#B0B4BE" size="5">llaborative</font> <font color="#27B3A6" size="6">DEV</font><font color="#B0B4BE" size="5">elopment</font></h1>
				<img class="logo" src="Logo.png" height="40px" width="40px">
			</div> 
		</header>
		
		<!-- Menubar -->
		<header class="menu-bar" id="navbar">
			<div>
				<nav>
					<ul class="menu-bar-ul">
						<li class="menu-bar-li"><a href="index.php"><button class="menu-bar-btn" type="button">Home</button></a></li>
						<li class="menu-bar-li"><a href="community.html"><button class="menu-bar-btn" type="button">Community</button></a></li>
						<li class="menu-bar-li"><a href="projects.php"><button class="menu-bar-btn" type="button">Projects</button></a></li>
						
						<a href="signup.php"><button class="menu-bar-btn" align="right" style="float: right;">Sign up</button></a>
						
					</ul>
					
					
				</nav>
				
				
			</div>
		</header>
		<script src="script.js"></script>
		
		<div class="sign-up-box" style="background-color: #203461; margin-right:35%; margin-left:35%; margin-top: 5%; padding: 10rem;" align="center">
			<form>
				<input type="text" name="first" placeholder="Firstname">
				<br><br><br>
				<input type="text" name="last" placeholder="Lastname">
				<br><br><br>
				<input type="text" name="email" placeholder="E-mail">
				<br><br><br>
				<input type="text" name="uid" placeholder="Username">
				<br><br><br>
				<input type="password" name="pwd" placeholder="Password">
				<br><br><br>
				<button 
				class="sign-up-submit-btn" 
				type="submit" name="submit" 
				style="position: relative;
						padding: 1rem;
						padding: 1rem;
						font-size: 18px;
						font-family: Times New Roman;
						background-color: #27B3A6;
						color: white;
						border: none;
						border-radius: 2px;
						outline: none;">
					Sign up
				</button>
			</form>
		</div>
	</body>
</html>