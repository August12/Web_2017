<?php
	//include("check.php");
	session_start();
	
?>


<!DOCTYPE html>

<html>
    <head>
		<title> 한양대학교 공대_소프트웨어 예약 페이지 </title>
		<link rel="stylesheet" href="styles/main.css">
		<link rel="stylesheet" href="styles/login.css">
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
							<li><a href="">Lecture Room Reservation </a></li>
							<li><a href=""></a>Show </li>
        					<li class="active"><a href="check.php">LOGIN</a></li>
							<li id="menuicon"><img src="styles/images/icons/menuicon.png",png></li>
						</ul>
					</div>
				</nav>
			</div>

		</header>

		<section>

					<div class = "login_box">
						<ul>
							<li> <?php echo $_SESSION['userid'] ."님, 안녕하세요!" ?></li>
							<li>환영한다리</li>
						</ul>
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