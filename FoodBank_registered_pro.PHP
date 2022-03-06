<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	mysql_connect("127.0.0.1","admin","1234");
	mysql_select_db("foodbank");
	mysql_query("set names utf8");
	mysql_query("insert into user value('','$_POST[acc]','$_POST[mail]','$_POST[password]','$_POST[address]','$_POST[auth]')");
	?>
</body>
</html>