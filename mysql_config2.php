<?php
    $dbhost = 'localhost';
    $dbuser = 'knowledgesharp';
    $dbpass = 'DB PASSWD ON YOUR HOST';
    $dbname = 'knowledgesharp';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
    mysql_query("SET NAMES 'utf8'");
    mysql_select_db($dbname);
   
?>
