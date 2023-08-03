<?php
	$host = "localhost" ; //HOST ���� �� 127.0.0.1 ���� Locallhost ���� �Ţ IP
	$username = "root" ; //username  SQL
	$password = "1234" ;//password  SQL
	$db = "test" ; //���� Database
	$connect = mysql_connect($host,$username,$password) OR DIE ("�������ö�Դ��� HOST �� / Unable to connect to database") ;
	mysql_select_db($db) OR DIE ("�������ö�Դ��� DataBase �� / Unable to select database");
	mysql_query("SET NAMES UTF8"); 
?>