<?php
require_once("mysql_config.php");
require_once("mailing_config.php");


/*query and check if the user name is in table*/
$uname = $_POST["username"];
$email = $_POST["email"];
$sql = "SELECT * FROM `user` WHERE `u_log_name` = '".$uname."';";
$query = mysql_query($sql) or die ("MySQL query failed.");
$result = mysql_fetch_row($query);
if(empty($result))	/*if no entry in table, mysql_query() still return an resource but nothing in it*/
{	
	
	echo "您的帳號不存在，請確認您輸入的帳號正確，或與我們聯絡";
	echo "<br>頁面將在<script src ='morejs/countdown.js'></script><span id='timer'></span> 秒後回到登入畫面...";	 
	echo "<br>如果頁面沒有自動跳轉，<a href='index.html'>請按此<a>回到登入畫面";		
	header("refresh:22; url=index.html");	//2 seconds delay after countdown, so set 22
	exit();	
}
else
{	
	$usr_name = $result[1];		//u_name
	$passwd = $result[4];		//u_passwd
	$reg_mail = $result[5];		//u_email
	$act_time = $result[6];		//act_time
}


/*Check act_time to verify if this account is login with the first time.*/
if($act_time == "0000-00-00 00:00:00")		//first time login, the act_time in table is the defualt value 
{
	echo "<br>您的帳戶尚未啟用，請重回登入畫面登入取得密碼（不需輸入密碼），謝謝您！";
		echo "<br>頁面將在<script src ='morejs/countdown.js'></script><span id='timer'></span> 秒後回到登入畫面...";	 
		echo "<br>如果頁面沒有自動跳轉，<a href='index.html'>請按此<a>回到登入畫面";				
		header("refresh:22; url=index.html"); //2 seconds delay after countdown, so set 22
		exit();	
}
elseif($act_time != "0000-00-00 00:00:00")
{
	echo "<br>".$usr_name." 歡迎您！";
	

	if(lost_passwd($reg_mail, $usr_name, $passwd) == true)	//send the password to register mail
	{					
		echo "<br>已將您的密碼寄送至您註冊的信箱，請至您的電子信箱 ".$reg_mail." 收信查看密碼，並以此密碼重新登入, 謝謝您！";
		echo "<br>頁面將在<script src ='morejs/countdown.js'></script><span id='timer'></span> 秒後回到登入畫面...";	 
		echo "<br>如果頁面沒有自動跳轉，<a href='index.html'>請按此<a>回到登入畫面";				
		header("refresh:22; url=index.html"); //2 seconds delay after countdown, so set 22
		exit();
	}
	else
	{
		echo "<br>Oops! 系統發生了點問題，請聯絡我們，謝謝您！";
		header( "refresh:5;url=index.html" );
		exit();
	}
}
else//not the first time
{	
	echo "<br>Oops! 系統發生了點問題，請聯絡我們，謝謝您！";
	header( "refresh:5;url=index.html" );
	exit();
}
 
?>
