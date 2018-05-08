<!DOCTYPE html>

<html>
    <head>
		<title> 한양대학교 공대_소프트웨어 예약 페이지 </title>
		<link rel="stylesheet" href="styles/main.css">
		<link rel="stylesheet" href="styles/login.css?var=1">
		<link rel="stylesheet" href="styles/bootstrap.min.css">
        <link rel="stylesheet" href="styles/font-awesome.css">
       
        <link rel="stylesheet" href="styles/templatemo_misc.css">
		<link rel="stylesheet" href="styles/templatemo_style.css?var=1">
		<script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>

    <body>

        <header>

			<div id = "navbar">
				<nav>
					<!--각 탭별 제목-->
					<div id = "navbar_title">
						<a href="check.php">Login </a>
					</div>

					<!--상단 네비게이션바-->
					<div id = "navbar_menu">
						<ul>
							<li><a href="main.html">HOME</a></li>
							<li><a href="reserve.html">Lecture Room Reservation </a></li>
							<li><a href=""></a>Show </li>
        					<li class="active"><a href="check.php">LOGIN</a></li>
							<li id="menuicon"><img src="styles/images/icons/menuicon.png",png></li>
						</ul>
					</div>
				</nav>
			</div>

		</header>

		<section>
					<!--
					<div class = "login_box">

						<form class="login_form" method="post" action="login.php">
	      					<input type="text" name="userid" placeholder="userid"/>
		      				<input type="password" name="password" placeholder="password"/>
		      				<input type="submit" name="submit" value="Login!" id="login_btn">
		      				<p>Not registered? <a href="#">Create an account</a></p>
		      			</form>

					</div> -->

			<div class = "login_box">
				<form class="login_form" method="post" action="login.php">
					<div>
						<img src="styles/images/loginicon.png",png>
						<input type="text" name="userid" placeholder="username"/>
					</div>
					<div>
						<img src="styles/images/passwordicon.png",png>					  
						<input type="password" name="password" placeholder="password"/>
						<input type="submit" id="login_btn" value="LOGIN"/>
					</div>						
      				<p>Not registered? <a href="signup.html">Create an account</a></p>
      			</form>
			</div>

		</section>

		<!--공통된 바텀부분-->
		<footer>
			<div id="footer">
				<div id="footer_aboutUs">
					<h2>About Us :</h2>
					<ul>
						<li>Team : For Men</li>
						<li>Project Name : Lecture Room Reservation</li>
					</ul>
				</div>
				<div id="footer_copyright">
					<h2>By : </h2>
					<p>Hanyang University, Computer Science Engineering, For Men </p>
				</div>
			</div>
		</footer>
   

    </body>
</html>