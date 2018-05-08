
<?php
		
		$db_name = 'formen';
		//$query_line = 'select * from user_table';
		try{
			$db = new PDO("mysql:dbname=".$db_name."", "root", "root");
			echo "sex";
			//$lines = $db->query($query_line);
		}catch (PDOException $ex) {
			echo "Error";
		}
?>