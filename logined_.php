<?
require_once("mysql_config.php");
$logname["logname"];

/*Check act_date to verify if this account is login with the first time.*/
$act_sql = "SELECT `act_time` FROM `user` WHERE `u_log_name` = '".$logname."'; ";
$datetime = mysql_query($act_sql) or die('MySQL query failed.');
$time = mysql_fetch_row($datetime);

if($time[0] == "1000-01-01 00:00:00")		
{
	echo $time[0];
	echo "<br>Login name is ".$logname;
	echo "<br>First time";
}
else
{	
	$logps["logps"];
	$passwd_sql = "SELECT `u_passwd` FROM `user` WHERE `u_log_name` = '".$logname."';";		
	$passwd_req = mysql_query($passwd_sql) or die('MySQL query error');
	$password = mysql_fetch_row($passwd_req);
	echo "<br> Account active time ".$time[0];	
	echo "<br>Login name is ".$logname;
	echo "<br>Login password is ".$logps;
	echo "<br>Query password is ".$password[0];
}
 
?>