<!DOCTYPE html>
<html lang="ko" xhtml lang="ko" xml:lang="ko">
    <head>
        <title> 한양대학교 공대_소프트웨어 예약 페이지 </title>
		<link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/signup.css">
    </head>

    <body>
        <?php if(empty($_POST["studentid"]) || empty($_POST["cc"]) || empty($_POST["pw"]) || empty($_POST["pw_re"])) {?>
            <h1>Sorry</h1>
			<p>You didn't fill out the form completely.<a href="signup.html"> Try again?</a></p>
        <?php }else if(!preg_match("/[0-9]/", $_POST["studentid"])){?>
            <h1>Sorry</h1>
            <p>You didn't provide a valid studentid. <a href="signup.html">Try again?</a></p>
        <?php } ?>

        <?php

        $studentid = $_POST["studentid"];
        $cc = $_POST["cc"];
        $pw = $_POST["pw"];

        $conn = mysqli_connect("localhost", "root", "root", "formen");
        #$db = mysql_select_db("formen", $conn);
        #$sql = "INSERT INTO signup VALUES($studentid, '$cc', '$pw')";
        #mysql_query($sql, $conn);
        $statement = mysqli_prepare($conn, "INSERT INTO user_table VALUES($studentid, '$pw')");
        #mysqli_bind_param($statement,)
        mysqli_stmt_execute($statement);
        echo("<script>location.href='loginmain.php';</script>");
        
        ?>
    </body>
</hyml>