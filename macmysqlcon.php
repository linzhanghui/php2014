<?php
//	$link = new PDO('mysql:host=localhost;port=3306;dbname=test');
	
	$link = mysql_connect('localhost','root','123456');
	if(!$link){
		die('Could not connect:' . mysql_error());
	}
	
	if(!mysql_select_db('test')){
		die('Could not select database: ' . mysql_error());
	}
	
	$result = mysql_query('SELECT * FROM table01');
	
	if(!$result) {
		die('Could not query:' . mysql_error());
	}
	
	echo mysql_result($result,0);
	
	mysql_close($link);


?>
