/*countdown timer for redirection*/
var count=21;	/*載入會算一秒中，實際上看到的是從10開始倒數*/
var counter=setInterval(timer, 1000); //1000 will  run it every 1 second

function timer()
{
	count=count-1;
	document.getElementById("timer").innerHTML=count + " secs"; // watch for spelling
	if (count == 0)
		clearInterval(counter);	
}
