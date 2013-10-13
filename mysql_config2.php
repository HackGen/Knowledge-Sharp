<?php
    $dbhost = 'localhost';
    $dbuser = 'fbukevin';
    $dbpass = '';
    $dbname = 'ccumiskm';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
    mysql_query("SET NAMES utf8");
    mysql_select_db($dbname);
   
?>