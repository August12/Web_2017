<?php
	session_start();
	if(!isset($_SESSION['userid'])) {
		echo "<meta http-equiv='refresh' content='0;url=loginmain.php'>";
		exit;
	}
	echo("<script>location.href='loginok.php';</script>");

	/*$st = $db->prepare("select user_id from user_table where user_id ='" . $user_check . "'");
	$st->execute();
	$st->setFetchMode(PDO::FETCH_ASSOC);
	$row = $st->fetch();
	
	$login_session = $row['user_id'];

	if(!isset($login_session)) {
		//echo("<script>alert("Your login date is invalid!");</script>");
		echo("<script>location.href='loginmain.php';</script>");
	}
	*/
	
?>
