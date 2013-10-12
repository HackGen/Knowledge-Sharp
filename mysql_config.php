<?
	/*This file contains the configuration of mysql connection. It should not be access for others except administrator.*/

	/*connection parameters*/
	$dbhost = '127.0.0.1';
    $dbuser = 'fbukevin';
    $dbpass = '';
    $dbname = 'ccumiskm';
	
	/*connecting*/
	$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
	
	/*setting encode and select database*/
	mysql_query("SET NAMES 'utf-8'");
    mysql_select_db($dbname);
	
?>