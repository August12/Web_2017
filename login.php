<?php
    session_start();
    include("config.php");  //DB연결을 위한 config.php를 로드
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    if($_POST["userid"] != ""){  // userid값이 있으면


        $myusername=$_POST["userid"]; 

        $mypassword=$_POST["password"]; 

 

        $sql="SELECT * FROM user_table WHERE user_id = '".$myusername."' AND password = '".$mypassword."'"; //아뒤랑 비번값 대조


        if ($res = $db->query($sql)) {

    /* Check the number of rows that match the SELECT statement */
            if ($res->fetchColumn() > 0) {
                $_SESSION['userid'] = $myusername;
            //echo $_SESSION['userid'];
                echo("<script>location.href='loginok.php';</script>"); 
            }
        /* No rows matched -- do something else */
            else {
                //echo("<script>alert("Your login ID or Password is invalid");</script>");
                echo("<script>location.href='loginmain.php';</script>"); 
            }
        }

    }

?>