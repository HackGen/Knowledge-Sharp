/*countdown timer for redirection*/
var count=21;	/*���J�|��@���A��ڤW�ݨ쪺�O�q10�}�l�˼�*/
var counter=setInterval(timer, 1000); //1000 will  run it every 1 second

function timer()
{
	count=count-1;
	document.getElementById("timer").innerHTML=count + " secs"; // watch for spelling
	if (count == 0)
		clearInterval(counter);	
}
