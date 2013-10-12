
<?php    
include("PHPMailer-master/class.phpmailer.php"); 		//匯入PHPMailer類別       

function send_passwd($dest, $receiver, $password)
{
	$mail= new PHPMailer(); 							//建立新物件        
	$mail->IsSMTP(); 									//設定使用SMTP方式寄信        
	$mail->SMTPAuth = true; 							//設定SMTP需要驗證        
	$mail->SMTPSecure = "ssl"; 							//Gmail的SMTP主機需要使用SSL連線   
	$mail->Host = "smtp.gmail.com"; 					//Gamil的SMTP主機        
	$mail->Port = 465;  								//Gamil的SMTP主機的SMTP埠位為465埠。        
	$mail->CharSet = "big5"; 							//設定郵件編碼        
		  
	$mail->Username = "fbukevin"; 						//設定驗證帳號        
	$mail->Password = "simple life"; 					//設定驗證密碼        
		  
	$mail->From = "fbukevin@gmail.com";					//設定寄件者信箱        (之後應該開一個專用或是改用臉書社團的mail?)
	$mail->FromName = "CCUMISKM";						//設定寄件者姓名        
		  
	$mail->Subject = "Password Information"; 			//設定郵件標題        
	$mail->Body = "Hello, ".$receiver."! 你已經啟用了 中正資管知識加值系統 (CCUMISKM)<br>您首次登入的密碼為 : ".$password; 	//設定郵件內容        
	$mail->IsHTML(true); 								//設定郵件內容為HTML        
	$mail->AddAddress($dest, $reciever); 				//設定收件者郵件及名稱        
		  
	if(!$mail->Send()) 
	{        
		echo "Mailer Error: " . $mail->ErrorInfo;        
		/*TODO: 以後這裡應該要開一個 Log 檔*/
		return false;
	} 
	else 
	{        
		echo "Message sent!";        
		return true;
	}   
}//end_of_function
?>  